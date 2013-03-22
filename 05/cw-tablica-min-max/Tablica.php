<?php

namespace Gajdaw\Util;

class Tablica
{
    private $items;

    public function __construct($a = null)
    {
        if (isset($a)) {
            $this->setItems($a);
        }
    }

    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getMin()
    {
        if (count($this->items) == 0) {
            return false;
        }

        $min = $this->items[0];
        for ($i = 0; $i < count($this->items); $i++) {
            if ($this->items[$i] < $min) {
                $min = $this->items[$i];
            }
        }
        return $min;
    }

    public function getMinMax()
    {
        if (count($this->items) == 0) {
            return false;
        }

        $min = $this->items[0];
        $max = $this->items[0];

        for ($i = 0; $i < count($this->items); $i++) {
            if ($this->items[$i] < $min) {
                $min = $this->items[$i];
            }
            if ($this->items[$i] > $max) {
                $max = $this->items[$i];
            }
        }
        return array(
            'min' => $min,
            'max' => $max
        );

    }

}



//        throw new \RuntimeException('Not implemented yet');