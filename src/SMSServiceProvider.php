<?php

namespace IrvinCode\SMS;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'config/config.php', 'config');

        $this->publishes([
            __DIR__.'/config/config.php' => config_path('config.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('IrvinCode/SMS/SMSAltiria');

        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'config'
        );
    }
}