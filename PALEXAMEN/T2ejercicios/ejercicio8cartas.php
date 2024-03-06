<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php 
//creamos loa arrays de los numeros para mostrarlos por pantalla
$numCarta = ["AS",2,3,4,5,6,7,8,9,10,"J","Q","K"];
$paloCarta = ["PICAS", "TRÉBOLES", "CORAZONES", "DIAMANTES"];
//creamos los arrays para los valores del post
$numValor = ["a",2,3,4,5,6,7,8,9,10,"j","q","k"];
$paloValor = ["p", "t", "c", "d"];
?>

<div style="padding: 20px;">
    <form class="container-sm my-form" method="POST" action="ejercicio8cartas_rec.php">
        <div class="mb-3">
            <span for="carta1" class="col-sm-2 col-form-label">Carta 1:</span>
            <select class="form-select" name="carta1" id="carta1">
                <option selected>Cartas</option>
                <?php
                for ($i = 0; $i < 13; $i++) {
                    for ($j = 0; $j < 4; $j++) {

                        echo "<option value='" . ($numValor[$i].$paloValor[$j]) . "'>" . $numCarta[$i] . " de " . $paloCarta[$j] . "</option>";

                    }
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <span for="carta2" class="col-sm-2 col-form-label">Carta 2:</span>
            <select class="form-select" name="carta2" id="carta2">
                <option selected>Cartas</option>
                <?php
                for ($i = 0; $i < 13; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        echo "<option value='". ($numValor[$i].$paloValor[$j]) . "'>" . $numCarta[$i] . " de " . $paloCarta[$j] . "</option>";

                    }
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <span for="carta3" class="col-sm-2 col-form-label">Carta 3:</span>
            <select class="form-select" name="carta3" id="carta3">
                <option selected>Cartas</option>
                <?php
                for ($i = 0; $i < 13; $i++) {
                    for ($j = 0; $j < 4; $j++) {

                        echo "<option value='" . ($numValor[$i].$paloValor[$j]) . "'>" . $numCarta[$i] . " de " . $paloCarta[$j] . "</option>";

                    }
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <span for="carta4" class="col-sm-2 col-form-label">Carta 4:</span>
            <select class="form-select" name="carta4" id="carta4">
                <option selected>Cartas</option>
                <?php
                for ($i = 0; $i < 13; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        echo "<option value='" . ($numValor[$i].$paloValor[$j]) . "'>" . $numCarta[$i] . " de " . $paloCarta[$j] . "</option>";
                    }

                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <span for="carta5" class="col-sm-2 col-form-label">Carta 5:</span>
            <select class="form-select" name="carta5" id="carta5">
                <option selected>Cartas</option>
                <?php
                for ($i = 0; $i < 13; $i++) {
                    for ($j = 0; $j < 4; $j++) {

                        echo "<option value='" . ($numValor[$i].$paloValor[$j]) . "'>" . $numCarta[$i] . " de " . $paloCarta[$j] . "</option>";

                    }
                }
                ?>
            </select>
        </div>
        <button class='btn btn-primary' type='submit'>Enviar</button>

    </form>
</div>