<?php
echo "<h1>Zdravo<h1>"; //ispisuje se u posebnom redu jer je h1 blokovski element
echo "Zdravo Svete !!!";
echo "<br>";


//Dodela vrednosti promenljivama
$ime = "Jelena";
echo $ime;

$prvibroj = 5;//kad ne stavimo navodnike, prepoznaje ga kao broj, a kad stavimo navodnike, gleda ga kao tekst
$drugibroj = 3;
/*mozemo da koristimo aritmeticke operacije: 
sabiranje + 
oduzimmanje -
mnozenje *
deljenje / */

$zbir = $prvibroj + $drugibroj;
echo "<br> Zbir je:";
echo $zbir;


/*Zadatak 1.
Za uneto vreme u satima i minutima, izracunati koliko minuta je proslo od ponoci.
*/

$sati=0;
$minuti=0;
echo $razlika = $sati*60+$minuti . "<br>";

/*Zadatak 2.
Za uneto vreme u satima i minutima, izracunati koliko minuta je proslo od ponoci.*/

date_default_timezone_set('Europe/Belgrade');
echo $trenutnosati = date('G') . ":";
echo $trenutnominuta = date('i');


/*Ugradjena funkcija date()
'g' - 12 hour format (1-12)
'G' - 24 hour format (0-23)
'h' - 12 hour format (01-12)
'H' - 24 hour format (00-23)
'i' - Minutes with leading zeros (00-59)
*/

/*Zadatak 3.
Za unetu cenu robe, unetu novcanicu kojom kupac placa racun
ispisati koliki kusur kasirka treba da mu vrati*/

$cena_robe = 753;
$novcanica = 2000;
echo "<br>". $kusur = $novcanica-$cena_robe . " dinara"; //kontaktinacija, odnosno nadovezivanje sa tackom

$ime = "Jelena";
$prezime = "Matejic";
$godine = 24;

echo "<br>" . $ime . " " . $prezime . " " . $godine;


?>