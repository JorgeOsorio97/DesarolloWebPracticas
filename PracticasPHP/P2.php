<?php 

    echo rand(0,100);
    echo "<br>";
    echo rand(0,10000)/100;
    echo "<br>";
    $cadenas = array(
        "hola mundo",
        "Esto es una cadena",
        "Ejemplo string",
        "Ejemplo cadena",
        "Dato tipo cadena",
        "Tipo de dato string"
    );
    echo $cadenas[rand(1,5)] ;
?>
