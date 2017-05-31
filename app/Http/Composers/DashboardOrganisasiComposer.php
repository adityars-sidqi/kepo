<?php

namespace App\Http\Composers;

use App\Models\Seminar;
use App\Models\Kategori;
use Illuminate\View\View;

class DashboardOrganisasiComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $view->with('kategoris', Kategori::all());
    }
}
