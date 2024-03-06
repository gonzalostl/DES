<?php

function create_connection_to_db() : PDO {
    require realpath(__DIR__."/../global_variables.php.inc.php");
        return new PDO("mysql:host=$database_host;port=$database_port;dbname=$database_name", $database_user, $database_password);
}

function devuelve_todos_campos_tabla(PDO $pdo, string $tabla) : array | null{
    $stmt = $pdo->query("SELECT * FROM $tabla");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!isset($result)){
        return null;
    }
    return $result;
}

?>