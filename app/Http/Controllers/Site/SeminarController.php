<?php

namespace App\Http\Controllers\Site;

use App\Models\Seminar;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::orderBy('id_seminar', 'desc')->paginate(12);

        return view('seminar', ['seminars' => $seminars]);
    }

    public function show($slug)
    {
        $seminar = Seminar::where('slug', $slug)->first();
        if (!$seminar) {
            return abort(404);
        }
        return view('single', ['seminar' => $seminar]);
    }

    public function perkategori($cat)
    {
        $kategori = Kategori::where('nama_kategori', $cat)->first();

        if (!$kategori) {
            abort(404);
        }

        $seminars = Seminar::where('id_kategori', $kategori->id_kategori)->orderBy('id_seminar', 'desc')->paginate(12);

        return view('seminarkategori', ['seminars' => $seminars, 'kategori' => $kategori->nama_kategori]);
    }
}
