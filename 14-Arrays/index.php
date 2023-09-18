
<?php

$pelicula = "Batman";

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
var_dump($peliculas[0]);
$cantantes = ['2pac', 'Drake', 'Jeniffer Lopez'];

//recorrer con for
echo "<ul>";
echo "<h1>Listado de peliculas</h1>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

//recorrer con foreach
echo "<h1>Listado de cantantes</h1>";

echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}

echo "</ul>";

//array asociativo
$personas = array(
    'nombre' => 'Victor',
    'apellidos'=> 'Robles',
    'web'=> 'victorroblesweb.es'
);

var_dump($personas['apellidos']);

//arays multidimensionales

$contactos = array (
    array(
        'nombre' => 'Angel',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Jorge',
        'email' => 'jorge@antonio.com'
    ),
    array(
        'nombre' => 'Juan',
        'email' => 'juan@antonio.com'
    ),
);

echo($contactos[1]['nombre']);



