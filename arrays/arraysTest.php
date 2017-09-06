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
    
    /**
     * current — Return the current element in an array
     * http://php.net/manual/en/function.current.php
     * 
     * next — Advance the internal pointer of an array
     * http://php.net/manual/en/function.next.php
     * 
     * prev — Rewind the internal array pointer
     * http://php.net/manual/en/function.prev.php
     * 
     * end — Set the internal pointer of an array to its last element
     * http://php.net/manual/en/function.end.php
     * 
     */
    function test_current_next_prev_end() {

        $transport = array('foot', 'bike', 'car', 'plane');
        
        $this->assertEquals('foot',  current($transport));
        $this->assertEquals('bike',  next($transport));
        $this->assertEquals('car',   next($transport));
        $this->assertEquals('bike',  prev($transport));
        $this->assertEquals('plane', end($transport));
        
    }
    
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
