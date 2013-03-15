<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gajdaw
 * Date: 15.03.13
 * Time: 13:43
 * To change this template use File | Settings | File Templates.
 */

namespace Gajdaw\Arrays;

class Renderer
{
    private $reader;

    public function renderUl($filename)
    {
        $result = '<ul>';
        $this->reader->setFilename($filename);
        $this->reader->load();
        for ($i = 0; $i < $this->reader->getCount(); $i++) {
            $result .= '<li>' . $this->reader->getItem($i) . '</li>';
        }

        return $result;
    }

    public function setReader($reader)
    {
        $this->reader = $reader;
    }

    public function getReader()
    {
        return $this->reader;
    }

}
