<?php

class CountTest extends \PHPUnit\Framework\TestCase {

    /**
     * count — Count all elements in an array, or something in an object
     * 
     * int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] )
     * 
     * http://php.net/manual/en/function.count.php
     */
    function test_count() {
        $this->assertEquals(5, count(["a", "b", "c", "d", "e"]));
        
        $this->assertEquals(0, count([]));
        $this->assertEquals(0, null);
        $this->assertEquals(0, false);
    }
    
}
