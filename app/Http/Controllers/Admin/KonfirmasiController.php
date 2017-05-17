<?php

namespace App\Http\Controllers\Admin;

use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $konfirmasis = Konfirmasi::all();
        return view('admin.konfirmasi.index', ['konfirmasis' => $konfirmasis]);
    }
}
