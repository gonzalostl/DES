<?php

use src\model\review_model\ReviewModel;
require_once realpath(__DIR__ . "/../model/review_model.php");


if (!isset($_GET) || empty($_GET)) {
    echo "<h1>DEBE PROVEER LOS PARÁMETROS GET</h1>";
}

$pdo = create_connection_to_db();

$IDusuario_propone = $_GET["user1"];
$review_usuario_propone = ReviewModel::getReview($pdo, $IDusuario_propone);

$IDusuario_acepta = $_GET["user2"];
$review_usuario_acepta = ReviewModel::getReview($pdo, $IDusuario_propone);

$pdo = null;

require_once realpath(__DIR__ . "/../view/mostrar_review_view.php");


?>
