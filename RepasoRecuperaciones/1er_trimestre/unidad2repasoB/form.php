<!DOCTYPE html>
<html>

<head>
  <title>Examen Unidad 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  <form method="POST" action="recepcion.php">

    <div class="container">

      <div class="row">


        <div class="col-lg-9 col-sm-9">

          <!-- Margenes con mb mr ml mt -sm-distancia-->
          <!-- Misma linea -->
          <div class="form-group row mb-sm-2 mt-sm-2">
            <label for="nombre" class="col-lg-3 col-form-label">Nombre:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
          </div>

          <div class="mb-3">
            <label for="edad">Edad</label>
            <select class="form-control w-25" id="edad" name="edad">
            <?php
            //Generamos las option del select edad
            for($i=1;$i<=120;$i++)
            {
              print ("<option value='$i'>$i</option>");
            }
            ?>
            </select>
          </div>

          <br>
          <label class="form-check-label" >
              Estado Civil
            </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="S" id="radio1" name="estCivil">
            <label class="form-check-label" for="radio1">
              Soltero
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="C" id="radio2" name="estCivil">
            <label class="form-check-label" for="radio2">
              Casado
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="D" id="radio3" name="estCivil">
            <label class="form-check-label" for="radio3">
              Divorciado
            </label>
          </div>

          <div class="mb-3">
            <label for="sueldo">Sueldo</label>
            <select class="form-control w-25" id="sueldo" name="sueldo">
            <?php
            //Generamos las option del select sueldo
            for($i=0;$i<=40000;$i=$i+10000)
            {
              print ("<option value='".($i/10000+1)."'>$i - ".($i+10000)."</option>");
            }
            ?>
            </select>
          </div>

          <div class="form-group ml-3">
            <label for="comentarios">Información Hijos</label>
            <textarea class="form-control mb-3 " rows="5" id="txtHijos" name="txtHijos"></textarea>
          </div>

          <div class="form-group ml-3">
            <label for="comentarios">Información Domicilios</label>
            <textarea class="form-control mb-3 " rows="5" id="txtHijos" name="txtDomicilios"></textarea>
          </div>

           <br>
   
          <button type="submit" class="btn btn-default mb-sm-2 shadow p-3 mb-5 bg-body rounded px-3 py-2">Enviar</button>

        </div>
      </div>
    </div>
  </form>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>