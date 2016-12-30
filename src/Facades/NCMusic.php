<?php

namespace Tonyski\NCMusic\Facades;

use Illuminate\Support\Facades\Facade;

class NCMusic extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ncmusic';
    }
}