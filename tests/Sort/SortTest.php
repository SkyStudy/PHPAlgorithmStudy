<?php

namespace Tests\Sort;

use SkyStudy\Algorithm\Sort\InsertionReverseSort;
use SkyStudy\Algorithm\Sort\InsertionSort;
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
        foreach ($this->sortDataProvider() as $sort) {
            foreach ($this->sourceExpectedDataProvider() as list($source, $expected)) {
                yield [
                    $source,
                    $expected,
                    $sort,
                ];
            }
        }
    }

    private function sortDataProvider()
    {
        yield function (array $source) {
            sort($source);

            return $source;
        };

        foreach ($this->sortInstanceDataProvider() as $sortInstance) {
            yield [$sortInstance, 'sort'];
        }
    }

    private function sortInstanceDataProvider()
    {
        yield new NativeSort();
        yield new BubbleSort();
        yield new InsertionSort();
        yield new InsertionReverseSort();
    }

    private function sourceExpectedDataProvider()
    {
        yield [
            [3, 2, 1],
            [1, 2, 3]
        ];

        yield [
            [7, 8, 3, 2, 1, 5, 9],
            [1, 2, 3, 5, 7, 8, 9]
        ];
    }
}
