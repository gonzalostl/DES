<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
//creo la variable palabra y un array palabras
$palabra = "";
$arrPalabras = [];
//creo un contador de consonantes y un array de consonantes
$contConsonantes = 0;
$arrConsonantes = [];
//creo un bucle for para que recorrra el texto
for ($i = 0; $i < strlen($nombre); $i++) {
//si la letra es un espacio y palabra no esta vacia(es decir contiene letras)
//mete la palabra en el array y el numero de consonantes en su correspondiente array
//y las dos variables vuelven a valer 0 y ""
    if (substr($nombre, $i, 1) == " ") {
        if ($palabra != "") {
            array_push($arrPalabras, $palabra);
            $palabra = "";
            array_push($arrConsonantes, $contConsonantes);
            $contConsonantes = 0;
        }
    } 
    //sino significa que es una letra que se va guardando en palabra y si es consonante el contador aumenta en uno
    else {
        $palabra = $palabra . substr($nombre, $i, 1);
        if (substr($nombre, $i, 1) != "a" && substr($nombre, $i, 1) != "e" && substr($nombre, $i, 1) != "i" && substr($nombre, $i, 1) != "o" && substr($nombre, $i, 1) != "u") {
            $contConsonantes++;          
        }
    }
}
//mete la ultima palabra si existe y hace lo mismo con el contador
if ($palabra != "") {
    array_push($arrPalabras, $palabra);
    array_push($arrConsonantes, $contConsonantes);
}

//con un bucle saca por pantalla la informacion pedida
for ($i = 0; $i < count($arrPalabras); $i++) {
    echo "Palabra" . ($i+1) . ": " . $arrConsonantes[$i] . " Consonantes " . strlen($arrPalabras[$i]) . " letras, ";
}

?>

</html>