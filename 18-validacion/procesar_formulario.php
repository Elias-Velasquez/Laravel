<?php
$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Validar el nombre
    if (!is_string($nombre) || !preg_match("/[a-zA-Z]+/", $nombre)) {
        $error = 'nombre';
    }

    // Validar los apellidos
    if (!is_string($apellidos) || !preg_match("/[a-zA-Z]+/", $apellidos)) {
        $error = 'apellido';
    }

    // Validar la edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }

    // Validar el email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
} else {
    $error = 'faltan_valores';
    header("Location: index.php?error=$error");
}

if ($error != 'ok') {
    header("Location: index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validación de formularios PHP</title>
</head>
<body>
<?php if ($error == 'ok'): ?>
    <h1>Datos validados correctamente</h1>
    <p>Nombre: <?= $nombre ?></p>
    <p>Apellidos: <?= $apellidos ?></p>
    <p>Edad: <?= $edad ?></p>
    <p>Email: <?= $email ?></p>
    <p>Password: <?= $password ?></p>
<?php endif; ?>
</body>
</html>