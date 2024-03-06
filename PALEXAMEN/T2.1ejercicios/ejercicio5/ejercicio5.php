<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">numeros: </span>
            <input type="text" name="num" class="form-control" placeholder="Nombre">
        </div>

        <div class="container-sm col-12 pt-3">
            <!-- este boton lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>


    <?php

    function usoFunciones($numeros, $orden=true)
    {
        //los guardo en un array con el explode
        $numeros = explode(" ", $numeros);
        //creo el mínimo
        $min = min($numeros);
        //creo la media
        $media = array_sum($numeros) / count($numeros);
        //creo el nprimos y aumento en uno usando un bucle
        $nprimos = 0;
        //el bucle analiza cada número y si el modulo del numero entre 2 es 
        //distinto de 0 aumenta en uno el contador
        for ($i = 0; $i < count($numeros); $i++) {
            if ($numeros[$i] % 2 != 0) {
                $nprimos++;
            }
        }


        //  creo el array asociativo
        $asoArray = [
            "nprimos" => $nprimos,
            "media" => $media,
            "mínimo" => $min
        ];

        ?>
        <table border="1">

            <?php
            //hacemos que nos muestre las caractesísticas del array asociativo en una tabla usando un for each
            foreach ($asoArray as $caracteristica => $valor):
                ?>
                <tr>
                    <th>
                        <?php
                        if ($orden == true) {
                            echo $caracteristica;
                        } else {
                            echo $valor;
                        }
                        ?>
                    </th>
                    <td>
                        <?php
                        if ($orden == true) {
                            echo $valor;
                        } else {
                            echo $caracteristica;
                        } ?>
                    </td>

                </tr>

            <?php endforeach;
    } ?>



        <?php
        function sinFunciones($numeros, $orden=true)
        {
            //si no esta vacio
            if (!empty($numeros)) {
                //creo un array num y una variable num para guardarlos en el array
                $arraynum = [];
                $num = "";
                //con el bucle meto los numero en el array
                for ($i = 0; $i < strlen($numeros); $i++) {
                    if ($numeros[$i] == " ") {
                        if (!empty($num)) {
                            array_push($arraynum, $num);
                            $num = "";
                        }
                    } else {
                        $num = $num . $numeros[$i];
                    }
                }
                //meto el ultimo numero
                array_push($arraynum, $num);
                //inicializo las variables min cont sum y nprimos
                $min = $arraynum[0];
                $cont = 0;
                $sum = 0;
                $nprimos = 0;
                //recorro el array y guardo el min, cuento el numero de primos y guardo la suma
                for ($i = 0; $i < count($arraynum); $i++) {
                    if ($arraynum[$i] < $min) {
                        $min = $arraynum[$i];
                    }
                    if ($arraynum[$i] % 2 != 0) {
                        $nprimos++;
                    }
                    $sum = $sum + $arraynum[$i];
                    $cont++;
                }
                //saco la media
                $media = $sum / $cont;
                //creo el array asociativo
                $asoArray = [
                    "nprimos" => $nprimos,
                    "media" => $media,
                    "mínimo" => $min

                ];
                ?>
                <table border="1">

                    <?php
                    //hacemos que nos muestre las caractesísticas del array asociativo en una tabla
                    foreach ($asoArray as $caracteristica => $valor):
                        ?>
                        <tr>
                            <th>
                                <?php
                                if ($orden == true) {
                                    echo $caracteristica;
                                } else {
                                    echo $valor;
                                }
                                ?>
                            </th>
                            <td>
                                <?php
                                if ($orden == true) {
                                    echo $valor;
                                } else {
                                    echo $caracteristica;
                                } ?>
                            </td>

                        </tr>

                    <?php endforeach;

            }
        } ?>



            <?php
            usoFunciones($_POST["num"]);
            sinFunciones($_POST["num"]);

            ?>








</body>

</html>