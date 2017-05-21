<?php

namespace App\Http\Controllers\Site;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function support()
    {
        return view('support');
    }

    public function coba()
    {
        return view('coba');
    }
}
