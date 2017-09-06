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
        $this->assertEquals(['a', 'b', 'c'],           str_split("abc"));
        $this->assertEquals(['a', '-', 'b', '-', 'c'], str_split("a-b-c"));
        
        $this->assertEquals(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'], str_split("abcdefghi", 1));
        $this->assertEquals(['ab', 'cd', 'ef', 'gh', 'i'],                 str_split("abcdefghi", 2));
        $this->assertEquals(['abc', 'def', 'ghi'],                         str_split("abcdefghi", 3));
    }
    
}
