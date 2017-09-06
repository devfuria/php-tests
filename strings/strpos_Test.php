<?php

class StrposTest extends \PHPUnit\Framework\TestCase {

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




}
