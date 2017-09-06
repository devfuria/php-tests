<?php

class InArrayTest extends \PHPUnit\Framework\TestCase {

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

}
