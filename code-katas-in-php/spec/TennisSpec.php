<?php

namespace spec;

use Tennis;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Tennis::class);
    }
}
