<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews</title>
</head>
<body>
    <h1>Reviews</h1>
    <h3>Usuario Propone:</h3>
    <table class="review-wrapper w-98 mx-auto">
        <tr>
            <th>id Review</th>
            <th>Descripción</th>
            <th>Puntuación</th>
        </tr>
        <tr class="review text-center">
            <td>
                <?php echo $review_usuario_propone["idreview"] ?>
            </td>
            <td>
                <?php echo $review_usuario_propone["Descripcion"] ?>
            </td>
            <td>
                <?php echo $review_usuario_propone["puntuacion"] ?>
            </td>
        </tr>
    </table>

    <h3>Usuario Acepta:</h3>
    <table class="review-wrapper w-98 mx-auto">
        <tr>
            <th>id Review</th>
            <th>Descripción</th>
            <th>Puntuación</th>
        </tr>
        <tr class="review text-center">
            <td>
                <?php echo $review_usuario_acepta["idreview"] ?>
            </td>
            <td>
                <?php echo $review_usuario_acepta["Descripcion"] ?>
            </td>
            <td>
                <?php echo $review_usuario_acepta["puntuacion"] ?>
            </td>
        </tr>
    </table>
</body>
</html>