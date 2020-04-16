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
            $ingreso = $_GET['ingreso'];
            if($ingreso == "3"){
                echo "Hola $name debes pagar impuestos a las ganancias";
            } else { 
                echo "Hola $name no debes pagar impuestos a las ganancias";
            }
        }
    ?>
    <form action="./P9.php" method="get">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">

        <label for="ingreso"></label>
        <select name="ingreso" id="">
            <option value="1">1-1000</option>
            <option value="1-3">1001-3000</option>
            <option value="3">>3000</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>