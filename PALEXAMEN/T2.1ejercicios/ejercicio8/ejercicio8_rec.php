<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $texto = explode("\n", $_POST["texto"]);
    //elimino las lineas en blanco 
    $texto = array_filter($texto);
    //creo los arrays para que me guarde cada valor
    $menus = [];
    $palabras = [];
    $color = [];
    $envio = [];
    //con un bucle introduzco cada valor en su correspondiente array
    for ($i = 0; $i < count($texto); $i++) {
        $linea = explode("-", $texto[$i]);

        array_push($menus, $linea[0]);
        array_push($palabras, $linea[1]);
        array_push($color, $linea[2]);
        array_push($envio,  $linea[3]);

        switch (strtolower($color[$i])) {
            case "azul":
                $color[$i] = "blue";
                break;
            case "negro":
                $color[$i] = "black";
                break;
            case "verde":
                $color[$i] = "green";
                break;
            case "blanco":
                $color[$i] = "white";
                break;
            case "rojo":
                $color[$i] = "red";
                break;
            case "amarillo":
                $color[$i] = "yellow";
                break;
        }
    }







//creamos el menu superior
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php
                for ($i = 0; $i < count($texto); $i++) {
                    if (substr($menus[$i], 0, 1) == "S") {
                        echo '<a class="nav-link active" aria-current="page" href="' . $envio[$i] . '"
                style="color: ' . $color[$i] . '; order:' . substr($menus[$i], -1) . '">' . $palabras[$i] . '</a>';
                    }
                } ?>
            </div>
        </div>
    </nav>
    <?php
    //creamos las variables de la mayor fila y la mayor columna
    $mayorFila = 0;
    $mayorColumna = 0;
    //pasamos por todos los checks marcados y guardamos el mayor n de filas y el de columnas
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if (!empty($_POST[$i . $j])) {
                if (substr($_POST[$i . $j], 0, 1) > $mayorFila) {
                    $mayorFila = substr($_POST[$i . $j], 0, 1);
                }
                if (substr($_POST[$i . $j], -1) > $mayorColumna) {
                    $mayorColumna = substr($_POST[$i . $j], -1);
                }
            }
        }
    } ?>
    <table class="table table-bordered border-primary">
        <?php
        //creamos la tabla y la hacemos hasta el mayor numero de filas y columnas
        //y los checkbox marcados se colorearan de negro
        for ($i = 0; $i <= $mayorFila; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $mayorColumna; $j++) {
                if (!empty($_POST[$i . $j])) {
                    echo "<td style='background-color: black;'></td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        //creamos el menu inferior
        ?>
    </table>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center" style="display: flex; justify-content:space-around;">
            <?php
            for ($i = 0; $i < count($texto); $i++) {
                if (substr($menus[$i], 0, 1) == "I") {
                    echo '<a class="nav-link active" aria-current="page" href="' . $envio[$i] . '"
                style="color: ' . $color[$i] . '; order:' . substr($menus[$i], -1) . '">' . $palabras[$i] . '</a>';
                }
            } ?>
        </div>
    </footer>

</body>

</html>