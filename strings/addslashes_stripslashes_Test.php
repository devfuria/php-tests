<?php

class AddslashesStripslashesTest extends \PHPUnit\Framework\TestCase {

    /**
     * addslashes — Quote string with slashes
     * http://php.net/manual/en/function.addslashes.php
     *
     * stripslashes — Un-quotes a quoted string
     * http://php.net/manual/en/function.stripslashes.php
     */
    function test_addslashes_stripslashes() {

        $this->assertEquals("Is your name O\'reilly?", addslashes("Is your name O'reilly?"));

        $this->assertEquals("Is your name O'reilly?", stripslashes("Is your name O\'reilly?"));

    }
    
}
