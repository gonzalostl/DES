<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //creamos el array asociativo
    $personaje = [
        "nomjugador" => $_POST["nomjugador"],
        "raza" => $_POST["raza"],
        "clase" => $_POST["clase"],
        "fuerza" => $_POST["fuerza"],
        "destreza" => $_POST["destreza"],
        "constitucion" => $_POST["constitucion"],
        "inteligencia" => $_POST["inteligencia"],
        "sabiduria" => $_POST["sabiduria"],
        "carisma" => $_POST["carisma"],
    ];
    //si la media es mayor de 15 saldria el error y un boton para redireccionar a la pagina anterior 
    if (($personaje["fuerza"] + $personaje["destreza"] + $personaje["constitucion"] + $personaje["sabiduria"] + $personaje["inteligencia"] + $personaje["carisma"]) / 6 > 15) {
        echo "ERROR LA MEDIA DE LAS CARACTERÍSTICAS ES MAYOR QUE 15";
        echo '<form method="post" action="ejercicio5.php">';
        echo '<div class="container-sm col-12 pt-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>';
        echo '</form>';
        return;
    }



    ?>

    <h2>Detalles del Personaje</h2>
    <?php
    //sacamos por pantalla la imagen correspondiente con un switch
    if ($personaje["raza"] == "Human") {

        switch ($personaje["clase"]) {
            case "Artificier":
                echo '<img src="img/humano_artificier.PNG">';
                break;
            case "Barbarian":
                echo '<img src="img/humano_barbarian.PNG">';
                break;
            case "Bard":
                echo '<img src="img/humano_bard.PNG">';
                break;
            case "Cleric":
                echo '<img src="img/humano_cleric.PNG">';
                break;
            case "Druid":
                echo '<img src="img/humano_druid.PNG">';
                break;
            case "Fighter":
                echo '<img src="img/figther.PNG">';
                break;
            case "Monk":
                echo '<img src="img/humano_monk.PNG">';
                break;
            case "Paladin":
                echo '<img src="img/humano_paladin.PNG">';
                break;
            case "Ranger":
                echo '<img src="img/humano_ranger.PNG">';
                break;
            case "Rogue":
                echo '<img src="img/humano_rouge.PNG">';
                break;
            case "Sorcerer":
                echo '<img src="img/humano_sorcerer.PNG">';
                break;
            case "Wizard":
                echo '<img src="img/humano_wizard.PNG">';
                break;
        }
    } elseif ($personaje["raza"] == "Enano") {

        switch ($personaje["clase"]) {
            case "Artificier":
                echo '<img src="img/enano_a.PNG">';
                break;
            case "Barbarian":
                echo '<img src="img/enano_b.PNG">';
                break;
            case "Bard":
                echo '<img src="img/enano_ba.PNG">';
                break;
            case "Cleric":
                echo '<img src="img/enano_c.PNG">';
                break;
            case "Druid":
                echo '<img src="img/enano_d.PNG">';
                break;
            case "Fighter":
                echo '<img src="img/enano_f.PNG">';
                break;
            case "Monk":
                echo '<img src="img/enano_m.PNG">';
                break;
            case "Paladin":
                echo '<img src="img/enano_p.PNG">';
                break;
            case "Ranger":
                echo '<img src="img/enano_r.PNG">';
                break;
            case "Rogue":
                echo '<img src="img/enano_ro.PNG">';
                break;
            case "Sorcerer":
                echo '<img src="img/enano_s.PNG">';
                break;
            case "Wizard":
                echo '<img src="img/enano_w.PNG">';
                break;
        }
    } else {
        echo '<img src="img/personaje.PNG">';
    }
    ?>
    <table border="1">

        <?php
        //hacemos que nos muestre las caractesísticas del array asociativo en una tabla
        foreach ($personaje as $caracteristica => $valor) :
        ?>
            <tr>
                <th>
                    <?php echo $caracteristica; ?>
                </th>
                <td>
                    <?php echo $valor; ?>
                </td>

            </tr>

        <?php endforeach; ?>
    </table>
    </table>


</body>

</html>