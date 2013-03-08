<?php

namespace Ania\Html;

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

    public function render()
    {
        $result = '<table><tr><th></th>';
        for ($i = 1; $i <= $this->columns; $i++) {
            $result .= '<th>' . $i . '</th>';
        }
        $result .= '</tr>';

        for ($i = 1; $i <= $this->rows; $i++) {
            $result .= '<tr><th>' . $i . '</th>';
            for ($j = 1; $j <= $this->columns; $j++) {
                $result .= '<td>' . ($i * $j) . '</td>';
            }
            $result .= '</tr>';
        }
        $result .= '</table>';

        return $result;
    }


}
