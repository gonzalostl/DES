<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
<form method="post" action="ejercicio6_recepcion.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre jugador 1: </span>
        <input type="text" name="jug1" class="form-control" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre jugador 2: </span>
        <input type="text" name="jug2" class="form-control" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Numero de victorias: </span>
        <input type="text" name="numpartidas" class="form-control" >
    </div>
    <div class="container-sm col-12 pt-3">
                        <!-- este boton lanza el formulario al ser tipo submit -->
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>

                </form>

</body>
</html>
