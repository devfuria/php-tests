<?php

class StrLenTest extends \PHPUnit\Framework\TestCase {
    
    /**
     * strlen — Get string length
     * 
     * int strlen ( string $string )
     * 
     * http://php.net/manual/en/function.strlen.php
     */
    function test_strlen() {
        $this->assertEquals(3, strlen("abc"));
        $this->assertEquals(5, strlen("a b c"));
        $this->assertEquals(1, strlen(" "));
        $this->assertEquals(0, strlen(""));
        $this->assertEquals(0, strlen(null));
    }

}
