<?php
require_once("conexiondb.php");
//Inicio de la sesion
session_start();
//Tomo los valores enviados desde el formulario de ingreso
$nombreU = $_POST['user'];
$clave = $_POST['password'];

// Buscar usuarios en la base de datos
$usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombreUsuario = '$nombreU' AND clave = '$clave'");
$usuario = mysqli_fetch_array($usuario);


//Hago la validacion para ver si el usuario existe
if(($nombreU == $usuario['nombreUsuario'])&&($clave == $usuario['clave'])){
    $_SESSION['nombre'] = $nombreU;
    $_SESSION['permiso'] = $usuario['idRol'];//Aca deberia tomar los permisos de la base de datos
    $_SESSION['entrar'] = true;
    //echo"<script>alert('Bienvenido')</script>";
    header('Location: ../principal.php');
    echo 'Usuario : '.$_SESSION['nombre'] ;
   
}else{
  $_SESSION['entrar'] = false;
  echo 'Error al conectar, verifique usuario y contraseña';
}

?>
