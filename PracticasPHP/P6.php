<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="./P6.php" method="get">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="age">Edad</label>
        <input type="number" name="age" id="age">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    if(array_key_exists('name',$_GET)){
        $name = $_GET['name'];
        $age = $_GET['age'];
        echo "Hola $name tienes $age años";
        echo "<br>";
        if ($age < 18) {
            echo "Eres menor de edad";
        } else {
            echo "Eres mayor de edad";
        }
    }
    ?>
</body>
</html>