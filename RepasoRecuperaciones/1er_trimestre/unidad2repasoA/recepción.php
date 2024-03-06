<!DOCTYPE html>
<!-- EXAMEN SUBIDA NOTA - Juan José Catalá Garrido 2º DAW -->
<?php
// Si el array _POST es nulo o la cantidad de elementos es
// menor de 1, termina la ejecución.
if(!isset($_POST) || count($_POST) < 1){
    echo "<h1>ERROR: Debe usar el formulario</h1>";
    die();
}

// Almacenamos los datos del formulario en 
// variables globales
$nombreTexto = $_POST["input-nombre-texto"];
$edad = intval($_POST["input-edad"]);
$estadoCivil = $_POST["input-estado"];
$rangoSueldo = $_POST["input-rango-sueldo"];
$nombreTexto = $_POST["input-rango-sueldo"];
$hijosTexto = $_POST["input-hijos"];
$domiciliosTexto = $_POST["input-domicilios"];


// Importamos nuestro fichero de utilidades.
require_once "utils.php";


/**
 * Recibe el texto del texarea domicilios y verifica si cumple 
 * las dos condiciones ultimas condiciones, devuelve un array asociativo
 * con las dos condiciones como claves y valores true o false dependiendo.
 * 
 */
function cumpleDomicilio($domiciliosTexto){
    $domiciliosParseados = parsearDomicilios($domiciliosTexto);

    /*
    Condiciones a evaluar:
        - No tener casas en provincias distintas o que todas sean vivienda habitual
        - No tener más de dos casas
    */
    $todasViviendaHabitual = true;
    $provinciasDistintas = false;
    // esta variable se utilizará en el bucle, para comparar
    $ultimaProvincia = null;
    foreach($domiciliosParseados as $domicilio){
      

        // Si la última provincia no es null, y las
        // provincias no son iguales
        if(isset($ultimaProvincia) && $domicilio["provincia"] != $ultimaProvincia){
            $provinciasDistintas = true;
            break;

        // Si la última provincia es NULL, actualizamos el valor a de la
        // provincia del domicilio en iteración
        } elseif(!isset($ultimaProvincia)){
            $ultimaProvincia = $domicilio["provincia"];
        }
    }
    // Evaluamos si hay más de dos casas:
    $masDeDosCasas = count($domiciliosParseados) > 2;

    $resultado = ["provinciasDistintasOTodasHabituales" => ($provinciasDistintas ||  $todasViviendaHabitual),
                "masDeDosCasas" => $masDeDosCasas];

    return $resultado;
}

/**
 * Recibe el texto del textarea de los hijos y verifica si cumple 
 * la condición tercera y calcula la media de edad de los hijos, devuelve
 * un array asociativo con claves cumpleCondiciones y media y valores respectivamente,
 * true o false y el valor de la media de los hijos.
 * 
 */
function cumpleHijos($hijosTexto){
    $hijosParseados = parsearHijos($hijosTexto);

    /* Comprobamos que se cumpla la tercera condición:
        - Tener 2 hijos menores de 8 o uno con minusvalía */

    $cantidadHijosMenoresDeOcho = 0;
    $algunoConMinusvalia = false;
    // Esta variable se utilizará en el cálculo de la media
    $sumaEdades = 0;
    foreach($hijosParseados as $hijo){
        // contamos los hijos menores de 8, para luego
        // evaluar si la cantidad equivale a 2
        if($hijo["edad"] < 14){
            $cantidadHijosMenoresDeOcho++;
        }
        // Evaluamos si alguno tiene musvalía
        if($hijo["minusvalia"] == "S"){
            $algunoConMinusvalia = true;
        }

        // Acumulamos las edades para luego hacer la media
        $sumaEdades += $hijo["edad"];
    }

    $tieneDosHijosMenoresDeOcho = $cantidadHijosMenoresDeOcho == 2;
    $mediaEdades = round($sumaEdades / count($hijosParseados));

    $resultado = ["cumpleCondiciones" => 
                ($tieneDosHijosMenoresDeOcho || $algunoConMinusvalia),
                "media" => $mediaEdades];

    return $resultado;
}



/**
 * Determina si el usuario puede optar a 
 * la ayuda.
 * 
 * Evlúa lo siguiente:
 *  - Mayor de 35 años y casado
 *  - Sueldo mayor de 10000 y menor de 30000
 * 
 */
function puedeOptarAyuda(){
    // El array GLOBALS permite acceder a las variables globales, definidass
    // fuera de la función.
    $mayorTreintaYCincoAnos = $GLOBALS["edad"] > 18;
    $casado = $GLOBALS["estadoCivil"] == "casado";
    
    $sueldoEnRangoValido = false;
    $rangoSueldoSplitted = explode("-", $GLOBALS["rangoSueldo"]);
    if(intval($rangoSueldoSplitted[0]) > 1000 && 
       intval($rangoSueldoSplitted[1]) < 30000){
        $sueldoEnRangoValido = true;
    }

    $resultadoCumpleHijos = cumpleHijos($GLOBALS["hijosTexto"]);
    $condicionHijos = $resultadoCumpleHijos["cumpleCondiciones"];

    $resultadoCumpleDomicilio = cumpleDomicilio($GLOBALS["domiciliosTexto"]);
    $condicionesDomicilio = $resultadoCumpleDomicilio["provinciasDistintasOTodasHabituales"] &&
                            $resultadoCumpleDomicilio["masDeDosCasas"] == false;

    return $mayorTreintaYCincoAnos && $sueldoEnRangoValido && $casado &&
            $condicionHijos && $condicionesDomicilio;
}

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud Ayuda</title>
    <style>
        .elegible {
            color: green;
        }
        .no-elegible{
            color: red;
        }
        h1, h2, h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Resultado solicitud</h1>
    <?php 
    if(puedeOptarAyuda()){
        echo "<h3 class='elegible'>Usted es elegible para esta ayuda!</h3>";
    } else {
        echo "<h3 class='no-elegible'>Usted NO es elegible para esta ayuda!</h3>";
    }
    
    ?>
</body>
</html>