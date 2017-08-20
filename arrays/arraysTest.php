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

}
