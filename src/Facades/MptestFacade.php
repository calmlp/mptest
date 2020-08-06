<?php

namespace Calmlp\Mptest\Facades;

use Illuminate\Support\Facades\Facade;

class MptestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mptest';
    }
}