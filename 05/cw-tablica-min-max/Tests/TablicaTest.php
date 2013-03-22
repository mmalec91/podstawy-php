<?php

namespace Gajdaw\Util\Tests;

use Gajdaw\Util\Tablica;

class TablicaTest extends \PHPUnit_Framework_TestCase
{
    public function testSetItems()
    {
        $a = array(5, 3, -1, 7);
        $t = new Tablica();
        $t->setItems($a);

        $this->assertEquals($a, $t->getItems());
    }

    public function testGetMin()
    {
        $a = array(5, 3, -1, 7);
        $t = new Tablica();
        $t->setItems($a);

        $this->assertEquals(-1, $t->getMin());

        $a = array(1, 2, 3);
        $t = new Tablica();
        $t->setItems($a);

        $this->assertEquals(1, $t->getMin());

        $t2 = new Tablica();
        $this->assertFalse($t2->getMin());


        $t = new Tablica(array(6, 8, -100, 3));
        $this->assertEquals(-100, $t->getMin());

        $t = new Tablica(array(0));
        $this->assertEquals(0, $t->getMin());

        $t = new Tablica(array(666));
        $this->assertEquals(666, $t->getMin());
    }

    public function testGetMinMax()
    {
        $t = new Tablica(array(1, 2));
        $wynik = array(
             "min" => 1,
             "max" => 2,
        );
        $this->assertEquals($wynik, $t->getMinMax());

        $t = new Tablica();
        $this->assertFalse($t->getMinMax());

        $t = new Tablica(array(555));
        $wynik = array(
             "min" => 555,
             "max" => 555,
        );
        $this->assertEquals($wynik, $t->getMinMax());

        $t = new Tablica(array(-7, 5, 333, -44, 123, 9, -5, 1, 2));
        $wynik = array(
             "min" => -44,
             "max" => 333,
        );
        $this->assertEquals($wynik, $t->getMinMax());


    }

}



//        $this->markTestIncomplete('Not implemented');
