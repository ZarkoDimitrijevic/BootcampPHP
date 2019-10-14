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
            .naslovkolicina {text-align: left;
                            margin-top: 30px;}
            #dugme {float: right;
                    background-color: yellow;}
            #dugme1 {float: right;
                    background-color: yellow;}
            .zareset {background-color: white;}
            .pokazise {margin-top:15px;
                       float: left;}
            .pokazise1 {margin-top:15px;
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
        <!--Ovde je izbor tabova-->
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
    

        <h3 class="naslovkolicina">Unesite količinu:</h3>
        <div>
            <label for="">litri/galoni</label>
            <input type="number" name="kolicina" value="0">
        </div>

            <button name="submit" id="dugme">Submit</button> 
        </form>
        </section> 

        <!--Ovo je drugi tab-->
        <section class="drugatemperatura">
        <h3>Odaberite vrstu konverzije:</h3>
        
        <form action="" method="GET">
            <div class="vrstakonverzije">
                <input type="radio" name="konverzija1" value="farenhajt">Farenahjt u Kelvine
                <input type="radio" name="konverzija1" value="kelvin" checked>Kelvini u Farenhajte
            </div>
    

        <h3 class="naslovkolicina">Unesite temperaturu:</h3>
        <div>
            <label for="">F/K</label>
            <input type="number" name="kolicina1" value="0">
        </div>

            <button name="submit1" id="dugme1">Submit</button> 
        </form>
        </section>

        <!--Logika za izbor tabova-->
<?php
    if(isset($_GET['zapremina'])) {
        ?>
        <style>.prvazapremina {display:block;} </style>
    
        <?php
        } else {
         ?>
            <style>.prvazapremina {display:none;} </style>
         <?php
        }

    if(isset($_GET['temperatura'])) {
        ?>
        <style>.drugatemperatura {display:block;} </style>
        
        <?php
        } else {
        ?>
            <style>.drugatemperatura {display:none;} </style>
        <?php
        } 


//Ovde je logika za prvi tab   

if (isset($_GET['submit'])) {
    ?>
    <style>.prvazapremina{display:block;}</style>
    <?php
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
                <button class="zareset" name="reset">Reset</button>
            </form>
        </div>

        <?php
    }
}

if (isset($_GET['reset'])) {
    ?>
    <style>
    .prvazapremina {display:block;}
    .pokazise {display:block;}
    </style>
    <?php
}



//Ovde je logika za drugi tab   

if (isset($_GET['submit1'])) {
    ?>
    <style>.drugatemperatura{display:block;}</style>
    <?php
    $x1=0;
    $vrsta1=$_GET['konverzija1'];
    if ($vrsta1=='farenhajt') {
        $x1=($_GET['kolicina1']);
        $y1=(($x1-32)*5/9 + 273.15);
    } else {
        $x1=($_GET['kolicina1']);
        $y1=(($x1-273.15)*9/5 + 32);
    }
    
    ?>
        <div class="pokazise1">
            <label for=""><span class="rezultat">Rezultat:</span></label>
            <input type="text" value="<?php echo "$y1";?>">
            <form action="" method="GET">
                <button class="zareset" name="reset1">Reset</button>
            </form>
        </div>
        <?php
    
}

if (isset($_GET['reset1'])) {
    ?>
    <style>
    .drugatemperatura {display:block;}
    .pokazise1 {display:block;}
    </style>
    <?php
}


?>
        
        </fieldset>
        
        </form>
    </body>
</html>