<?php

class IssetTest extends \PHPUnit\Framework\TestCase {

    /**
     * isset — Determine if a variable is set and is not NULL
     *
     * bool isset ( mixed $var [, mixed $... ] )
     *
     * http://php.net/manual/en/function.isset.php
     */
    function test_isset_simple() {
        $this->assertFalse(isset($a));
        $a = 123;
        $this->assertTrue(isset($a));
    }

    function test_isset_null() {
        $a = null;
        $this->assertFalse(isset($a));
    }

    function test_isset_mixed() {
        # variables do not exist
        $this->assertFalse(isset($a, $b, $c));

        $a = 123;

        # just $a exist
        $this->assertFalse(isset($a, $b, $c));

        $b = 456;

        # $a and $b exist, but not $c
        $this->assertFalse(isset($a, $b, $c));

        $c = 789;

        # all variables exists
        $this->assertTrue(isset($a, $b, $c));
    }


}
