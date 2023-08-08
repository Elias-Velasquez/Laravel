<?php

/*
//CONFICIONALES

IF:
    if(condicion){
        instrucciones
    } else {
        de lo contrario, instrucciones
    }

//OPERADORES DE COMPARACION
== Igual
=== Identico (mismo tipo de dato)
!= Distinto
!== No identico
< Menos que
> Mayor que
<=Menos o igual que
>=Mayor o igual que


//OPERADORES LOGICOS
&& AND Y
|| OR  O
!  Negando



*/


//EJEMPLO 1
$color = "verde";

if($color == "rojo"){
    echo "EL COLOR ES ROJO";
} else {
    echo "el color NO es rojo";
}

echo "<br>";


//EJEMPLO 2
$year = 2015;

if($year < 2019){
    echo "Es un año anterior a 2019";
} else {
    echo "Es un año posterior a 2019";
}



//EJEMPLO 3
$nombre = "David Extremadura";
$ciudad = "Madrid";
$edad = 42;
$mayoria_edad = 18;
$continente= "Europa";

if($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if($continente == "Europa"){
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }
    
} else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}


//EJEMPLO 4

$dia = 3;

    //if anidados

    // if($dia == 1){
    //     echo "Es lunes";
    // } else {
    //     if($dia == 2){
    //     echo "Es Martes";
    //     }
    // }


    // if($dia == 1){
    //     echo "LUNES";
    // } elseif ($dia == 2){
    //     echo "MARTES";
    // } elseif ($dia == 3) {
    //     echo "Miercoles";
    // } elseif ($dia == 4) {
    //     echo "Jueves";
    // } elseif ($dia == 5) {
    //     echo "Viernes";
    // } else {
    //     echo "Es finde";
    // }

    //EJEMPLO 5

    $edad1 = 18;
    $edad2 = 64;
    $edad_oficial = 27;

    if($edad_oficial >= $edad1 && $edad_oficial <=  $edad2){
        echo "ESTA EN EDAD DE TRABAJAR";

    } else {
        echo "NO PUEDE TRABAJAR";
    }

    echo "<br>";

$pais = "Mexico";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este pais se habla español";
} else {
    echo "En este pais no se habla español";
}


echo "<br>";


//SWITCH

$mes = 4;

switch($mes){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;

    default:
        echo "Es fin de semana";
}

//GO TO
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";

?>

