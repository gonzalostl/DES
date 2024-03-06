<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>

<body>
    <h1>Citas</h1>

    <form method="post" action="../controller/lista_citas_controller.php">
        <label for="selecclugar">Seleccionar lugar:</label>
        <select name="selecclugar" id="selecclugar">
            <?php foreach ($lugares as $lugar) : ?>
                <option value="<?php echo $lugar['idlugar']; ?>"><?php echo $lugar['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Mostrar Citas</button>
    </form>

    <?php if (isset($citasLocalidad)) : ?>
        <form method="post" action="borrar_citas_controller.php">
            <h2>Citas en este lugar</h2>
            <ul>
                <?php foreach ($citasLocalidad as $cita) : ?>
                    <li>
                        <strong>Fecha:</strong> <?php echo $cita['fecha']; ?>,
                        <strong>Descripcion:</strong> <?php echo $cita['descripcion']; ?>,
                        <strong>Usuario Propone:</strong> <?php echo $cita['usuario_propone_nombre']; ?>,
                        <strong>Usuario Acepta:</strong> <?php echo $cita['usuario_acepta_nombre']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button type="submit" name="borrar_citas">Borrar Citas</button>
        </form>
    <?php endif; ?>
</body>