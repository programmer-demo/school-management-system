<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
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
        Paginator::useBootstrap();
        if (env('FORCE_HTTPS')==true)
        {
            URL::forceScheme('https');
        }
        // view fav_icon
        view()->composer('*', function ($view){
            $setting = Setting::first();

            $view->with('settings_', $setting);
        });
        Schema::defaultStringLength(191);
    }
}
