<?php

class SortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array $source
     * @param array $expected
     * @param callable $sort
     */
    public function test(array $source, array $expected, callable $sort)
    {
        $this->assertSame($expected, $sort($source));
    }

    public function dataProvider()
    {
        $sort = function (array $source) {
            sort($source);

            return $source;
        };

        yield [
            [3, 2, 1],
            [1, 2, 3],
            $sort,
        ];
    }
}
