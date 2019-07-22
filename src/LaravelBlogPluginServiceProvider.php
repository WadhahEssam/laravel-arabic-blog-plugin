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
        $this->publisheThings();
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

    /**
     * Publishes the needed assets
     *
     * @return array
     */
    protected function publisheThings()
    {
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations'),
        ], 'blog-plugin:migrations');
        // TODO: check this if working
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/blog-blugin'),
        ], 'blog-plugin:views');
        $this->publishes([
            __DIR__ . '/../config/blog-plugin.php' => config_path('blog-plugin.php'),
        ], 'blog-plugin:config');
        $this->publishes([
            __DIR__ . '/routes/routes.php' => base_path("routes/blog-plugin.php"),
        ], 'blog-plugin:routes');
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/blog-post'),
        ], 'public');
    }
}
