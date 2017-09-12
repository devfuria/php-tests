<?php

class ArrayKeyExistsTest extends \PHPUnit\Framework\TestCase {

    /**
     * array_key_exists — Checks if the given key or index exists in the array
     *
     * bool array_key_exists ( mixed $key , array $array )
     *
     * http://php.net/manual/en/function.array-key-exists.php
     */
    function test_array_key_exists() {

        $this->assertTrue(array_key_exists('first', ['first' => 1, 'second' => 2]));
        $this->assertTrue(array_key_exists('second', ['first' => 1, 'second' => 2]));
        $this->assertFalse(array_key_exists('third', ['first' => 1, 'second' => 2]));

    }

}
