<?php

namespace Examenfinal\model;

use PDOException;


class clubgolf_model
{
    public static function borrarClub($pdo, $idclubGolf)
    {

        // Bloque de control de errores
        try {

            $stmt = $pdo->prepare("DELETE FROM clubgolf WHERE idClubGolf = :idClubGolf");
            // Le asocio el id de la cita
            $stmt->bindValue(":idClubGolf", $idclubGolf);
            // Ejecuto la query
            $stmt->execute();

            $feedback = ($stmt->rowCount() != 0) ? 1 : -1;
        } catch (PDOException $e) {
            // Muestro el mensaje de error por pantalla si hay error y finalizo la ejecución
            echo $e->getMessage();
            die();
        } finally {
            // Quito la conexión
            $pdo = null;
        }
        // Devuelvo el feedback
        return $feedback;
    }

    public static function getClubs($pdo)
    {
        // Bloque de control de errores
        try {

            $stmt = $pdo->query("SELECT * FROM clubgolf");
            // Recojo los resultados
            $resultSet = $stmt->fetchAll();
        } catch (PDOException $e) {
            // Muestro el mensaje de error por pantalla si es que ha habido un error y finalizo la ejecución
            echo $e->getMessage();
            die();
        }
        // Devuelvo el array de resultados
        return $resultSet;
    }

    public static function getClub($pdo, $idclubGolf)
    {
        // Bloque de control de errores
        try {

            $stmt = $pdo->prepare("SELECT * FROM clubgolf WHERE idClubGolf = :idClubGolf");
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
