<?php

require_once("config.php");
//Inicio de la sesion
session_start();

//Tomo los valores enviados desde el formulario de ingreso
$nombre = $_POST['user'];
$clave = $_POST['clave'];

//Hago la validacion para ver si el usuario existe
if(($nombre == 'admin')&&($clave == 12345)){
    $_SESSION['nombre'] = $_GET['nombreUsuario'];
    $_SESSION['permiso'] = 1;//Aca deberia tomar los permisos de la base de datos
    $_SESSION['ingreso'] = true;
    echo 'Bievenido';
  	header('Location: ../principal.php');
}else{
  $_SESSION['ingreso'] = false;
  echo 'Error al conectar, verifique usuario y contraseña';
}

?>
