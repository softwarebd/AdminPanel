<?php

namespace SBD\Panel;

use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['command.panel'] = $this->app->share(function ($app) {
            return new PanelCommand;
        });
        $this->commands('command.panel');
    }
}
