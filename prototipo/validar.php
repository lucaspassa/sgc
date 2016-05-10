<?php

$usuario=$_POST['user'];
$clave=$_POST['password'];

$user='admin';
$pass='12345';

if ($usuario==$user && $clave==$pass) {

	echo 'Bievenido';
	header('Location:principal.php');

}else{

	echo 'Error al conectar, verifique usuario y contrasenia';
}



?>
