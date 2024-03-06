<!doctype html>
<html lang="en">

<head>
    <title>Formulario Persona</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <!-- 
Crear una página web en php que muestre un formulario con los siguientes campos

Nombre texto
edad desplegable
Estado (soltero,casado,divorciado) radio
Rango Sueldo desplegable en 5 rangos desde 0 hasta 50000, de 10000 en 10000
Hijos Área de Texto
Domicilios Área de Texto
Botón Enviar

Los hijos se introducirán en un área de texto, en cada línea (Recordar que \n es separador de línea) 
se introduce un hijo en el siguiente formato:

Juan-12-H-S

Siendo los datos, separados por guiones ‘-’, nombre, edad, sexo y minusvalia.

Los domicilios serán igual, pero los datos distintos:

jaen-3-4-S

Siendo los datos, provincia, núm. habitaciones, piso y vivienda habitual(S/N)

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

Evaluará si puede obtener una ayuda, para obtenerla tendrá que cumplir lo siguiente:

Mayor de 35 años y casado
Sueldo mayor de 10000 y menor de 30000
Tener 2 hijos menores de 8 o uno con minusvalía
No tener casas en provincias distintas o que todas sean vivienda habitual
No tener más de dos casas

La página mostrará en color verde o rojo las condiciones dependiendo si las cumple o no con los datos introducidos en el formulario. (Si las cumple en verde y si no las cumple en rojo)

Para realizar la solución, tendrá que crear dos funciones:
function cumpleDomicilio($textoCasas): Recibe el texto del texarea domicilios y verifica si cumple las dos condiciones ultimas condiciones, devuelve un array asociativo con las dos condiciones como claves y valores true o false dependiendo.

function cumpleHijos($textoHijos): Recibe el texto del textarea de los hijos y verifica si cumple la condición tercera y calcula la media de edad de los hijos, devuelve un array asociativo con claves cumpleCondiciones y media y valores respectivamente, true o false y el valor de la media de los hijos.

La pagina deberá de comprobar las 5 condiciones, utilizando las funciones realizadas, y mostrará en verde o rojo el texto dependiendo de si lo cumple o no.
-->

    <h1>Formulario de Persona</h1>

    <!-- Contenedor para el formulario con el cual se mandarán los datos. -->
    <div class="container-sm  pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-7 p-5">
                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="examen_recep.php">
                    <!-- Texto "nombre" -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre : </label>
                        <input type="text" required class="form-control" name="nombre" id="nombre" rows="1"></textarea>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="soltero" id="soltero">
                        <label class="form-check-label" for="soltero">
                            Soltero
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="casado" id="casado">
                        <label class="form-check-label" for="casado">
                            Casado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="divorciado" id="divorciado">
                        <label class="form-check-label" for="divorciado">
                            Divorciado
                        </label>
                    </div>
                    <!-- Edad "desplegable" -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Edad: </span>
                        <select name=edad>
                            <?php
                            for ($i = 1; $i < 101; $i++) {
                                echo "<option value=$i>$i</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Range "sueldo" -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Sueldo: </span>
                        <select class="form-select form-select-lg" name="sueldo" id="sueldo">
                            <option selected>Sueldo</option>
                            <option value="s1">0</option>
                            <option value="s2">10000</option>
                            <option value="s3">20000</option>
                            <option value="s4">30000</option>
                            <option value="s5">40000</option>
                        </select>
                    </div>
                    <!-- Text Area "hijos" -->
                    <div class="mb-3">
                        <label for="hijos" class="form-label">Hijos: </label>
                        <br />
                        <textarea class="form-control" name="txthijos" id="txthijos" rows="5"></textarea>
                    </div>

                    <!-- Text Area "domicilios" -->
                    <div class="mb-3">
                        <label for="domicilios" class="form-label">Domicilios: </label>
                        <br />
                        <textarea class="form-control" name="txtdomicilios" id="txtdomicilios" rows="5"></textarea>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>


    <!-- JavaScript de Boosstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>