<?php

#
#  mock
#
class MyClass {
    public $var;
    protected $bar;
    private $die;
    static $lish;
}

#
# test
#
class PropertyExistsTest extends \PHPUnit\Framework\TestCase {

    /**
     * property_exists — Checks if the object or class has a property
     *
     * bool property_exists ( mixed $class , string $property )
     *
     * http://php.net/manual/en/function.property-exists.php
     */
    function test_property_exists() {
        $this->assertTrue(property_exists('MyClass', 'var'));
        $this->assertFalse(property_exists('MyClass', 'watch'));
    }

    function test_property_exists_for_protected() {
        $this->assertTrue(property_exists('MyClass', 'bar'));
    }

    function test_property_exists_for_private() {
        $this->assertTrue(property_exists('MyClass', 'die'));
    }

    function test_property_exists_for_static() {
        $this->assertTrue(property_exists('MyClass', 'lish'));
    }

}
