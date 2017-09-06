<?php

class ArrayPopTest extends \PHPUnit\Framework\TestCase {

    /**
     * array_pop — Pop the element off the end of array
     * 
     * mixed array_pop ( array &$array )
     * 
     * http://php.net/manual/en/function.array-pop.php
     */
    function test_array_pop() {

        $stack  = ["a", "b", "c", "d"];
        $result = array_pop($stack);
        
        $this->assertEquals(["a", "b", "c"], $stack);
        $this->assertEquals("d", $result);
        
    }

}
