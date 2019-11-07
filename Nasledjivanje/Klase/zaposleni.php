<?php

class Zaposleni extends Osoba
{
    private $plata;
    private $pozicija;

    public function __construct($i, $p, $gr, $pl, $po)
    {
        parent::__construct($i, $p, $gr);
        $this->setPlata($pl);
        $this->setPozicija($po);
        

    }

    public function setPlata($n)
    {
        $this->plata = $n;
    }

    public function setPozicija($n)
    {
        $this->pozicija = $n;
    }

    public function getPlata()
    {
        return $this->plata;
    }

    public function getPozicija()
    {
        return $this->pozicija;
    }

    public function ispisiZaposlenog()
    {
        echo $this->ispisiOsobu() . " " . $this->getPozicija() . " " . $this->getPlata();
    }

}


?>