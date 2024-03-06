<?php

namespace src\model\review_model;
use PDO;
require_once realpath(__DIR__ ."/../utils/databaseManager.php");

class ReviewModel {
    //POR HACER
    public static function getReview($pdo, $idReview) : array | null
    {
        $query = "SELECT * FROM review WHERE idreview=:idReview";
        $stmt = $pdo->prepare($query);
        if(!$stmt){
            echo "[ERROR] SQL statement couldn't be prepared: ";
            print_r($pdo->errorInfo());
            return null;
        }

        $stmt->bindValue(":idReview", $idReview, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result)){
            return $result;
        }
        return null;
    }


}
?>
