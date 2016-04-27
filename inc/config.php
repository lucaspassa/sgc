<?php
/**
 *  Archivos de configuración de parametros de conexión de la base de datos
 * 
 */

// Se inician las variables con los datos para conexión con el motor de base de datos  
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
 
define("SERVER",$servername);
define("USER",$username);
define("PASS",$password);
define("DB",$database);
 
// Modo Debug ?
define("DEBUG","true");
 
?>