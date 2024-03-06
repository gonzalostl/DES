<?php


/**
 * function cumpleHijos($textoHijos): Recibe el texto del textarea de los hijos y verifica si
 * cumple las dos condiciones y calcula la media de edad de los hijos, devuelve un array
 * asociativo con claves cumpleCondiciones y media y valores respectivamente, true o false y
 * el valor de la media de los hijos.
 * Tener 2 hijos menores de 14 o uno con minusvalía
 * Juan 12 H S
 */
function cumpleHijos($textoHijos)
{
    //Variables para guardar la media de la edad de los hijos y si cumple las condiciones
    $mediaEdad=0;
    $cumpleCond=false;
    $numHijMen=0;
    //Separamos las lineas escritas en el textArea
    $hijos = explode("\n",$textoHijos);

    foreach($hijos as $sHijo)
    {
        //Separamos los campos de cada linea que estan entre espacios
        $hijo = explode(" ",$sHijo);
        
        //Vamos sumando las edades de los hijos en mediaEdad
        $mediaEdad=$mediaEdad+$hijo[1];

        //Si encontramos un hijo con minusvalia ponemos a cierta la condicion
        if ( trim(strtolower($hijo[3]))=="s")       
                $cumpleCond=true;
   

        //Vamos contando los hijos menores de 14
        if ($hijo[1]<14)
            $numHijMen++;

    }

    //Si tiene mas de un hijo menor de 14 cumple la condicion
    if ($numHijMen>1)
        $cumpleCond=true;

    //Calculamos la media de edad dividiendo entre la cantidad de hijos
    $mediaEdad = $mediaEdad / count($hijos);

    $valDevol=["cumpleCondiciones" => $cumpleCond, "media" => $mediaEdad];

    //Devolvemos el array asociativo con los valores pedidos
    return $valDevol;

}

/**
 * function cumpleDomicilio($textoCasas): Recibe el texto del texarea domicilios y verifica si
 * cumple las dos condiciones, No tener casas en provincias distintas
*  No tener más de dos casas, devuelve un array asociativo con las dos condiciones como
 * claves y valores true o false dependiendo.
 * 
 * Formato direccion jaen 3 4 S
 */
function cumpleDomicilio($textoCasas)
{
    //Primero separamos las lineas del txtDireccion
    $lineas = explode("\n",$textoCasas);
    
    //Si hay mas de dos lineas implica que tiene 
    //Mas de dos casas y ya salimos
    if (count($lineas)>2) return false;

    $provinciaAnterior="";
    foreach($lineas as $linea)
    {
        
        //Separamos los elementos de cada linea
        $direccion=explode(" ",$linea);
        //Si la provincia es distinta de la siguiente no cumple la condicion
        if ($provinciaAnterior!="" && $provinciaAnterior!=$direccion[0])
            return false;
        //Guardamos la provincia de la linea actual para compararla
        $provinciaAnterior=$direccion[0];

    }
    //Si Acabe el bucle sin salir implica que hay menos de 3 direcciones y las provincias son iguales
    return true;


}

//Datos validos nos va a servir para comprobar que nos han llegado todos los datos correctamente
$datosValidos = true;

//Recogemos los datos del formulario
if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
} else
    $datosValidos = false;

if (isset($_POST["edad"])) {
    $edad = $_POST["edad"];
} else
    $datosValidos = false;

if (isset($_POST["estCivil"])) {
    $estCivil = $_POST["estCivil"];
} else
    $datosValidos = false;

if (isset($_POST["sueldo"])) {
    $sueldo = $_POST["sueldo"];
} else
    $datosValidos = false;

if (isset($_POST["txtHijos"])) {
    $txtHijos = $_POST["txtHijos"];
} else
    $datosValidos = false;

if (isset($_POST["txtDomicilios"])) {
    $txtDomicilios = $_POST["txtDomicilios"];
} else
    $datosValidos = false;

/**
 * Mayor de edad
*Casado
*Sueldo mayor de 10000 y menor de 30000
*Tener 2 hijos menores de 14 o uno con minusvalía
*No tener casas en provincias distintas
*No tener más de dos casas
 */

 if ($datosValidos)
 {
print("<div ");
if ($edad>=18) 
    print ("style='background-color:green'>");
    else
    print ("style='background-color:red'>");
print(" Es Mayor de edad</div>");

print("<div ");
if ($estCivil=="C") 
    print ("style='background-color:green'>");
    else
    print ("style='background-color:red'>");
print(" Esta Casado </div>");

//Sueldo entre 10mil y 30mil
print("<div ");
if ($sueldo==3 || $sueldo==2) 
    print ("style='background-color:green'>");
    else
    print ("style='background-color:red'>");
print(" Sueldo entre 10mil y 30mil </div>");

//Dos hijos menores 14 o 1 con minusvalia
$valores= cumpleHijos($txtHijos);
print("<div ");
if ($valores["cumpleCondiciones"]==true) 
    print ("style='background-color:green'>");
    else
    print ("style='background-color:red'>");
print(" Dos hijos menores 14 o 1 con minusvalia </div>");

//Mas de dos domicilios o en distintas provincias
print("<div ");
if (cumpleDomicilio($txtDomicilios)==true) 
    print ("style='background-color:green'>");
    else
    print ("style='background-color:red'>");
print(" Mas de dos domicilios o en distintas provincias </div>");
 }  
    ?>