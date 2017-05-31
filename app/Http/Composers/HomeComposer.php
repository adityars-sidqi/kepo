<?php

namespace App\Http\Composers;

use App\Models\Seminar;
use Illuminate\View\View;

class HomeComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $view->with('seminarterbarus', Seminar::orderBy('id_seminar', 'desc')->limit(5)->get());
        if (request()->ajax() || request()->input('startp') != null || request()->input('endp') != null) {
            $view->with('seminars', Seminar::whereBetween('tgl_seminar', [request()->input('startp'), request()->input('endp')])->orderBy('id_seminar', 'desc')->paginate(8));
        } else {
            $view->with('seminars', Seminar::orderBy('id_seminar', 'desc')->paginate(8));
        }

        $view->with('seminarfeaturedpertamas', Seminar::orderBy('id_seminar', 'desc')->limit(1)->get());
        $view->with('seminarfeatureds', Seminar::orderBy('id_seminar', 'desc')->skip(1)->limit(2)->get());
    }
}
