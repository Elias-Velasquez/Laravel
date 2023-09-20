<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir archivos PHP</title>
</head>
<body>
    <h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="enviar">
    </form>
</body>
</html>