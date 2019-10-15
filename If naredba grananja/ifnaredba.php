<html>
<head>
<style>
    .m {color:blue;}
    .z {color:pink;}
</style>
</head>

<body>
    <?php 
        $a=5;
        $b=-10;

        if($a>$b) {
            echo "A je vece od b <br>";
            echo "$a je vece od $b <br>";
        } else {
            echo "Pa da";
            echo "$a je manje od $b <br>";
        }

        $x=3;
        $y=5;

        if($x>$y) {
            echo "$x je vece od $y";
        } elseif($x<$y) {
            echo "$x je manje od $y";
        } else {
            echo "$x je jednako $y";
        }

    $pol = "z";
    if($pol=="z"){
        echo "<img src='./avatar-female.png'>";
        echo "<p class='z'>Oznacena je zena</p>";
    } else {
        
        ?> <img src="./avatar-male.png">
            <p class="m">Oznacen je muskarac</p><?php
    }
/*Test da bi mozda proradio javascript u kalkulatoru

    <html>
 <head>
  <script type="text/javascript">
    window.onload = function() {

        var ex1 = document.getElementById('example1');
        var ex2 = document.getElementById('example2');
        var ex3 = document.getElementById('example3');

        ex1.onclick = handler;
        ex2.onclick = handler;
        ex3.onclick = handler;

    }

    function handler() {
        alert('clicked');
    }
  </script>
 </head>
 <body>
  <input type="radio" name="example1" id="example1" value="Example 1" />
  <label for="example1">Example 1</label>
  <input type="radio" name="example2" id="example2" value="Example 2" />
  <label for="example1">Example 2</label>
  <input type="radio" name="example3" id="example3" value="Example 3" />
  <label for="example1">Example 3</label>
 </body>
</html>
   */ 
    ?>
</body>

</html>
