<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post" action="ejercicio9rec.php">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Encabezado: </span>
        <select name="encabezado" class="form-select col-sm-10" aria-label="encabezado">
            <option value = 1 >Tipos de Datos</option>
            <option value = 2 >Página Principal</option>
            <option value = 3 >Verde y Natural</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cuerpo: </span>
        <select name="cuerpo" class="form-select col-sm-10" aria-label="Cuerpo">
            <option value = 1 >Programacion</option>
            <option value = 2 >Historia</option>
            <option value = 3 >Fisica</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Pie: </span>
        <select name="pie" class="form-select col-sm-10" aria-label="pie">
            <option value = 1 >Normal</option>
            <option value = 2 >Colorido</option>
            <option value = 3 >Simple</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Estilo: </span>
        <select name="estilo" class="form-select col-sm-10" aria-label="Estilo">
            <option value = 1 >Centrado</option>
            <option value = 2 >A la izquierda</option>
            <option value = 3 >A la derecha</option>
        </select>
    </div>
    <div class="container-sm col-12 pt-3">
            <!-- este boton lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>


    </form>
</body>

</html>