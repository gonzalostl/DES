<?php

namespace src\model\lugar_model;
use PDO;
require_once realpath(__DIR__ ."/../utils/databaseManager.php");

class LugarModel {
    //POR HACER
   public static function getLugares($pdo) : array | null
   {
      return devuelve_todos_campos_tabla($pdo, "lugar");
   }
}
?>
