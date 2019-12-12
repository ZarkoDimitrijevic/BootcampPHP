<?php
class Vozilo {
    private $regBroj;
    private $tip;
/*
NIVOI PRISTUPA
 - public:  atributima i funkcijama mozemo pristupati i van klase preko objekta, naravno
 - private: atributima i funkcijama mozemo pristupati samo unutar klase
 - protected: atributima i klasama mozemo pristupati u klasi ali i child klasa (klase naslednice, izvedene klase) moze da pristupa istima
*/

    public function __construct($registracija=null, $tip=null) {
        $this->setRegBroj($registracija);
        $this->setTip($tip);
        if($registracija===null || $registracija===null){throw new Exception;}
    }

    public function setRegBroj($n) {
        $this->regBroj = $n;
    }

    public function setTip($n) {
        $this->tip = $n;
    }

    public function getRegBroj() {
        return $this->regBroj;
    }

    public function getTip() {
        return $this->tip;
    }

    public function ispisiVozilo() {
        echo "Registarski broj: " . $this->getRegBroj() . " tip vozila je " . $this->getTip();
    }
}


class DrumskaVozila extends Vozilo{
    private $brSedista;

    public function __construct($registracija, $tip, $brSedista) {
        parent::__construct($registracija, $tip);//pozivamo konstruktor nadklase
        $this->setBrSedista($brSedista);
    }
    
    public function setBrSedista($n) {
        $this->brSedista = $n;
    }

    public function getBrSedista() {
        return $this->brSedista;
    }

    public function ispisiDrumskoVozilo() {
        echo "Registarski broj je " . $this->getRegBroj() . 
             " tip vozila je " . $this->getTip() . 
             " a broj sedista je " . $this->getBrSedista();
    }
}

$vozilo1 = new Vozilo("ni-12345", "karavan");
$drumskoVozilo = new DrumskaVozila("ns-621523", "sedan", 5);
$drumskoVozilo->ispisiDrumskoVozilo();//nasledjuju se i sve funkcije koje postoje u nadklasi
echo "<hr>";
$drumskoVozilo->ispisiVozilo();

var_dump($vozilo1);
var_dump($drumskoVozilo);

class Vazduhoplov extends Vozilo{
    private $rasponKrila;

    public function __construct($registracija, $tip, $rasponKrila) {
        parent::__construct($registracija, $tip);
        $this->setRasponKrila($rasponKrila);
    }

    public function setRasponKrila($n) {
        $this->rasponKrila = $n;
    }

    public function getRasponKrila() {
        return $this->rasponKrila;
    }

    public function ispisiVazduhoplov() {
        echo $this->ispisiVozilo() . " sa rasponom krila " . $this->getRasponKrila();
        //pozvali smo funkciju iz parent klase
    }
}

$avion = new Vazduhoplov("ni-454545", "sirokotrupni", 40);
var_dump($avion);
$avion->ispisiVazduhoplov();
echo "<hr>";
$avion->ispisiVozilo();

class Avion extends Vazduhoplov{
    private $zemljaPorekla;

    public function __construct($registracija, $tip, $rasponKrila, $zemljaPorekla){
        parent::__construct($registracija, $tip, $rasponKrila);
        $this->setZemljaPorekla($zemljaPorekla);
    }

    public function setZemljaPorekla($n) {
        $this->zemljaPorekla = $n;
    }

    public function getZemljaPorekla() {
        return $this->zemljaPorekla;
    }

    public function ispisiAvion() {
        echo $this->ispisiVazduhoplov() . " a zemlja porekla je " . $this->getZemljaPorekla();
     
    }
}

$mlaznjak = new Avion("ni-155453", "mlaznjak", 35, "Srbija");
echo "<br>";
$mlaznjak->ispisiVozilo();
echo "<br>";
$mlaznjak->ispisiVazduhoplov();
echo "<br>";
$mlaznjak->ispisiAvion();


?>