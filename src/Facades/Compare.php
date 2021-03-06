<?php

namespace Statamic\Facades;

use Statamic\Support\Comparator;
use Illuminate\Support\Facades\Facade;

class Compare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Comparator::class;
    }
}
