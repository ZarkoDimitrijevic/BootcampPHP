<!DOCTYPE html>
<html>
    <head>
        <title>Asocijativni nizovi</title>
    </head>
    <body>
        <?php
//Ima 3 vrste nizova: indeksirani, asocijativni, visedimenzionalni
//U php-u asocijativni niz je isto sto i objekat

echo "<h1>Zadaci sa nizovima, asocijativnim nizovima</h1>";

$age = array(
    "Peter" => 35,
    "Marry" => '27',
    "Joe" => 33,); //PHP dozvoljava da nako poslednjeg elementa ide zarez, ne javlja gresku

echo $age['Peter'] . "<br>";

$age['Harry'] = 53;
$age['Sally'] = '24';

var_dump($age);

//za prolazak kroz elemente asocijativnog niza mozemo da koristimo FOREACH petlju
foreach($age as $x => $value) {
    echo "Kljuc je $x a value je $value.<br>";
}

//ZADATAK 1
echo "Dat je niz elementa marka auta/godiste. 
Ispisati automobile i godista, 
Onda samo one koji su stariji od 10 godine, 
i samo one koji sadrze string Opel a proizvedena posle 2000";

$auta = array(
    "Ferari f40" => 2009,
    "Audi A6" => 2004,
    "Opel Astra" => 2001,
    "Toyota Yaris" => 2018,
    "Dacia Logan" => 2015,
    "Peugeot 206" => 2003,
);

function sviAutomobili($niz) {
    foreach($niz as $x => $value) {
        echo "<p>Marka automobila i tip: $x, godina proizvodnje: $value</p>";
}}

function starijiOdDeset($niz) {
    foreach($niz as $x => $value) {
        if(date('Y')-10>=$value) {
            echo "<p>Marka automobila i tip: $x, godina proizvodnje: $value</p>";
        }
    }
}

function proizvedeniPosle($niz) {
    foreach($niz as $x => $value) {
        if(strpos($x, "Opel")!==false && $value>2000) {//moramo da pitamo da li je razlicito i po tipu i po vrednosti, jer ovde ne radi if($x, "Opel"), sto obicno znaci ako je ovo true, ali u ovoj funkciji to ne radi
            echo "<p>Trazeni termin se nalazi u reci $x koja je proizvedena  $value godine.</p>";
        }
    }
}

function brojAudija($niz) {
    $brojac=0;
    foreach($niz as $x => $value) {
        if(strpos($niz, "Audi")===0 && $value>2000){
            $brojac++;
        }
    }
    return $brojac;
}
/*Return ima dvojaku ulogu:
1. vraca rezultat funkcije
2. prekida dalje izvrsavanje koda, odnosno dalji tok izvrsenja funkcije, 
sto je narocito vazno ako ti je u for ili foreach petlji jer ako stavis gde ne treba, 
on prekine dalji tok izvrsenja funkcije.*/

/*Razlika izmedju BREAK i DIE je u tome sto break prekida petlju, a die prekida celo dalje izvrsavanje koda*/

/*
strpos(string1, string2) - vraca broj indeksa prvog pojavljivanje stringa2 u stringu 1
strrpos(string1, string2) - vraca broj indeksa poslednjeg pojavljivanje stringa2 u stringu1
stripos(string1, string2) - vraca broj indeksa prvog pojavljivanje stringa2 u stringu 1 CASE INSENSITIVE
strripos(string1, string2) - vraca broj indeksa poslednjeg pojavljivanje stringa2 u stringu1 CASE INSENSITIVE
*/
sviAutomobili($auta);
echo "Nova funkcija";
starijiOdDeset($auta);
echo "Nova funkcija II";
proizvedeniPosle($auta);



//ZADATAK 2
echo "<br>ZADATAK 2</br>Niz elemenata ime osobe i visina
1. ispisati imena i njihove visine
2. ispisati sve natprosecno visoke
3. ispisati sve koje imaju najvecu visinu
4. ispisati sve koje imaju visinu ispod proseka a pocinje ime slovom V</br>";

$osobe = array(
    "Petar" => 175,
    "Jelica" => 165,
    "Zarko" => 180,
    "Ksenija" => 167,
    "Dete1" => 150,
    "Dete2" => 130,
    "Marko" => 188,
    "Neko"  => 162,
);

function ispisatiString($niz) {
    foreach($niz as $ime=>$visina) {
        echo "<p>$ime je visine $visina cm.</p>";
    }
}

function ispisatiVisoke($niz) {
    $zbir=0;
    $brojac=0;
    
    foreach($niz as $ime=>$visina) {
        $zbir=$zbir+$visina;
        $brojac++;
    }
    
    $prosecnaVisina=$zbir/$brojac;//nasli smo prosecnu visinu

    echo "<br>Natprosecnu visinu imaju: ";
    foreach($niz as $ime=>$visina) {
        if($visina>$prosecnaVisina) {
            echo "$ime, ";
        }
    }
}

function ispisatiMaxVisinu($niz) {
    $max=0;
    foreach($niz as $ime => $visina) {
        if($visina > $max) {
            $max = $visina;
        }
    }
    echo "<p>$ime ima najvecu visinu $max.</p>";
}

function ispodProseka($niz) {
    $zbir=0;
    $brojac=0;
    foreach($niz as $ime=>$visina) {
        $zbir=$zbir+$visina;
        $brojac++;
    }
    
    $prosecnaVisina=$zbir/$brojac; //nasli smo prosecnu visinu

    foreach($niz as $ime =>$visina) {
        if($visina<$prosecnaVisina && strpos($ime, "N")===0) {
            echo "<p>$ime ima visinu ispod prosecne</p>";
        }
    }
}

ispisatiString($osobe);
echo "Nova funkcija";
ispisatiVisoke($osobe);
echo "Nova funkcija";
ispisatiMaxVisinu($osobe);
echo "Nova funkcija";
ispodProseka($osobe);

//ZADATAK 3
echo "<br>ZADATAK 3<br>Dat je niz Naziv predmeta/ocena.
1. Ispisati sve predmete sa ocenama
2. Odrediti koja je najveca ocena koju ima i ispisati predmete sa tom ocenom
3. Odrediti prosecnu ocenu i ispisati predmete iz kojih ima ocenu vecu od prosecne<br>";

$ocene = array(
    "Matematika" => 5,
    "Srpski" => 4,
    "Hemija" => 4,
    "Fizika" => 3,
    "Fizicko vaspitanje" => 5,
    "Muzicko vaspitanje" => 5,
    "Biologija" => 4,
    "Engleski" => 5,
    "Likovno" => 5,
);

foreach($ocene as $predmet=>$ocena) {
    echo "<p>Predmet je $predmet a ocena iz tog predmeta je $ocena</p>";
}

$najvecaOcena=0;
foreach($ocene as $predmet=>$ocena) {
    if($ocena>$najvecaOcena) {
        $najvecaOcena=$ocena;
    }
}

echo "<br>Najvisu ocenu $najvecaOcena ucenik ima iz sledecih predmeta: ";
foreach($ocene as $predmet=>$ocena) {
    if($ocena==$najvecaOcena) {
        echo $predmet . ", ";
    }
}

$zbir=0;
$brojac=0;
foreach($ocene as $predmet=>$ocena) {
    $zbir=$zbir+$ocena;
    $brojac++;
}
$prosecnaOcena = $zbir/$brojac;

echo "<br>Ucenik je dobio vise ocene od prosecne ocene iz sledecih predmeta: ";
foreach($ocene as $predmet=>$ocena) {
    if($ocena>$prosecnaOcena) {
        echo $predmet . ", ";
    }
}

//ZADATAK 4
/*godiste,
marka,
cena,
Da li su skuplji mladji automobili ili stariji od 2000 godista*/


    $kola=array(
        "Audi" => array(2002, 2000),
        "Mercedes" => array(2003, 10000),
        "Yugo" => array(2004, 300),
        "Bentli" => array(2005, 20000),
        "Lamborgini" => array(2006, 30000),
        "Peugeot" => array(2007, 1000),
        "Renault" => array(1998, 500),
        "Citroen" => array(1964, 10000),
        "Skoda" => array(1979, 300),
    );

$zbirNovih=0;
$zbirStarih=0;
foreach($kola as $marka => $godiste) {
    if($godiste[0]>2000) {
        $markeNovije[] = $marka;
        $zbirNovih = $zbirNovih + $godiste[1];
    } else {
        $markeStarije[]=$marka;
        $zbirStarih = $zbirStarih + $godiste[1];}
}

$prosecnaVrednostStarih = $zbirStarih/count($markeStarije);
$prosecnaVrednostNovih = $zbirNovih/count($markeNovije);

if($prosecnaVrednostNovih>$prosecnaVrednostStarih) {echo "<p>Noviji su skuplji</p>";}
else {echo "<p>Stariji su skuplji!</p>";}




//NIZ U NIZU
$niz = array (
    array(1,2,3, "pera" =>180),
    array(4,5,6)
);
echo "<br>" . $niz[0][2]; //pristupamo prvom elementu i u okviru njega njegovom elementu 2

foreach($niz[0] as $key=>$value){
        echo "<br>$key $value";
    }

echo count($niz);
echo count($niz[0]);

echo "<br>";

//FUNKCIJA abs() ABSOLUTNA VREDNOST BROJEVA - KAKO NACI NAJBLIZI BROJ
$srednjavrednost=3;
//$niz=array(-1,-5,-12,1,4,5,6,7,8);
$niz=array(1,2,5);
//neko vezbanje
function getClosest($srednjavrednost, $niz) {
    $closest = null;
    foreach ($niz as $element) {
       if ($closest === null || abs($srednjavrednost - $closest) > abs($element - $srednjavrednost)) {
          $closest = $element;
       }
    }
    return $closest;
 }
echo getClosest($srednjavrednost, $niz);



        ?>
    </body>
</html>