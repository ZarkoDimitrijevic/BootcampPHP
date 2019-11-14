<?php



class ObicanKredit extends Kredit 
{
    public function __construct($gk, $o, $bg)//ovde sada uzimamo 3 polja, sto znaci da objekat izvedene klase pozivamo sa 3 a ne sa 4 parametra
    {
        parent::__construct($gk, $o, $bg, "Obican kredit");//cetvrto polje definisemo
    }

    public function mesecnaRata()
    {
        $kamata = $this->osnovica * $this->brGodina * $this->godKamata/100;
        return ($this->osnovica + $kamata) / ($this->brGodina * 12);
    }
}
?>