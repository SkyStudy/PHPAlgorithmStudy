<?php

namespace SkyStudy\Algorithm\Sort;

class BubbleOriginalSort
{
    public function sort(array $source)
    {
        $count = count($source);

        for ($i = $count - 1; $i >= 0; --$i) {
            for ($j = 0; $j < $i; ++$j) {
                if ($source[$i] < $source[$j]) {
                    list($source[$i], $source[$j]) = [$source[$j], $source[$i]];
                }
            }
        }

        return $source;
    }
}
