<?php

class HtmlspecialcharsTest extends \PHPUnit\Framework\TestCase {


    /**
     * htmlspecialchars — Convert special characters to HTML entities
     * http://php.net/manual/en/function.htmlspecialchars.php
     */
    function test_htmlspecialchars() {
        $this->assertEquals("foo", htmlspecialchars("foo"));
        $this->assertEquals("&lt;foo/&gt;", htmlspecialchars("<foo/>"));
    }

}
