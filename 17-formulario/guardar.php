<?php

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo "<h1>".$_POST['titulo']."</h1>";
    echo "<h2>".$_POST['descripcion']."</h2>";
}

//si lo hago con un metodo GET, la informacion va por la url y eso no es seguro
//es mejor hacer con metodo POST