<?php 

/*FOR

  for(expresion inicial, condicion, incremento contador) {
        //BLOQUE DE INSTRUCCIONES
}
*/

$resultado = 0;

for($i = 0; $i <= 100; $i++) {
    $resultado += $i;
}

echo "<h1>EL resultado es: $resultado</h1>";


//ejemplo tabla de multiplicar
if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}


echo "<h1>Tabla de multiplicar del numero $numero</h1>";

for($contador = 1; $contador <= 10; $contador ++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}

//BREAK 
//Instruccion dentro de los bucles que frena las iteraciones

?>