<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
    // URL::forceScheme('https');

    Paginator::useBootstrap();

    $layoutBlogs = Blog::latest()->take(2)->get();
    $settings = Setting::first();

    View::share([
        'settings' => $settings,
        'layoutBlogs' => $layoutBlogs
    ]);
}
}
