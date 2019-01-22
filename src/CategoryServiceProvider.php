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
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Cecos\Category\CategoriesController');
        $this->loadViewsFrom(__DIR__.'/views/categories', 'categories');
    }
}
