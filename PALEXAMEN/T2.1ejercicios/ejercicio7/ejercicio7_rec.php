<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    //funcion para calcular la estacion
    function estacion($fecha)
    {
        $estacion = "";
        switch (date("m", strtotime($fecha))) {
            case "01":
            case "02":
            case "03":
                $estacion = "invierno";
                break;
            case "04":
            case "05":
            case "06":
                $estacion = "primavera";
                break;
            case "07":
            case "08":
            case "09":
                $estacion = "verano";
                break;
            case "10":
            case "11":
            case "12":
                $estacion = "otoño";
                break;
        }
        return $estacion;
    };

    //funcion para obtener los dias que quedan hasta que se diga 
    function diasRestantes($mes, $dia, $anio)
    {
        //guardamos el dia de hoy
        $hoy = time();

        // calculamos la fecha que querermos averiguar
        $fechaEvento = strtotime("$anio-$mes-$dia");

        // si esa ffecha ya ha pasado se le suma uno al año
        if ($fechaEvento < $hoy) {
            // Calcula la fecha del próximo año
            $anioSiguiente = $anio + 1;
            $fechaEvento = strtotime("$anioSiguiente-$mes-$dia");
        }

        //calculamos la diferencia que nos lo dara en segundos
        $diferencia = $fechaEvento - $hoy;

        // la pasamos a días
        $diasRestantes = floor($diferencia / (60 * 60 * 24));

        $horasRestantes = floor(($diferencia % (60 * 60 * 24)) / (60 * 60));
        return array('dias' => $diasRestantes, 'horas' => $horasRestantes);
    }



    //funcion para saber si el cumpleaños es finde semana
    function esFinDeSemana($fecha)
    {
        // Convierte la fecha a timestamp
        $fecha = strtotime($fecha);

        // Obtiene el número del día de la semana (0 para domingo, 6 para sábado)
        $diaDeLaSemana = date("w", $fecha);

        // Verifica si el día es sábado (6) o domingo (0)
        return ($diaDeLaSemana == 0 || $diaDeLaSemana == 6);
    }


    ?>





</head>

<body>

    <?php

    //guardamos las variables y sacamos la frase
    $nombre = $_POST["nombre"];
    $estacion = estacion($_POST["fecha"]);

    $navidad = diasRestantes(12, 25, 2023);

    $semanaSanta = diasRestantes(3, 24, 2024);

    if (esFinDeSemana($_POST["fecha"])) {
        $finde = "";
    } else {
        $finde = "no";
    }

    echo "Bienvenido " . $nombre . ", estás en " . $estacion . " quedan " . $navidad["dias"] . "  días para las vacaciones de navidad y " . $semanaSanta["dias"] . "  dias " . $semanaSanta["horas"] . " horas para vacaciones de semana santa. Tu cumpleaños " . $finde . " cae en fin de semana y es el día " . $_POST["fecha"];




    ?>
</body>

</html>