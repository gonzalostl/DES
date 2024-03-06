<?php

namespace model;

class usuario_model
{
    public function getUsuarios($conexion)
    {
        $query = "SELECT * FROM usuario";
        $result = $conexion->query($query);
        $usuarios = $result->fetch_all(MYSQLI_ASSOC);
        return $usuarios;
    }
}
