<?php

namespace Blood72\Yasumi;

use Illuminate\Support\ServiceProvider;
use Yasumi\Yasumi;

class YasumiServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    protected $defer = true;

    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('yasumi', function () {
            return new Yasumi();
        });

        $this->app->alias(Yasumi::class, 'yasumi');
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [Yasumi::class];
    }
}
