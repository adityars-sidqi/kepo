<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', 'App\Http\Composers\HeaderComposer');
        view()->composer('home', 'App\Http\Composers\HomeComposer');
        view()->composer('dashboardorganisasi.seminar.*', 'App\Http\Composers\DashboardOrganisasiComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
