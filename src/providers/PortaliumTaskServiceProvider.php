<?php

namespace Portalium\Task\Providers;

use Illuminate\Support\ServiceProvider;

class PortaliumTaskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Portalium\Task\Controllers\TaskController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->loadRoutesFrom(__DIR__.'/../config/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'task');
        $this->publishes([
            __DIR__.'/views' => base_path( __DIR__.'/views/task'),
        ]);
    }
}
