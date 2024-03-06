<?php

namespace model;

class lugar_model
{
    public function getLugares($conexion)
    {
        $query = "SELECT * FROM lugar";
        $result = $conexion->query($query);
        $lugares = $result->fetch_all(MYSQLI_ASSOC);
        return $lugares;
    }
}
