<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
        if (! $this->app->runningInConsole()) {
            // App is not running in CLI context
            // Do HTTP-specific stuff here

            View::share('categories', Category::query()->orderBy('sort_number', 'ASC')->get());
        }
    }
}
