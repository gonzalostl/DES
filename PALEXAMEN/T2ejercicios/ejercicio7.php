<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<body>
    
<form method="post" action="ejercicio7_recepcion.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre: </span>
        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <h2>SEXO</h2>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value= "hombre">
        <label class="form-check-label" for="flexRadioDefault2">
        hombre
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" value= "mujer">
        <label class="form-check-label" for="flexRadioDefault2">
        mujer
        </label>
    </div>
    <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Edad: </span>
                <select name="edad" class="form-select col-sm-10" aria-label="edad">
                    <option selected>Seleciona tu edad</option>
                    <?php
                    //Creamos con un bucle todas las opciones
                    for ($i = 1; $i < 141; $i++) {
                        echo "<option value='$i'>$i</option>\n";
                    }
                    ?>
                </select>
            </div>
    <div class="input-group mb-3">
    <div class="input-group mb-3">
        <label for="customRange1" class="form-label">sueldo</label>
        <input type="range" name="sueldo" class="form-range" id="customRange1" min="0" max="120000" step="100">
    </div>   
    <div class="container-sm col-12 pt-3">
                        <!-- este boton lanza el formulario al ser tipo submit -->
                        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
 
</body>
</html>