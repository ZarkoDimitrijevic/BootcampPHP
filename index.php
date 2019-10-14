

<html>
    <head>
        <meta charset="UTF-8">
        <style>
            *{box-sizing: border-box;
             }
            body {width:100%;
                 height:100%;
                 display: flex;
                 flex-direction: column;
                 justify-content: center;
                 margin:0;}
            fieldset {width: 50%;
                      margin-left: auto;
                      margin-right: auto;
                      background-color: greenyellow;}
            h3 {text-align: center;
                margin-top: 5px;}
            
            .vrstakonverzije {text-align: center;}
            #naslovkolicina {text-align: left;
                            margin-top: 30px;}
            #dugme1 {float: right;}
            .pokazise {margin-top:15px;
                       float: left;}
            .rezultat {font-weight: bold;}
            .forma {width: 50%;
                    margin: 0 auto;}
            .tab {border: 2px solid black;
                        margin:0;
                        padding: 2px;
                        background-color: yellow;}
            legend {width: 100%;
                    display:flex;
                    flex-direction: row;
                    justify-content: space-between;
                    background-color:greenyellow;}
        </style>
    </head>

    <body>
    <form class="forma" action="">

        <fieldset>
        <legend>
            <form method="GET" action="">
            <p></p>
            <button name="zapremina" class="tab">Konvertor zapremine</button>
            <button name="temperatura" class="tab">Konvertor temperature</button>
            <p></p>
            </form>
        </legend>

        <!--Ovo je prvi tab-->
        <section class="prvazapremina">
        <h3>Odaberite vrstu konverzije:</h3>
        
        <form action="" method="GET">
            <div class="vrstakonverzije">
                <input type="radio" name="konverzija" value="galonlitar">Galoni u litre
                <input type="radio" name="konverzija" value="litargalon" checked>Litri u galone
            </div>
    

        <h3 id="naslovkolicina">Unesite količinu:</h3>
        <div>
            <label for="">litri/galoni</label>
            <input type="number" name="kolicina" value=0>
        </div>

            <button name="submit" id="dugme1">Submit</button> 
        </form>
        </section> 
            
        <!--Ovo je drugi tab
        <section class="drugatemperatura">
        <h3>Odaberite vrstu konverzije:</h3>
        
        <form action="" method="GET">
            <div class="vrstakonverzije">
                <input type="radio" name="konverzija1" value="farenhajt">Farenahjt u Kelvine
                <input type="radio" name="konverzija1" value="kelvin" checked>Kelvini u Farenhajte
            </div>
    

        <h3 id="naslovkolicina">Unesite temperaturu:</h3>
        <div>
            <label for="">F/K</label>
            <input type="number" name="kolicina1" value=0>
        </div>

            <button name="submit1" id="dugme2">Submit</button> 
        </form>
        </section> -->

        <!--Logika za izbor tabova-->
<?php/*
if(!isset($_GET['zapremina'])) {
    ?>
    <style>.prvazapremina {display:none;} </style>
    
    <?php
} else {
    ?>
    <style>.prvazapremina {display:block;} </style>
    <?php
    } 

if(!isset($_GET['temperatura'])) {
        ?>
        <style>.drugatemperatura {display:none;} </style>
        
        <?php
} else {
        ?>
        <style>.drugatemperatura {display:block;} </style>
        <?php
        } 
*/

//Ovde je logika za prvi tab

if(!isset($_GET['submit'])) {
    die;
}

if (isset($_GET['submit'])) {
    $x=0;
    $vrsta=$_GET['konverzija'];
    if ($vrsta=='galonlitar') {
        $x=($_GET['kolicina']);
        $y=$x*3.758;
    } else {
        $x=($_GET['kolicina']);
        $y=$x/3.758;
    }
    if ($y==0) {
        die;
    } else { ?>
        <div class="pokazise">
            <label for=""><span class="rezultat">Rezultat:</span></label>
            <input type="text" value="<?php echo "$y";?>">
            <form action="" method="GET">
                <button name="reset">Reset</button>
            </form>
        </div>
        <?php
    }
}

if (isset($_GET['reset'])) {
    ?>
    <style>
    .pokazise {display:block;}
    </style>
    <?php
}


//Ovde je logika za drugi tab
/*
if(!isset($_GET['submit1'])) {
    die;
}

if (isset($_GET['submit1'])) {
    $x=0;
    $vrsta=$_GET['konverzija1'];
    if ($vrsta=='galonlitar') {
        $x=($_GET['kolicina1']);
        $y=$x*3.758;
    } else {
        $x=($_GET['kolicina1']);
        $y=$x/3.758;
    }
    if ($y==0) {
        die;
    } else { ?>
        <div class="pokazise">
            <label for=""><span class="rezultat">Rezultat:</span></label>
            <input type="text" value="<?php echo "$y";?>">
            <form action="" method="GET">
                <button name="reset">Reset</button>
            </form>
        </div>
        <?php
    }
}

if (isset($_GET['reset'])) {
    ?>
    <style>
    .pokazise {display:block;}
    </style>
    <?php
}*/
?>





        
        </fieldset>
        
        </form>
    </body>
</html>