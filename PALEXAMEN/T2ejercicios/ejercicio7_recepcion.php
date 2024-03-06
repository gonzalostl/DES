<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1px">
    <tr>
      <td>Nombre</td>
      <td>
        <?php
        //sacamos el valor del nombreen la tabla
        echo $_POST["nombre"];

        ?>
      </td>
    </tr>
    <tr>
      <?php
      //  si el sexo es hombre colorea la tabla hombre
      if ($_POST["sexo"] == "hombre") {
        echo '<td style="background-color: #F1742D;">';
        echo "Hombre";
        echo '</td>';
      } else {
        echo '<td>Hombre</td>';
      }


      ?>

      <?php
      //  si el sexo es mujer colorea la tabla mujer
      if ($_POST["sexo"] == "mujer") {
        echo '<td style="background-color: #F1742D;">';
        echo "Mujer";
        echo '</td>';
      } else {
        echo '<td>Mujer</td>';
      }


      ?>

    </tr>
    <tr>
      <?php
      // si gana menos de 12000 se colorea
      if ($_POST["sueldo"] < 12000) {
        echo '<td style="background-color: #F1742D;">';
        echo "0-12000";
        echo '</td>';
      } else {
        echo '<td>0-12000</td>';
      }


      ?>

      <?php
      // si gana entre 12000 y 20000 se colorea
      if ($_POST["sueldo"] >= 12000 && $_POST["sueldo"] <= 20000) {
        echo '<td style="background-color: #F1742D;">';
        echo "12000-20000";
        echo '</td>';
      } else {
        echo '<td>12000-20000</td>';
      }


      ?>
      <?php
      // si gana entre 20000 y 35000 se colorea
      if ($_POST["sueldo"] > 20000 && $_POST["sueldo"] <= 35000) {
        echo '<td style="background-color: #F1742D;">';
        echo "21000-35000";
        echo '</td>';
      } else {
        echo '<td>21000-35000</td>';
      }


      ?>
      <?php
      // si gana mas de 35000 se colorea
      if ($_POST["sueldo"] > 35000) {
        echo '<td style="background-color: #F1742D;">';
        echo "+35000";
        echo '</td>';
      } else {
        echo '<td>+35000</td>';
      }


      ?>
    </tr>
    <tr>
      <?php

      if ($_POST["edad"] < 25) {
        echo '<td style="background-color: #F1742D;">';
        echo "0-25";
        echo '</td>';
      } else {
        echo '<td>0-25</td>';
      }


      ?>
      <?php

      if ($_POST["edad"] > 24 && $_POST["edad"] < 45) {
        echo '<td style="background-color: #F1742D;">';
        echo "25-45";
        echo '</td>';
      } else {
        echo '<td>25-45</td>';
      }


      ?>


      <?php

      if ($_POST["edad"] > 44 && $_POST["edad"] < 66) {
        echo '<td style="background-color: #F1742D;">';
        echo "45-65";
        echo '</td>';
      } else {
        echo '<td>45-65</td>';
      }


      ?>
      <?php

      if ($_POST["edad"] > 65) {
        echo '<td style="background-color: #F1742D;">';
        echo "JUBILADO";
        echo '</td>';
      } else {
        echo '<td>JUBILADO</td>';
      }


      ?>
    </tr>
  </table>

  <?php




  ?>
</body>

</html>