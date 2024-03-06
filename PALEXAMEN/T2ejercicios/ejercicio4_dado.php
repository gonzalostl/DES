<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Primero creamos los tres dados
    $dado1 = random_int(1, 6);
    $dado2 = random_int(1, 6);
    $dado3 = random_int(1, 6);
    //Sacamos por pantalla la imagen del dado 1 con un switch
    //dependiendo del numero del dado saca la imagen correspondiente
    switch ($dado1) {
        case 1:
            echo '<img src="img/1.PNG">';
            break;
        case 2:
            echo '<img src="img/2.PNG">';
            break;
        case 3:
            echo '<img src="img/3.PNG">';
            break;
        case 4:
            echo '<img src="img/4.PNG">';
            break;
        case 5:
            echo '<img src="img/5.PNG">';
            break;
        case 6:
            echo '<img src="img/6.PNG">';
            break;
    }
    //Sacamos por pantalla la imagen del dado 2 con un switch
    //dependiendo del numero del dado saca la imagen correspondiente
    switch ($dado2) {
        case 1:
            echo '<img src="img/1.PNG">';
            break;
        case 2:
            echo '<img src="img/2.PNG">';
            break;
        case 3:
            echo '<img src="img/3.PNG">';
            break;
        case 4:
            echo '<img src="img/4.PNG">';
            break;
        case 5:
            echo '<img src="img/5.PNG">';
            break;
        case 6:
            echo '<img src="img/6.PNG">';
            break;
    }
    //Sacamos por pantalla la imagen del dado 2 con un switch
    //dependiendo del numero del dado saca la imagen correspondiente
    switch ($dado3) {
        case 1:
            echo '<img src="img/1.PNG">';
            break;
        case 2:
            echo '<img src="img/2.PNG">';
            break;
        case 3:
            echo '<img src="img/3.PNG">';
            break;
        case 4:
            echo '<img src="img/4.PNG">';
            break;
        case 5:
            echo '<img src="img/5.PNG">';
            break;
        case 6:
            echo '<img src="img/6.PNG">';
            break;
    }
    //guardamos los dados en un array 
    $dados = [$dado1, $dado2, $dado3];
    //ordenamos el array con un sort
    sort($dados);
    //creamos el contador escalera
    $escalera = 0;
    //recorremos con un for y vemos si es escalera
    for ($i = 1; $i < 3; $i++) {
        if ($dados[$i - 1] + 1 == $dados[$i]) {
            $escalera++;
        }
    }
    //si el contador escalera es igual a 2 significa que es escalera por lo tanto lo sacamos por pantalla
    if ($escalera == 2) {
        echo "<br>ESCALERA";
    }
    //Comprobamos si han salido los 3 dados iguales
    if ($dado1 == $dado2 && $dado3 == $dado1) {
        //si es asi y es uno sacamos por pantalla póker
        if ($dado1 == 1) {
            echo "<br>PÓKER";
        }
        //si no es uno sacamos TRÍO
        else {
            echo "<br>TRÍO";
        }
    }


    //Hacemos un elseif para que cuando sea trio o poker no se ejecute el codigo de pareja
    //si alguno de dos dados son iguales y no hay trio ni poker sacamos por pantalla PAREJA
    elseif ($dado1 == $dado2 || $dado1 == $dado3 || $dado2 == $dado3) {
        echo "<br>PAREJA";
    }

    ?>
</body>

</html>