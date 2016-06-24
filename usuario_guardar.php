<?php

require('inc/conexiondb.php');

	$nombre_usuario=$_POST['nombre_usuario'];
	$clave_usuario=$_POST['clave'];
	$fecha_alta=$_POST['fecha_alta'];
	$tipo_rol=$_POST['tipo_rol'];

	$query="INSERT INTO usuarios (nombreUsuario, clave, fechaAlta, idRol) VALUES ('$nombre_usuario','$clave_usuario','$fecha_alta','$tipo_rol')";

	$resultado = mysqli_query($conexion,$query);





?>

<?php


include ('inc/menu.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Guardar Usuarios</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <style>
	    body {
	        padding-top: 70px;
	        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
	    }
	    </style>

	</head>

	<body>
			<center>

				<?php if($resultado>0){ ?>
					<h1>Usuario Guardado</h1>
					<?php }else{ ?>
					<h1>Error al Guardar Usuario</h1>
				<?php	} ?>

			</center>
	</body>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>
