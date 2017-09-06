<?php

class KeyTest extends \PHPUnit\Framework\TestCase {

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

}
