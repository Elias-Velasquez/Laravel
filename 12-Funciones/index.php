<?php

/*
Funciones
grupo de codigo que puedo estrcturar o instrucciones para luego llamarla sin repetir codigo


function nombre_de_mi_funcion(){
    //bloque de codigo / conjunto de instrucciones

}

nombre_de_mi_funcion(); //Aqui llamo a la funcion para que se ejecute

*/


//Ejemplo:

function muestraNombres(){
    echo "Victor Robles <br/>";
    echo "Juan Arango <br/>";
    echo "Esteban GOmez <br/>";
    echo "<hr/>";
}

muestraNombres();

//Ejemplo 2 
// function tabla($numero){
    
//     echo "<H3>Tabla de multiplicar del numero: $numero </h3>";
//     for($i =1; $i<= 10; $i++){
//         $operacion = $numero*$i;
//         echo "$numero x $i = $operacion <br/>";
//     }
// }

// if(isset($_GET['numero'])){
//     tabla($_GET['numero']);
// } else {
//     echo "NO hay numero para sacar la tabla";
// }


// for($i = 0; $i <= 10; $i++){
//     tabla($i);
// }

//Ejemplo 3

function calculadora ($numero1, $numero2, $negrita = false){
    //conjunto de instrucciones a ejecutar
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multi = $numero1*$numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if($negrita != false){

        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multi: $multi <br/>";
    $cadena_texto .= "Division: $division <br/>";

    if($negrita != false){
        $cadena_texto .= "</h1>";
    }

    return $cadena_texto;
}


echo calculadora(10, 30, true);

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

//ejemplo 4
function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);
    return $texto;

}


echo devuelveElNombre("Victor", "Robles")
?>