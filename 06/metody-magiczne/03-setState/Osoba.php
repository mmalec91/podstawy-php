<?php

class Osoba
{
    private $imie;
    private $nazwisko;
    private $wiek;

    public function getImie()
    {
        return $this->imie;
    }

    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    public function getWiek()
    {
        return $this->wiek;
    }

    public function __construct($options = null, $nazwisko = null, $wiek = null)
    {
         if (is_string($options)) {
             $this->imie = $options;
             if (is_string($nazwisko)) {
                 $this->nazwisko = $nazwisko;
             }
             if (is_integer($wiek)) {
                 $this->wiek = $wiek;
             }
         } else if (is_array($options)) {

             // Czy w tablicy $options jest zawarte imie?
             // Je¶li tak, to przepisz je do sk³adowej imie
             if (isset($options['imie'])) {
                 $this->imie = $options['imie'];
             }

             // Czy w tablicy $options jest zawarte nazwisko?
             // Je¶li tak, to przepisz je do sk³adowej nazwisko
             if (isset($options['nazwisko'])) {
                 $this->nazwisko = $options['nazwisko'];
             }

             // Czy w tablicy $options jest zawarty wiek?
             // Je¶li tak, to przepisz go do sk³adowej wiek
             if (isset($options['wiek'])) {
                 $this->wiek = $options['wiek'];
             }
         }
    }

    public function __toString()
    {
        //return $this->imie . ' ' . $this->nazwisko;
        return implode(' ', (array)$this);
    }

    public static function __set_state($tablica)
    {
        $obj = new Osoba();
        $obj->imie = $tablica['imie'];
        return $obj;
    }

}