<?php

namespace Gajdaw\File\Txt\Tests;

use Gajdaw\File\Txt\Reader;

class ReaderTest extends \PHPUnit_Framework_TestCase
{

    public function testGetFilename()
    {
        $reader = new Reader();
        $reader->setFilename('abc');
        $this->assertEquals('abc', $reader->getFilename());
    }

}
