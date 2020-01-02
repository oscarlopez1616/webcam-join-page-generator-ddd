<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\flat_map;

class FlatMapTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_should_apply_and_then_flatten()
    {
        $actual   = [2, 3, 4];
        $expected = [1, 2, 1, 2, 3, 1, 2, 3, 4];

        $naturalRange = function ($value) {
            return range(1, $value);
        };

        $this->assertSame($expected, flat_map($naturalRange, $actual));
    }

    /** @test */
    public function it_should_allow_receive_the_key_in_the_function_to_apply()
    {
        $actual   = [4 => 1, 9 => 5];
        $expected = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $this->assertSame($expected, flat_map('range', $actual));
    }
}
