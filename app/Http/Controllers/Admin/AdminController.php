<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function autentikasi(Request $request)
    {
        $admin = Admin::where('username', $request->admin_login)
              ->where('password', md5($request->admin_password))
              ->first();

        if (!$admin) {
            return redirect()->intended('admin/login');
        }
        session(['admin' => 'admin', 'id_admin' => $admin->id_admin, 'nama' => $admin->nama]);

        return redirect()->intended('admin/');
    }

    public function login()
    {
        if (session()->has('admin')) {
            return redirect()->intended('admin/');
        } else {
            return view('admin.login');
        }
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->intended('admin/login');
    }
}
