<?php

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$conn=mysqli_connect("localhost","root","","cify") or die ("Problemas en la conexion");
mysqli_query($conn,"insert into usuarios values(null, '$nombre','$apellidos','$usuario','$correo','$contraseña',false)") or die ("Error al registrar");

header("location: login.php");