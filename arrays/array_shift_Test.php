<?php

class ArrayShiftTest extends \PHPUnit\Framework\TestCase {

    /**
     * array_shift — Shift an element off the beginning of array
     * 
     * mixed array_shift ( array &$array )
     * 
     * http://php.net/manual/en/function.array-shift.php
     */
    function test_array_shift() {

        $stack  = ["a", "b", "c"];
        array_shift($stack);
        
        $this->assertEquals(["b", "c"], $stack);
        
    }
    
}
