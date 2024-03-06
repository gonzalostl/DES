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
    // Conectar a la base de datos
    $pdo = ModelUtils::conectar();;
    // Verifico si se ha elegido un lugar en especifico
    if (!isset($_POST["filtroClub"]) || $_POST["filtroClub"] == 0) {
        $arrayClubs = ModelClub::getClubs($pdo);
    } else {
        $idLugar = $_POST["filtroClub"];
        $arrayClubs = ModelClub::getClub($pdo, $idClubGolf);
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
include("../view/mostrar_clubs_view.php");
