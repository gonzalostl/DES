<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        //con el include pongo el css elegido
        include("css" . $_POST["estilo"] . ".html");
        ?>
    </style>
</head>

<body>
    <?php
    //con el include sacamos el encabezado, cuerpo y pie elegidos
    include("encabezado" . $_POST["encabezado"] . ".html");
    include("cuerpo" . $_POST["cuerpo"] . ".html");
    include("pie" . $_POST["pie"] . ".html");
    ?>
</body>

</html>