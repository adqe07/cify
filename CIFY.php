<?php

session_start();

if ($_SESSION['completo']==true) {
  header("location:inicio.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="CIFY.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-3">
  <h2>Completa tu perfil</h2>
  <form action="cify2.php" method="post" enctype="multipart/form-data">
    <div>
      <img src="https://thumbs.dreamstime.com/b/icono-del-perfil-avatar-defecto-105356015.jpg" alt="avatar" id="img" />
      <input type="file" name="foto" id="foto" accept="image/*" />
      <label for="foto">Cambiar foto</label>
    </div>
        <br>
        <div class="container mt-3">
            <h3>Mis intereses:</h3>
                <select class="form-select" id="sel1" name="sellist1">
                    <option value="videojuegos">videojuegos</option>
                    <option value="deportes">deportes</option>
                  <option value="comedia">comedia</option>
                  <option value="peliculas">peliculas</option>
                  <option value="libros">libros</option>
                </select>
<br>
          <div class="container mt-3">
            <h3>Idioma:</h3>
            <form action="/action_page.php">
              <div class="form-check">
                <input type="radio" class="form-check-input" id="español" name="region" value="español" checked>
                <label class="form-check-label" for="español">Español</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="ingles" name="region" value="ingles">
                <label class="form-check-label" for="ingles">Ingles</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="portugues" name="region" value="portugues">
                <label class="form-check-label" for="portugues">Portugues</label>
              </div>
             <br>

          <div class="container mt-3">
          <h3>Quiesieras conocer gente de:</h3>
              <select class="form-select" id="sel1" name="sellist1">
                <option value="miregion">De mi region</option>
                <option value="fueraregion">Fuera de mi region</option>
                <option value="Deestado">De mi estado</option>
                <option value="dondesea">De cualquier lado</option>
              </select>
              <br>
         
    <div class="mb-3">
<h3>Escribe un poco sobre ti</h3>
      <input type="text" class="form-control" id="des"  name="des">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <script src="CIFY.js"></script>
</div>
</body>
</html>
