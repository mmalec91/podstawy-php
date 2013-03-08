<?php

namespace Ala\Html;

class Powers
{
    private $a = 5;
    private $n = 3;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }

    public function getN()
    {
        return $this->n;
    }

    public function render()
    {
        $result = '<table><tr><th></th>';
        for ($i = 2; $i <= $this->n; $i++) {
            $result .= '<th>a<sup>' . $i . '</sup></th>';
        }
        $result .= '</tr>';

        for ($i = 2; $i <= $this->a; $i++) {
            $result .= '<tr><th>' . $i . '</th>';
            for ($j = 2; $j <= $this->n; $j++) {
                $result .= '<td>' . pow($i, $j) . '</td>';
            }
            $result .= '</tr>';
        }
        $result .= '</table>';

        return $result;
    }


}
