<?php

namespace SkyStudy\Algorithm\Sort;

use SkyStudy\Algorithm\Dumper\ArrayDumper;

class InsertionSort
{
    public function sort(array $source)
    {
        $count = count($source);

        for ($i = 1; $i < $count; ++$i) {
            $insert = $source[$i];

            $j = $i - 1;
            while ($j >= 0 && $source[$j] > $insert) {
                ArrayDumper::dump($source);
                $source[$j + 1] = $source[$j];
                ArrayDumper::dump($source);
                --$j;
            }
            $source[$j + 1] = $insert;
            ArrayDumper::dump($source);
        }

        return $source;
    }

}
