<!DOCTYPE html>
<html>
<head>
    <style>
        table {width:276px;
                }
        td {width:30px;
            height:30px;}
        .paragraf {color:<?php boja('red'); ?>}
        
    </style>
</head>

<body>
    

<?php 
echo "<h1>Zadaci sa funkcijama</h1><br>";

//ime funkcije moze da pocinje slovom i donjom crtom, ali ne moze brojem
function mojaFunkcija($m)/*ovde definisemo naziv parametra*/ {
    echo "<br>Zdravo svete!<br>";
    $n=$m*10;
    echo "<br>".$n;
}
mojaFunkcija(1);/*ovde dajemo vrednost parametra. Ako si gore napisao da je parametar obavezan, onda ce javiti gresku ako ne stavis parametar.*/

?>

<a href="www.google.com">google</a>
<?php 
mojaFunkcija(1);
mojaFunkcija(1);
mojaFunkcija(1);
mojaFunkcija(1);
?>

<?php 
function drugaFunkcija($text) {
    echo "<p>$text</p>";
}
drugaFunkcija("<br>Druga funkcija<br>");
drugaFunkcija("Godisnje doba je jesen, ali je toplo kao da je prolece");
drugaFunkcija("Kako je ovo zanimljivo");

$a = "Danas je 24.10.2019.";
drugaFunkcija($a);


function korisnik($ime, $prezime) {
    echo "Korisnik: $ime $prezime"."<br>";
    echo "<p>Korisnik: $ime $prezime</p>";
}
korisnik("Ana", "Antic");
korisnik("Bojana", "Bokic");
korisnik("Vuk", "Vulic");

//novafunkcija
function gramatika($ime, $god) {
    if($god%10==1 && $god!=11){
        echo "<p>$ime ima $god godinu.</p>";
    }
    elseif($god%10>=2 && $god%10<=4 && $god!=12 && $god!=13 && $god!=14) {
        echo "<p>$ime ima $god godine.</p>";
    }
    else {echo "<p>$ime ima $god godina.</p>";}
}
gramatika("Ana", 101);
gramatika("Ficko", 60);
gramatika("Kec", 60);

function zbir($a, $b) {
    $rez = $a + $b;
    return $rez;//to je output funkcije, a mi smo morali da dole posaljemo parametre da bi izracunao nesto i onda kad posaljes parametre, funkcija izracuna i ima output
}
echo $rezultat = zbir(2,1);//$rezultat je promenljiva u kojoj se pamti rezultat poziva funkcije

function zbir4($a, $b) {
    $rez = $a + $b;
    return $rez;
}
$c = zbir4(2,3);
$d = zbir4(1,4);
echo "Funkcija zbir4, rezultat je" . zbir4($c, $d) . "<br>";
echo "Funkcija zbir4, rezultat je" . zbir4(zbir4(5,6), zbir4(7,8)); //vrlo zanimljivo


//napisati funkciju neparan koja za uneti ceo broj n vraca tacno ukoliko je paran ili netacno ukoliko je neparan
function neparan($n){
    if($n%2==0) {
        echo "<br>paran";
        return true;
    }else {
        echo "<br>neparan";
        return false;
    }
}
neparan(1);

//napisati funkciju kojoj prosledjujes putanju, a ona tebi prikaze sliku
function slika($img) {
    echo "<img src='$img'";
}
slika('ruze.jpg');

//funkcija koja za unetu boju boji text paragrafa u tu boju - nije tacan zadatak, ispraviti
function boja($boja) {
        return $boja;
}
echo "<br><p class='paragraf'>Boja teksta pokusavamo</p><br>";


//napraviti funkciju kojoj se prosledjuje ceo broj a ona ispisuje tekst kojima prosledjenu velicinu fonta
function font($ceobroj) {
    echo "<p style = 'font-size:" . $ceobroj . "px'>Some text</p>";
}
font(60);

function font2($broj, $text) {
    echo "<p style = 'font-size:" . $broj . "px'>$text</p>";
}
font2(40, 'Tekst tekst');



//napraviti sahovsku tablu
?>
<table>

<?php
$n = 8;
$m = 8;

red($n, $m);


function red($n, $m) {
    for($s=1; $s<=$n; $s++){
        if($s%2==0) {
        echo "<tr>" . celija1($m) . "</tr>";}
        else {echo "<tr>" . celija2($m) . "</tr>";}
    }
}

function celija1($m) {
    for($g=1; $g<=$m; $g++){
    if($g%2==0) {
        echo "<td>1</td>";
    }else{echo "<td>2</td>";}
}
}

function celija2($m) {
    for($g=1; $g<=$m; $g++){
    if($g%2==0) {
        echo "<td>2</td>";
    }else{echo "<td>1</td>";}
}
}

?>
</table>

</body>
</html>