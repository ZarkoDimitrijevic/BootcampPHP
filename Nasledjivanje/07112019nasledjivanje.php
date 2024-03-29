<?php
/*
NIVOI PRISTUPA
 - public:  atributima i funkcijama mozemo pristupati i van klase preko objekta, naravno
 - private: atributima i funkcijama mozemo pristupati samo unutar klase
 - protected: atributima i klasama mozemo pristupati u klasi ali i child klasa (klase naslednice, izvedene klase) moze da pristupa istima
*/

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

$o1 = new Osoba("Ana", "Peric", 1973);
$o1->ispisiOsobu();
$z = new Zaposleni("Mika", "Mikic", 1981, 50000, "saradnik");
echo "<br>";
$z->ispisiOsobu();
echo "<br>";
echo $z->getPlata() . " " . $z->getPozicija();
echo "<br>";
$z->ispisiZaposlenog();
echo "<br>";
$z2 = new Zaposleni("Pika", "Pikic", 1956, 60000, "ekonomista");

function zaposleniEkonomista($n) 
{
    if($n->getPozicija() == "ekonomista") 
    {
        $n->ispisiZaposlenog();
        echo "<p>Zaposleni je ekonomista!</p>";
    }
    else
    {   
        $n->ispisiZaposlenog();
        echo "<p>Zaposleni nije ekonomista!</p>";
    }
}
zaposleniEkonomista($z2);
zaposleniEkonomista($z);

$nizRadnika= array($z, $z2);

function prosecnaPlata($niz)
{
$suma=0;
foreach($niz as $radnik)
{
    $plataRadnika = $radnik->getPlata();
    $suma = $suma + $plataRadnika;
}

$prosecnaPlata = $suma/count($niz);
echo "Prosecna plata je: " . $prosecnaPlata . "<br>";
}

prosecnaPlata($nizRadnika);
$a = $z2->getIme();
var_dump($a);
$b = strrev($a);
var_dump($b);

function natprosecnaPlata($n, $prosecna)
{
    if($n->getPlata()>$prosecna)
    {
        return true;
    }
    else
    {
        return false;
    }
}

$prosecnaPlataRadnika = prosecnaPlata($nizRadnika);
natprosecnaPlata($z2, $prosecnaPlataRadnika);
var_dump(natprosecnaPlata($z2, $prosecnaPlataRadnika));
echo $z2->getPlata();

if(natprosecnaPlata($z2, $prosecnaPlataRadnika)==true)
{
    echo "<p>Radnik ima natprosecnu platu</p>";
}
else
{
    echo "<p>Radnik nema natprosecnu platu.</p>";
}


?>