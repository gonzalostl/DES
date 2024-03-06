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
</head>

<body>
    <form method="post" action="ejercicio6_rec.php">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">filas: </span>
            <select name="filas" class="form-select col-sm-10" aria-label="filas">
                <option selected>Seleciona las filas</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i <11; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">columnas: </span>
            <select name="columnas" class="form-select col-sm-10" aria-label="columnas">
                <option selected>Seleciona las columnas</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 11; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Color Fondo: </span>
            <select name="fondo" class="form-select col-sm-10" aria-label="columnas">
                <option selected>Seleciona el color de fondo</option>
                <option >Azul</option>
                <option >Verde</option>
                <option >Rojo</option>
                <option >Negro</option>
                <option >Blanco</option>               
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Color letra: </span>
            <select name="letra" class="form-select col-sm-10" aria-label="columnas">
                <option selected>Seleciona el color de letra</option>
                <option >Azul</option>
                <option >Verde</option>
                <option >Rojo</option>
                <option >Negro</option>
                <option >Blanco</option>               
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">otras opciones :
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Artificier" id="flexCheckDefault"
                        name="sexo">
                    <label class="form-check-label" for="flexCheckDefault">
                        Sexo
                    </label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Barbarian" id="flexCheckChecked" name="edad">
                    <label class="form-check-label" for="flexCheckChecked">
                        edad
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bard" id="flexCheckChecked"
                        name="observaciones">
                    <label class="form-check-label" for="flexCheckChecked">
                        observaciones
                    </label>
                </div>
            </span>
        </div>
        <div class="container-sm col-12 pt-3">
            <!-- este boton lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>
</body>

</html>