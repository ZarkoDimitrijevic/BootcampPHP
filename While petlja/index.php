<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="txt/css" href="style.css">
        <style>
        .prvi {color:red;
              float:left;}
        .drugi {color:blue;
            float:left;}
        .treci {color:green;
            float:left;}
        </style>
    </head>

    <body>
    
    
    
        <?php echo "<h1>Zadaci sa while petljom</h1>";
//ispis brojeva od 1 do 10
$i = 1;
while($i<=10){
    echo $i;
    echo "<br>";
    $i++;
}

//ispisati brojeve 1 do 20
$i = 1;
while($i<=20){
    echo $i;
    echo "<br>";
    $i++;
}

echo "novi zadatak";

//ispisati brojeve 20 do 1
$i = 20;
while($i>=1) {
    echo $i;
    echo "<br>";
    $i--;
}

echo "novi zadatak";

//ispisati parne brojeve do 20
$i = 0;
while($i<=20) {
    echo $i;
    echo "<br>";
    $i=$i+2;//moze da se napise $i+=2 potpuno je isto
}
echo "drugi nacin istog zadatka";
$i=1;
while ($i<=20) {
    if($i%2==0) {
        echo $i;
        echo "<br>";
    }
    $i++;
}



echo "novi zadatak<br>";
//ispisati kolicnik i ostatak ali ne koristi / i %
$a = 80;
$b = 25;
$ostatak = 0;
$kolicnik = 0;

while(($a-$b)>0){
        $a=$a-$b;
        $kolicnik = $kolicnik+1;
        
    }
    $ostatak = $a;
    
    echo "Kolicnik je: $kolicnik <br>";
    echo "Ostatak je: $ostatak<br>"; 

    echo "Drugi nacin";
$a=82;
$b=8;
$kol = 0;
$ost = $a;

while($ost>=$b) {
    $ost = $ost - $b;
    $kol++;
}
echo "<br>$a=$kol*$b+$ost<br>";

    echo "novi zadatak";
    //sest paragrafa naizmenicno oboji u tri boje
$i=0;
    while ($i<6) {
        $i=$i+3;
        echo ("<p class='prvi'>Prvi</p>");
        echo ("<p class='drugi'>Drugi</p>");
        echo ("<p class='treci'>Treci</p>");
    }

    echo "drugi nacin resavanja zadatka";
    $i=1;
    while ($i<=6) {
        $text = "Lorem ipsum ...";
        if($i%3==1) {
            echo "<p class='prvi'>$text</p><br>";
        }elseif($i%3==2) {
            echo "<p class='drugi'>$text</p><br>";
        }else {
            echo "<p class='treci'>$text</p><br>";
        }
        $i++;
    }?>
<div><?php
    /*zadatak
    Napraviti tri diva, u prvom treba u h1 - Petar, da bude plave boje
    i ispod njega slicica, avatar
    Drugi div, h1 - Milena, crvena boja, avatar
    Treci div, Dzeki - zelena boja, slika Dzekija (pas)*/
$i=0;
    while ($i<3) {
        $i++;
        if($i==1){
        echo ("<div class='prvi'> <h1>Petar</h1>  <img src='./choleric.png'></div>");}
        elseif($i==2){echo ("<div class='drugi'> <h1>Milena</h1>  <img src='./flegmatic.png'></div>" );}
        else {echo ("<div class='treci'> <h1>Dzeki</h1>  <img src='./dog.jpg'><br></div>");}
    }
    ?>
</div>
?>
<div><?php
/*Odrediti sumu brojeva od 1 do 100*/
$i=0;
$rezultat=0;
    while($i<=100) {
        
        $rezultat = $rezultat + $i;
        $i++;
    }
    echo "Rezultat je $rezultat<br>";

    /*Odrediti sumu brojeva od 1 do n*/
$i=0;
$n=3;
$rezultat=0;

    while($i<=$n) {
        $rezultat = $rezultat + $i;
        $i++;
    }
    echo "Rezultat sabiranja brojeva od 1 do $n je: $rezultat <br>";

    /*Odrediti sumu brojeva od n do m*/
$n = 2;
$m = 3;
$rezultat = 0;

while($n<=$m) {
    $rezultat = $rezultat + $n;
    $n++;
}
echo "Rezultat sabiranja brojeva od $n do $m je: $rezultat <br>";

    /*Odrediti proizvod brojeva od n do m*/
$n=1;
$m=2;
$i=$n;
$rezultat=1;

while($m>=$i){
    $rezultat=$rezultat*$i;//Moze i ovako da se zapise: $rezultat *= $i;
    $i++;
}
echo "Proizvod brojeva od $n do $m je $rezultat.<br>";

    /*Odrediti zbir kvadrata brojeva od n do m*/
$n=1;
$m=3;
$i=$n;
$rezultat = 0;

while($m>=$i) {
    $rezultat=$rezultat + ($i*$i);
    $i++;
}
echo "Zbir kvadrata brojeva od $n do $m je $rezultat.<br>"

/*Odrediti proizvod neparnih brojeva od n do m*/
$n=4;
$m=7;
$i=$n;
$proizvod = 1;

while($i<=$m) {
    if($i%2 ==1){
        $proizvod *= $i;
    }
    $i++;
}



        ?>
        </div>

    </body>
</html>