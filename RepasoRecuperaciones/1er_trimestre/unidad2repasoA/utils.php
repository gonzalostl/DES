<?php 
// EXAMEN SUBIDA NOTA - Juan José Catalá Garrido 2º DAW

/*
Este fichero de utilidad nos permitirá parsear los hijos
y domicilios en forma de un array asociativo, para operar 
con ellos de una forma más fácil.
*/



/**
 * Determina si el formato de un hijo es válido.
 * No se evalúan la validez de los datos introducidos.
 */
function hijoEsValido($hijoLinea){
    return count(explode("-", $hijoLinea)) == 4; 
}

/**
 * Recive el contenido del textarea de hijos y crea un array
 * que contiene arrays asociativos con los datos de los hijos
 */
function parsearHijos($hijosTexto){
    $hijosParseados = [];
    // iteramos cada hijo, cortando desde el salto de línea
    foreach(explode("\n", $hijosTexto) as $hijoLinea){
        if(!hijoEsValido($hijoLinea)){
            continue;
        }
            // separamos los datos partiendo de las guiones y 
            // metemo esos datos en un array asociativo 
            $hijoSplitted = explode("-", $hijoLinea);
            $hijoParseado = [];

            $hijoParseado["nombre"] = trim($hijoSplitted[0]); 
            $hijoParseado["edad"] = intval(trim($hijoSplitted[1])); 
            $hijoParseado["sexo"] = strtoupper(trim($hijoSplitted[2])); 
            $hijoParseado["minusvalia"] = strtoupper(trim($hijoSplitted[3])); 
        

            array_push($hijosParseados, $hijoParseado);
    }

    return $hijosParseados;
}

// -----------------------------------------------------------------


/**
 * Determina si el formato de un domicilio es válido.
 * No se evalúan la validez de los datos introducidos.
 */
function domicilioEsValido($domicilioLinea){
    return count(explode("-", $domicilioLinea)) == 4; 
}

/**
 * Recive el contenido del textarea de domicilios y crea un array
 * que contiene arrays asociativos con los datos de los domicilios
 */
function parsearDomicilios($domiciliosTexto){
    $domiciliosParseados = [];
    // iteramos cada domicilio, cortando desde el salto de línea
    foreach(explode("\n", $domiciliosTexto) as $domicilioLinea){
        if(!domicilioEsValido($domicilioLinea)){
            continue;
        }
            // separamos los datos partiendo de los guiones y 
            // metemo esos datos en un array asociativo 
            $domicilioSplitted = explode("-", $domicilioLinea);
            $domicilioParseado = [];

            $domicilioParseado["provincia"] = trim($domicilioSplitted[0]); 
            $domicilioParseado["numHabitaciones"] = intval(trim($domicilioSplitted[1])); 
            $domicilioParseado["piso"] = intval(trim($domicilioSplitted[2])); 
            $domicilioParseado["viviendaHabitual"] = strtoupper(trim($domicilioSplitted[3])); 
        

            array_push($domiciliosParseados, $domicilioParseado);
    }

    return $domiciliosParseados;
}


?>