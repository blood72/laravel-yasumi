<?php

namespace Blood72\Yasumi\Test;

use Blood72\Yasumi\YasumiFacade;
use Yasumi\Yasumi;

class FacadeTest extends TestCase
{
    /**
     * Check whether the Facade can be called up.
     *
     * @throws \PHPUnit\Framework\AssertionFailedError
     */
    public function testResolve()
    {
        $this->assertTrue(class_exists('Yasumi'));

        $actual = YasumiFacade::getFacadeRoot();

        $this->assertInstanceOf(Yasumi::class, $actual);
    }
}
