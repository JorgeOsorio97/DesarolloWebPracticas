<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios</h1>
    <?php 
    $ususarios = [
        ["user"=>"usuario1", "password"=>"contraseña1"],
        ["user"=>"usuario2", "password"=>"contraseña2"],
        ["user"=>"usuario3", "password"=>"contraseña3"],
        ["user"=>"usuario4", "password"=>"contraseña4"],
        ["user"=>"usuario5", "password"=>"contraseña5"],
    ];
    foreach($ususarios as $usuario){
        echo "Usuario: ". $usuario["user"]. "-- Contraseña: " . $usuario["password"];
        echo "<br>";
    }    
    
    ?>
</body>
</html>