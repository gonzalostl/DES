<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Golf</title>
</head>

<body>
    <h1>Golf</h1>
    <form action="recepcion.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="num-socios">Socios</label>
        <br />
        <select name="num-socios" required>
            <?php for ($i = 1; $i < 120; $i++) {
                echo "<option value='$i'>$i</option>";
            } ?>
        </select><br><br>

        <label for="localidad">Localidad:</label>
        <select name="localidad" id="">
            <option value="puerto">El Puerto de Santa María</option>
            <option value="sanfernando">San Fernando</option>
            <option value="chiclana">Chiclana</option>
            <option value="jerez">Jerez</option>
        </select><br><br>

        <label>Público</label>
        <input type="radio" id="publicsi" name="publico" value="si">
        <label for="publicsi">Sí</label>
        <input type="radio" id="publicno" name="publico" value="no">
        <label for="publicno">No</label><br><br>

        <label for="escuela">Escuela</label>
        <input type="checkbox" id="escuela" name="escuela" value="1"><br><br>

        <label for="hoyos">Hoyos:</label><br>
        <textarea id="hoyos" name="hoyos" rows="5" cols="40"></textarea><br><br>

        <label for="socios">Socios:</label><br>
        <textarea id="socios" name="socios" rows="5" cols="40"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>