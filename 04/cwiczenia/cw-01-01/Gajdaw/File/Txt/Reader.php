<?php

/**
 * Created by JetBrains PhpStorm.
 * User: gajdaw
 * Date: 15.03.13
 * Time: 13:40
 * To change this template use File | Settings | File Templates.
 */

namespace Gajdaw\File\Txt;

class Reader
{
    private $filename;
    private $data;
    private $count;

    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function load()
    {
        $this->data = file($this->filename);
        $this->count = count($this->data);
    }

    public function getItem($n)
    {
        return $this->data[$n];
    }

}
