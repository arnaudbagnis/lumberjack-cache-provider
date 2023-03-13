<?php

namespace App\Facades;

use Blast\Facades\AbstractFacade;

class Cache extends AbstractFacade
{
    protected static function accessor()
    {
        return 'cache';
    }
}
