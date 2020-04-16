<?php 
    $num = rand(1,100);
    echo "Número aleatorio: ". $num;
    echo "<br>";    
    if ($num < 50) {
        echo $num . " es menor a 50.";
    } else if ($num == 50) {
        echo $num . " es igual a 50.";
    } else {
        echo $num . " es mayor a 50.";
    }
?>
