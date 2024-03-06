<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("funciones-html.php");
    ?>
</head>

<body>
    <?php
    //cambiamos el color al ingles para que nos lo detecte
    switch ($_POST["fondo"]) {
        case "Azul":
            $_POST["fondo"] = "blue";
            break;
        case "Verde":
            $_POST["fondo"] = "green";
            break;
        case "Rojo":
            $_POST["fondo"] = "red";
            break;
        case "Negro":
            $_POST["fondo"] = "black";
            break;
        case "Blanco":
            $_POST["fondo"] = "white";
            break;
    }
    switch ($_POST["letra"]) {
        case "Azul":
            $_POST["letra"] = "blue";
            break;
        case "Verde":
            $_POST["letra"] = "green";
            break;
        case "Rojo":
            $_POST["letra"] = "red";
            break;
        case "Negro":
            $_POST["letra"] = "black";
            break;
        case "Blanco":
            $_POST["letra"] = "white";
            break;
    }
    //creamos el css
    ?>
    <style>
        table.class {
    background-color: <?php echo $_POST["fondo"]; ?>;
    color: <?php echo $_POST["letra"]; ?>;
}
    </style>

    <?php
    //Implementamos las funciones
    crearTabla($_POST["filas"], $_POST["columnas"], $_POST["fondo"], $_POST["letra"]);
    if (!empty($_POST["sexo"])) {
        crearSexo();
    }
    echo '<br>';
    if (!empty($_POST["edad"])) {
        crearEdad();
    }
    if (!empty($_POST["observaciones"])) {
        crearObservaciones();
    }

    ?>
</body>

</html>