<?php

namespace Acvxqs\NovaRegisterpage;;

use Illuminate\Support\ServiceProvider;

class RegisterpageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views/nova-registerpage', 'nova-registerpage');
        $this->loadViewsFrom(resource_path('views/vendor/nova'), 'nova');

        $this->publishes([
            __DIR__ . '/../config/nova-registerpage.php' => config_path('nova-registerpage.php'),
        ], 'nova-registerpage');
    }
}
