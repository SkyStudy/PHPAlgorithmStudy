<?php

class SortTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $source = [3, 2, 1];
        $expected = [1, 2, 3];

        sort($source);
        
        $this->assertSame($expected, $source);
    }
}
