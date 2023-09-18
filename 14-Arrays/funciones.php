<?php

$cantantes = ['2pac', 'Drake', 'Jeniffer Lopez', 'Alfredo'];
//funciones para arrays

asort($cantantes);
var_dump($cantantes);

//añadir elementos a un array
$cantantes[]= "Natos";

array_push($cantantes, "Waor");

array_pop($cantantes);

unset($cantantes[3]);

//Aleatorio

echo array_rand($cantantes);



