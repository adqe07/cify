<?php

session_start();

$conn=mysqli_connect("localhost","root","","cify") or die ("Problemas en la conexion");

$id=$_SESSION['id'];
$nombre=$_POST['name'];
$tema=$_POST['tema'];
$descripcion=$_POST['text'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $directorio_destino = "recursos/img/comunidades/"; // Carpeta donde se guardarán los archivos
    
    // Asegúrate de que el directorio exista
    if (!file_exists($directorio_destino)) {
        mkdir($directorio_destino, 0777, true);
    }
    
    $archivo_destino = $directorio_destino . basename($_FILES["foto"]["name"]);
    
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $archivo_destino)) {
        echo "El archivo " . basename($_FILES["foto"]["name"]) . " ha sido subido.";
        $_SESSION['ruta']=$archivo_destino;
    } else {
        echo "Hubo un error subiendo el archivo.";
    }
}
$consulta2=mysqli_query($conn, "select * from comunidades where nombre='$nombre'");
    if ($row=mysqli_fetch_assoc($consulta2)) {
        echo "Esa comunidad ya existe";
    } else {
        mysqli_query($conn, "INSERT INTO comunidades VALUES ('$archivo_destino', null, '$nombre', '$tema', '$descripcion', $id)") or die("Problemas en el insert");        $consulta2=mysqli_query($conn, "select * from proyectos where nombre='$nombre'");

        while ($row=mysqli_fetch_assoc($consulta2)) {
            $_SESSION['id_comunidad']=$row['id'];
        }
        header("location: inicio.php");
    }
    



?>