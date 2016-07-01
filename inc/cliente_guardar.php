<?php 
	
	require('conexiondb.php');

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$razon_social=$_POST['razon_social'];
	$categoria=$_POST['categoria'];
	$dni=$_POST['dni'];
	$cuit=$_POST['cuit'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];

	$query="INSERT INTO clientes (nombre, apellido, razonSocial, categoria, dni, cuit, direccion, telefono, correo) VALUES ('$nombre','$apellido','$razon_social','$categoria','$dni','$cuit','$direccion','$telefono','$correo')";
	
	$resultado = mysqli_query($conexion,$query);
	
?>

<?php


include ('menu.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Guardar Clientes</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="/sgc/css/bootstrap.min.css" rel="stylesheet">

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
					<h1>Cliente Guardado</h1>
					<h3><a button type="button" class="btn btn-primary" href="cliente_consulta.php">Consulta de clientes</a> 
					<?php }else{ ?>
					<h1>Error al Guardar Cliente</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="/sgc/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</html>