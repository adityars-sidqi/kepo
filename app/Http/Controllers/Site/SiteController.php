<?php

namespace App\Http\Controllers\Site;

use App\Models\Kategori;
use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $seminars = Seminar::whereBetween('tgl_seminar', [$request->input('startp'), $request->input('endp')])
                                ->orderBy('id_seminar', 'desc')->paginate(8);
            return response()->json(View::make('seminars', array('seminars' => $seminars))->render());
        }
        return view('home');
    }

    public function support()
    {
        return view('support');
    }

}
