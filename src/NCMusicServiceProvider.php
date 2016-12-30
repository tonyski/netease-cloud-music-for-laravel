<?php

namespace Tonyski\NCMusic;

use Illuminate\Support\ServiceProvider;

class NCMusicServiceProvider extends ServiceProvider
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
        $this->app->bind('ncmusic', function ($app) {
            return new NCMusic($app);
        });
    }
}
