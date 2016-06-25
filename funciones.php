<?php
function encriptar($datos){
	$encriptado=md5($datos);
	return $encriptado;
}
function limpiar($con,$datos){
	$resultado=mysqli_real_escape_string($con,$datos);
	$resultado=htmlspecialchars($resultado);
	return $resultado;
}
function consulta($con,$sql,$error){
	$consulta=mysqli_query($con,$sql) or die ($error.mysqli_error($con));
	return $consulta;
}
?>
