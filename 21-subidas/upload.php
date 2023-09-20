<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

    if(!is_dir('images')){
        mkdir('images',)
    }

}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con un formato correcto, por favor...</h1>";
}

?>