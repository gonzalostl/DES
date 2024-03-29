<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container-sm" style="padding-top: 40px;">

        <!-- El foromulario envia -->

        <form method="post" action="Ejemplo3FormularioRecepcion.php">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Telefono:</span>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Edad:</span>
                <select name="edad" class="form-select" aria-label="edad">
                    <option selected>Selecciona tu edad</option>
                    <?php
                    //creamos con un bucle con todas las opciones
                    for ($i = 1; $i < 141; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-12">

<!-- Este boton lanza el formulario al ser tipo submit-->

                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form>

    </div>

</body>

</html>