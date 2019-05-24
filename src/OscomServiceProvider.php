<?php

namespace Osc2nuke\OSCOM;

use Illuminate\Support\ServiceProvider;

class OscomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Osc2nuke\OSCOM\ProductController');
        $this->loadViewsFrom(__DIR__.'/views', 'oscom');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
