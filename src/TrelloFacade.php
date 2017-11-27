<?php

namespace Fsbcomunicacao\Trello;

use Illuminate\Support\Facades\Facade;

class TrelloFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'trello-client';
    }
}