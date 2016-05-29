<?php

namespace SkyStudy\Algorithm\Dumper;

class ArrayDumper
{
    public function dump(array $array)
    {
        $string = json_encode($array);
        echo <<<CLI

$string

CLI;
    }
}
