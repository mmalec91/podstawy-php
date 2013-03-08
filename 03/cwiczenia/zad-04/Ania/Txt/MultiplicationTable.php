<?php

namespace Ania\Txt;

class MultiplicationTable
{
    private $rows = 10;
    private $columns = 10;

    public function setRows($rows)
    {
        $this->rows = $rows;

        return $this;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;

        return $this;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function printPad($w)
    {
        return str_pad($w, 10, ' ', STR_PAD_LEFT);
    }

    public function render()
    {
        $result = '<pre>';
        $result .= $this->printPad('');
        for ($i = 1; $i <= $this->columns; $i++) {
            $result .= $this->printPad($i);
        }
        $result .= "\n";

        for ($i = 1; $i <= $this->rows; $i++) {
            $result .= $this->printPad($i);
            for ($j = 1; $j <= $this->columns; $j++) {
                $result .= $this->printPad($i * $j);
            }
            $result .= "\n";
        }
        $result .= '</pre>';

        return $result;
    }

}
