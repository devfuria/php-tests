<?php

class StrSplitTest extends \PHPUnit\Framework\TestCase {
    
    /**
     * str_split — Convert a string to an array
     * 
     * array str_split ( string $string [, int $split_length = 1 ] )
     * 
     * http://php.net/manual/en/function.str-split.php
     */
    function test_str_split() {
        $this->assertEquals(['a', 'b', 'c'], str_split("abc"));
        $this->assertEquals(['a', 'b', 'c'], str_split("abc", 1));
        
        $this->assertEquals(['abc', 'def', 'ghi'], str_split("abcdefghi", 3));
    }
    
}
