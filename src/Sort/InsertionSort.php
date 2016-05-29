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
                $this->dump($source);
                $source[$j + 1] = $source[$j];
                $this->dump($source);
                --$j;
            }
            $source[$j + 1] = $insert;
            $this->dump($source);
        }

        return $source;
    }

    private function dump(array $array)
    {
        $string = json_encode($array);
        echo <<<CLI

$string

CLI;
    }
}
