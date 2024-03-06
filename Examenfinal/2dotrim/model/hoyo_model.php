<?php

namespace Examenfinal\model;

use PDOException;


class hoyos_model
{
    public static function getHoyos($pdo, $idclubGolf)
    {
        // Bloque de control de errores
        try {

            $stmt = $pdo->prepare("SELECT * FROM hoyos WHERE idClubGolf = :idClubGolf");
            // Asocio el id recibido al de la query
            $stmt->bindValue(":idclubGolf", $idclubGolf);
            // Ejecuto la query
            $stmt->execute();
            // Recojo los resultados
            $resultSet = $stmt->fetchAll();
        } catch (PDOException $e) {
            // Muestro el mensaje de error y finalizo la ejecución
            echo $e->getMessage();
            die();
        }
        // Devuelvo los resultados
        return $resultSet;
    }
}
