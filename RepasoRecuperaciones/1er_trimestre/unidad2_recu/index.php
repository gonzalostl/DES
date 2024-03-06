<!DOCTYPE html>
<!-- EXAMEN SUBIDA NOTA - Juan José Catalá Garrido 2º DAW -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Examen Juanjo Subida Nota</title>
    <meta name="author" content="Juan José Catalá Garrido 2º DAW"/>
  </head>
  <style>
    form, h1, pre {
      text-align: center;
    }
    h1 {
      margin-top: 1rem;
      margin-bottom: 1rem;
    } 
  </style>
  <body>
    <h1>Subida Nota Juanjo</h1>

    <form action="recepcion.php" method="post">
    
      <label for="input-nombre-texto">Nombre texto</label>
      <br/>
      <input type="text" name="input-nombre-texto" id="input-nombre-texto" require>

      <br/>
      <br/>

      <label for="input-edad">Edad</label>
      <br/>
      <select name="input-edad" required>
        <?php for($i=1; $i<120; $i++){
          echo "<option value='$i'>$i</option>";
        } ?>
      </select>

      <br/>
      <br/>

      <label for="input-estado">Estado civil</label>
      <br/>
      <input type="radio" name="input-estado" id="input-estado-1" value="soltero"/>
      <label for="input-estado-1">Soltero</label>
      <br/>

      <input type="radio" name="input-estado" id="input-estado-2" value="casado"/>
      <label for="input-estado-1">Casado</label>
      <br/>

      <input type="radio" name="input-estado" id="input-estado-3" value="divorciado"/>
      <label for="input-estado-1">Divorciado</label>

      <br/>
      <br/>

      <label for="input-rango-sueldo">Rango Sueldo</label>
      <br/>
      <select name="input-rango-sueldo" required>
        <option>0-10000</option>
        <option>10001-20000</option>
        <option>20001-30000</option>
        <option>30001-40000</option>
        <option>40001-50000</option>
      </select>

      <br/>
      <br/>

      <label for="input-hijos">Hijos</label>
      <br/>
      <textarea name="input-hijos"
                placeholder="Nombre-edad-sexo(H/N)-minusvalia(s/n)" 
                cols="40"
                required>
      Paco-12-H-N
      Juan-1-H-N
      Antonio-7-M-N
      </textarea>

      <br/>
      <br/>

      <label for="input-domicilios">Domicilios</label>
      <br/>
      <textarea name="input-domicilios" cols="40"  
                placeholder="provincia-numHabitantes-piso)-habitual(s/n)"
                required>
      cadiz-3-4-S
      granada-2-4-N
      </textarea>

      <br/>
      <br/>

      <input type="submit" value="Envíar" class="btn btn-primary"/>
    </form>

    <br/>
    <pre>Juan José Catalá Garrido 2º DAW</pre>
  </body>
</html>
