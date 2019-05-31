<?php

namespace Blood72\Yasumi\Test;

use Blood72\Yasumi\YasumiServiceProvider;
use Yasumi\Yasumi;

class ServiceProviderTest extends TestCase
{
    /**
     * Check that the service provider is providing correctly
     *
     * @throws \PHPUnit\Framework\AssertionFailedError
     */
    public function testIsDeferred()
    {
        /** @var \Illuminate\Support\ServiceProvider  $provider */
        $provider = $this->getMockBuilder(YasumiServiceProvider::class)
            ->disableOriginalConstructor()
            ->setMethodsExcept(['isDeferred'])
            ->getMock();

        $actual = $provider->isDeferred();

        $this->assertTrue($actual);
    }

    /**
     * Check that the service provider is providing correctly
     *
     * @throws \PHPUnit\Framework\AssertionFailedError
     */
    public function testRegister()
    {
        $actual = $this->app->make('yasumi');

        $this->assertInstanceOf(Yasumi::class, $actual);
    }

    /**
     * Check that the service provider is providing correctly
     *
     * @throws \PHPUnit\Framework\AssertionFailedError
     */
    public function testProvides()
    {
        /** @var \Illuminate\Support\ServiceProvider  $provider */
        $provider = $this->getMockBuilder(YasumiServiceProvider::class)
            ->disableOriginalConstructor()
            ->setMethodsExcept(['provides'])
            ->getMock();

        $actual = $provider->provides();

        $this->assertContains(Yasumi::class, $actual);
    }
}
