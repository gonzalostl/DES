<?php

namespace src\model\usuario_model;
use PDO;
require_once realpath(__DIR__ ."/../utils/databaseManager.php");

class UsuarioModel {
    //POR HACER
    public static function getUsuarios($pdo) : array | null
    {
        return devuelve_todos_campos_tabla($pdo, "usuario");
    }
}
?>
