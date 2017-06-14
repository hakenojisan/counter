<?php

namespace HakenOjisan\Counter\Tests;

use PHPUnit\Framework\TestCase;
use HakenOjisan\Counter\Counter;

class CounterTest extends TestCase
{

    public function testConstructor()
    {
        $counter = new Counter();
        $this->assertEquals(0, $counter->getCount());
    }

    public function testCountUp()
    {
        $counter = new Counter();
        $counter->countUp();
        $this->assertEquals(1, $counter->getCount());
    }

    public function testCountDown()
    {
        $counter = new Counter();
        $counter->countDown();
        $this->assertEquals(-1, $counter->getCount());
    }

    public function testReset()
    {
        $counter = new Counter();
        $counter->countUp();
        $counter->resetCount();
        $this->assertEquals(0, $counter->getCount());
    }
}
