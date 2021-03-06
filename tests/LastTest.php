<?php

namespace Sergiors\Functional\Tests;

use Sergiors\Functional as F;

class LastTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function last()
    {
        $this->assertEquals(3, F\last([1, 2, 3]));
        $this->assertEquals('b', F\last(['a' => 'a', 'b' => 'b']));
    }

    /**
     * @test
     */
    public function shouldReturnNull()
    {
        $this->assertNull(F\last([]));
    }
}
