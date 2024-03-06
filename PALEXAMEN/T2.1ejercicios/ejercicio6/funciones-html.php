<?php
function crearTabla($filas, $columnas, $fondo, $letra)
{
    echo "<table border='1' class='class'>";
    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            echo "<td>Fila $i, Columna $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

}

function crearSexo()
{
    echo '<h2>sexo</h2>';
    echo '<div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" value="hombre">
            <label class="form-check-label" for="flexRadioDefault2">
                hombre
            </label>
        </div>';
    echo '<div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" value="mujer">
            <label class="form-check-label" for="flexRadioDefault2">
            mujer
            </label>
        </div>';

}

function crearEdad()
{
    echo '<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">edad: </span>
        <select name="edad" class="form-select col-sm-10" aria-label="edad">
            <option selected>Seleciona la edad</option>';

    //Creamos con un bucle todas las opciones
    for ($i = 1; $i < 121; $i++) {
        echo "<option value='$i'>$i</option>\n";
    }
    '</select>
    </div>';
}

function crearObservaciones()
{
    echo '<div class="form-group">
        <label for="exampleFormControlTextarea6">observaciones</label>
        <textarea class="form-control z-depth-1" rows="3"
            name="observaciones">

                    </textarea>
    </div>';

}



?>