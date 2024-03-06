<?php

use model\CitaModel;
include_once("../model/lugar_model.php");
include_once("../model/cita_model.php");

class ListaCitasController
{
    public function cargarVista()
    {
        $lugarModel =  lugar_model::getLugares;
        $lugares = $lugarModel->getLugares($conexion);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["selecclugar"])) {
                $idLugarSeleccionado = $_POST["selecclugar"];
                $citaModel = new cita_model();
                $citasLocalidad = $citaModel->getCitasLocalidad($conexion, $idLugarSeleccionado);
                include_once("../view/mostrar_citas_view.php");
            }
        } else {
            include_once("../view/mostrar_citas_view.php");
        }
    }
}

$controller = new ListaCitasController();
$controller->cargarVista();
