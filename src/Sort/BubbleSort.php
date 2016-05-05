<?php

namespace SkyStudy\Algorithm\Sort;

class BubbleSort
{
    public function sort(array $source)
    {
        $count = count($source);
        
        for ($i = 0; $i < $count; ++$i) {
            for ($j = $i + 1; $j < $count; ++$j) {
                if ($source[$i] > $source[$j]) {
                    list($source[$i], $source[$j]) = [$source[$j], $source[$i]];
                }
            }
        }

        return $source;
    }
}
