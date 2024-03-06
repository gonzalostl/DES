<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <form method="post" action="ejercicio5_recepcion.php">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea6">Trasfondo</label>
            <textarea class="form-control z-depth-1" rows="3" placeholder="Nacido en Umbria, siempre tuvo..."
                name="transfondo">

                        </textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nivel: </span>
            <select name="nivel" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona tu nivel</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <h2>RAZA</h2>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Aasimar">
            <label class="form-check-label" for="flexRadioDefault2">
                Aasimar
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Bugbear">
            <label class="form-check-label" for="flexRadioDefault2">
                Bugbear
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Centaur">
            <label class="form-check-label" for="flexRadioDefault1">
                Centaur
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Dwarft">
            <label class="form-check-label" for="flexRadioDefault2">
                Dwarft
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Elf">
            <label class="form-check-label" for="flexRadioDefault2">
                Elf
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Fairy">
            <label class="form-check-label" for="flexRadioDefault2">
                Fairy
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Genasi">
            <label class="form-check-label" for="flexRadioDefault2">
                Genasi
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Enano">
            <label class="form-check-label" for="flexRadioDefault2">
                Enano
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="raza" value="Human">
            <label class="form-check-label" for="flexRadioDefault2">
                Human
            </label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Clase :
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Artificier" id="flexCheckDefault"
                        name="clase">
                    <label class="form-check-label" for="flexCheckDefault">
                        Artificier
                    </label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Barbarian" id="flexCheckChecked"
                        name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Barbarian
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bard" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Bard
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cleric" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Cleric
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Druid" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Druid
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Fighter" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Fighter
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Monk" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Monk
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Paladin" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Paladin
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ranger" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Ranger
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Rogue" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Rogue
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Sorcerer" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Sorcerer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Wizard" id="flexCheckChecked" name="clase">
                    <label class="form-check-label" for="flexCheckChecked">
                        Wizard
                    </label>
                </div>
            </span>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Alineamiento: </span>
            <input type="text" name="alineamiento" class="form-control" placeholder="Nombre">
        </div>
        <div class="input-group mb-3">
            <label for="customRange1" class="form-label">Puntos de Experienca</label>
            <input type="range" name="expuntos" class="form-range" id="customRange1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre de Jugador: </span>
            <input type="text" name="nomjugador" class="form-control" placeholder="Nombre">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Edad: </span>
            <select name="edad" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona tu edad</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 141; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <label for="customRange1" class="form-label">Altura</label>
            <input type="range" name="altura" class="form-range" id="customRange1">
        </div>
        <div class="input-group mb-3">
            <label for="customRange1" class="form-label">Peso</label>
            <input type="range" name="peso" class="form-range" id="customRange1">
        </div>
        <div class="form-group mb-3">
            <label for="exampleColorInput" class="form-label">Color Personaje</label>
            <input type="color" name="colorPersonaje" class="form-control form-control-color" id="exampleColorInput"
                value="#563d7c" title="Choose your color">
        </div>
        <div class="form-group mb-3">
            <label for="exampleColorInput" class="form-label">Color Pelo</label>
            <input type="color" name="colorPelo" class="form-control form-control-color" id="exampleColorInput"
                value="#563d7c" title="Choose your color">
        </div>
        <div class="form-group mb-3">
            <label for="exampleColorInput" class="form-label">Color Ojos</label>
            <input type="color" name="colorOjo" class="form-control form-control-color" id="exampleColorInput"
                value="#563d7c" title="Choose your color">
        </div>
        <h2>HABILIDADES</h2>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fuerza: </span>
            <select name="fuerza" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona la fuerza</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Destreza: </span>
            <select name="destreza" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona la fuerza</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Constitucion: </span>
            <select name="constitucion" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona Constiucion</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Inteligencia: </span>
            <select name="inteligencia" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona la Inteligencia</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Sabiduría: </span>
            <select name="sabiduria" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona la Sabiduría</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Carisma: </span>
            <select name="carisma" class="form-select col-sm-10" aria-label="edad">
                <option selected>Seleciona la Carisma</option>
                <?php
                //Creamos con un bucle todas las opciones
                for ($i = 1; $i < 21; $i++) {
                    echo "<option value='$i'>$i</option>\n";
                }
                ?>
            </select>
        </div>
        <div class="container-sm col-12 pt-3">
            <!-- este boton lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>


    </form>
    <?php



    ?>
</body>

</html>