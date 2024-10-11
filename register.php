<?php

session_start();

if (!empty($_SESSION['correo'])) {
  header("location:inicio.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Recursos/img/logo_comuny-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Registrarse | CiFy</title>
    <script src="registro.js"></script>
</head>
<body>
    
    <center>
        <div class="formulario">
            <form action="register2.php" method="post" class="form-registro" id="form">
                <h1 align="center">Registrarse</h1>
                <div class="inputs1">
                    <div class="input1">
                        <input type="text" name="nombre" placeholder="Nombre" id="nombre">
                    </div>
                    <div class="input2">
                        <input type="text" name="apellidos" placeholder="Apellidos" id="apellidos">
                    </div>
                </div>
                    
                <div class="inputs2">
                    <div class="input3">
                        <input type="text" name="usuario" placeholder="Usuario" id="usuario">
                    </div>
                    <div class="input4">
                        <input type="email" name="correo" placeholder="Correo" id="correo">
                    </div>
                    <div class="input5">
                        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
                    </div>
                    <div class="input6">
                        <input type="password" id="contraseña2" placeholder="Confrimar contraseña">
                    </div>

                    <div class="input7">
                        <input type="submit" value="Registrarse">
                    </div>
                    Ya tienes cuenta? <a href="login.php">Inicia Sesion</a>
                    
                </div>
            </form>
        </div>
        
    </center>

</body>
</html>