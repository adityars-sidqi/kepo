<?php

namespace App\Http\Controllers\Site\Organisasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanPesertaController extends Controller
{
    public function index()
    {
        return view('dashboardorganisasi.laporan');
    }
}
