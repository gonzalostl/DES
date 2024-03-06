<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>

        <div class="container-sm col-12 pt-3">
            <!-- este boton lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</body>


<?php
//guardo en la variable nombre el valor del nombre
$nombre = strtolower($_POST["nombre"]);
//le quitamos los espacios del final (rtrim) y los del inicio (ltrim)
$nombre = rtrim($nombre);
$nombre = ltrim($nombre);
//la convierto a array con el explode
$nombre = explode(" ", $nombre);
//creo un contador de palabras 
$cont = 0;
//recorro el array
for ($i = 0; $i < count($nombre); $i++) {
    if ($nombre[$i] != "") {
        $cont++;
        //cuento el numero de letras de cada palabra
        $num_letras = strlen($nombre[$i]);
        //elimino las vocales
        $consonantes = str_replace("a", "", $nombre[$i]);
        $consonantes = str_replace("e", "", $consonantes);
        $consonantes = str_replace("u", "", $consonantes);
        $consonantes = str_replace("o", "", $consonantes);
        $consonantes = str_replace("i", "", $consonantes);
        //cuento las consonantes
        $num_consonantes = strlen($consonantes);
        //saco por pantalla la frase 
        echo "Palabra" . ($cont) . ": " . $num_consonantes . " Consonantes " . $num_letras . " letras, ";

    }

}


?>

</html>