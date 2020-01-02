<?php

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\partition;

class PartitionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider getValidCollections
     */
    public function is_should_partition_a_collection($coll, $partitionSize, $expected)
    {
        $this->assertEquals($expected, partition($partitionSize, $coll));
    }

    public function getValidCollections()
    {
        return [
            'array'           => [
                'coll'          => [1, 2, 3, 4, 5, 6, 7],
                'partitionSize' => 2,
                'expected'      => [[0 => 1, 1 => 2], [2 => 3, 3 => 4], [4 => 5, 5 => 6], [6 => 7]],
            ],
            'array_with_keys' => [
                'coll'          => ['one' => 1, 'two' => 2, 'three' => 3],
                'partitionSize' => 2,
                'expected'      => [['one' => 1, 'two' => 2], ['three' => 3]],
            ],
            'iterator'        => [
                'coll'          => new ArrayIterator([1, 2, 3, 4, 5, 6, 7]),
                'partitionSize' => 2,
                'expected'      => [[0 => 1, 1 => 2], [2 => 3, 3 => 4], [4 => 5, 5 => 6], [6 => 7]],
            ],
            'generator'       => [
                'coll'          => apply(function () {yield 1; yield 2; yield 3; yield 4; yield 5; yield 6; yield 7; }),
                'partitionSize' => 2,
                'expected'      => [[0 => 1, 1 => 2], [2 => 3, 3 => 4], [4 => 5, 5 => 6], [6 => 7]],
            ],
        ];
    }
}
