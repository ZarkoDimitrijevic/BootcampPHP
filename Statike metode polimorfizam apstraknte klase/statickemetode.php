<?php
require_once 'klasaKredit.php';

$k1 = new Kredit(null, null, null, null);
$k1->stampa();

$k2 = new Kredit(25, 40000, 3, "kratkorocni");
$k2->stampa();

var_dump($k2);

/*Kredit::$podrazumevanaGodKamata = 20;//moguce ako je za static polje stavljen nivo pristupa public
//ovako menjas to polje, isto i kao bilo koje drugo, s tim sto je vezano za klasu a ne za objekat
//ne treba ti objekat da bi pristupao objektu.
echo "Podrazumevana godisnja kamata je " . Kredit::$podrazumevanaGodKamata;*/

Kredit::setPodrazumevanaGodKamata(31);
echo Kredit::getPodrazumevanaGodKamata();

echo "<br>";

Kredit::setPodosnovica(5);
echo Kredit::getPodosnovica();

echo "<br>";

echo "Broj izdatih kredita je " . Kredit::getBrojKredita();

$k3 = new ObicanKredit(25, 4000, 5);
$k3->stampa();
//echo $k3->mesecnaRata();

echo "<br>";

$k4 = new AmortizovanKredit(25, 4000, 5);
$k4->stampa();
//echo $k4->mesecnaRata();

$k5 = new StambeniKredit(10, 100000, 5);
//echo $k5->mesecnaRata();



$nizKredita = array($k2, $k3, $k4, $k5);//niz od 3 vrste kredita
foreach($nizKredita as $kredit)
{
    //echo "<br>" . $kredit->mesecnaRata() . "<br>";
    $kredit->stampa();
    $zbir = $zbir + $kredit->mesecnaRata();
    echo "<br>";
}




?>