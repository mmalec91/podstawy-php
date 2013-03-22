<?php

namespace Janek\Util\Tests;

use Janek\Util\Abc;

class AbcTest extends \PHPUnit_Framework_TestCase
{
    public function testSetString()
    {
        $k = new Abc();
        $k->setString('Lorem');
        $this->assertEquals('Lorem', $k->getString());


        $k = new Abc('Xyz...');
        $this->assertEquals('Xyz...', $k->getString());

    }


    public function testRender()
    {
        $k = new Abc('X');
        $this->assertEquals(
            '<table><tr><td>X</td></tr></table>',
            $k->render()
        );

        $this->assertEquals(Abc::TYPE_VETICAL, $k->getType());

        $k->setType('vertical');
        $this->assertEquals(Abc::TYPE_VETICAL, $k->getType());

        $k = new Abc('ala');
        $this->assertEquals(
            '<table><tr><td>a</td></tr><tr><td>l</td></tr><tr><td>a</td></tr></table>',
            $k->render()
        );

        $k = new Abc('PL');
        $k->setType('horizontal');
        $this->assertEquals(
            '<table><tr><td>P</td><td>L</td></tr></table>',
            $k->render()
        );

        $k = new Abc();
        $this->assertEquals('', $k->render());

    }

}



//$this->markTestIncomplete('Not implemented');
