<?php
    /*
    Tipos de datos:
    Entero (int/integer) = 99
    Coma flotante / decimales (float / double)= 3.45
    Cadenas (string) = "Soy un string"
    Boleano (bool) = 1 o 0 / true o false
    Null
    Array (coleccion de datos)
    Objetos
    */

    $numero = 12;
    $decimal = 27.9;
    $texto = "Soy un texto que vale $numero";

    echo $texto;

    echo gettype($numero);
    echo gettype($decimal);
    echo gettype($texto);

    //debugear
    $mi_nombre[] = "VIctor Robles Web";
    $mi_nombre[] = "VIctor Robles Web" ;  
    
    var_dump($mi_nombre)




?>