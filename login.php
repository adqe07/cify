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
    <title>Iniciar Sesion | CiFy</title>
    <script src="login.js"></script>
</head>
<body>
    
    <center>
        <div class="formulario">
            <form action="login2.php" method="post" class="form-registro" id="form2">
                <h1 align="center">Iniciar Sesion</h1>
                    
                <div class="inputs2">
                    <div class="input4">
                        <input type="email" name="correo" placeholder="Correo" id="correo">
                    </div>
                    <div class="input5">
                        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
                    </div>

                    <div class="input7">
                        <input type="submit" value="Iniciar Sesion">
                    </div>
                    No tienes cuenta? <a href="register.php">Registrate</a>
                    
                </div>
            </form>
        </div>
        
    </center>

</body>
</html>