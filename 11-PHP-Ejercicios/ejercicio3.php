<?php

/*
Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados(un numero multiplicado por si mismo)
de los 0 primeros numeros naturales
PD: Utilizar bucle while
*/

$contador = 0;

while($contador <= 40){
    $cuadrado = $contador * $contador;
    
    echo "<h3>el cuadrado de $contador es $cuadrado</h3>";
    $contador ++;
}