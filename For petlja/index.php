<?php
/*Razlika izmedju FOR i WHILE petlje
Kod WHILE, izvrsava se onoliki broj puta dok traje uslov. Mi ne znamo koliki je to puta.
Kod FOR petlje, tacno znamo koliko puta ce se izvrsiti.
Svaki zadatak koji moze da se radi sa FOR moze i sa WHILE ali ne moze obratno
*/

//ZADATAK Pokazni
echo "ZADATAK 1: ispisi brojeve od 0 do 10 ukljucujuci 0 i 10<br>";
for($i=0; $i<=10; $i++) {
    echo "$i<br>";
}

$m=10;
$i=0;
while($i<=$m){
    echo "$i<br>";
    $i++; //$+=1; $i = $i + 1 sve je to isto, mozes da koristis sta god zelis, tako da ako zelis za dva da pomeras, recimo, stavis $i+=2;
}

//ZADATAK 1
echo "<br><br>ZADATAK 2: Brojevi od 5 do 30 koji su deljivi sa 3 a nisu sa 5<br>";
for ($i=5; $i<=30; $i++) {
    if($i%3==0 && $i%5!=0) {
        echo "$i<br>";//pazi da ovde ne stavis i++ jer ga vec imas gore, to je vrlo cesta greska
    }
}

//ZADATAK 2
echo "<br><br>ZADATAK 3: Ispisati brojeve od 20 do 1";
for ($i=20; $i>=1; $i--) {
    echo "<br>$i";
}

//ZADATAK 3
echo "<br><br>Ispisati parne brojeve od 1 do 20";
for($i=1; $i<=20; $i++) {
    if($i%2==0) {
        echo "<br>Paran broj: $i";
    }
}

//ZADATAK 4
echo "<br><br>Ispisati dvostruku vrednost brojeva od 05 do 15";
for($i=5; $i<=15; $i++) {
    $d=$i*2;
    echo "<br>Dvostruka vrednost broja $i je $d";
}


//ZADATAK 5
echo "<br><br> Odrediti sumu brojeva od 1 do 100";
$suma=0;
for($i=1; $i<=100; $i++) {
    $suma = $suma+$i;
}
echo "<br>Suma je $suma";

//ZADATAK 8
echo "<br><br>Odrediti proizvod brojeva od n do m";
$n = 1;
$m = 5;
$proizvod=1;
for($i=$n; $i<=$m; $i++) {
    $proizvod = $proizvod*$i;//Moze da se ovo za pise i kao $proizvod *= $i
}
echo "<br>Proizvod brojeva od $n do $m je $proizvod";
//ovo je identicno kao da nas neko pita koliko iznosi faktorijel broja
//!5 = 5*4*3*2*1
//!6 = 6*5*4*3*2*1

//ZADATAK 9
echo "<br><br>Odrediti sumu kvadrata brojeva od n do m";
$n=1;
$m=2;
$suma=0;
for($i=$n; $i<=$m; $i++) {
    $suma = $suma + ($i*$i);
}
echo "<br>Suma kvadrata brojeva od $n do $m je $suma.";

//ZADATAK 10
echo "<br><br>Ispisi tri slike";
for($i=1; $i<=3; $i++) {
    echo "<img src='$i.png'>";
}

echo "<br><br>Ispisi 10 puta 3 slike, odnosno u rasponu od 1 do 30 tako nesto";//veoma interesantan zahhtev da se uradi preko iteratora kako oni kazu
$ost = $i%3;
for($i=1; $i<=30; $i++) {
    $ost = $i%3;
    $ost++;//dodajemo jedan jer su nam ostatak kada delimo sa 3 upravo 0,1,ili 2, a slike nam se zovu 1, 2, 3
    echo "<img src='$ost.png'><br>";
}

for($j=1; $j<=10; $j++) {
    for($i=1; $i<=3; $i++) {
        echo "<img src='$i.png'><br>";
    }
}//radi isto kao gore, nemoj samo da stavljas isti operator u oba for-a


//ZADATAK 11
echo "<br><br>Sabrati sve brojeve deljive sa 9 u intervalu 1 do 30";
$suma=0;
for($i=1; $i<=30; $i++) {
    if($i%9==0) {
        $suma = $suma + $i;
    }
}
echo "<br>Zbir brojeva deljivih sa 9 u intervalu 1 do 30 je $suma";




//ZADATAK 12
echo "<br><br>Odrediti proizvod brojeva, sumu i broj brojeva deljivih sa 11 u intervalu 20 do 100";
$proizvod = 1;
$suma = 0;
$brojbrojeva = 0;
for($i=20; $i<=100; $i++) {
    if($i%11==0) {
        $proizvod = $proizvod * $i;
        $suma = $suma + $i;
        $brojbrojeva++;
    }
}
$proizvodsredjen = number_format($proizvod, 0, ',', '.');
echo "<br>Proizvod brojeva deljivih sa 11 u intervalu 20 do 100 je: $proizvodsredjen";
echo "<br>Zbir brojeva deljivih sa 11 u intervalu 20 do 100 je: $suma";
echo "<br>Broj brojeva deljivih sa 11 u intervalu 20 do 100 je: $brojbrojeva";

//ZADATAK 14
echo "<br><br>Ispisati aritmeticku sredinu brojeva od n do m (suma svih brojeva podeljeno sa brojem koliko ih ima";
$n=1;
$m=2;
$suma = 0;
$br=0;
for($i=$n; $i<=$m; $i++) {
    $suma = $suma + $i;
    $br++;
}
$arm=$suma/$br;
echo "<br>Aritmeticka sredina brojeva od $n do $m je $arm.";

//ZADATAK 15
echo "<br><br>";
$brPoz = 0;
$brNeg = 0;
$n=-5;
$m=7;
for($i=$n; $i<=$m; $i++) {
    if($i>0) {$brPoz++;}
    if($i<0) {$brNeg++;}
}
echo "<br>Broj negativnih je $brNeg a broj pozitivnih je $brPoz";

//ZADATAK 16

//ZADATAK 17
echo "<br><br>Prebrojati i izracunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su";
$n=1;
$m=2;
$zbir=0;
$br=0;
//poslednja cifra nekog broja se dobija kada se podeli brojem 10
for($i=$n; $i<=$m; $i++) {
    if($i%10==4) {
        $zbir += $i;
        $br++;
    }
}
echo "<br>Suma brojeva od $n do $m kojima je poslednja cifra 4 je $zbir. Ukupno je sabrano $br brojeva. ";


//ZADATAK 18

//ZADATAK 19



//ZADATAK 22
echo "<br><br>Prebrojati i izracunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su";
$n=1;
$m=10;
$br=0;
$zbir=0;

for($i=$n; $i<=$m; $i++) {
    if(substr($i, -1)==4) {
        $zbir=$zbir+$i;
        $br++;
    }
}
echo "<br>Zbir je $zbir;";
    
//ZADATAK 
echo "<br><br>Ispisati broj brojeva od n do m sve dok je suma manja od 50 tako da suma bude manja ili jednaka 50";
$n=1;
$m=25;
$suma=0;
$br=0;
while($suma<=50 && $n<$m) {
    $suma += $n;
    $n++;
    $br++;
}
echo "<br>Broj brojeva je $br";
//do-while ispitati sta je

?>