<?php

namespace Wadahesam\LaravelBlogPlugin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LaravelBlogPluginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Wadahesam\LaravelBlogPlugin\Http\Controllers\DashboardController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blog-plugin.php', 'blog-plugin');
        $this->registerRoutes();
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__.'/views/dashboard', 'dashboard');
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
        });
    }

    /**
     * Get the Blogg route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            'namespace'  => "Wadahesam\LaravelBlogPlugin\Http\Controllers",
            'prefix'     => config('blog-plugin.prefix'),
        ];
    }
}
