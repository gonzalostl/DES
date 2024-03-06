<?php
include "config/settings.inc";

try {

    //Noso conectamos a la base de datos utilizando PDO con la cadena de conexión
    //Y el usuario y la contraseña
    //Controlamos el posible error con try catch
    $mbd = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $password);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
