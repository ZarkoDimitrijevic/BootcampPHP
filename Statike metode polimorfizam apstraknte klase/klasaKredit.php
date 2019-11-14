<?php
require_once 'klasaObicanKredit.php';
require 'amortizovanKredit.php';
require_once 'stambeniKredit.php';

class Kredit
{
    protected $godKamata;
    protected $osnovica;
    protected $brGodina;
    protected $tip;
    private static $podosnovica=1;
    private static $podrazumevanaGodKamata=30;
    private static $brojKredita=0;
    /*staticka promenljiva znaci da se ona ne pripisuje objektu, vec klasi. U objektu imamo sve promenljive,
    a staticka promenljiva znaci da je to u klasi, znaci klasa pravi objetke kojima se nesto podrazumeva,
    kao kad fabrika pravi mecku odredjenog tipa, unutra razlicita sedista, motori, felne ... ali je karoseriaj
    svima ista.*/
    private const PODBRGOD = 5;
    //konstante nemaju dolar ispred imena i nemaju static
    //preporuka je da se nazivi konstanti pise velikim slovom
    //za konstantu je obavezno da se unese vrednost.

    public function __construct($gk, $o, $bg, $t)
    {
        $this->setGodKamata($gk);
        $this->setOsnovica($o);
        $this->setBrGod($bg);
        $this->setTip($t);
        self::$brojKredita++;
    }

    public function setGodKamata($n)
    {
        if($n>=0 && $n<=100)
        {
            $this->godKamata = $n;
        }
        else
        {
            //$this->godKamata = 30;
            $this->godKamata = Kredit::$podrazumevanaGodKamata;//ovako se pristupa statickom polju (naziv klase pa dve tacke)
            $this->godKamata = self::$podrazumevanaGodKamata;//ili sa kljucnom recju self
            //self radi i kod nasledjivanja, u izvedenim klasama kad se pozivas na self, one traze i staticka polja u parentu
            //SELF ne radi kada pozivas staticko polje VAN KLASE
        }
    }

    public function setOsnovica($n)
    {
        if($n>0)
        {
            $this->osnovica = $n;
        }
        else
        {
            $this->osnovica = 5000;
        }
    }

    public function setBrGod($n)
    {
        if($n>0)
        {
            $this->brGodina = $n;
        }
        else
        {
            $this->brGodina = self::PODBRGOD;
        }
    }

    public function setTip($n)
    {
        $this->tip = $n;
    }

    public function stampa()
    {
        echo "<p>Kredit: $this->tip,
            godisnja kamata: $this->godKamata, 
            osnovica: $this->osnovica,
            godina otplate: $this->brGodina,
            mesecna rata: " . $this->mesecnaRata() . "</p>";
    }

    public static function getPodrazumevanaGodKamata()
    /*mora da bude static da bismo mogli da je koristimo van objekta. 
    Da nema static, morali bismo da pravimo objekat, pa onda nad objektom da pozivamo ovu metodu.
    Sa static smo rekli nije ovo metoda objekta, vec metoda klase*/
    {
        return self::$podrazumevanaGodKamata;
    }

    public static function setPodrazumevanaGodKamata($n)
    {
        if($n>=20 && $n<=100)
        {
            self::$podrazumevanaGodKamata = $n;
        }
    }

    public static function getPodosnovica()
    {
        return self::$podosnovica;
    }
    public static function setPodosnovica($n)
    {
        if($n>0 && $n<20)
        {
            self::$podosnovica = $n;
        }
    }
    public static function getBrojKredita()
    {
        return self::$brojKredita;
    }

    public function mesecnaRata()
    {
        return 100;
    }

    
}

?>