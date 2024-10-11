<?php

session_start();

if (empty($_SESSION['correo'])) {
  header("location:login.php");
}

else if (!$_SESSION['completo']) {
  header("location:cify.php");
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

    .imga {
    transition-duration: 1s;
    transition-property: all;
    display: inline-block;
    }
    
    .imga:hover {
   transform: scale(.97);
  transition-duration: 1s;
  transition-property: all;
 display: inline-block;
}
	}


    .tabla1 {
          width: 70%; /* Ancho completo de la tabla */
          border-collapse: collapse; /* Colapsar bordes de las celdas */
      align-content: center;
      text-align: center;
      
      }
      th, td {
          border: 0px solid #000; /* Borde de 1 píxel sólido */
          padding: 0px; /* Espaciado interior de las celdas */
          text-align: center; /* Alineación del texto a la izquierda */
          align-content: center;
      }
      th {
          background-color: #f2f2f2; /* Color de fondo del encabezado */
      }

      .tabla1 td img {
      }


</style>
<body>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="background-color: white;">
     <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php" style="margin-left: 50px;"><img height="45" src="IMG/logoCIFY.png"style="margin-right: 300px;"></a>

    <form class="d-flex" style="text-align: right;">
          <input class="form-control me-2" type="text" placeholder="Buscador" style="text-align: right; background-color: white; border-color: #5c5a5a;" size="60">
          <button class="btn btn-primary" type="button" style="background-color: #5c5a5a; border-color: #5c5a5a;">Buscar</button>
    </form>


        <a class="navbar-brand" href="#"><img height="40" src="<?php echo $_SESSION['ruta']; ?>" style="margin-left: 300px;">
        <a class="navbar-brand" href="cerrar_sesion.php"><img height="40" src="IMG/cerrar.png" style="margin-right: 50px;">
        <?php
        
        echo $_SESSION['usuario'];
        ?>      
      </a>
    </div>
</nav>



<br><br><br><br><br><br><br><br>

<center style="color: white;">
  <img height="200" src="IMG/logoCIFY.png"></a><br><br>
  <h1><b>Unete a nuestras comunidades<br>
  o crea alguna<br></h1></b>

<br><br><br><br><br><br>

<b><h5>
    <table class="tabla1">  
      <?php 
      
      $conn=mysqli_connect("localhost","root","","cify") or die ("Problemas en la conexion");

      $consulta=mysqli_query($conn, "select * from comunidades");
      echo "<tr><td>Foto de perfil</td><td>Nombre</td><td>Tema</td><td>Descripcion</td></tr>";
      while ($row=mysqli_fetch_assoc($consulta)) {
        echo "<tr>";
        echo "<td><img height='200px' style='border-radius: 10px;' src='".$row['img']. "'></td>";
        echo "<td>".$row['nombre']. "</td>";
        echo "<td>".$row['tema']. "</td>";
        echo "<td>".$row['descripcion']. "</td>";
        echo "</tr>";
      }

      ?>
    </table>


    
</center>



<br><br><br><br><br>

<center>
<h1><a href="comunidades.html" style="color: white;"><b>CREAR COMUNIDAD</a></b></h1>
</center>

<br><br><br><br><br><br><br>



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


</body>
</html>

