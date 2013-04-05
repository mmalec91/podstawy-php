<?php

namespace Gajdaw\Util;

class String2Array
{
    private $string;
    private $rows;
    private $rows_count;

    public function setString($string)
    {
        $this->string = $string;
        return $this;
    }

    public function getString()
    {
        return $this->string;
    }

    public function getRowsCount()
    {
        return $this->rows_count;
    }

    public function getRow($i)
    {
        return $this->rows[$i];
    }

    public function toRows()
    {
        $this->rows = explode("\r\n", trim($this->string));
        $this->rows_count = count($this->rows);
        //for ($i = 0; $i < $this->rows_count; $i++) {
        //    $this->rows[$i] = trim($this->rows[$i]);
        //}
        $this->rows = array_map('trim', $this->rows);

    }

}
