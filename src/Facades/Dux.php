<?php

namespace Sooand\Dux\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sooand\Dux\Dux
 */
class Dux extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sooand\Dux\Dux::class;
    }
}
