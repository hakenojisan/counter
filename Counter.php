<?php

namespace HakenOjisan\Counter;

class Counter
{
    private $reset;
    private $counter;
    private $incremental;

    public function __construct(int $counter = 0, int $incremental = 1)
    {
        $this->reset = $this->counter = $counter;
        $this->incremental = $incremental;
    }

    public function countUp()
    {
        $this->counter += $this->incremental;

        return $this;
    }

    public function countDown()
    {
        $this->counter -= $this->incremental;

        return $this;
    }

    public function getCount()
    {
        return $this->counter;
    }

    public function resetCount()
    {
        $this->counter = $this->reset;

        return $this;
    }
}
