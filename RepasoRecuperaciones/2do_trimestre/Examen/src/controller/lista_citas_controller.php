<?php

use src\model\lugar_model\LugarModel;
use src\model\citas_model\CitasModel;
require_once realpath(__DIR__ . "/../model/lugar_model.php");
require_once realpath(__DIR__ . "/../model/cita_model.php");


/*
Cuando se cargue el fichero controlador,
 este cargará los lugares y redireccionará a la vista,
la cual mostrará en un desplegable (SELECT).

Al seleccionar un lugar y pulsar un botón (a elección),
se volverá a llamar al controlador, el cual cargará todas
las citas que pertenezcan a dicho país/provincia y volverá
 a cargar la vista mostrando un listado de dichas direcciones.

En la vista además del listado, seguirá viéndose el select
de lugares.
 */

$pdo = create_connection_to_db();

$debeMostrarCitas = false;
$idLugar = null;
$citas = null;
if (!empty($_POST)) {
    if(!isset($_POST["lugar-input"])){
        echo "<h3>ERROR: debe proveer un lugar</h3>";
    }

    $debeMostrarCitas = true;
    $idLugar = $_POST["lugar-input"];
    $citas = CitasModel::getCitasLocalidad($pdo, $idLugar);

}

$lugares = LugarModel::getLugares($pdo);
$pdo = null;

require_once realpath(__DIR__ . "/../view/mostrar_citas_view.php");


?>