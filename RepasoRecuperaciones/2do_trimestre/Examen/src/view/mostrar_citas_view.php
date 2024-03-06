
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2-dist/css/bootstrap.css"/>
    <title>Citas</title>
</head>
<body>
    <h1 class="w-50 mx-auto text-center mb-5">Citas</h1>

    <form method="POST" action="lista_citas_controller.php" class="w-50 mx-auto text-center">
        <label for="lugar-input">Lugares</label>
        <select name="lugar-input">
            <?php
            // Lugares está declarado en el controlador
            foreach ($lugares as $lugar){
                echo "<option value='".$lugar["idlugar"] ."'>". $lugar["nombre"] . "</option>";
            }
            ?>
        </select>
        <br/>
        <br/>
        <input type="submit" value="Mostrar citas">
    </form>

    <?php if($debeMostrarCitas){?>
        <h3 class="w-50 mx-auto mt-5 text-center">Citas</h3>

        <form method="POST"
              action="borrar_citas_controller.php"
              id="delete-cita-form"
              name="delete-cita-form">

        <table class="citas-wrapper w-98 mx-auto">
            <tr>
                <th>id Cita</th>
                <th>Usuario_propone</th>
                <th>Usuario_acepta</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>ID Lugar</th>
                <th>Review_Propone</th>
                <th>Review_Acepta</th>
                <th>Borrar</th>
            </tr>

            <?php foreach ($citas as $cita){ ?>
                <tr class="cita text-center" onclick="window.location.href = '<?php echo "cargar_review_controller.php?user1=".$cita["usuario_propone"]. "&user2=".$cita["usuario_acepta"] ?>'">
                    <td>
                       <?php echo $cita["id_cita"] ?>
                    </td>
                    <td>
                        <?php echo $cita["usuario_propone"] ?>
                    </td>
                    <td>
                        <?php echo $cita["usuario_acepta"] ?>
                    </td>
                    <td>
                        <?php echo $cita["fecha"] ?>
                    </td>
                    <td>
                        <?php echo substr($cita["descripcion"], 0, 10)."..." ?>
                    </td>
                    <td>
                        <?php echo $cita["lugar_idlugar"] ?>
                    </td>
                    <td>
                        <?php echo $cita["review_idreviewpropone"] ?>
                    </td>
                    <td>
                        <?php echo $cita["review_idreview"] ?>
                    </td>
                    <td>
                        <input type="checkbox"
                               name="cita-delete-input[]"
                               value="<?php echo $cita["id_cita"]?>"
                               form="delete-cita-form"/>

                        <input type="hidden" name="lugar-citas"
                               form="delete-cita-form" value="<?php echo $idLugar?>"/>
                    </td>
                </tr>


            <?php } ?>
        </table>
        <input class="mx-auto text-center"
               type="submit" value="Eliminar"
               form="delete-cita-form">
    <?php }?>
</body>
</html>