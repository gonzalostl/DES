<?php

namespace Examenfinal\model;

use PDOException;


class socios_model
{
    public static function getSocios($pdo, $idclubGolf)
    {
        // Bloque de control de errores
        try {

            $stmt = $pdo->prepare("SELECT * FROM socio WHERE idClubGolf = :idClubGolf");
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

    public static function borrarSocio($pdo, $idSocio)
    {

        // Bloque de control de errores
        try {

            $stmt = $pdo->prepare("DELETE FROM socio WHERE idSocio = :idSocio");
            // Le asocio el id de la cita
            $stmt->bindValue(":idSocio", $idSocio);
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

    public static function insertarSocio($pdo, $idSocio)
    {

        try {
            $query = "INSERT INTO socio (nombre,edad,sexo,cuota)  VALUES (:nombre,:edad,:sexo,:cuota)";

            //De esta forma hay que preparar primero la sentencia
            $stmt = $pdo->prepare($query);

            //Asignamos el valor en el lugar de la :variable

            $stmt->bindValue(':nombre', $idSocio['nombre']);
            $stmt->bindValue(':edad',  $idSocio['edad']);
            $stmt->bindValue(':sexo',  $idSocio['sexo']);
            $stmt->bindValue(':cuota',  $idSocio['cuota']);

            //Ejecutamos la query
            $stmt->execute();
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            return -1;
        } finally {
            $pdo = null;
        }
    }
}
