<?php

session_start();

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$conn=mysqli_connect("localhost","root","","cify") or die ("Problemas en la conexion");

$consulta=mysqli_query($conn, "select * from usuarios where correo='$correo'");


while ($row=mysqli_fetch_assoc($consulta)) {
    if ($correo==$row['correo'] && $contraseña==$row['contrasena']) {
        $_SESSION['correo']=$row['correo'];
        $_SESSION['usuario']=$row['usuario'];
        $_SESSION['nombre']=$row['nombre'];
        $_SESSION['apellidos']=$row['apellidos'];
        $_SESSION['id']=$row['id'];
        $_SESSION['completo']=$row['completo'];

        $consulta2=mysqli_query($conn, "select * from intereses where id=$_SESSION[id]");

        while ($row2=mysqli_fetch_assoc($consulta2)) {
            $_SESSION['ruta']=$row2['image'];
        }
        if(!$row['completo']) {
            $_SESSION['completo']=false;
            header("location:cify.php");
        } else {
            $_SESSION['completo']=true;
            header("location:inicio.php");
        }

        
    }

    else {
        echo "Credenciales Invalidas";
    }
}