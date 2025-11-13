<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        // Share global settings with all admin views
        View::composer('admin-layouts.*', function ($view) {
            $globalSettings = SiteSetting::first();
            $view->with('globalSettings', $globalSettings);
        });

        // Share global settings with auth views
        View::composer('auth.*', function ($view) {
            $globalSettings = SiteSetting::first();
            $view->with('globalSettings', $globalSettings);
        });

        // Share global settings with frontend views
        View::composer('frontend.*', function ($view) {
            $globalSettings = SiteSetting::first();
            $view->with('globalSettings', $globalSettings);
        });

        // Share global settings with admin page-seo views
        View::composer('admin.page-seo.*', function ($view) {
            $globalSettings = SiteSetting::first();
            $view->with('globalSettings', $globalSettings);
        });
        Paginator::useBootstrapFive();
    }
}
