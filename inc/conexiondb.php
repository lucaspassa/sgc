<?php

$conexion = mysql_connect("localhost", "root"); 
mysql_select_db("sgcdb", $link); 

if($conexion=== false) { 
 echo 'Ha habido un error <br>'; 
} else {
 echo 'Conectado a la base de datos';
}

?>