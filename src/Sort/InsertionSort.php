<?php

namespace SkyStudy\Algorithm\Sort;

class InsertionSort
{
    public function sort(array $source)
    {
        $count = count($source);

        for ($i = 1; $i < $count; ++$i) {
            $insert = $source[$i];

            $j = $i - 1;
            while ($j >= 0 && $source[$j] > $insert) {
                $source[$j + 1] = $source[$j];
                --$j;
            }
            $source[$j + 1] = $insert;
        }

        return $source;
    }
}
