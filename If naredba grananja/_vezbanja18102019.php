<?php 

//kolicnik kada se deli a sa b:
/*$a/$b //ovde se dobija realan broj (sa zarezom)
//ostatak kada se deli a sa b $a % $b dobija se samo ostatak pri deljenju broja a sa brojem b, koji je uvek ceo broj izmedju 0 i b-1(ceo broj); Dakle, ne dobija se rezultat, vec samo ostatak.
/*$a%$b;

/*Tipovi podataka
Numericki: 
    int - ceo broj, 
    float - realan broj,
Stringovi: navode se izmedju duplih navodnika ili izmedju jednostrukih. Kadad je izmedju duplih, prikazuje se vrednost promenljive, a kad je izmedju jednostrukih, onda ono sto pise
Logicki tip: true - tacno/false - netacno;

Kada nam treba ceo broj kod deljenja, onda:*/
/*(int)$a/$b /*i tako smo dobili ceo broj.

*/ 

//Zadatak: Da li je broj paran ili ne?

$n = 5;
if($n%2 == 0) {echo "<p>Broj $n je paran</p>";}
else {echo "<p>Broj $n je neparan</p>";}

echo $n%2;

//Za uneti broj ispisati da li je deljiv sa 3 ili ne
$tri = 17;
if($tri%3 == 0) {echo "<br>Broj je deljiv sa tri<br>";}
else {echo "<br>Broj nije deljiv sa tri<br>.";}

//Ispitati da li je broj ceo broj
$ceobroj = 1.5654;
if($ceobroj-(int)($ceobroj) == 0) {echo "<br>Broj je ceo<br>";}
else {echo "<br>Broj nije ceo<br>.";}

//if u ifu
$pol = "m";
$godine = 25;
if($pol == "m") {
    if($godine>=18) {echo "musko, punoletan";}
    else {echo "musko, maloletan";}
}else {
    if($godine>=18) {echo "zensko, punoletna";}
    else {echo "zensko, maloletna";}
}

//Ucitati dva cela broja i ispitati da li je veci od njih paran
$prvi = 50;
$drugi = 80;
if($prvi > $drugi) {
    if($prvi%2 == 0) {echo "<br>paran je prvi broj";}
    else {echo "<br>nije paran prvi broj";}
} 
elseif($drugi%2 == 0){echo "<br>paran je drugi broj";}
else {echo "<br>nije paran drugi broj";}


?>

