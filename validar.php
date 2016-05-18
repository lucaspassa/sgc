<?php
if ($_SESSION['entrar'] == true) {

	echo 'Bievenido';
	header('Location:principal.php');

}else{
	echo 'Error al conectar, verifique usuario y contrasenia';
}
?>
