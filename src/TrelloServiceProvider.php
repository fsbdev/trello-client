<?php

namespace Fsbcomunicacao\Trello;

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
        $this->app->singleton(Trello::class, function() {
            $key = '5add883b3ab540d2b474aab16511720b';
            $token = '41144a4687c86d7c14b9e9e1d8a010e63b4b9c0ef04b788306dba21b4a5e42bf';
            
            return new Trello($key, $token);
        });

        $this->app->alias(Trello::class, 'trello-client');
    }
}
