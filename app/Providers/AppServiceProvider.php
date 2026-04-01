<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // This line is new

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
        // This forces all asset() and url() links to use https 
        // whenever the app is not running on your local computer.
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}