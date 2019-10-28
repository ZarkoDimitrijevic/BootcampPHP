<!DOCTYPE html>
<html>
    <head>
        <title>FOREACH petlja</title>
    </head>

    <body>
<?php
//Primer
$nizElemenata = array(2,6,-4,5,-7,8,19,-21,33);
foreach($nizElemenata as $element) {
    echo $element . ", ";
}
//ucili smo for petlju jer nam nekad trebaju indeksi. FOREACH ne poznaje indekse, tu idemo od pocetka do kraja
//preko FOR petlja ne mogu da se rade asocijativni nizovi, a preko FOREACH moze
//FOR petlja moze da preskace neke elemente, FOREACH ne moze

//Primer
echo "<br>Primer<br>Ispisati sve pozitivne brojeve niza x, kada naidjemo na negativan broj, prekinuti ispis. Koristiti FOREACH petlju.<br>";
$x = array(2,6,-4, -2, 0, 1);
foreach($x as $elementi) {
    if($elementi > 0) {echo $elementi . ", ";}
    else break;
}

?>
    </body>
</html>