<?php

session_start();

$conn=mysqli_connect("localhost","root","","cify") or die ("Problemas en la conexion");

$id=$_SESSION['id'];
$intereses=$_POST['sellist1'];
$idioma=$_POST['region'];
$descripcion=$_POST['des'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $directorio_destino = "recursos/img/perfil/"; // Carpeta donde se guardarán los archivos
    
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

$consulta=mysqli_query($conn, "select * from intereses where id=$id");

if ($row=mysqli_fetch_assoc($consulta)){
    echo "Tu perfil ya estaba completado";
} else {
    mysqli_query($conn, "insert into intereses values ($id,'$intereses','$idioma','$descripcion','$archivo_destino',true)") or die ("Problemas en el insert");
    $_SESSION['completo']=true;
    mysqli_query($conn, "update usuarios set completo=true where id=$id");
    header("location: inicio.php");
}



?>