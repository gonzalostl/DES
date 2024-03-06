<?php

namespace src\model\citas_model;
use PDO;
require_once realpath(__DIR__ ."/../utils/databaseManager.php");

class CitasModel {
    //POR HACER
    public static function getCitas($pdo) : array | null
    {
        $stmt = $pdo->query("SELECT * FROM citas");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!isset($result)){
            return null;
        }
        return $result;
    }
    

    /**
     * getCitasLocalidad(conexion, idLugar) recibe el
     * identificador
     * del lugar y devuelve los datos de todas las
     * citas de dicho
     * lugar (se valorará que saque los nombres de los usuarios
     * en lugar de los id 0.5) . En cita_model
     */
    public static function getCitasLocalidad($pdo, $idLugar) : array | null {
        $query = "SELECT * FROM cita WHERE lugar_idlugar=:idLugar";
        $stmt = $pdo->prepare($query);
        if(!$stmt){
            echo "[ERROR] SQL statement couldn't be prepared: ";
            print_r($pdo->errorInfo());
            return null;
        }

        $stmt->bindValue(":idLugar", $idLugar, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result)){
            return $result;
        }
        return null;
    }

    /**
     * borrarCita(con, idCita) elimina de bd la cita cuyo
 * id coincida con el introducido.Devuelve 1 si la borro y
 * -1 si hubo un fallo o no la borro.En cita_model
     */

    public static function borrarCita($pdo, $idCita) : int {
       $query = "DELETE FROM cita WHERE id_cita=:idCita";
        $stmt = $pdo->prepare($query);
        if(!$stmt){
            echo "[ERROR] SQL statement couldn't be prepared: ";
            print_r($pdo->errorInfo());
            return -1;
        }

        $stmt->bindValue(":idCita", $idCita, PDO::PARAM_INT);
        $stmt->execute();

        $affectedRows = $stmt->rowCount();
        return $affectedRows > 0 ? 1 : -1;
    }

}

?>
