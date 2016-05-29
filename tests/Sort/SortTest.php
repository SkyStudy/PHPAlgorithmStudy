<?php

use SkyStudy\Algorithm\Sort\NativeSort;
use SkyStudy\Algorithm\Sort\BubbleSort;

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

        $source = [3, 2, 1];
        $expected = [1, 2, 3];

        yield [
            $source,
            $expected,
            $sort,
        ];

        foreach ($this->sortDataProvider() as $sortInstance) {
            yield [
                $source,
                $expected,
                [$sortInstance, 'sort'],
            ];
        }
    }

    private function sortDataProvider()
    {
        yield new NativeSort();
        yield new BubbleSort();
    }
}
