<?php
include "inc/conexiondb.php";

if((!empty($_POST['rol'])) && (!empty($_POST['descripcion']))&& (!empty($_POST['permisos']))){
  $rol= $_POST["rol"];
  $descripcion = $_POST["descripcion"];
  $permisos = $_POST['permisos'];

  mysqli_query($conexion,"INSERT INTO roles (nombreRol,descripcion) VALUES ('$rol','$descripcion')");
  $idRol = mysql_insert_id();
  echo $idRol;
  exit();
  mysqli_query($conexion,"INSERT INTO rol_permiso (codigoPermiso,idRol) VALUES ('$permisos','$idRol')");
  header("Location: roles_consulta.php");

}else{
  echo "Error en el ingreso de datos";
  exit();
}



?>
