<?php

class ArrayPushTest extends \PHPUnit\Framework\TestCase {

    /**
     * array_push — Push one or more elements onto the end of array
     * 
     * int array_push ( array &$array , mixed $value1 [, mixed $... ] )
     * 
     * http://php.net/manual/en/function.array-push.php
     */
    function test_array_push() {

        $stack  = ["a", "b"];
        array_push($stack, "c");
        array_push($stack, "d");
        array_push($stack, "e", "f", "g");
        
        $this->assertEquals(["a", "b", "c", "d", "e", "f", "g"], $stack);
    }

}
