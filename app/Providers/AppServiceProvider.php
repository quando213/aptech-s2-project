<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
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
        view()->composer('*', function ($view) {
            $view->with([
                'categories' => Category::query()->orderBy('sort_number', 'ASC')->get(),
                'notifications' => Notification::query()->where('user_id', Auth::id())->orderBy('created_at', 'DESC')->limit(10)->get(),
                'unread_count' => Notification::query()->where('user_id', Auth::id())->where('is_seen', false)->count()
            ]);
        });
    }
}
