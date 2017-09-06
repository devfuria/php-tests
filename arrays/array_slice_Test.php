<?php

class ArraySliceTest extends \PHPUnit\Framework\TestCase {

    /**
     * array_slice — Extract a slice of the array
     * 
     * array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )
     * 
     * http://php.net/manual/en/function.array-slice.php
     */
    function test_array_slice() {

        $input = ["a", "b", "c", "d", "e"];

        # right
        $this->assertEquals(["a", "b", "c", "d", "e"], array_slice($input, 0));
        $this->assertEquals(["b", "c", "d", "e"],      array_slice($input, 1));
        $this->assertEquals(["c", "d", "e"],           array_slice($input, 2));

        # left        
        $this->assertEquals(["e"],                     array_slice($input, -1));
        $this->assertEquals(["d", "e"],                array_slice($input, -2));
        $this->assertEquals(["c", "d", "e"],           array_slice($input, -3));
        
        # slice
        $this->assertEquals([],                        array_slice($input, 0, 0));
        $this->assertEquals(["a"],                     array_slice($input, 0, 1));
        $this->assertEquals(["b"],                     array_slice($input, 1, 1));
        $this->assertEquals(["c"],                     array_slice($input, 2, 1));
        $this->assertEquals(["d"],                     array_slice($input, 3, 1));
        $this->assertEquals(["e"],                     array_slice($input, 4, 1));

        # note the differences in the array keys
        $this->assertEquals([0 => "c", 1 => "d"],      array_slice($input, 2, 2));
        $this->assertEquals([2 => "c", 3 => "d"],      array_slice($input, 2, 2, true));
        
    }
    
}
