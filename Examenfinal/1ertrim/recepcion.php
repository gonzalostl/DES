<?php
function esViable($textoSocios, $textoHoyos, $numSocios, $escuela)
{
    $condiciones = array();

    // Conversion de texto de Hoyos y Socios en arrays
    $arrayHoyos = explode("\n", $textoHoyos);
    $arraySocios = explode("\n", $textoSocios);

    // Número de socios se corresponde con los datos de socios
    $numSociosArray = count($arraySocios);
    $condiciones['Numero de socios correcto'] = ($numSociosArray == $numSocios);

    // Más de 10 y menos de 18 hoyos en un estado mejor de 6
    $hoyosValidos = 0;
    foreach ($arrayHoyos as $hoyo) {
        $datosHoyo = explode('-', $hoyo);
        $estado = intval($datosHoyo[5]);
        if ($estado > 6) {
            $hoyosValidos++;
        }
    }
    $condiciones['Hoyos validos'] = ($hoyosValidos > 10 && $hoyosValidos < 18);

    // Si tiene escuela de golf, debe tener al menos 20 socios
    if ($escuela == 1) {
        $condiciones['Socios de la escuela'] = ($numSociosArray >= 20);
    } else {
        $condiciones['Socios de la escuela'] = true; // Si no tiene escuela, se cumple automáticamente
    }

    // Cuotas de socios femeninos más de 1000 euros al mes
    // Cuotas de socios masculinos más de 12000 euros al mes
    $cuotasValidas = array('Femenino' => true, 'Masculino' => true);
    foreach ($arraySocios as $socio) {
        $datosSocio = explode('-', $socio);
        $sexo = trim($datosSocio[2]);
        $cuota = intval($datosSocio[3]);

        if ($sexo == 'H') {
            if ($cuota < 12000) {
                $cuotasValidas['Masculino'] = false;
            }
        } elseif ($sexo == 'M') {
            if ($cuota < 1000) {
                $cuotasValidas['Femenino'] = false;
            }
        }
    }
    $condiciones['Cuotas mujeres'] = $cuotasValidas['Femenino'];
    $condiciones['Cuotas hombres'] = $cuotasValidas['Masculino'];

    // Media de edad entre 25 y 55 años
    $edades = array();
    foreach ($arraySocios as $socio) {
        $datosSocio = explode('-', $socio);
        $edad = intval($datosSocio[1]);
        $edades[] = $edad;
    }
    $mediaEdad = array_sum($edades) / count($edades);
    $condiciones['Media de edad'] = ($mediaEdad >= 25 && $mediaEdad <= 55);

    return $condiciones;
}

// Obtener datos del formulario
$textoSocios = $_POST['socios'] ?? '';
$textoHoyos = $_POST['hoyos'] ?? '';
$numSocios = $_POST['num_socios'] ?? '';
$escuela = isset($_POST['escuela']) ? 1 : 0;

$resultado = esViable($textoSocios, $textoHoyos, $numSocios, $escuela);

// Mostrar resultados
echo "<h1>Viabilidad del Campo de Golf</h1>";

echo "<h2>Condiciones:</h2>";
echo "<ul>";
foreach ($resultado as $condicion => $cumple) {
    $color = $cumple ? 'green' : 'red';
    $mensaje = $cumple ? 'Cumple' : 'No cumple';
    echo "<li style='color: $color'>$condicion: $mensaje</li>";
}
echo "</ul>";
