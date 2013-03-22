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
}



//$this->markTestIncomplete('Not implemented');
