<?php

//operadores aritmeticos
$numero1 = 40;
$numero2 = 30;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
echo 'Division: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';

//Operadores de incremento y decremento
$year = 2019;

// $year--;  Tambien se puede poner adelante --$year;
$year++;

echo "<h1>$year</h1>";


//OPERADORES DE ASIGNACION

$edad = 55;

echo $edad.'<br>';

echo ($edad+=5);
//esto es igual a $edad = $edad+5

?>