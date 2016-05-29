<?php

namespace SkyStudy\Algorithm\Sort;

class QuickSort
{
    public function sort(array $array)
    {
        $this->inner($array, 0, count($array) - 1);

        return $array;
    }

    private function inner(array &$array, $l, $r)
    {
        $i = $l;
        $j = $r;
        $x = $array[($l + $r) / 2];
        do {
            while ($array[$i] < $x) $i++;
            while ($array[$j] > $x) $j--;
            if ($i <= $j) {
                if ($array[$i] > $array[$j])
                    list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
                $i++;
                $j--;
            }
        } while ($i <= $j);
        if ($i < $r) $this->inner($array, $i, $r);
        if ($j > $l) $this->inner($array, $l, $j);
    }
}
