<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>

<body>

    <div class="container-sm" style="padding-top: 40px;">

        <!-- El foromulario envia -->

        <form method="post">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Jugador 1 : </span>
                <input type="text" name="jugador1" class="form-control" placeholder="Jugador1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Jugador 2:</span>
                <input type="text" name="jugador2" class="form-control" placeholder="Jugador2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Victorias para terminar:</span>
                <input type="text" name="victorias" class="form-control" placeholder="victorias">
            </div>

            <div class="col-12">

                <!-- Este boton lanza el formulario al ser tipo submit-->

                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form>

    </div>

    <?php
    //primero creo los 3 dados que son los que voy a lanzar por pantalla
    $piedra = random_int(1, 6);
    $papel = random_int(1, 6);
    $tijera = random_int(1, 6);

    //ahora creamos un switch por objeto
    //piedra

    switch ($piedra) {
        case 1:
            echo '<img src="piedra.jpg">';
            break;
    }

    //papel

    switch ($papel) {
        case 1:
            echo '<img src="papel.jpg">';
            break;
    }

    //tijera

    switch ($tijera) {
        case 1:
            echo '<img src="tijera.jpg">';
            break;
    }
