
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recepcion.php" method="post">
        <label for="input-nombre">Nombre</label>
        <input type="text" name="input-nombre" id="">

        <br/>
        <br/>

        <label for="esFisica">Fisica</label>
        <input type="checkbox" name="esFisica" id="">

        <br/>
        <br/>

        <label for="input-provincia">Provincia</label>
        <select name="input-provincia" id="">
            <option value="cadiz">Cádiz</option>
            <option value="malaga">Málaga</option>
            <option value="almeria">Almería</option>
        </select>

        <br/>
        <br/>

        <label for="input-presupuesto">Presupuesto</label>
        <input type="range" name="input-presupuesto" step="1" min="15" max="150">
        <br/>
        <br/>

        <label for="input-fecha-apertura">Fecha apertura</label>
        <input type="date" name="input-fecha-apertura">

        <br/>
        <br/>

        <label for="input-tomos">Tomos</label>
        <textarea name="input-tomos" cols="60" rows="10"></textarea>

        <br/>
        <br/>

        <input type="submit" value="Envíar">

    </form>
    
</body>
</html>


<?php ?>