
<?php


use Examenfinal\model\clubgolf_model as ModelClub;
use Examenfinal\model\Utils as ModelUtils;

use PDOException;

include_once("../model/club_golf_model.php");
include_once("../model/utils.php");

// Iniciar la sesión si no está iniciada aún
if (session_status() != PHP_SESSION_ACTIVE) session_start();

// Bloque de control de errores
try {
    //Conectar con la BDD
    $pdo = ModelUtils::conectar();
    // Si he recibido el array de ids por post
    if (isset($_POST["idClubEliminar"])) {
        $idCitaEliminar = $_POST["idClubEliminar"];
        // Por cada id del array llamo al método de borrar citas
        for ($i = 0; $i < count($idClubEliminar); $i++) {
            ModelClub::borrarClub($pdo, $idCitaEliminar[$i]);
        }
    }
    // Llamo al controller para cargar los datos nuevamente y cargar la lista
    include("../controller/main_clubs_controller.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
