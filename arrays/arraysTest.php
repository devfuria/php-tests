<?php

/**
 * Funções para Array
 *
 * https://secure.php.net/manual/pt_BR/ref.array.php
 */
class ArraysTest extends \PHPUnit\Framework\TestCase {

    /**
     * is_array — Verifica se a variável é um array
     *
     * https://secure.php.net/manual/pt_BR/function.is-array.php
     */
    function test_is_array() {

        $this->assertTrue(is_array([]));

        $this->assertFalse(is_array(0));
        $this->assertFalse(is_array(123));
        $this->assertFalse(is_array(''));
    }

    /**
     * in_array — Checa se um valor existe em um array
     *
     * https://secure.php.net/manual/pt_BR/function.in-array.php0
     */
    function test_in_array() {

        $this->assertTrue(in_array('foo', ['foo', 'bar', 'die']));

        $this->assertFalse(in_array('lish', ['foo', 'bar', 'die']));
    }

    /**
     * key — Retorna uma chave de um array
     *
     * atalho para key_exists
     *
     * https://secure.php.net/manual/pt_BR/function.key.php
     */
    function test_key() {

        $arr = [01 =>'foo', 02 =>'bar', 03 =>'die'];

        $this->assertEquals(1, key($arr));

        next($arr);
        $this->assertEquals(2, key($arr));

        next($arr);
        $this->assertEquals(3, key($arr));

    }

    /**
     * list — Cria variáveis como se fossem arrays
     *
     * https://secure.php.net/manual/pt_BR/function.list.php
     */
    function test_list() {
        list($bebida, $cor, $substancia) = array('Café', 'marrom', 'cafeína');

        $this->assertEquals('Café', $bebida);
        $this->assertEquals('marrom', $cor);
        $this->assertEquals('cafeína', $substancia);

        $this->assertEquals("Café é marrom e cafeína o faz especial", "$bebida é $cor e $substancia o faz especial");
    }

}
