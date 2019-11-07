<!DOCTYPE html>
<html>
    <head>
        <title>Objektno orjentisano</title>
        <style>
            img {width:100%;
                height:250px;}
            
            .grupa {width:100%;
                    display: flex;
                    flex-direction:row;
                    justify-content: flex-start;
                    align-items: center;
                    margin:5px;}
            .slika {width:20%;}
            .tekst {width:200px;
                    margin:10px;}
        </style>
    </head>
    
    <body>
        <?php
        //PRIMER
            class Auto {//preporuka je da imena klasa uvek pocinju velikim slovom
                private $marka; //za pocetak se koristi var, ali kasnije ce se to izbaciti zbog nivoa pristupa
                private $boja = 'white';
                private $imaKrov = true;

                public function sviraj () {
                    echo "Beep! Beep!<br>";
                }

                public function vozi() {
                    echo "<br>Vozimo automobil " . $this->marka . " koji je " . $this->boja . " boje";
                    if($this->imaKrov===true) {
                        echo " i koji ima cvrsti krov.<br>";
                    }
                    else {echo " i koji ima pokretni krov.<br>";}
                }
                
                public function audi() {
                    if(substr($this->marka, 0, 4)==='Audi') {
                        echo "<p>Bravo, nasao si Audi!</p>";
                    }
                }

                public function setMarka($a) {
                    $this->marka = $a;
                }

                public function setBoja($a) {
                    $this->boja = $a;
                }

                public function setImaKrov($a) {
                    $this->imaKrov = $a;
                }
            }
            /*Funkcija substr() ima 3 parametra. 1. je odakle vadimo to sto nam treba, neki niz.
            2. parametar je pozicija odakle pocinjemo, dakle od 0 do duzine-1;
            3. parametar je duzina podstringa koji hocemo da uzmemo.
            Ova metoda uvek vraca string*/

            $auto1 = new Auto;
            $auto2 = new Auto;

            /*$auto1->marka = "BMW";
            $auto2->marka = "audi";
            $auto1->boja = "blue";
            $auto2->boja = "red";
            $auto1->imaKrov = "false";*/
            $auto1->setMarka("BMW");
            $auto1->setBoja("blue");
            $auto1->setImaKrov(false);

            $auto2->setMarka("audi");
            $auto2->setBoja("red");
            $auto2->setImaKrov(true);

            $auto1->sviraj();
            $auto2->sviraj();
            $auto2->audi(); //ovo ne radi, videti zasto

            
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

            var_dump($auto1);
            var_dump($auto2);
            $auto1->vozi();
            $auto2->vozi();

        //PRIMER 2
        
        class Film{
            private $naslov;
            private $reziser;
            private $godinaIzdanja;
            private $slika;

            public function __construct($n, $r, $g, $s) {
                $this->setNaslov($n);
                $this->setReziser($r);
                $this->setGodinaIzdanja($g);
                $this->setSlika($s);
            }
            
            public function stampaj() {
                echo "<div class='grupa'><div class='slika'><img src='$this->slika' alt=$this->naslov></div>";
                echo "<div class='tekst'>Naslov filma: " . $this->naslov . "<br>Reziser: " . $this->reziser . " <br>Premijera: " . $this->godinaIzdanja . ".</div></div>";
            }

            public function setNaslov($a) {
                $this->naslov = $a;
            }

            public function setReziser($a) {
                $this->reziser = $a;
            }

            public function setGodinaIzdanja($a) {
                $this->godinaIzdanja=$a;
            }

            public function setSlika($a) {
                    $this->slika=$a;
            }
        }

        $film1 = new Film("Varljivo leto 1968", "Goran Paskaljevic", 1984, "varljivoleto.jpg");
        $film2 = new Film("Zikin Dinastija", "Zoran Calic", 1985, "zikinadinastija.jpg");
        $film3 = new Film("Radovan III", "Ljubomir Draskic", 1983, "radovan3.jpg");


        /*$film1->setNaslov("Varljivo leto 1968");
        $film1->setReziser("Goran Paskaljevic");
        $film1->setGodinaIzdanja("1984");
        $film1->setSlika("varljivoleto.jpg");

        $film2->setNaslov("Zikina Dinastija");
        $film2->setReziser("Zoran Calic");
        $film2->setGodinaIzdanja("1985");
        $film2->setSlika("zikinadinastija.jpg");

        $film3->setNaslov("Radovan III");
        $film3->setReziser("Ljubomir Draskic");
        $film3->setGodinaIzdanja("1983");
        $film3->setSlika("radovan3.jpg");*/

        $film1->stampaj();
        $film2->stampaj();
        $film3->stampaj();

        //PRIMER 3
        class Pacijent {
            private $ime;//moze private ili public, a kad definises promenljive, moze samo var i to se podrazumeva da je public
            //private i public ti se koristi da vidis ili ne vidis nesto izvan klase. Private ne vidi nista izvan klase, bez obzira sto ga pozivas na objektu. Dok public mozes da pozivas na objektu.
            private $visina;
            private $tezina;

            public function __construct($i=null, $v=null, $t=null) {//konstruktor uvek ovako zove i ovako zapisuje, a zapravo dodeljuje promenljive novom objektu, odnosno kazes da kad se formira novi objekat mora odmah da taj new Object(ima promenljive)
                //kad stavis ovo 0 to ti znaci setujes default vrednost, ili dole pises if pa ako je nesto onda 0 ili nesto drugo
                $this->setIme($i);
                $this->setVisina($v);
                $this->setTezina($t);
                if($t==null) {throw new Exception;}
                /*ne dozvoljava throw ako nema dovoljno parametara, zato moras da imas
                sve parametre, pa da definises da ako je neki null, onda greska i na taj
                nacin nateras korisnika da ima sve uneto*/
            }

            public function Stampaj() {
                echo "<p>Pacijent " .  $this->ime  . " je visine " . $this->visina . " i tezak je " . $this->tezina . " kilograma.</p>";
            }

            public function Bmi() {
                $bmi = $this->tezina/($this->visina/100)**2;
                return $bmi;
            }

            public function Kritican() {
                if($this->Bmi()<15 || $this->Bmi()>40) {return true;}
                else{return false;}
            }

            public function StampajBmi() {
                if($this->Kritican()==true) {echo "BMI pacijenta je Kritican!";}
                else{odlican();/*echo "BMI pacijenta je Odlican!";*/}
            }

            public function setIme($a) {//ovakve metode se zovu seteri jer definisu polje, pa se preporucuje da ime pocne sa set
                $this->ime=$a;
            }

            public function getIme() {
                return $this->ime;
            }

            public function setVisina($a) {
                if($a>=0 && $a<=250) {
                    $this->visina = $a;
                }elseif ($a<0) {
                    $this->visina = 0;
                }else {$this->visina=250;}
            }

            public function getVisina() {
                return $this->visina;
            }

            public function setTezina($t) {
                if($t<0){$this->tezina = 0;}
                elseif($t<=550) {
                    $this->tezina = $t;}
                else{$this->tezina=550;}
            }

            public function getTezina(){
                return $this->tezina;
            }
        }

        function odlican() {echo "Odlican je pacijent i funkcija radi u okviru klase";}
        /*funkciju mozemo pozivati i u okviru klase, mozemo je pozvaati bilo gde, sto ne vazi za metodu.
        Metoda moze da se poziva samo u okviru klase, a ako hoces spolja da je pozoves, to mora da uradi
        taj objekat koji si napravio.*/


      /*  $pacijent1 = new Pacijent;
        //$pacijent1->ime = "neko";
        $pacijent1->setIme("neko");
        $pacijent1->setVisina("230");
        $pacijent1->setTezina("121");

        if($pacijent1->kritican()==true){echo "Pacijent " . $pacijent1->getIme() . " ima kritican bmi.";}
        else {echo "Pacijent " . $pacijent1->getIme() . " nema kritican bmi.";}
/*da smo u funkciji napisali echo umesto return, u ovom slucaju, prvo se ispisuje echo iz funkcije. Zasto?
Prvo se ispisuje ono sto je sa desne strane, jer kod obicnog =, koji pretstavlja dodeljivanje vrednosti,
prvo se racuna sve sto je sa desne strane i onda se dodeljuje levoj, odnosno leva se izvrsava.
U konkretnom slucaju, ti imas "Pacijent", sto je string, onda pozivas funkciju koja u sebi ima echo,
sto znaci prvo ce se to napisati, pa opet string "ima/nema kritican bmi", i tek kad i to procita,
on hoce da ispuni levi echo.*/
        /*$pacijent2 = new Pacijent;
        //$pacijent2->ime = "neko2";
        $pacijent2->setIme("neko1");
        $pacijent2->setVisina("231");
        $pacijent2->setTezina("122");

        $pacijent3 = new Pacijent;
        //$pacijent3->ime = "neko3";
        $pacijent3->setIme("neko2");
        $pacijent3->setVisina("232");
        $pacijent3->setTezina("123");

        $pacijent4 = new Pacijent;
        $pacijent4->setIme("neko4"); //uvek se pozivaju funkcije sa strelicom, kad stavis = on trazi funkciju van klase
        $pacijent4->setVisina(235);
        
        $pacijent5 = new Pacijent;
        $pacijent5->setIme("neko5");*/

        $pacijent6 = new Pacijent ("Pera", 150, 4);
        echo $pacijent6->getIme();

//EXEPTIONS:
         
        try{$pacijent8 = new Pacijent();}
        catch(Exception $e) {echo "Desila se greska!";}
        //proveri imas metodu i getMessage();
        
        //$pacijent9 = new Pacijent();

/*
ENKAPSULACIJA - Prvi princip objetknog programiranja (postoje nivoi pristupa poljima i metodama: public/private);
*/

        /*$pacijent1->Stampaj();
        $pacijent1->StampajBmi();
        $pacijent2->Stampaj();
        $pacijent2->StampajBmi();
        $pacijent3->Stampaj();
        $pacijent3->StampajBmi();*/


        ?>

    </body>
</html>