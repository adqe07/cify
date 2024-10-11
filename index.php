<?php

session_start();

if (!empty($_SESSION['correo'])) {
  header("location:inicio.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CIFY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
	body{
		background: linear-gradient(black,50%, #d35400);
	}


  a:hover { 
    color: white;
  }

</style>
<body>

<br><br><br>



<center style="color: white;">
	<img height="200" src="IMG/logoCIFY.png"></a><br><br>
	<h2><b>Somos una pagina web con el fin<br>
	de ayuderte en proyectos personales y<br></h2></b>
	<h3>conectarte con diferentes comunidades<br>
	de todo el mundo.</h3><br><br><br><br>

	<h1><b>¡Unete a nosotros!<br>
	<a href="login.php" style="color: #252525;">Iniciar sesion</a></b></h1>
</center>






<br><br><br><br><br><br>



<footer style="background-color: #252525;">
  <div class="container p-4" style="background-color: #252525; color: white;">
    <div class="row" style="background-color: #252525;">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0" style="background-color: #252525;">
        <h5 class="text-uppercase">Terminos y condiciones</h5>

        <p>
          Al ingresar a este sitio web eres conciente que:<br>
          Que, cualquier persona pueda ver tu información<br>
          personal a traves de tu perfil.
        </p>
      </div>



      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contacto</h5>

        <p>
          Estamos para ayudarte:<br>
          Nos puedes contactar a nuestro correo electronico<br>
          CIFY@gmail.com

        </p>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: black; color: white;">
    © 2020 Copyright: CIFY
  </div>
</footer>



</body>
</html>

