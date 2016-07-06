<?php
include ("config.php");
$conexion = mysql_connect($servername, $username,$password);
mysql_select_db("sgc", $conexion);
mysql_query ("SET NAMES 'utf8'");

if($conexion == false) {
 echo 'Ha habido un error <br>';
} else {
 //echo 'Conectado a la base de datos';
}

?>
