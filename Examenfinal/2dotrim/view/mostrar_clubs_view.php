<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Localidad</th>
                    <th scope="col">recordGolpes</th>
                    <th scope="col">Escuela</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($arrayClubs); $i++) {
                    // Para cada registro hay que crear una nueva fila
                    print("<tr>");
                    // Mostramos todos los datos
                    print("<td>" . $arrayNombreClubs[$arrayClubs[$i]["nombre"]] . "</td>");
                    print("<td>" . $arrayNombreLocalidad[$arrayClubs[$i]["localidad"]] . "</td>");
                    print("<td>" . $arrayRecordGolpes[$arrayClubs[$i]["recordGolpes"]] . "</td>");
                    print("<td>" . $arrayEscuela[$arrayClubs[$i]["escuela"]] . "</td>");

                    // Generamos los botones para eliminar los clubs seleccionadas
                    print("<td><input type=submit form='formEliminar' name='idClubEliminar[]' value='" . $arrayClubs[$i]["idclub"] . "'></td>");
                    print("</tr>");
                }
                ?>
            </tbody>
        </table>

        <form method=POST action="../controller/borrar_club_controller.php" id="formEliminar">
            <button type=submit>Eliminar los clubs marcados</button>
        </form>
    </div>
</body>

</html>