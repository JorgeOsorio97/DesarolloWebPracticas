<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(array_key_exists('contrato', $_GET)){
            $contrato = $_GET['contrato'];
            echo $contrato;
        }
    ?>
    <form action="./P10.php" method="get">
        <label for="contrato">Nombre</label>
        <input type="text" name="contrato" id="contrato">
        <textarea name="contrato" id="contrato" cols="30" rows="10">En la ciudad de [........], se acuerda entre la Empresa [........] representada por el Sr. [ ] en su carácter
de Apoderado, con domicilio en la calle [........] y el Sr. [........], futuro empleado con domicilio en [
],
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la Ley
de Contrato de Trabajo No. 20744.</textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>