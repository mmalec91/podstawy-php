<?php

namespace Gajdaw\Util\Tests;

use Gajdaw\Util\String2Array;

class String2ArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testSet()
    {
        $o = new String2Array();
        $o->setString('lorem');
        $this->assertEquals('lorem', $o->getString());
    }

    public function testToRows()
    {
        $o = new String2Array();
        $o->setString("ala\r\nma\r\nkota");
        $o->toRows();
        $this->assertEquals(3, $o->getRowsCount());
    }

}
