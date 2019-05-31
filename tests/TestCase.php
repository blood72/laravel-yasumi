<?php

namespace Blood72\Yasumi\Test;

use Blood72\Yasumi\YasumiFacade;
use Blood72\Yasumi\YasumiServiceProvider;
use Orchestra\Testbench\TestCase as BaseClass;

class TestCase extends BaseClass
{
    /**
     * Register the service.
     *
     * @param \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [YasumiServiceProvider::class];
    }

    /**
     * Register the alias.
     *
     * @param \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return ['Yasumi' => YasumiFacade::class];
    }
}
