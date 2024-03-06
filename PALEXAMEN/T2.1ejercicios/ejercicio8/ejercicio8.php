<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form method="post" action="ejercicio8_rec.php">
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                name="texto" style="height: 300px;"></textarea>
            <label for="floatingTextarea">area de texto</label>
        </div>
        <?php
        //creamos el grid de checkboxs usando dos bucles for
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                echo
                    '<input class="form-check-input" type="checkbox" value="' . $i . $j . '" id="flexCheckDefault" name="' . $i . $j . '">
            <label class="form-check-label" for="flexCheckDefault">
                        </label>';
            }
            echo '<br/>';
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>