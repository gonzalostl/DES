<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container-sm" style="padding-top: 40px;">

        <!-- El foromulario envia -->

        <form method="post" >

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Numero1: </span>
                <input type="num" name="numero1" class="form-control" placeholder="Numero 1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Numero2:</span>
                <input type="num" name="numero2" class="form-control" placeholder="Numero 2">
            </div>

            <div class="col-12">

                <!-- Este boton lanza el formulario al ser tipo submit-->

                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form>

    </div>
    <?php
    $num1 = (int) $_POST["numero1"];
    $num2 = (float) $_POST["numero2"];

    echo $num1. "<br>";
    echo round($num2);
    ?>
</body>

</html>