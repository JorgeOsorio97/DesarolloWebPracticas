<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(array_key_exists('name', $_GET)){
            $name = $_GET['name'];
            switch ($_GET['study']){
                case "no":
                    $study = "no tiene estudios";
                    break;
                case "pri":
                    $study = "estudios primarios";
                    break;
                case "sec":
                    $study = "estudios secundarios";
                    break;
            }
            echo "Hola $name su nivel de estudios es: $study";
        }
    ?>
    <form action="./P7.php" method="get">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="study"></label>
        <input type="radio" name="study" value="no">no tiene estudios
        <input type="radio" name="study" value="pri">estudios primarios
        <input type="radio" name="study" value="sec">estudios secundarios
        <button type="submit">Enviar</button>
    </form>
</body>
</html>