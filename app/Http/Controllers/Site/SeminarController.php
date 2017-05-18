<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeminarController extends Controller
{
    public function index()
    {
        return view('seminar');
    }

    public function show($id)
    {
        # code...
    }
}
