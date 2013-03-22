<?php

namespace Janek\Util;

class Abc
{
    const TYPE_VETICAL = 1;
    const TYPE_HORIZONTAL = 2;
    private $string = '';
    private $type = self::TYPE_VETICAL;

    function __construct($string = null)
    {
        if (isset($string)) {
            $this->string = $string;
        }
    }

    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    public function setType($type)
    {
        if ($type == 'horizontal') {
            $this->type = self::TYPE_HORIZONTAL;
        } else {
            $this->type = self::TYPE_VETICAL;
        }

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getString()
    {
        return $this->string;
    }

    public function render()
    {
        if ($this->string === '') {
            return '';
        }

        $result = '<table>';
        if ($this->isHorizontal()) {
            $result .= '<tr>';
            for ($i = 0; $i < strlen($this->string); $i++) {
                $result .= '<td>' . $this->string[$i] . '</td>';
            }
            $result .= '</tr>';
        } else if ($this->isVertical()) {
            for ($i = 0; $i < strlen($this->string); $i++) {
                $result .= '<tr><td>' . $this->string[$i] . '</td></tr>';
            }
        }

        return $result . '</table>';
    }

    public function isHorizontal()
    {
        return $this->type === self::TYPE_HORIZONTAL;
    }

    public function isVertical()
    {
        return $this->type === self::TYPE_VETICAL;
    }

}

