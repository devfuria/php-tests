<?php

class SubstrTest extends \PHPUnit\Framework\TestCase {

    /**
     * substr — Return part of a string
     *
     * string substr ( string $string , int $start [, int $length ] )
     *
     * http://php.net/manual/en/function.substr.php
     */
    function test_substr() {
        $string = 'abcdefghijklmnopqrstuvxyz';

        # slice
        $this->assertEquals('abc',   substr($string, 0, 3));
        $this->assertEquals('def',   substr($string, 3, 3));
        $this->assertEquals('ghi',   substr($string, 6, 3));

        # left
        $this->assertEquals('a',     substr($string, 0, 1));
        $this->assertEquals('abc',   substr($string, 0, 3));
        $this->assertEquals('abcde', substr($string, 0, 5));

        # right
        $this->assertEquals('z',     substr($string, -1));
        $this->assertEquals('yz',    substr($string, -2));
        $this->assertEquals('xyz',   substr($string, -3));

        # ...  r  s  t  u  v  x  y  z
        # ... 17 18 19 20 21 22 23 24
        $this->assertEquals('uvxyz', substr($string, 20));
        $this->assertEquals('yz',    substr($string, 23));
        $this->assertEquals('z',     substr($string, 24));
    }

}
