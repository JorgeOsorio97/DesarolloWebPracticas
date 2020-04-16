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
            $Futbol = array_key_exists('Futbol', $_GET);
            $Basket = array_key_exists('Basket', $_GET);
            $Tenis = array_key_exists('Tenis', $_GET);
            $Volley = array_key_exists('Volley', $_GET);
            echo "Hola $name los deportes que practicas son: ";
            if($Futbol) echo " Futbol";
            if($Basket) echo " Basket";
            if($Tenis) echo " Tenis";
            if($Volley) echo " Volley";
        }
    ?>
    <form action="./P8.php" method="get">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="study"></label>
        <input type="checkbox" name="Futbol" >Futbol
        <input type="checkbox" name="Basket" >Basket
        <input type="checkbox" name="Tenis" >Tenis
        <input type="checkbox" name="Volley" >Volley
        <button type="submit">Enviar</button>
    </form>
</body>
</html>