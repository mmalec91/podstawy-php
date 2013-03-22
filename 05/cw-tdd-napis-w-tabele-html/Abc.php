<?php

namespace Janek\Util;

class Abc
{
    private $string;

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

    public function getString()
    {
        return $this->string;
    }




}


//throw new \RuntimeException('Not implemented yet');
