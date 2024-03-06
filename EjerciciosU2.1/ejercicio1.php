<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <?php 
    //primero creo los 3 dados que son los que voy a lanzar por pantalla
    $dado1 = random_int (1,6);
    $dado2 = random_int (1,6);
    $dado3 = random_int (1,6);

    //ahora creamos un switch por dado
    //dado1

    switch ($dado1) {
        case 1:
            echo '<img src="dado1.jpg">';
            break;
        case 2:
            echo '<img src="dado2.jpg">';
            break;
        case 3:
            echo '<img src="dado3.jpg">';
            break;
        case 4:
            echo '<img src="dado4.jpg">';
            break;
        case 5:
            echo '<img src="dado5.jpg">';
            break;
        case 6:
            echo '<img src="dado6.jpg">';
    }

    //dado2

    switch ($dado2) {
        case 1:
            echo '<img src="dado1.jpg">';
            break;
        case 2:
            echo '<img src="dado2.jpg">';
            break;
        case 3:
            echo '<img src="dado3.jpg">';
            break;
        case 4:
            echo '<img src="dado4.jpg">';
            break;
        case 5:
            echo '<img src="dado5.jpg">';
            break;
        case 6:
            echo '<img src="dado6.jpg">';
    }

    //dado3

    switch ($dado3) {
        case 1:
            echo '<img src="dado1.jpg">';
            break;
        case 2:
            echo '<img src="dado2.jpg">';
            break;
        case 3:
            echo '<img src="dado3.jpg">';
            break;
        case 4:
            echo '<img src="dado4.jpg">';
            break;
        case 5:
            echo '<img src="dado5.jpg">';
            break;
        case 6:
            echo '<img src="dado6.jpg">';
    }

    //ahora creamos unas funciones if para que nos salga por pantalla si hay escalera, pareja, trio o poker
    
    
    if ($dado1 == 1 && $dado2 == 2 && $dado3 == 3 || $dado1 == 3 && $dado2 == 2 && $dado3 == 1 || 
    $dado1 == 2 && $dado2 == 3 && $dado3 == 4 || $dado1 == 4 && $dado2 == 3 && $dado3 == 2 || 
    $dado1 == 4 && $dado2 == 5 && $dado3 == 6 || $dado1 == 6 && $dado2 == 5 && $dado3 == 4){
        echo "<br> Esta tirada de dados es una escalera";
    }else if ($dado1 == $dado2 && $dado2 == $dado3 && $dado1 == 1){
        echo "<br> Esta tirada es un poker";
    }else if ($dado1 == $dado2 && $dado2 == $dado3 ){
        echo "<br> Esta tirada de dados es un trío";
    }else  if ($dado1 == $dado2 || $dado1 == $dado3 || $dado2 == $dado3){
        echo "<br> Hay una pareja en esta tirada de dados";
    }

    ?>
</body>
</html>