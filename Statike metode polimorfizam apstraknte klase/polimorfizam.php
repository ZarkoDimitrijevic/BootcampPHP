<?php

abstract class Student
{
    protected $ime;
    protected $brojOsvojenihESPB;
    protected $prosecnaOcena;

    public function __construct($ime, $brojESPB, $prosecnaOcena)
    {
        $this->ime = $ime;
        $this->brojOsvojenihESPB = $brojESPB;
        $this->prosecnaOcena;
    }
    
    public function ispis()
    {
        echo $this->ime . $this->$brojOsvojenihESPB . $this->prosecnaOcena;
    }

    public abstract function skolarina($brojPrijavljenihESPB);//zanimljivo, dajemo parametar koji je van klase

    public abstract function prijavaIspita();//obavezno idu tacka zarezab
}

class SamofinansirajuciStudent extends Student
{
   //posto nema novih polja, ne treba ti konstruktor !!!!!!!!

    public function skolarina($brojPrijavljenihESPB)//i parametar mora isto da se zove
    {
        if($this->prosecnaOcena<8)
        {
            return 1900*$brojPrijavljenihESPB;
        }
        else
        {
            return 1600*$brojPrijavljenihESPB;
        }
    }

    public function prijavaIspita()
    {
        return 400;
    } 

}

class BudzetskiStudent extends Student
{
    //posto nema novih polja ne treba ti novi konstruktor

    public function skolarina($brojPrijavljenihESPB)
    {
        if($this->prosecnaOcena<8)
        {
            return (300-$this->brojOsvojenihESPB)*2000;
        }
    }

    public function prijavaIspita()
    {
        return 100;
    } 
}

$s1 = new SamofinansirajuciStudent('Pera', 50, 8.49);
echo $s1->skolarina(60); 
echo "<br>";
echo $s1->prijavaIspita();
echo "<br>";

//$s0 = new Student('neko', 50, 6) //ovo ne moze jer je klasa Student abstraktna


?>