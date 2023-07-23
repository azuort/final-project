<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('alphanumeric', function ($value) {
            $pattern = '/^[a-zA-Z0-9_]{3,20}$/';
            return preg_match($pattern, $value);
        });
    }
}
