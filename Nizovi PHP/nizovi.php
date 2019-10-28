<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
    <h1>Nizovi u PHPu</h1>
<?php
    $imena = array("Ivana", "Mila", "Marta", "Ana");
    echo $imena[0] . "<br>";
    echo $imena[2] . "<br>";

    $prezimena = array("Ivanic", "Milic", "Martic", "Anic", "Markovic");
    echo $prezimena[2] . "<br>";

    //funkcija count() broji elemente u nizu

    $brojImena = count($imena);
    echo "<p>$brojImena</p>";
    $brojPrezimena = count($prezimena);
    echo "<p>$brojPrezimena</p>";

    for($i=0; $i<$brojImena; $i++) {//necemo u for petlji da ide <= jer krecemo od 0 i onda mora uvek da stoji manje
        echo "<p>" . $imena[$i] . "</p>";
    }

    for($i=0; $i<count($prezimena); $i++) {
        echo "<p>" . $prezimena[$i] . "</p>";
    }

//ZADATAK 2
echo "ZADATAK 2 <br> Odrediti zbir elemenata celobrojnog niza.<br>";
$brojevi = array(15, -5, 6, 9, 7, 8, -10);
$zbir=0;
for($i=0; $i<count($brojevi); $i++) {
    $zbir = $zbir + $brojevi[$i];
}
echo "<p>$zbir</p>";

//ZADATAK 3
echo "ZADATAK 3<br>Odrediti srednju vrednost elemenata celobrojnog niza<br>";
$brojevi = array(1,2,3,4,5);
$suma=0;
for($i=0; $i<count($brojevi); $i++) {
    $suma = $suma + $brojevi[$i];
}
echo $srVrednost=$suma/count($brojevi) . "<br>";

//ZADATAK 4
echo "ZADATAK 4<br>Odrediti max vrednost u celobrojnom nizu<br>";
$brojevi = array(0,1,2,3,4,5,6,7,8,9,10);
echo $maxValue = max($brojevi) . "<br>";

$maks = $brojevi[0]; //ovo je pretpostavka da bi imao sa cim da ispitujes
for($i=0; $i<count($brojevi); $i++) {
    if($brojevi[$i]>$maks) {
        $maks = $brojevi[$i];
    }
}
echo $maks . "<br>";

//ZADATAK 5
echo "ZADATAK 5<br>Odrediti min vrednost u celobrojnom nizu<br>";
$brojevi = array(10, 11, 12);
echo $minValue = min($brojevi) . "<br>";

$minVrednost = $brojevi[0];
for($i=0; $i<count($brojevi); $i++) {
    if($brojevi[$i]<$minVrednost) {
        $minVrednost = $brojevi[$i];
    }
}
echo $minVrednost . "<br>";

//ZADATAK 6 II-2
echo "ZADATAK 6 II-2<br>Odrediti index najveceg elementa u celobrojnom nizu.<br>";
$brojevi = array(0,1,2,3,4);
$najvElement = $brojevi[1];
for($i=0; $i<count($brojevi); $i++) {
    if($brojevi[$i]>$najvElement) {
        $index=$i;        
    }
}
echo $index . "<br>";

//ZADATAK 7 II-3
echo "ZADATAK 7 II-3<br>Odrediti broj elemenata niza koji su veci od srednje vrednosti.<br>";
$brojevi = array(0,1,2);
$suma = 0;
for($i=0; $i<count($brojevi); $i++){
    $suma = $suma + $brojevi[$i];
}
$arSredina = $suma / count($brojevi);

$brBrojeva=0;
for($i=0; $i<count($brojevi); $i++) {
    if($arSredina<$brojevi[$i]){
        $brBrojeva++;
    }
}
echo $brBrojeva . "<br>";

//ZADATAK 8 II-4
echo "ZADATAK 8 II-4<br>Izracunati zbir pozitivnih elemenata celobrojnog niza.<br>";
$niz = array(-1,-2,-3,0,10,10,10);
$suma=0;
for($i=0; $i<count($niz); $i++) {
    if($niz[$i]>0) {
        $suma = $suma + $niz[$i];
    }
}
echo $suma . "<br>";

//ZADATAK 9 II-5
echo "ZADATAK 9 II-5<br>Odrediti broj parnih elemenata u celobrojnom nizu<br>";
$niz = array(1,2,3,4,5,6,7,8,9);
$brElemenata = 0;
for($i=0; $i<count($niz); $i++){
    if($niz[$i]%2==0) {
        $brElemenata++;
    }
}
echo $brElemenata . "<br>";

//ZADATAK 10 II-6
echo "ZADATAK 10 II-6<br>Izracunati sumu elemenata u nizu sa parnim indeksom";
$niz = array(0,1,2,3,4,5,6);
$suma=0;
for($i=0; $i<count($niz); $i++) {
    if($i%2==0) {
        $suma = $suma+$niz[$i];
    }
}
echo $suma . "<br>";

//ZADATAK 11 III-2
echo "ZADATAK 11 III-2<br>Promeniti znak svakom elementu celobrojnog niza.<br>";
$niz = array(-1,-2,-3,-4,-5,0,1,2,3,4,5);
for($i=0; $i<count($niz); $i++) {
    $niz[$i] = $niz[$i] * -1;
}
for($i=0; $i<count($niz); $i++) {
    echo $niz[$i] . ", ";
}
echo "<br>";

//ZADATAK 12 III-3
echo "ZADATAK 12 III-3<br>Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom<br>";
$niz = array(-1,-2,-3,-4,-5,0,1,2,3,4,5);
for($i=0; $i<count($niz); $i++) {//ovaj zadatak moze da se uradi i sa korakom 2 jer krecemo od 0, a recimo ako hocemo neparne, krenes od 1 a ne od 0 i opet dobijes to sto treba
    if($i%2==0) {//umesto ovako if u ifu mogli smo da kazemo if prvi uslov && drugi uslov
        if($niz[$i]%2!=0) {
            $niz[$i] = $niz[$i]*-1;
        }
    }
}
for($i=0; $i<count($niz); $i++) {
    echo $niz[$i] . ", ";
}
echo "<br>";

//funkcija za ispis niza
function ispis($niz) {
    for($i=0; $i<count($niz); $i++) {
        echo $niz[$i]. ", ";
    }
}

ispis($niz);
echo "<br>";

//ZADATAK 13 III-4
echo "ZADATAK 13 III-4<br>Odrediti broj parnih elemenata sa neparnim indeksom<br>";
$niz = array(-1,-2,-36,-4,-5,-6,0,1,2,3,4,5);
$brojac=0;
for($i=0; $i<count($niz); $i++) {
    if($i%2!=0){
        if($niz[$i]%2==0) {
            $brojac++;
        }
    }
}
echo $brojac . "<br>";

//ZADATAK 14 III-5
echo "ZADATAK 14 III-5<br>Ispisati duzinu svakog elementa u nizu stringova<br>";
$vozila = array("Fiat", "Mercedes", "Ferari", "Lamborgini", "Volvo", "SAAB", "Lada", "Opel", "Toyota");
for($i=0; $i<count($vozila); $i++) {
    echo $duzina = strlen($vozila[$i]) . ", "; //ispisuje duzinu stringa
}

echo "<br>";

//ZADATAK 15 IV-2
echo "<br>ZADATAK 15 IV-2<br>Odrediti element u nizu stringova sa najvecom duzinom.<br>";
$niz=array("Volvo", "AMG", "Lamborgini", "Mercedes", "Ferari", "Volkswagen", "Fiat");
$najduzi=$niz[0];
for($i=0; $i<count($niz); $i++) {
    if(strlen($niz[$i])>strlen($najduzi)) {
        $najduzi = $niz[$i];
    }
    elseif(strlen($niz[$i])==strlen($najduzi)) {
        $najduzi2 = $niz[$i];
    }    
}
echo "Element najvece duzine u nizu je: " . $najduzi . "<br>" . "drugi element iste duzine kao najduzi je $najduzi2";
echo "<br>";

//ZADATAK 16 IV-3
echo "<br>ZADATAK 16 IV-3<br>Odrediti broj elemenata u nizu stringova cija je duzina veca od 
prosecne duzine svih stringova u nizu<br>";
$niz=array("Volvo", "AMG", "Lamborgini", "Mercedes", "Ferari", "Volkswagen", "Fiat");
$brElemenata = 0;
$ukupnaDuzina = 0;
$brDuzih = 0;
for($i=0; $i<count($niz); $i++) {
    $ukupnaDuzina = $ukupnaDuzina + strlen($niz[$i]);
    $brElemenata++;
}
$prosecnaDuzina = $ukupnaDuzina/$brElemenata;

for($i=0; $i<count($niz); $i++) {
    if(strlen($niz[$i])>$prosecnaDuzina) {
        $brDuzih++;
    }
}
echo "Broj elemenata u nizu \$niz koji su duzi od prosecne duzine ($prosecnaDuzina) je $brDuzih";

//ZADATAK 17 IV-4
echo "<br>ZADATAK 17 IV-4<br>Odrediti broj elemenata u nizu stringova koji sadrze slovo 'a' ";
$niz=array("Volvo", "AMG", "Lamborgini", "Mercedes", "Ferari", "Volkswagen", "Fiat");
$brojac=0;
for($i=0; $i<count($niz); $i++){
    if(substr_count($niz[$i], "a")>0){
        $brojac++;
    }
}
echo "<br>Broj elemenata niza koji sadrze slovo 'a' je: $brojac<br>";

//drugi nacin, sa drugom funkcijom
$brojac1=0;
for($i=0; $i<count($niz); $i++) {
    if(strpos($niz[$i], 'a')>0) {//funkcija kaze od kog karaktera krece to sto si trazio, tako nesto
        $brojac1++;
    }
}
echo "<br>Broj elemenata niza koji sadrze slovo 'a' je: $brojac1<br>";

//ZADATAK 18 IV-5
echo "<br>ZADATAK 18 IV-5<br>Odrediti broj elemenata u nizu stringova koji pocinju slovom 'a' ili 'A'<br>";
$niz=array("Volvo", "AMG", "Lamborgini", "Mercedes", "Ferari", "Volkswagen", "Fiat");
$brojac=0;
for($i=0; $i<count($niz); $i++) {
    if(substr_compare($niz[$i], 'a', 0, 1, true)==0){
        $brojac++;
    }
}
echo "Broj elemenata u nizu koji pocinju slovom 'a' ili 'A' je: $brojac<br>";

//drugi nacin, sa drugom funkcijom
$brojanje=0;
for($i=0; $i<count($niz); $i++) {
    if(strpos($niz[$i], 'a')===0 || strpos($niz[$i], 'A')===0) {//mora tri znaka jednakosti
        $brojanje++;
    }
}
echo "Broj elemenata u nizu koji pocinju slovom 'a' ili 'A' je $brojanje<br>";

//ZADATAK 19 V-2
echo "<br>ZADATAK 19 V-2<br>Na osnovu celobrojnog niza formirati II niz koji sadrzi samo pozitivne brojeve<br>";
$a=array(-5,-4,-3,-2,-1,0,1,2,3,4,5);
$b=array();
for($i=0; $i<count($a); $i++) {
    if($a[$i]>0) {
        //$b=$b . ", " . $a[$i]; // proveriti da li ovo radi videti zasto ne radi, ne radi jer smo stavili b je array, a da smo stavili b je 0, radilo bi, a mozda i ne
        $b[] = $a[$i];
    }
}

ispis($b);


//ZADATAK 20
echo "<br>ZADATAK 20<br>Dati su nizovi a i b, formirati niz c ciji su elementi a[0], pa b[0] i tako redom<br>";
$a=array(-5,-4,-3,-2,-1,0,1,2,3,4,5);
$b=array(0,0,0,0,0,0,0,0,0,0,0);
$c=array();
$d=0;
for($i=0; $i<count($a); $i++) {
    $c[] = $a[$i];
    $c[] = $b[$i];
}
ispis($c);

//ZADATAK 21
echo "<br>ZADATAK 21<br>Dati su nizovi a i b, formirati c u kome se mnoze a i b<br>";
$a=array(-5,-4,-3,-2,-1,0,1,2,3,4,5);
$b=array(10,10,10,10,10,10,10,10,10,10,10);
for($i=0; $i<count($a); $i++) {
    $d[] = $a[$i] * $b[$i];
}
ispis($d);

//ZADATAK 22
echo "<br>ZADATAK 22<br>Na osnovu niza a formirati niz b po formuli b[i] je (a[i]+a[2n-1-i])/2,
odnosno, uparujemo prvi i poslednji <br>";
$a=array(1,2,3,4,5,6);
$b=array();
for($i=0; $i<count($a)/2; $i++) {
    $b[$i] = ($a[$i] + $a[(count($a)-1-$i)])/2;  
}
ispis($b);

//ZEZANJE
$niz1=array(1,2,3,4,5,6);
$niz2=array('a','b','c','d','e','f');
$c=0;
for($i=0; $i<count($niz1); $i++) {
    if(!$c) {
        $c = $niz1[$i]. $niz2[$i];
    }else {
    $c = $c . "," . $niz1[$i]. $niz2[$i];
    }
}
var_dump($c);

//ZEZANJE napraviti softver za razmestaj ucenika:
$numbers = array("volvo", "AMG", "starga", "12654");
//$numbers = range(1,8);
shuffle($numbers);

foreach ($numbers as $number) {
    echo "$number ";
}

?>

    </body>
</html>