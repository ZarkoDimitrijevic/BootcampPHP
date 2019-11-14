<?php
class AmortizovanKredit extends Kredit
{
    public function __construct($gk, $o, $bg)//ovde sada uzimamo 3 polja, sto znaci da objekat izvedene klase pozivamo sa 3 a ne sa 4 parametra
    {
        parent::__construct($gk, $o, $bg, "Amortizovani kredit");//cetvrto polje definisemo
    }

    public function mesecnaRata()
    {
        $mesecnaKamata = $this->godKamata / 12 / 100;
        $stepen = pow(1+$mesecnaKamata, $this->brGodina * 12);//pow($a, $b) to je $a na $b
        return ($this->osnovica * $mesecnaKamata * $stepen / ($stepen - 1));
    }
}


?>