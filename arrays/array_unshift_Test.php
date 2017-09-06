<?php

class ArrayUnshiftTest extends \PHPUnit\Framework\TestCase {

    /**
     * array_unshift — Prepend one or more elements to the beginning of an array
     * 
     * int array_unshift ( array &$array , mixed $value1 [, mixed $... ] )
     * 
     * http://php.net/manual/en/function.array-unshift.php
     */    
    function test_array_unshift() {

        $stack  = ["d", "e"];
        array_unshift($stack, "b", "c");
        array_unshift($stack, "a");
        
        $this->assertEquals(["a", "b", "c", "d", "e"], $stack);
        
    }

}
