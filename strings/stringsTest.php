<?php

class stringsTest extends \PHPUnit\Framework\TestCase {

    /**
     * strpos — Find the position of the first occurrence of a substring in a string
     *
     * mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
     *
     * http://php.net/manual/en/function.strpos.php
     */
    function test_strpos() {
        $this->assertEquals(0, strpos($mystring = 'abc', $findme = 'a'));
        $this->assertEquals(1, strpos($mystring = 'abc', $findme = 'b'));
        $this->assertEquals(2, strpos($mystring = 'abc', $findme = 'c'));
    }

    /**
     * strstr - Find the first occurrence of a string
     *
     * string strstr ( string $haystack , mixed $needle [, bool $before_needle = false ] )
     *
     * http://php.net/manual/en/function.strstr.php
     */
    function test_strstr() {
        $this->assertEquals('@example.com', strstr('name@example.com', '@'));

        $this->assertEquals('.com', strstr('name@example.com', '.'));

        $this->assertEquals('-456-789-', strstr('123-456-789-', '-'));

        $this->assertEquals('.999', strstr('9.999', '.'));
    }

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
