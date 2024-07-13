<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::share('siteTitle', 'SISTEM INFORMASI PEMUDA BAPTIS PAPUA');
        View::share('siteDescription', 'Wilayah Jayapura Keerom Yahukimo');
    }
}
