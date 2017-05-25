<?php

namespace App\Http\Controllers\Site\Peserta;

use App\Models\Seminar;
use App\Models\Transaksi;
use App\Models\Konfirmasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function history()
    {
        return view('dashboardpeserta.histori');
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
}
