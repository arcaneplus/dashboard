<?php

namespace ArcanePlus\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
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
        // register our controller
        $this->app->make('ArcanePlus\Dashboard\DashboardController');
        $this->loadViewsFrom(__DIR__.'/views', 'dashboard');
    }
}
