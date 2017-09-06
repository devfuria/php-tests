<?php

class ListTest extends \PHPUnit\Framework\TestCase {

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
