<?php

namespace model;

class CitaModel
{
    public function borrarCita($conexion, $idCita)
    {
        $query = "DELETE FROM cita WHERE idcita = $idCita";
        $result = $conexion->query($query);
        return ($result) ? 1 : -1;
    }

    public function getCitas($conexion)
    {
        $query = "SELECT * FROM cita";
        $result = $conexion->query($query);
        $citas = $result->fetch_all(MYSQLI_ASSOC);
        return $citas;
    }

    public function getCitasLocalidad($conexion, $idLugar)
    {
        $query = "SELECT cita.*, usuario1.nombre as usuario_propone_nombre, usuario2.nombre as usuario_acepta_nombre 
                  FROM cita
                  INNER JOIN usuario as usuario1 ON cita.usuario_propone = usuario1.idusuario
                  INNER JOIN usuario as usuario2 ON cita.usuario_acepta = usuario2.idusuario
                  WHERE cita.lugar_idlugar = $idLugar";
        $result = $conexion->query($query);
        $citasLocalidad = $result->fetch_all(MYSQLI_ASSOC);
        return $citasLocalidad;
    }
}
?>
