<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Recepción</title>
</head>
<!--Los hijos se introducirán en un área de texto, en cada línea (Recordar que \n es separador de línea) 
se introduce un hijo en el siguiente formato:

Juan-12-H-S

Siendo los datos, separados por guiones ‘-’, nombre, edad, sexo y minusvalia.

Los domicilios serán igual, pero los datos distintos:

jaen-3-4-S

Siendo los datos, provincia, núm. habitaciones, piso y vivienda habitual(S/N)

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

Evaluará si puede obtener una ayuda, para obtenerla tendrá que cumplir lo siguiente:

Mayor de 35 años y casado
Sueldo mayor de 10000 y menor de 30000
Tener 2 hijos menores de 8 o uno con minusvalía
No tener casas en provincias distintas o que todas sean vivienda habitual
No tener más de dos casas

La página mostrará en color verde o rojo las condiciones dependiendo si las cumple o no 
con los datos introducidos en el formulario. (Si las cumple en verde y si no las cumple en rojo)

function cumpleDomicilio($textoCasas): Recibe el texto del texarea domicilios y verifica si cumple las 
dos condiciones ultimas condiciones, devuelve un array asociativo con las dos condiciones como claves y 
valores true o false dependiendo.

function cumpleHijos($textoHijos): Recibe el texto del textarea de los hijos y verifica si cumple la 
condición tercera y calcula la media de edad de los hijos, devuelve un array asociativo con claves cumpleCondiciones 
y media y valores respectivamente, true o false y el valor de la media de los hijos.-->

<body>
    <?php
    function cumpleDomicilio($textoCasas)
    {
        //Separo las lineas del textArea de domicilios
        $datosCasas = explode("\n", $textoCasas);

        $noprovdis = true;
        $vivhab = true;
        $nomasdoscasas = true;

        //Recorremos los datos de los domicilios para comprobar las condiciones
        foreach ($datosCasas as $domicilio) {
            //separo los datos de domicilio mediante -
            $datosD = explode("-", $domicilio);

            //Si hay un domicilio con una casa en distinta provincia es false
            if ($datosD[0] !== "jaen")
                $noprovdis = false;

            //Si hay dos viviendas habituales diferentes es false
            if ($datosD[3] == "N")
                $vivhab = false;

            //Si tiene mas de dos casas es false
            $resultado["numCasasCorrecto"] = (count($datosCasas) == $textoCasas);
            if ($resultado > 2)
                $nomasdoscasas = false;
        }
        //No tener casas en provincias distintas o que todas sean vivienda habitual
        if ($noprovdis == false || $vivhab == false)
            $resultado["domiciliosOK"] = false;
        else
            $resultado["domiciliosOK"] = true;

        //No tener más de dos casas
        if ($nomasdoscasas == true)
            $resultado["casasOK"] = true;
        else
            $resultado["casasOK"] = false;

        //Devolvemos el array asociativo
        return $resultado;
    }

    $asoArray = [
        "noprovdis" => $noprovdis,
        "vivhab" => $vivhab,
        "nomasdoscasas" => $nomasdoscasas
    ];


    $res = cumpleDomicilio($_POST['txtdomicilios']);

    var_dump($res);

    "<br>"
    ?>

    <?php

    $mayor35 = "edad";
    $casado = "casado";

    if ($mayor35 < 35) {
        echo "No puedes obtener ayuda";
    } else {
        echo "Si puedes obtener ayuda";
    }
    function cumpleHijos($textoHijos)
    {
        //Separo las lineas del textArea de hijos
        $datosHijos = explode("\n", $textoHijos);

        $hijosmenores8 = true;
        $minusvalia = true;


        //Recorremos los datos de los hijos para comprobar las condiciones
        foreach ($datosHijos as $hijos) {
            //separo los datos de domicilio mediante -
            $datosH = explode("-", $hijos);

            //Menor de 8 años es false
            if ($datosH[1] < 8)
                $hijosmenores8 = false;

            //Si no es minusválido es false
            if ($datosH[3] == 'N')
                $minusvalia = false;
        }
        //Mayor de 35 años y casado
        if ($hijosmenores8 == true || $minusvalia == true)
            $resultado["hijosOK"] = true;
        else
            $resultado["hijosOK"] = false;
        //Devolvemos el array asociativo
        return $resultado;
    }
    $res = cumpleHijos($_POST['txthijos']);

    var_dump($res);
    ?>
</body>

</html>