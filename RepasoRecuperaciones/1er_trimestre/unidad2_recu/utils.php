<?php

/**
 * Determina si el formato de hoyo es válido.
 * No se evalúan la validez de los datos introducidos.
 */
function hoyoesValido($hoyoLinea)
{
    return count(explode("-", $hoyoLinea)) == 6;
}

/**
 * Recive el contenido del textarea de hoyos y crea un array
 * que contiene arrays asociativos con los datos de los hoyos
 */
function parsearHoyos($hoyosTexto)
{
    $hoyosParseados = [];
    // iteramos cada hoyo, cortando desde el salto de línea
    foreach (explode("\n", $hoyosTexto) as $hoyoLinea) {
        if (!hoyoEsValido($hoyoLinea)) {
            continue;
        }
        // separamos los datos partiendo de las guiones y 
        // metemo esos datos en un array asociativo 
        $hoyoSplitted = explode("-", $hoyoLinea);
        $hoyoParseado = [];

        $hoyoParseado["nombre"] = trim($hoyoSplitted[0]);
        $hoyoParseado["numero"] = intval(trim($hoyoSplitted[1]));
        $hoyoParseado["longitud"] = intval(trim($hoyoSplitted[2]));
        $hoyoParseado["par"] = intval(trim($hoyoSplitted[3]));
        $hoyoParseado["lago"] = strtoupper(trim($hoyoSplitted[4]));
        $hoyoParseado["estado"] = intval(trim($hoyoSplitted[5]));


        array_push($hoyosParseados, $hoyoParseado);
    }

    return $hoyosParseados;
}

// -----------------------------------------------------------------


/**
 * Determina si el formato de socios es válido.
 * No se evalúan la validez de los datos introducidos.
 */
function SocioEsValido($socioLinea)
{
    return count(explode("-", $socioLinea)) == 4;
}

/**
 * Recive el contenido del textarea de socios y crea un array
 * que contiene arrays asociativos con los datos de los socios
 */
function parsearSocios($sociosTexto)
{
    $sociosParseados = [];
    // iteramos cada socio, cortando desde el salto de línea
    foreach (explode("\n", $sociosTexto) as $socioLinea) {
        if (!domicilioEsValido($socioLinea)) {
            continue;
        }
        // separamos los datos partiendo de los guiones y 
        // metemo esos datos en un array asociativo 
        $socioSplitted = explode("-", $socioLinea);
        $socioParseado = [];

        $socioParseado["nombre"] = trim($socioSplitted[0]);
        $socioParseado["edad"] = intval(trim($socioSplitted[1]));
        $socioParseado["sexo"] = strtoupper(trim($socioSplitted[2]));
        $socioParseado["cuota"] = intval(trim($socioSplitted[3]));



        array_push($sociosParseados, $socioParseado);
    }

    return $sociosParseados;
}
