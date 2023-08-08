<?php

    /* BUCLE WHILE
    //estructura de control que itera o repite la ejecucion de una serie
    //de instrucciones tantas veces como sea necesario,
    //en base a una condicion.

    while(condicion){
        bloque de instrucciones
        otra instruccion
    }
    */

    //EJEMPLO 1

         $cantidad = 15;

    // while($cantidad <= 100){
    //     echo "<p>$cantidad</p>";
    //     $cantidad++;
    // }


    //EJEMPLO 2

    // if(isset($_GET['numero'])){
    //     $cantidad = (int) $_GET['numero'];

    // } else {
    //     $cantidad = 1;
    // }

    
    // echo "<h1>Tabla de multiplicar del numero $cantidad</h1>";

    // $contador = 0;

    // while($contador <= 10){
    //     echo "$cantidad x $contador = ".($cantidad*$contador)."<br/>";
    //     $contador++;
    // }


    // DO WHILE
    /*
    ALGO se ejecuta 1 vez y luego se volvera a ejecutar a partir de una condicion

    

    do{
        //bloque de instrucciones
    }while(condicion){

    }
    
    
    */



    $edad = 18;
    $contador = 1;

    do{
        echo "TIenes acceso al local privado $contador";
        $contador++;
    } while($edad >= 18 && $contador <= 10);


    
?>