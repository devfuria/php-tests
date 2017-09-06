<?php

class ImplodeExplodeTest extends \PHPUnit\Framework\TestCase {


    /**
     * implode — Join array elements with a string
     *
     * string implode ( string $glue , array $pieces )
     *
     * http://php.net/manual/en/function.implode.php
     */
    function test_implode() {
        $this->assertEquals("abc",     implode(['a', 'b', 'c']));
        $this->assertEquals("a, b, c", implode(", ", ['a', 'b', 'c']));
        $this->assertEquals("a-b-c",   implode("-", ['a', 'b', 'c']));
        
        # join — Alias of implode()
        # http://php.net/manual/en/function.join.php
        $this->assertEquals("a-b-c",   join("-", ['a', 'b', 'c']));
    }
    
    /**
     * explode — Split a string by string
     * 
     * array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
     * 
     * http://php.net/manual/en/function.explode.php
     */
    function test_explode() {
        $this->assertEquals(['a', 'b', 'c'], explode(" ", "a b c"));
        $this->assertEquals(['a', 'b', 'c'], explode("-", "a-b-c"));
        $this->assertEquals(['a', 'b', 'c'], explode(", ", "a, b, c"));
        
        # see also str_split
    }

}
