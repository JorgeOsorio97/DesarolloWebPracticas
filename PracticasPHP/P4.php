<?php 

    $var1 = rand(1,5);
    echo $var1;
    echo "<br>";
    switch ($var1) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
        case 4:
            echo "cuatro";
            break;
        case 5:
            echo "cinco";
            break;
    
        default:
            # code...
            break;
    }
?>
