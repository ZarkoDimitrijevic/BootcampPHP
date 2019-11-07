<?php
require_once ('zaposleni.php');

class Osoba 
{
    private $ime;
    private $prezime;
    private $godinaRodjenja;

    public function __construct($i, $p, $gr)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setGodinaRodjenja($gr);
    }

    public function setIme($n) 
    {
        $this->ime = $n;
    }

    public function setPrezime($n)
    {
        $this->prezime = $n;
    }

    public function setGodinaRodjenja($n)
    {
        $this->godinaRodjenja = $n;
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function getPrezime()
    {
        return $this->prezime;
    }

    public function getGodinaRodjenja()
    {
        return $this->godinaRodjenja;
    }

    public function ispisiOsobu()
    {
        echo "Osoba " . $this->getIme() . " " . $this->getPrezime() . " je rodjena " . $this->getGodinaRodjenja();
    }
}

?>