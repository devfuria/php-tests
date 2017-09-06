<?php

class IsArrayTest extends \PHPUnit\Framework\TestCase {

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


}
