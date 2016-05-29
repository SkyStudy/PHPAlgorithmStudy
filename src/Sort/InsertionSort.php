<?php

namespace SkyStudy\Algorithm\Sort;

use SkyStudy\Algorithm\Dumper\ArrayDumper;

class InsertionSort
{
    public function sort(array $source)
    {
        $dumper = new ArrayDumper();
        
        $count = count($source);

        for ($i = 1; $i < $count; ++$i) {
            $insert = $source[$i];

            $j = $i - 1;
            while ($j >= 0 && $source[$j] > $insert) {
                $dumper->dump($source);
                $source[$j + 1] = $source[$j];
                $dumper->dump($source);
                --$j;
            }
            $source[$j + 1] = $insert;
            $dumper->dump($source);
        }

        return $source;
    }

}
