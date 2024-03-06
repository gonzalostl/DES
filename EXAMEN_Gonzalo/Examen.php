<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Crear una página web en php que muestre un formulario con los siguientes campos, Con información 
sobre una tienda manga y su stock en los almacenes.

Nombre texto
Física(checkbox si/no)
dirección texto
provincia (desplegable, todas las provincias andaluzas)
Presupuesto range con steps de 1 unidad 15-150
fecha apertura tienda (date)
Tomos Manga Área de Texto
Botón Solicitud

Los almacenes se introducirán en un área de texto, 
en cada línea (Recordar que \n es separador de línea) se introduce una fase en el siguiente formato:

one piece, tomo 23, 324, 5, shonen, S, Málaga 

Siendo los datos, nombre, detalle,paginas, unidades en stock, categoria (shonen, shojo, kodomo)  
,Edición coleccionista (S/N) y almacén (Provincias Andaluzas) separados por ‘,’ 

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

Mostrará una estadística de los datos del manga, de la siguiente manera:

Número de Volumenes Totales (suma de stocks): X

Cantidad de Unidades XLS Disponibles(Más de 300pag y ed colecionista):X  

Hay Stock Colecionista: La función recibirá los almacenes, 
devolverá true si hay mas de 10 tomos coleccionista en cada provincia y es tienda física.

Stock por Provincia: (calculará y la suma de los stock de los tomos de cada provincia, se calculará utilizando una función 
que reciba los datos de los tomos y devuelva un array asociativo del tipo [“jaen” =>230,”sevilla”=>400,”almeria”=>320]. 
No tienen porque estar todas las provincias)

Cumple Cercanía : Utilizar una función que recibe los datos de los tomos y la provincia de la tienda y devuelva true 
si sólo hay tomos en provincias colindantes con la tienda

Stock Tomo: La función recibe los datos de los tomos ,la provincia y el nombre de un manga y comprueba 
si en los almacenes de las provincias colindantes a la tienda hay stock de dicho manga, para saber si es el manga, 
tiene que buscar el nombre del manga y estar presente en el nombre o en la descripción. Devuelve el número de stock disponible.
-->

</head>

<body>
    <div class="container-sm  pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-7 p-5">
                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="recepcionExamen.php">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre: </span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario">
                    </div>

                    <div>
                        <span class="input-group-text" id="basic-addon1">Tienda física: </span>
                        <input type="checkbox" name="fisica" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Dirección: </span>
                        <input type="text" name="direccion" class="form-control" placeholder="Dirección">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Provincia: </span>
                        <select name=provincia>

                            <option value=provincia></option>";
                            <option value=provincia>Cádiz</option>";
                            <option value=provincia>Sevilla</option>";
                            <option value=provincia>Málaga</option>";
                            <option value=provincia>Granada</option>";
                            <option value=provincia>Almería</option>";
                            <option value=provincia>Córdoba</option>";
                            <option value=provincia>Jaén</option>";
                            <option value=provincia>Almería</option>";

                        </select>
                    </div>

                    <div class="form-group col-sm pt-4">
                        <label for="customRange3" class="form-label">Presupuesto</label>
                        <input type="range" class="form-range form-control-sm" name="pvida" min="15" max="150" step="1" id="customRange3">
                    </div>

                    <div>
                        <label for="fecha">Fecha de apertura:</label>
                        <input type="date" name="fecha" id="fecha" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tomos del manga: </span>
                        <textarea name="txtJugadores" class="form-control" cols=60 rows=20></textarea>
                    </div>

                    <div class="container-sm col-12 pt-3">
                        <!-- este boton lanza el formulario al ser tipo submit -->
                        <button class="btn btn-primary" type="submit">Solicitar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>