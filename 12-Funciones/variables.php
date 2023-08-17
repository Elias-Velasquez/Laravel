
/*
Variables locales: Se definen dentro de una funcion y no pueden ser usadas fuera de el

Variables globales: son las que se declaran fuera de una funcion y estan dispnibles dentro y fuera de las funciones

*/
<?php

$frase = 'Ni muy muy, ni tan tan';
echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
}

holaMundo();

//Funciones variables

function buenosDIas(){
    return "Hola! Buenos Dias :)";
}

function buenasTardes(){
    return "Hey!! que tal ha ido la comida??";
}

function buenasNoches(){
    return "¿Te vas a dormir y BUenasNoches" ;
}

$horario = "buenasNoches";

$miFuncion = "buenas".$horario;

echo $miFunfion();
?>