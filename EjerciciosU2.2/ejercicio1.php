<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>

<body>
    <div class="container-sm" style="padding-top: 40px;">

        <form method="post">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="nombre" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Primer apellido</label>
                <input type="apellido1" name="apellido1" class="form-control" id="exampleFormControlInput1" placeholder="Apellido1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Segundo apellido</label>
                <input type="apellido2" name="apellido2" class="form-control" id="exampleFormControlInput1" placeholder="Apellido2">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <?php
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];

    echo "Palabra1:  "
    ?>
</body>

</html>