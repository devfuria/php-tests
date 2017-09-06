<?php

class arraysTest extends \PHPUnit\Framework\TestCase {

    /**
     * is_array — Finds whether a variable is an array
     * 
     * bool is_array ( mixed $var )
     *
     * https://secure.php.net/manual/en/function.is-array.php
     */
    function test_is_array() {

        $this->assertTrue(is_array([]));

        $this->assertFalse(is_array(0));
        $this->assertFalse(is_array(123));
        $this->assertFalse(is_array(''));
    }

    /**
     * in_array — Checks if a value exists in an array
     * 
     * bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )
     *
     * https://secure.php.net/manual/en/function.in-array.php
     */
    function test_in_array() {

        $this->assertTrue(in_array('foo', ['foo', 'bar', 'die']));

        $this->assertFalse(in_array('lish', ['foo', 'bar', 'die']));
    }

    /**
     * key — Fetch a key from an array
     *
     * mixed key ( array &$array )
     *
     * https://secure.php.net/manual/en/function.key.php
     */
    function test_key() {

        $arr = [01 =>'foo', 02 =>'bar', 03 =>'die'];

        $this->assertEquals(1, key($arr));

        next($arr);
        $this->assertEquals(2, key($arr));

        next($arr);
        $this->assertEquals(3, key($arr));

    }

    /**
     * list — Assign variables as if they were an array
     *
     * array list ( mixed $var1 [, mixed $... ] )
     * 
     * https://secure.php.net/manual/en/function.list.php
     */
    function test_list() {
        list($drink, $color, $power) = array('coffee', 'brown', 'caffeine');

        $this->assertEquals('coffee', $drink);
        $this->assertEquals('brown', $color);
        $this->assertEquals('caffeine', $power);
    }
    
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
