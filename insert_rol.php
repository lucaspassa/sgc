<?php
include "inc/conexiondb.php";

if((!empty($_POST['rol'])) && (!empty($_POST['descripcion']))){
  $rol= $_POST["rol"];
  $descripcion = $_POST["descripcion"];

  mysqli_query($conexion,"INSERT INTO roles (nombreRol,descripcion) VALUES ('$rol','$descripcion')");
  header("Location: roles_consulta.php");

}else{
  echo "Error en el ingreso de datos";
  exit();
}



?>
