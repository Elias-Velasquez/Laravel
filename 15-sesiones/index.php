<?php

//iniciar la sesion

session_start();

$variable_normal = 'Soy una cadena de texto';

$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."<br/>";