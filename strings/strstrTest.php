<?php

/**
 * strstr
 *
 * Encontra a primeira ocorrencia de uma string
 *
 * http://php.net/manual/pt_BR/function.strstr.php
 */
class strstrTest extends \PHPUnit\Framework\TestCase {

    /**
     * string strstr ( string $haystack , mixed $needle [, bool $before_needle ] )
     *
     * Retorna parte da string haystack a partir da primeira ocorrência de needle até o final de haystack.
     */
//    function setUp () {
//        $this->test = [
//            [
//                'resultado' => '@example.com',
//                'haystack'  => 'name@example.com',
//                'needle'    => '@'
//            ],
//            ['resultado' => '.com', 'haystack' => 'name@example.com', 'needle' => '.'],
//        ];
//    }
//
//    function testStrstr() {
//        foreach ($this->test as $test) {
//            $this->assertEquals($test['resultado'], strstr($test['haystack'], $test['needle']));
//        }
//    }
    function test_strstr() {
        $this->assertEquals('@example.com', strstr('name@example.com', '@'));

        $this->assertEquals('.com', strstr('name@example.com', '.'));

        $this->assertEquals('-456-789-', strstr('123-456-789-', '-'));

        $this->assertEquals('.999', strstr('9.999', '.'));
    }

}
