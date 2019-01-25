<?php

namespace Cecos\Category;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
        $this->publishes([
            __DIR__ . '/config' => config_path('categories'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Cecos\Category\CategoriesController');
        $this->loadViewsFrom(__DIR__ . '/views', 'categories');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/categories.php', 'categories');
    }
}
