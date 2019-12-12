<?php
/*
            Znaci klasa je u stvari kalup za ormar, sa odredjenim pregradama. 
            Kada napravimo new (naziv klase) napravili smo novi ormar.
            Svaka od pregrada ormara ima svoj naziv, i mi mozemo da pregrade punimo vrednostima i da pozivamo 
            vec stavljene funkcije u pregradu. Mozemo praviti neograniceni broj ormara koji su isti ali imaju
            razlicite stvari na pregradama. Ako definisemo neke vrednosti u klasi, onda kad napravimo ormar, 
            on je vec napunjen tim defaultnim vrednostima.

            U klasi funkcija mogu funkcije da cupaju podatke van sebe ali samo u okviru klase, preko onog $this. 
            Kod funkcija van klase, one ne mogu da cupaju podatke van sebe, vec samo u okviru sebe sto im je definisano
            ili prosledjeno.
            */

/*
ENKAPSULACIJA - Prvi princip objetknog programiranja (postoje nivoi pristupa poljima i metodama: public/private);
*/


class Automobil {//preporuka je da imena klasa uvek pocinju velikim slovom
    private $boja;//za pocetak se koristi var, ali kasnije ce se to izbaciti zbog nivoa pristupa
    private $tip;//moze private ili public, a kad definises promenljive, moze samo var i to se podrazumeva da je public
    //private i public ti se koristi da vidis ili ne vidis nesto izvan klase. Private ne vidi nista izvan klase, bez obzira sto ga pozivas na objektu. Dok public mozes da pozivas na objektu.
    
    //Konstruktor se poziva samo jednom prilikom kreiranja novog objekta
    /*vrlo je vazno da i u konstruktoru ide preko setera jer onda u seteru mozes da napises neka pravila 
    o postavljanju, recimo da ne dozvolis broj karaktera ili nesto drugo sto se proverava unetu
    vrednost i na serveru*/
    public function __construct($tip=null, $boja) {//konstruktor uvek ovako zove i ovako zapisuje, a zapravo dodeljuje promenljive novom objektu, odnosno kazes da kad se formira novi objekat mora odmah da taj new Object(ima promenljive)
        //$tip=0 kad stavis ovo 0 to ti znaci setujes default vrednost, ili dole pises if pa ako je nesto onda 0 ili nesto drugo
        $this->setTip($tip);
        $this->setBoja($boja);//$this->boja = $boja;
        if($tip==null) {throw new Exception;}
                /*ne dozvoljava throw ako nema dovoljno parametara, zato moras da imas
                sve parametre, pa da definises da ako je neki null, onda greska i na taj
                nacin nateras korisnika da ima sve uneto*/
    }
    
    public function getTip() {
        return $this->tip;
    }

    public function getBoja() {
        return $this->boja;
    }

    public function setTip($tip) {//ovakve metode se zovu seteri jer definisu polje, pa se preporucuje da ime pocne sa set
        $this->tip=$tip;
    }

    public function setBoja($boja) {
        $this->boja=$boja;
    }

    public function ispisi() {
        echo "Automobil tipa " . $this->tip . " boje " . $this->boja;
    }

}

/*Funkcija substr() ima 3 parametra. 1. je odakle vadimo to sto nam treba, neki niz.
            2. parametar je pozicija odakle pocinjemo, dakle od 0 do duzine-1;
            3. parametar je duzina podstringa koji hocemo da uzmemo.
            Ova metoda uvek vraca string*/

/*funkciju mozemo pozivati i u okviru klase, mozemo je pozvaati bilo gde, sto ne vazi za metodu.
Metoda moze da se poziva samo u okviru klase, a ako hoces spolja da je pozoves, to mora da uradi
taj objekat koji si napravio.*/

try{$auto1 = new Automobil('karavan', 'crvena');}
    catch(Exception $e) {echo "Desila se greska!";}

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
    echo "<p>" . $auto->getTip() . "</p>";//uvek se pozivaju funkcije sa strelicom, kad stavis = on trazi funkciju van klase
}

//ispis automobila iz niza koji je crvene boje
foreach($nizAutomobila as $auto) {
    if($auto->getBoja()=="crvena") {
        echo "<p>" . $auto->ispisi() . "</p>";
    }
}



?>