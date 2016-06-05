<?php
include ("config.php");
$conexion = mysqli_connect($servername, $username,$password,$database);
//mysql_select_db("sgc", $conexion);

if($conexion == false) {
 echo 'Ha habido un error <br>';
} else {
 //echo 'Conectado a la base de datos';
}

?>
