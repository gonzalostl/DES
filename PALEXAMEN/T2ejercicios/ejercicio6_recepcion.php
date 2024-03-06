<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //hacemos un array asociatio de las variables
    $partida = [
        "jug1" => $_POST["jug1"],
        "jug2" => $_POST["jug2"],
        "numpartidas" => $_POST["numpartidas"]
    ];
//creamos un array de los elemntos
    $elemento = ["piedra", "papel", "tijera"];

    
//creamos un contador de victorias
    $vic1 = 0;
    $vic2 = 0;
    //mientras los contadoras de victorias sean menores que le numero de victorias
    //se repeitra el bucle
    while(  $vic1 < $partida["numpartidas"] && $vic2 < $partida["numpartidas"]) {
        // generamos la jugada
        $jugador1 = $elemento[random_int(0, 2)];
        $jugador2 = $elemento[random_int(0, 2)];
      
    switch ($jugador1) {
        //con un switch dentro de otro sacamos las imagenes y decimos el ganador y aumentamos el cont de victorias
        case "piedra":
            echo $partida["jug1"];
            echo '<img src="img/piedra.PNG">';
            echo $partida["jug2"];
            switch ($jugador2) {
                case "piedra":
                    echo '<img src="img/piedra.PNG">';
                    echo "empate";
                    break;
                case "papel":
                    echo '<img src="img/papel.PNG">';
                    echo "gana " . $partida["jug2"];
                    $vic2++;
                    break;
                case "tijera":
                    echo '<img src="img/tijera.PNG">';
                    echo "gana " . $partida["jug1"];
                    $vic1++;
                    break;
            }
            break;

        case "papel":
            echo $partida["jug1"];
            echo '<img src="img/papel.PNG">';
            echo $partida["jug2"];
            switch ($jugador2) {
                case "piedra":
                    echo '<img src="img/piedra.PNG">';
                    echo "gana " . $partida["jug1"];
                    $vic1++;
                    break;
                case "papel":
                    echo '<img src="img/papel.PNG">';
                    echo "empate";
                    break;
                case "tijera":
                    echo '<img src="img/tijera.PNG">';
                    echo "gana " . $partida["jug2"];
                    $vic2++;
                    break;
            }
            break;
        case "tijera":
            echo $partida["jug1"];
            echo '<img src="img/tijera.PNG">';
            echo $partida["jug2"];
            switch ($jugador2) {
                case "piedra":
                    echo '<img src="img/piedra.PNG">';
                    echo "gana " . $partida["jug2"];
                    $vic2++;
                    break;
                case "papel":
                    echo '<img src="img/papel.PNG">';
                    echo "gana " . $partida["jug1"];
                    $vic1++;
                    break;
                case "tijera":
                    echo '<img src="img/tijera.PNG">';
                    echo "empate";
                    break;
            }
            break;

    }
    
    echo '<br>';
}

//sacamos por pantalla el ganador final
if ($vic1 == $partida["numpartidas"]) {
 echo "GANADOR DE LA PARTIDA ES ".$partida["jug1"];}

 else{
    echo "GANADOR DE LA PARTIDA ES ".$partida["jug2"]; 
 }



    ?>

</body>

</html>