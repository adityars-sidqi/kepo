<?php

namespace App\Http\Controllers\Site;

use App\Models\Peserta;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function auth(Request $request, $jenis)
    {
        $this->validate($request, [
          'emaillogin' => 'required',
          'passwordlogin' => 'required'
        ]);

        $email = $request->emaillogin;
        $password = $request->passwordlogin;

        switch ($jenis) {
          case 'peserta':
            $peserta = Peserta::where('email', $email)->first();
            if ($peserta) {
                if (Hash::check($password, $peserta->password)) {
                    if ($peserta->status == 'Aktif') {
                        session(['jenis' => 'peserta', 'id_peserta' => $peserta->id_peserta]);
                        return redirect()->back();
                    }
                    $request->session()->flash('alert-danger', 'Sorry, your account is not activated yet! Check your email to activate your account!');
                    return redirect()->back();
                }
                $request->session()->flash('alert-danger', 'Incorrect password! Please check your password again!');
                return redirect()->back();
            } else {
                $request->session()->flash('alert-danger', 'Incorrect email! Your email <strong>' . $email . '</strong> not found as peserta account!');
                return redirect()->back();
            }
            break;
          case 'organisasi':
            $organisasi = Organisasi::where('email', $email)->first();
            if ($organisasi) {
                if (Hash::check($password, $organisasi->password)) {
                    if ($organisasi->status == 'Aktif') {
                        session(['jenis' => 'organisasi', 'id_organisasi' => $organisasi->id_organisasi]);
                        return redirect()->back();
                    }
                    $request->session()->flash('alert-danger', 'Sorry, your account is not activated yet! Check your email to activate your account!');
                    return redirect()->back();
                }
                $request->session()->flash('alert-danger', 'Incorrect password! Please check your password again!');
                return redirect()->back();
            } else {
                $request->session()->flash('alert-danger', 'Incorrect email! Your email <strong>' . $email . '</strong> not found as organisasi account!');
                return redirect()->back();
            }
            break;
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->back();
    }
}
