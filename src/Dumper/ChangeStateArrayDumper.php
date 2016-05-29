<?php

namespace SkyStudy\Algorithm\Dumper;

class ChangeStateArrayDumper extends ArrayDumper
{
    private $state;

    public function dump(array $array)
    {
        if ($this->state === $array) {
            return;
        }

        $this->state = $array;

        parent::dump($array);
    }
}
