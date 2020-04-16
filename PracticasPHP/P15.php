<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function comparePass($pass, $pass2){
        if($pass == $pass2){
            echo "FELICIDADES, registro exitoso!";
        } else {
            echo "Las contraseñas no coinciden!";
        }
    }
        if(array_key_exists("user", $_GET)){

            comparePass($_GET["pass"], $_GET["pass2"]);
            echo "<br>";
        }
    ?>
    <form action="./P15.php" method="get">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <br>
        <label for="pass2">Confirmación Contraseña</label>
        <input type="password" name="pass2" id="pass2">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>