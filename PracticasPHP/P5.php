<?php 
    echo "for";
    echo "<br>";
    for ($i=0; $i < 11; $i+=2) { 
        echo $i;
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "while";
    echo "<br>";
    $j = 0;
    while ($j <= 10) {
        echo $j;
        echo "<br>";
        $j +=2;
    }
    echo "<br>";
    echo "<br>";
    echo "do-while";
    echo "<br>";
    $k = 0;
    do {
        echo $k;
        echo "<br>";
        $k+=2;
    } while ($k <= 10);
?>
