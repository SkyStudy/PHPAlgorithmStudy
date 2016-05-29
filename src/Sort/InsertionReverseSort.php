<?php

namespace SkyStudy\Algorithm\Sort;

class InsertionReverseSort
{
    public function sort(array $source)
    {
        $count = count($source);

        for ($i = $count - 2; $i >= 0; --$i) {
            $insert = $source[$i];

            $j = $i + 1;
            while ($j < $count && $source[$j] < $insert) {
                $source[$j - 1] = $source[$j];
                ++$j;
            }
            $source[$j - 1] = $insert;
        }

        return $source;
    }
}
