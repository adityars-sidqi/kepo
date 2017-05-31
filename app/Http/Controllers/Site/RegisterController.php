<?php

namespace App\Http\Controllers\Site;

use App\Models\Peserta;
use App\Models\Organisasi;
use App\Mail\PesertaCreated;
use App\Mail\OrganisasiCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        if (request()->session()->has('jenis')) {
            return redirect()->back();
        }
        return view('register');
    }

    public function peserta()
    {
        if (request()->session()->has('jenis')) {
            return redirect()->back();
        }
        return view('regpeserta');
    }

    public function regpeserta(Request $request)
    {
        $this->validate($request, [
        'nama' => 'required',
        'tgl_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'email' => 'required|unique:pesertas|unique:organisasis',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|min:6|same:password'
      ]);

        $peserta = new Peserta;
        $peserta->nama = $request->nama;
        $peserta->tgl_lahir = $request->tgl_lahir;
        $peserta->jenis_kelamin = $request->jenis_kelamin;
        $peserta->email = $request->email;
        $peserta->password = Hash::make($request->password);
        $kode_aktivasi = time() . "-" . $request->email;
        $peserta->kode_aktivasi = encrypt($kode_aktivasi);
        $peserta->status = "Nonaktif";
        $peserta->timestamps = false;

        $peserta->save();

        //send email
        Mail::to($request->email)->send(new PesertaCreated($peserta));

        return view('suksesregister')->with('email', $peserta->email);
    }

    public function organisasi()
    {
        if (request()->session()->has('jenis')) {
            return redirect()->back();
        }
        return view('regorganisasi');
    }

    public function regorganisasi(Request $request)
    {
        $this->validate($request, [
        'nama' => 'required',
        'telp' => 'required|numeric|min:11',
        'alamat' => 'required',
        'email' => 'required|unique:organisasis|unique:pesertas',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|min:6|same:password'
      ]);

        $organisasi = new Organisasi;
        $organisasi->nama = $request->nama;
        $organisasi->telp = $request->telp;
        $organisasi->alamat = $request->alamat;
        $organisasi->email = $request->email;
        $organisasi->password = Hash::make($request->password);
        $kode_aktivasi = time() . "-" . $request->email;
        $organisasi->kode_aktivasi = encrypt($kode_aktivasi);
        $organisasi->status = "Nonaktif";
        $organisasi->timestamps = false;

        $organisasi->save();

        //send email
        Mail::to($request->email)->send(new OrganisasiCreated($organisasi));

        return view('suksesregister')->with('email', $organisasi->email);
    }

    public function verification($jenis, $id, $key)
    {
        if ($jenis == 'peserta') {
            Peserta::where('id_peserta', $id)->where('kode_aktivasi', $key)->update(['status' => 'Aktif']);
        } elseif ($jenis == 'organisasi') {
            Organisasi::where('id_organisasi', $id)->where('kode_aktivasi', $key)->update(['status' => 'Aktif']);
        }
        return view('suksesverifikasi');
    }
}
