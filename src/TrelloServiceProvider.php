<?php

namespace src;

use Illuminate\Support\ServiceProvider;

class TrelloServiceProvider extends ServiceProvider
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
        $this->app->singleton(Trello::class, function(){
            return new Trello();
        });

        $this->app->alias(Trello::class, 'trello-client');
    }
}
