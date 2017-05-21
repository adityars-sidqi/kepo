<?php

namespace App\Http\Composers;

use App\Models\Peserta;
use App\Models\Organisasi;
use Illuminate\View\View;
use Session;

class HeaderComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $view->with('namapeserta', Peserta::find(Session::get('id_peserta')));
        $view->with('namaorganisasi', Organisasi::find(Session::get('id_organisasi')));
    }
}
