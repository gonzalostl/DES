<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //guardamos las cartas en variables y las metemos en un array
    $carta1 = $_POST["carta1"];
    $carta2 = $_POST["carta2"];
    $carta3 = $_POST["carta3"];
    $carta4 = $_POST["carta4"];
    $carta5 = $_POST["carta5"];
    $jugada = [$carta1, $carta2, $carta3, $carta4, $carta5];

    //sacamos por pantalla las fotos
    echo '<img src="img/' . $carta1 . '.PNG">';
    echo '<img src="img/' . $carta2 . '.PNG">';
    echo '<img src="img/' . $carta3 . '.PNG">';
    echo '<img src="img/' . $carta4 . '.PNG">';
    echo '<img src="img/' . $carta5 . '.PNG">';

    //creamos las variables contador y color
    $cont = 0;
    $color = false;
    //con el for comparamos el array y so todos los palos son iguales el contador aumenta
    // y llegara a 4
    for ($i = 1; $i < 5; $i++) {
        if (substr($jugada[$i], -1) == substr($jugada[($i - 1)], -1)) {
            $cont++;
        }
    }
    //eso significa que es color por lo que color es true
    //y saca por pantalla color
    if ($cont == 4) {
        $color = true;
    }

    //quitamos los palos ded las vairables
    for ($i = 0; $i < 5; $i++) {
        $jugada[$i] = str_replace("p", '', $jugada[$i]);
        $jugada[$i] = str_replace("t", '', $jugada[$i]);
        $jugada[$i] = str_replace("c", '', $jugada[$i]);
        $jugada[$i] = str_replace("d", '', $jugada[$i]);
    }
    //contamos los valores iguales 
    $contValores = array_count_values($jugada);

    // si hay dos y tres iguales significa que es full
    if (in_array(2, $contValores) && in_array(3, $contValores)) {
        //hacemos que full sea true y saca por pantalla full house
        $full = true;
        echo "FULL HOUSE";
    }

    for ($i = 0; $i < 5; $i++) {
        switch ($jugada[$i]) {
            case "a":
                $jugada[$i] = "1";
                break;
            case "j":
                $jugada[$i] = "11";
                break;
            case "q":
                $jugada[$i] = "12";
                break;
            case "k":
                $jugada[$i] = "13";
                break;
        }
    }


    sort($jugada);
    $escalera=0;
    $escaleraTrue = false;
    for ($i = 1; $i < 5; $i++) {
        if($jugada[$i-1]+1==$jugada[$i]){
            $escalera++;
        }
    }
    if ($escalera==4){
        $escaleraTrue = true;
    }
if($color == true && $escaleraTrue == true){
    echo "ESCALERA DE COLOR";
}
elseif($color==true){
    echo "COLOR";
}



    ?>
</body>

</html>