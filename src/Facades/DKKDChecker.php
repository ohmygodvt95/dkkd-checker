<?php

namespace Ohmygodvt95\DKKDChecker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ohmygodvt95\DKKDChecker\DKKDChecker
 */
class DKKDChecker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ohmygodvt95\DKKDChecker\DKKDChecker::class;
    }
}
