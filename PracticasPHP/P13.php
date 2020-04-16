<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pedidos</h1>
    <?php 
        $pedidosstr = file_get_contents(dirname(__FILE__)."/datos.txt");
        $pedidosstr = explode("------------------------------", $pedidosstr);
        foreach($pedidosstr as $pedido){
            echo $pedido;
            echo "<br>";
            echo "<br>";
            echo "<br>";

        } 
    ?>
</body>
</html>