<!DOCTYPE html>
<html lang="en">

<head>

    <title>ejercicio10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-sm col-sm" style="padding-top:40px;">
        
        <form method="post">
            
            <div class="input-group-sm">
                <span class="input-group-text" id="basic-addon1">Asignatura: </span>
                <input type="text" name="A1" class="form-control" placeholder="Asignatura">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota1: </span>
                <input type="number" step="0.001" name="nota1A1" class="form-control" placeholder="nota1">
                <span class="input-group-text" id="basic-addon1">Nota2: </span>
                <input type="number" step="0.001" name="nota2A1" class="form-control" placeholder="nota2">
                <span class="input-group-text" id="basic-addon1">Nota3: </span>
                <input type="number" step="0.001" name="nota3A1" class="form-control" placeholder="nota3">
                <span class="input-group-text" id="basic-addon1">Nota4: </span>
                <input type="number" step="0.001" name="nota4A1" class="form-control" placeholder="nota4">
                <span class="input-group-text" id="basic-addon1">Nota5: </span>
                <input type="number" step="0.001" name="nota5A1" class="form-control" placeholder="nota5">
            </div>
            
            <div class="input-group-sm">
                <span class="input-group-text" id="basic-addon1">Asignatura: </span>
                <input type="text" name="A2" class="form-control" placeholder="Asignatura">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota1: </span>
                <input type="number" step="0.001" name="nota1A2" class="form-control" placeholder="nota1">
                <span class="input-group-text" id="basic-addon1">Nota2: </span>
                <input type="number" step="0.001" name="nota2A2" class="form-control" placeholder="nota2">
                <span class="input-group-text" id="basic-addon1">Nota3: </span>
                <input type="number" step="0.001" name="nota3A2" class="form-control" placeholder="nota3">
                <span class="input-group-text" id="basic-addon1">Nota4: </span>
                <input type="number" step="0.001" name="nota4A2" class="form-control" placeholder="nota4">
                <span class="input-group-text" id="basic-addon1">Nota5: </span>
                <input type="number" step="0.001" name="nota5A2" class="form-control" placeholder="nota5">
            </div>
            
            <div class="input-group-sm">
                <span class="input-group-text" id="basic-addon1">Asignatura: </span>
                <input type="text" name="A3" class="form-control" placeholder="Asignatura">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota1: </span>
                <input type="number" step="0.001" name="nota1A3" class="form-control" placeholder="nota1">
                <span class="input-group-text" id="basic-addon1">Nota2: </span>
                <input type="number" step="0.001" name="nota2A3" class="form-control" placeholder="nota2">
                <span class="input-group-text" id="basic-addon1">Nota3: </span>
                <input type="number" step="0.001" name="nota3A3" class="form-control" placeholder="nota3">
                <span class="input-group-text" id="basic-addon1">Nota4: </span>
                <input type="number" step="0.001" name="nota4A3" class="form-control" placeholder="nota4">
                <span class="input-group-text" id="basic-addon1">Nota5: </span>
                <input type="number" step="0.001" name="nota5A3" class="form-control" placeholder="nota5">
            </div>
            <div class="col-12">
                
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form>


        <?php


        //Dentro del php es donde se reciben los datos del post
        //La función if para evitar los warningns en pantalla hasta que no se ejecute.
        if (!empty($_POST)) {

            //aqui recogemos los valores de las notas y se calculs la media
            $mediaA1 = (float)($_POST["nota1A1"] + $_POST["nota2A1"] + $_POST["nota3A1"] + $_POST["nota4A1"] + $_POST["nota5A1"]) / 5;
            $mediaA2 = (float)($_POST["nota1A2"] + $_POST["nota2A2"] + $_POST["nota3A2"] + $_POST["nota4A2"] + $_POST["nota5A2"]) / 5;
            $mediaA3 = (float)($_POST["nota1A3"] + $_POST["nota2A3"] + $_POST["nota3A3"] + $_POST["nota4A3"] + $_POST["nota5A3"]) / 5;

            //sacamos las medias por pantalla redondeandolas al primer decimal
            echo "La nota media de " . $_POST["A1"] . " es : " . round($mediaA1, 1) . "<br>";
            echo "La nota media de " . $_POST["A2"] . " es : " . round($mediaA2, 1) . "<br>";
            echo "La nota media de " . $_POST["A3"] . " es : " . round($mediaA3, 1) . "<br>";
            
        }
        ?>

    </div>

</body>

</html>