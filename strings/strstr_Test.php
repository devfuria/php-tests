<?php

class StrstrTest extends \PHPUnit\Framework\TestCase {

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

}
