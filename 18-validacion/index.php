<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>validacion de formularios PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>

        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red"> Introduce todos los datos en todos los campos del formulario</strong>';
                }

                if($error == 'nombre'){
                    echo '<strong style="color:red"> Introduce bien el nombre </strong>';
                }

                if($error == 'apellidos'){
                    echo '<strong style="color:red"> Introduce bien el apellido </strong>';
                }

                if($error == 'edad'){
                    echo '<strong style="color:red"> Introduce bien la edad </strong>';
                }

                if($error == 'email'){
                    echo '<strong style="color:red"> EL correo es erroneo </strong>';
                }

                if($error == 'pass'){
                    echo '<strong style="color:red"> La contraseña debe ser de al menos 8 caracteres</strong>';
                }
            }
        ?>

        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" pattern="[A-Za-z]+"><br/>

            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos" pattern="[A-Za-z]+"><br/>

            <label for="edad">Edad</label><br/>
            <input type="number" name="edad"><br/>

            <label for="email">Email</label><br/>
            <input type="email" name="email" ><br/>

            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass"><br/>

            <input type="submit" value="enviar">
        </form>
    </body>
</html>