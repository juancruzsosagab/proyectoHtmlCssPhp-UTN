<?php

include 'conexion.php';
$nombreSolicitud = $_POST["nombre_solicitud"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO clientes VALUES (DEFAULT, '$nombreSolicitud' , '$apellido', '$email', '$contrasena')";

$resultado = mysqli_query($conexion, $insertar); 

if(!$resultado){
    echo 'Error al registrarse';
} else {
    echo 'Usuario registrado exitosamente';
}

mysqli_close($conexion);
?>