<?php

namespace NiclasTimm\Feedbeggar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NiclasTimm\Feedbeggar\Feedbeggar
 */
class Feedbeggar extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \NiclasTimm\Feedbeggar\Feedbeggar::class;
    }
}
