<?php

// Abrir archivo
// $archivo = fopen("fichero_texto.txt", "r");

// //Leer contenido
// while(!feof($archivo)){
//     $contenido = fgets($archivo);
//     echo $contenido."<br/>";
// }

// //Escribir
// fwrite($archivo, "soy un texto metido desde php");

// //Cerrar archivo
// fclose($archivo);

// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

//renombrar
// rename('fichero_texto.txt', 'archivo_renombrado.txt') or die('error al borrar');

//eliminar
unlink('archivo_renombrado.txt') ;

?>