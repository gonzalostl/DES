<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container-sm" style="padding-top: 40px;">

        <!-- El foromulario envia -->

        <form method="post">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre del personaje: </span>
                <input type="text" name="nombre" class="form-control" placeholder="Nombrepersonaje">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clase:</span>
                <input type="text" name="clase" class="form-control" placeholder="Clase">
            </div>

            <div class="input-group mb-3">Nivel:</span>
                <input type="text" name="nivel" class="form-control" placeholder="Nivel">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Raza:
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Dracónido
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Elfo </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Enano
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Gnomo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Humano
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Mediano
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Semielfo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Semiorco
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Tiflin
                </label>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Transfondo:</span>
                <input type="text" name="transfondo" class="form-control" placeholder="Transfondo">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Alineamiento:</span>
                <input type="text" name="alineamiento" class="form-control" placeholder="Alineamiento">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre del Jugador:</span>
                <input type="text" name="nombrejugador" class="form-control" placeholder="NombreJugador">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Puntos de experiencia:</span>
                <input type="text" name="px" class="form-control" placeholder="Puntos de experiencia">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Edad:</span>
                <input type="text" name="edad" class="form-control" placeholder="Edad">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Ojos:</span>
                <input type="text" name="ojos" class="form-control" placeholder="Ojos">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Altura:</span>
                <input type="text" name="altura" class="form-control" placeholder="Altura">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Piel:</span>
                <input type="text" name="piel" class="form-control" placeholder="Piel">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Peso:</span>
                <input type="text" name="peso" class="form-control" placeholder="Peso">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Pelo:</span>
                <input type="text" name="pelo" class="form-control" placeholder="Pelo">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Aptitud mágica:</span>
                <input type="text" name="aptitud" class="form-control" placeholder="Aptitud mágica">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Cd tirada de salvación de conjuros:</span>
                <input type="text" name="cd" class="form-control" placeholder="Cd tirada de salvación de conjuros">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Bonificador de ataque de conjuros:</span>
                <input type="text" name="bonificador" class="form-control" placeholder="Bonificador de ataque de conjuros">
            </div>

            <div class="col-12">

                <!-- Este boton lanza el formulario al ser tipo submit-->

                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form>

    </div>
    <?php
    if (!empty($_POST)) {
        echo "$_POST[nombre] 's adrees is $_POST[direccion]";
    }

    ?>
</body>

</html>