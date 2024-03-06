<?php

use src\model\lugar_model\LugarModel;
use src\model\citas_model\CitasModel;
require_once realpath(__DIR__ . "/../model/lugar_model.php");
require_once realpath(__DIR__ . "/../model/cita_model.php");

if(!isset($_POST["cita-delete-input"]) || !isset($_POST["lugar-citas"])){
    echo "<h3>ERROR: debe hacer click en algún checkbox</h3>";
    die();
}

$pdo = create_connection_to_db();

$citasAEliminar = $_POST["cita-delete-input"];

/* Iteramos sobre los checkboxes cuyo valor es igual
   al id de cada cita a eliminar */
foreach ($citasAEliminar as $idCita){
    $status = CitasModel::borrarCita($pdo, intval($idCita));
    if($status == -1){
        echo "<h3 class='text-red'>NO SE PUDO BORRAR</h3>";
    }


}


// Creamos las siguientes variables para poder cargar la vista
$lugares = LugarModel::getLugares($pdo);
$idLugar = $_POST["lugar-citas"];
$citas = CitasModel::getCitasLocalidad($pdo, $idLugar);
$debeMostrarCitas = true;

$pdo = null;
require_once realpath(__DIR__ . "/../view/mostrar_citas_view.php");




?>