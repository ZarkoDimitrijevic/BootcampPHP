<?php
    class Pacijent {
        private $ime;
        private $visina;
        private $tezina;

        public function __construct($i=null, $v=null, $t=null) {
            $this->setIme($i);
            $this->setTezina($t);
            $this->setVisina($v);
            if($i===null || $v===null || $t===null){throw new Exception;}
        }

        public function setIme($n) {
            $this->ime = $n;
        }

        public function setVisina($n) {
            $this->visina = $n;
        }

        public function setTezina($n) {
            $this->tezina = $n;
        }

        public function getIme() {
            return $this->ime;
        }

        public function getVisina() {
            return $this->visina;
        }

        public function getTezina() {
            return $this->tezina;
        }

    }

    try{$pacijent1 = new Pacijent("Pera", 185, 85);}
    catch(Exception $e){echo "Morate uneti ime, visinu i tezinu!";}

    $pacijent2 = new Pacijent("Misa", 190, 90);
    $pacijent3 = new Pacijent("Rade", 170, 80);

    $pacijenti[] = $pacijent1;
    $pacijenti[] = $pacijent2;
    $pacijenti[] = $pacijent3;
    //$pacijenti = array($pacijent1, $pacijent2, $pacijent3); moze i ovako
    var_dump($pacijenti);

    function srednjaVisina($niz) {//posto je van klase, ne treba ti public
        $zbir=0;
        $brojac=0;
        foreach($niz as $pacijent) {
            $zbir = $zbir + $pacijent->getVisina();
            $brojac++;
            }
        return $srednjaVisina = $zbir/$brojac;
    }
    echo "<p>Srednja visina pacijenata je: " . srednjaVisina($pacijenti) . "</p>";

    function najmanjaTezina($niz) {
        $najmanjaTezina = $niz[0]->getTezina();//ili onako da pretpostavimo neki veliki broj
        foreach($niz as $pacijent) {
            if($pacijent->getTezina()<$najmanjaTezina) {
                $najmanjaTezina = $pacijent->getTezina();
            }
        }
        return $najmanjaTezina;
    }
    echo "<p>Najmanja tezina koju ima neki pacijent je " . najmanjaTezina($pacijenti) . "</p>";

    //najveca bmi vrednost je za domaci
    /*function najveciBmi($niz) {
        $bmi=array();
        $a=0;
        foreach($niz as $pacijent) {
            $a=$pacijent->getTezina()/($pacijent->getVisina()/100*$pacijent->getVisina()/100);
            $bmi[]= $a;
        }

        foreach($bmi as )
    }*/
    

    //ispisati sve pacijente cije ime sadrzi slovo a
    function ispisiImena($a) {
        foreach($a as $pacijent) {
            $tekuci = $pacijent->getIme();
            if(strpos($tekuci, "a")!==false) {
                echo $pacijent->getIme();
                echo "<br>";
            }
        }
    }
    ispisiImena($pacijenti);
    
?>