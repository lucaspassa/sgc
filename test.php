<?php
require("inc/functions.php");

$connect = new DbManager();
$conexion = $connect->connectDB();

if ($conexion) {
    echo "Conexion a la base de datos exitosa";
} else {
    echo "Fallo la conexión a la base de datos";
}

?>