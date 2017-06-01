<?php

namespace App\Http\Controllers\Site\Peserta;

use PDF;
use Carbon\Carbon;
use App\Models\Seminar;
use App\Models\Transaksi;
use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function history()
    {
        $transaksis = Transaksi::where('id_peserta', session()->get('id_peserta'))->orderBy('tgl_transaksi', 'desc')->get();
        return view('dashboardpeserta.histori', ['transaksis' => $transaksis]);
    }

    public function cart()
    {
        return view('dashboardpeserta.cart');
    }

    public function buy($slug, Request $request)
    {
        $this->validate($request, [
          'jumlah_tiket' => 'required|numeric|min:1'
        ]);

        $seminar = Seminar::where('slug', $slug)->first();
        $sub_total = $request->jumlah_tiket * $seminar->harga;

        $seminar->setAttribute('jumlah_tiket', $request->jumlah_tiket);
        $seminar->setAttribute('sub_total', $sub_total);


        if (session()->get('seminar') == null) {
            session()->push('seminar', $seminar);
            request()->session()->flash('alert-success', 'Seminar <strong>' . $seminar->judul . '</strong> successfully purchased!');
            return redirect()->back();
        } else {
            foreach (session()->get('seminar') as $session_seminar) {
                if ($session_seminar['slug'] != $slug) {
                    session()->push('seminar', $seminar);
                    request()->session()->flash('alert-success', 'Seminar <strong>' . $seminar->judul . '</strong> successfully purchased!');
                    return redirect()->back();
                } else {
                    request()->session()->flash('alert-danger', 'Seminar <strong>' . $seminar->judul . '</strong> already added to cart!');
                    return redirect()->back();
                }
            }
        }
    }

    public function delete($slug, Request $request)
    {
        $seminar = Seminar::where('slug', $slug)->first();
        $session_seminar = session()->get('seminar');
        foreach ($session_seminar as $key => $val) {
            if ($session_seminar[$key]->slug == $slug) {
                session()->forget('seminar.'.$key);
            }
        }

        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->tgl_transaksi = Carbon::now()->toDateString();
        $transaksi->id_peserta = $request->session()->get('id_peserta');
        $transaksi->grand_total = $request->session()->get('grand_total');
        $transaksi->timestamps = false;

        $transaksi->save();

        $id_transaksi = Transaksi::where('id_peserta', request()->session()->get('id_peserta'))->orderBy('id_transaksi', 'desc')->first();

        foreach (request()->session()->get('seminar') as $session_seminar) {
            $id_transaksi->seminars()->attach($session_seminar['id_seminar'], ['jumlah_tiket' => $session_seminar['jumlah_tiket'], 'total' => $session_seminar['sub_total']]);
        }
        session()->forget('seminar');
        request()->session()->flash('alert-success', 'Successfully purchased! Please confirm payment, if you already transfer');
        return redirect('transaction/history');
    }

    public function single($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        if (!$transaksi) {
            abort(404);
        }

        return view('dashboardpeserta.transaksisingle', ['transaksi' => $transaksi]);
    }

    public function confirmation($id_transaksi, Request $request)
    {
        $this->validate($request, [
          'bank_pengirim' => 'required',
          'atas_nama' => 'required',
          'jumlah_transfer' => 'required|numeric|min:1'
        ]);

        $transaksi = Transaksi::findOrFail($id_transaksi);

        if (!$transaksi) {
            abort(404);
        }

        foreach ($transaksi->seminars as $seminar) {
            if ($transaksi->grand_total != $request->jumlah_transfer) {
                $request->session()->flash('alert-danger', 'Sorry, total transfer does not match with your order grand total! Please check again!');
                return redirect()->back();
            } elseif ($seminar->tiket_tersedia < $seminar->pivot->jumlah_tiket) {
                $request->session()->flash('alert-danger', 'Sorry your confirmation could not be processed! Because, amount tickets unavailable!');
                return redirect()->back();
            } else {
                $tiket_tersedia = $seminar->tiket_tersedia;
                $seminar->tiket_tersedia -= $seminar->pivot->jumlah_tiket;
                $seminar->save();
            }
        }

        $konfirmasi = new Konfirmasi;
        $konfirmasi->id_peserta = $request->session()->get('id_peserta');
        $konfirmasi->bank_pengirim = $request->bank_pengirim;
        $konfirmasi->atas_nama = $request->atas_nama;
        $konfirmasi->jumlah_transfer = $request->jumlah_transfer;
        $konfirmasi->id_transaksi = $id_transaksi;
        $konfirmasi->status = 0;

        $konfirmasi->save();

        $request->session()->flash('alert-success', 'Success Confirmation! Please wait (2 x 24hrs) , our admin will process your payment');
        return redirect('transaction/history');
    }

    public function printTicket($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        if (!$transaksi) {
            abort(404);
        }

        if ($transaksi->konfirmasi->status != 1) {
            request()->sesssion()->flash('alert-danger', 'Please, finish your payment first');
            return redirec()->back();
        }
        // return view('pdf.ticket', ['transaksi'=>$transaksi]);
        $pdf = PDF::loadView('pdf.ticket', ['transaksi' => $transaksi]);
        $namafile = $transaksi->peserta->nama . '-' . $transaksi->id_transaksi;
        return $pdf->download($namafile.'.pdf');
    }
}
