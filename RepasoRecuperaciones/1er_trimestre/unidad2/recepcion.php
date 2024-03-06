<?php 



if(empty($_POST)) {
    echo "<h1>Está vacío</h1>";    
    exit();
}

$nombre = $_POST["input-nombre"];
$esFisica = isset($_POST["esFisica"]) && $_POST["esFisica"] == "on";
$provincia = $_POST["input-provincia"];
$presupuesto = $_POST["input-presupuesto"];
$fechaApertura = $_POST["input-fecha-apertura"];
$tomosText = $_POST["input-tomos"];


$tomos = explode("\n", $tomosText);
for($i=0; $i<count($tomos); $i++){
    $tomos[$i] = explode(",", $tomos[$i]);
}

$sumaStocks = 0;
$unidadesXLS = 0;
 foreach($tomos as $tomo){
    // SUMAMOS LOS STOCKS
    $stockTomo = $tomo[3];
    $sumaStocks += $stockTomo;

    //(Más de 300pag y ed colecionista)
    if(intval(trim($tomo[2])) > 300 && strtolower(trim($tomo[5])) == "s"){
        $unidadesXLS++;
    }
 }


 
 function hayStockColeccionista($almacenes){
    global $tomos;
    $almacenYStocks = array(
 
    );

    foreach($almacenes as $almacen){
        $almacen = strtolower($almacen);
        
        foreach($tomos as $tomo){
            if(strtolower(trim($tomo[6])) == $almacen){
                if(!isset($almacenYStocks[$almacen])){
                    $almacenYStocks[$almacen] = 1; 
                } else {
                   $almacenYStocks[$almacen]++;  
                }
            }
        }

        foreach($almacenYStocks as $almacen => $stock){
            if($stock < 10){
                return false;
            }
        }
        return true;
    }
 }


 function stockPorProvincia($almacenes){
    global $tomos;
    $almacenYStocks = array(
        "cadiz" => 0,
        "malaga" => 0
    );

    foreach($almacenes as $almacen){
        $almacen = strtolower($almacen);
        
        foreach($tomos as $tomo){
            if(strtolower(trim($tomo[6])) == $almacen){
                $almacenYStocks[$almacen] += intval(trim($tomo[3]));  
            }
        }

    }
    return $almacenYStocks;
 }

 var_dump(hayStockColeccionista(["cadiz", "huelva", "malaga"]));
 echo "<br/><br/>";
 var_dump(stockPorProvincia(["cadiz", "huelva", "malaga"]));

 echo "<h1> volumenes totales : $sumaStocks</h1> ";
 echo "<h1> unidades XLS : $unidadesXLS</h1>";

?>