<?php
class Automobil {
    private $boja;
    private $tip;
    
    //Konstruktor se poziva samo jednom prilikom kreiranja novog objekta
    /*vrlo je vazno da i u konstruktoru ide preko setera jer onda u seteru mozes da napises neka pravila 
    o postavljanju, recimo da ne dozvolis broj karaktera ili nesto drugo sto se proverava unetu
    vrednost i na serveru*/
    public function __construct($tip, $boja) {
        $this->setTip($tip);
        $this->setBoja($boja);//$this->boja = $boja;
    }
    
    public function getTip() {
        return $this->tip;
    }

    public function getBoja() {
        return $this->boja;
    }

    public function setTip($tip) {
        $this->tip=$tip;
    }

    public function setBoja($boja) {
        $this->boja=$boja;
    }

    public function ispisi() {
        echo "Automobil tipa " . $this->tip . " boje " . $this->boja;
    }

}

$auto1 = new Automobil('karavan', 'crvena');
echo "<p>" . $auto1->ispisi() . "</p>";

$a1=new Automobil("kabriolet", "crvena");
$a2=new Automobil("sedan", "plava");
$a3=new Automobil("karavan", "teget");
$a4=new Automobil("kombi", "zut");
$a5=new Automobil("limo", "crvena");

$nizAutomobila = array($a1, $a2, $a3);
foreach($nizAutomobila as $auto) {
   echo "<p>" . $auto->ispisi() . "</p>";
}

$nizAutomobila[] = $a4;
$nizAutomobila[] = $a5;
var_dump($nizAutomobila);

foreach($nizAutomobila as $auto) {
    echo "<p>" . $auto->getTip() . "</p>";
}

//ispis automobila iz niza koji je crvene boje
foreach($nizAutomobila as $auto) {
    if($auto->getBoja()=="crvena") {
        echo "<p>" . $auto->ispisi() . "</p>";
    }
}



?>