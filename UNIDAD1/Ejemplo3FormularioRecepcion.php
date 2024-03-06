<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de datos</title>
</head>

<body>

    <?php
        var_dump($_POST);

        echo "Han llegado los datos del cliente<br>";
        echo "Nombre: " .$_POST["nombre"].", Teléfono: " .$_POST["telefono"].", Edad: ".$_POST["edad"]
        
    ?>




</body>

</html>