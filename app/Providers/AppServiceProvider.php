<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Arr;

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
        View::composer('*', function ($view) {
            $viewData = $view->getData();
        
            // Safely check if 'meta' is already passed
            if (!array_key_exists('meta', $viewData)) {
                $routeName = Route::currentRouteName();
                $meta = config("meta.pages.$routeName", config('meta.default'));
                $view->with('meta', $meta);
            }
        });      
    }
}
