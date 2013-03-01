<?php

namespace Jan\String;

class HtmlConverter
{
    private $string;

    public function setString($string)
    {
        $this->string = $string;
    }

    public function getString()
    {
        return $this->string;
    }

    public function toUl()
    {
        $l = strlen($this->string);
        $result = '<ul>';
        for ($i = 0; $i < 10; $i++) {
            $result .=
                '<li>' .
                $this->string[$i] .
                '</li>';
        }
        $result .= '</ul>';
        return $result;
    }

}
