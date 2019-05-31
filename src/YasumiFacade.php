<?php

namespace Blood72\Yasumi;

use Illuminate\Support\Facades\Facade;
use Yasumi\Yasumi;

class YasumiFacade extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return Yasumi::class;
    }
}