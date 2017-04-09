<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Admin;

class AdminController extends Controller
{
    public function index()
    {
      if (session()->has('admin')) {
            return view('admin.dashboard');
        } else {
            return redirect()->intended('admin/login');
        }
    }

    public function autentikasi(Request $request){
        $admin = new Admin;
        $admin->where('username', $request->admin_login)
              ->where('password', md5($request->admin_password))
              ->first();

      if(!$admin){
        return redirect()->intended('admin/login');
      }
      session(['admin' => 'admin']);

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
