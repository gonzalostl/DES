<?php
include_once("../model/cita_model.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrarCitas"]) && isset($_POST["citasborrar"])) {
    $citasborrar = $_POST["citasborrar"];

    $citaModel = new cita_model();
    foreach ($citasborrar as $idCita) {
        $citaModel->borrarCita($conexion, $idCita);
    }

    header("Location: lista_citas_controller.php");
    exit();
} else {

    echo "Datos invalidos para borrar citas.";
}
