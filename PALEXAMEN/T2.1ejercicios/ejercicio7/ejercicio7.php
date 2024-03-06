<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post" action="ejercicio7_rec.php">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">nombre: </span>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required>

        <label for="hora">Hora:</label>
        <input type="time" name="hora" required>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>