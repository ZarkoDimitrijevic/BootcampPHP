<html>
    <head>
        <style>

        </style>
    </head>
<body>
<?php
//Zadatak
echo "<h1>Zadaci sa If naredbom</h1>";

$bojaKose = "crna";
$visina = 180;

echo "Moja boja kose je $bojaKose, a visina je $visina.";//kod dvostrukih navodnika promenljive su promenljive za razliku od jednostrukih navodnika gde oni ne prepoznaju promenljive.
echo 'Moja boja kose je $bojaKose, a visina je $visina.<br>';

//elseif se ispituje ako prvi uslov nije zadovoljen. Ako je prvi if zadovoljen, onda ne dolazi do elseifa.

//Zadatak
$broj = 13;
if($broj<10) {
    echo "<p>Prva desetica</p><br>";
} elseif($broj<20) {
    echo "<p>Druga desetica</p><br>";
} else {
    echo "<p>Broj je veci od 20</p><br>";
}
//drugi nacin
if($broj>=20){
    echo "<p>Broj je veci od 20</p><br>";
} elseif($broj>=10) {
    echo "<p>Druga desetica</p><br>";
} else {
    echo "<p>Prva desetica</p><br>";
}



/*U odnosu na vrednost AM i PM sa svog racunara, ispisati da li je trenutno jutro ili podne.*/
date_default_timezone_set('Europe/Belgrade');
$vreme = date('A');
if($vreme == "AM") {
    echo "Sada je prepodne";
} else {
    echo "Sada je popodne";
}
echo "<br>";
/*Zadatak
Na osnovu broja poena upisi ocenu ucenika*/
$brojPoena = 85;
if($brojPoena<60) {echo "Ocena 6.<br>";}
elseif($brojPoena<70) {echo "Ocena 7.<br>";}
elseif($brojPoena<80) {echo "Ocena 8.<br>";}
elseif($brojPoena<90) {echo "Ocena 9.<br>";}
elseif($brojPoena<100) {echo "Ocena 10.<br>";}
else {echo "Student nije polozio!<br>";}

/*Zadatak
/*Napisi koji je dan u nedelji i ispitati da li je to radni dan ili neradni*/
$date = date('l');
if($date == "Monday") {echo "radni dan - Ponedeljak<br>";}
elseif($date == "Tuesday") {echo "radni dan - Utorak<br>";}
elseif($date == "Wednesday") {echo "radni dan - Sreda<br>";}
elseif($date == "Thursday") {echo "radni dan - Cetvrtak<br>";}
elseif($date == "Friday") {echo "radni dan - Petak<br>";}
elseif($date == "Saturday") {echo "vikend - Subota<br>";}
elseif($date == "Sunday") {echo "vikend - Nedelja<br>";}
else{echo"greska";}

$date1 = date('N');
if($date<=5) {echo "radni dan<br>";} else
{echo "vikend<br>";}

/*Zadatak ispitati i za do 12h ispisati dobro jutro, do 18h dobar dan, nadalje dobro vece*/
$vreme = date('H');
if($vreme<12) {echo "dobro jutro<br>";}
elseif($vreme<18) {echo "dobardan<br>";}
else {"dobrovece<br>";}

/*Zadatak Uporediti dva datuma i ispisati koji je od njih raniji*/
$date1 = strtotime("1980-6-24");
$date2 = strtotime("2019-10-16");
if($date2>$date1) {echo "bravo, drugi datum je veci<br>";}else{echo "nije veci drugi datum<br>";}

/*Zadatak Radno vreme programerske firme je od 9-17. uzeti vreme sa racunara i proveriti da li firma radi*/
$trenutnovreme = date('H');
if($trenutnovreme>9 && $trenutnovreme<17){echo "Firma radi";}else{echo "Firma ne radi!";}

var_dump($trenutnovreme);





?>



</body>

</html>