<?php

//cookie basica
setcookie('micookie', 'valor de mi galleta');

//cookie con expiración
setcookie('unyear', 'valor de cookie de 365 dias', time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las cookies</a>