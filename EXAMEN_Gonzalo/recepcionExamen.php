<?php
function manga($nombre, $tomo, $paginas, $stock, $categoria, $edicioncolec, $almacen)
{
    $datosManga = explode("\n", $nombre);

    foreach ($datosManga as $manga) {
        $datosM = explode(" ", $manga);

        if ($paginas > 300 && $edicioncolec == true) {
            echo "Cantidad de Unidades XLS Disponibles : " . $stock;
        }
    }
}
