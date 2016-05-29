<?php

namespace Tests;

use SkyStudy\Algorithm\Math;

class MathTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array $array
     * @param $expected
     */
    public function testSum(array $array, $expected)
    {
        $math = new Math();

        $this->assertSame($expected, $math->sum($array));
    }

    public function dataProvider()
    {
        yield [
            [],
            0
        ];
    }
}
