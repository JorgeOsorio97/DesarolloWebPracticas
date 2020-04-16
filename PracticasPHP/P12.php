<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./P12.php" method="get">
        <label for="name">Nombre:</label>
        <input type="name" name="name" id="name">
        <label for="address">Direccion:</label>
        <input type="text" name="address" id="address">
        <br>
        <label for="ham">Jamon y Queso</label>
        <input type="checkbox" name="ham" id="ham">
        <label for="ham_q">Cantidad</label>
        <input type="number" name="ham_q" id="ham_q">
        <br>
        <label for="nap">Napolitana</label>
        <input type="checkbox" name="nap" id="nap">
        <label for="nap_q">Cantidad</label>
        <input type="number" name="nap_q" id="nap_q">
        <br>
        <label for="moz">Mozzarella</label>
        <input type="checkbox" name="moz" id="moz">
        <label for="moz_q">Cantidad</label>
        <input type="number" name="moz_q" id="moz_q">
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if(array_key_exists("name", $_GET) && !empty($_GET["name"])){
            $name = $_GET["name"];
            $address = $_GET["address"];
            $data = "Pedido: \n"
            ."Nombre: ". $name. "\n"
            ."Dirección: ". $address . "\n";
            if(array_key_exists("ham", $_GET) && array_key_exists("ham_q", $_GET)){
                $data .= "Pizzas Jamon y Queso: ".$_GET["ham_q"]. "\n";
            }
            if(array_key_exists("nap", $_GET) && array_key_exists("nap_q", $_GET)){
                $data .= "Pizzas Napolitana: ".$_GET["nap_q"]. "\n";
            }
            if(array_key_exists("moz", $_GET) && array_key_exists("moz_q", $_GET)){
                $data .= "Pizzas Napolitana: ".$_GET["moz_q"]. "\n";
            }
            $data .= str_repeat("-",30) . "\n";
            file_put_contents(dirname(__FILE__)."/datos.txt",$data, FILE_APPEND);
            
        }
    ?>
</body>
</html>