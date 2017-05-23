<?php

namespace App\Http\Controllers\Site\Peserta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function history()
    {
        return view('histori');
    }
}
