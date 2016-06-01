<?php

require_once("config.php");
//Inicio de la sesion
session_start();

//Tomo los valores enviados desde el formulario de ingreso
$nombreU = $_POST['user'];
$clave = $_POST['password'];

//Hago la validacion para ver si el usuario existe
if(($nombreU == 'admin')&&($clave == '12345')){
    $_SESSION['nombre'] = $nombreU;
    $_SESSION['permiso'] = 1;//Aca deberia tomar los permisos de la base de datos
    $_SESSION['entrar'] = true;
    echo 'Bievenido';
  	header('Location: ../principal.php');
}else{
  $_SESSION['entrar'] = false;
  echo 'Error al conectar, verifique usuario y contraseña';
}

?>
