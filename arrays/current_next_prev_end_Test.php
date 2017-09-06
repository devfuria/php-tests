<?php

class CurrentNextPrevEndTest extends \PHPUnit\Framework\TestCase {

    
    /**
     * current — Return the current element in an array
     * http://php.net/manual/en/function.current.php
     * 
     * next — Advance the internal pointer of an array
     * http://php.net/manual/en/function.next.php
     * 
     * prev — Rewind the internal array pointer
     * http://php.net/manual/en/function.prev.php
     * 
     * end — Set the internal pointer of an array to its last element
     * http://php.net/manual/en/function.end.php
     * 
     */
    function test_current_next_prev_end() {

        $transport = array('foot', 'bike', 'car', 'plane');
        
        $this->assertEquals('foot',  current($transport));
        $this->assertEquals('bike',  next($transport));
        $this->assertEquals('car',   next($transport));
        $this->assertEquals('bike',  prev($transport));
        $this->assertEquals('plane', end($transport));
        
    }
    
}
