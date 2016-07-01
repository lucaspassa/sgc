<?php 
	include "inc/menu.php";
	require('inc/conexiondb.php');
	
	$id=$_POST['idCliente'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$razon_social=$_POST['razon_social'];
	$categoria=$_POST['categoria'];
	$dni=$_POST['dni'];
	$cuit=$_POST['cuit'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	
	$query="UPDATE clientes SET nombre='$nombre', apellido='$apellido', razonSocial='$razon_social',categoria='$categoria',dni= '$dni', cuit='$cuit', direccion='$direccion', telefono='$telefono', correo='$correo' WHERE idCliente='$id'";
	
	$resultado = mysqli_query($conexion,$query);
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Modificar Cliente</title>

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
					<h1>Cliente Modificado</h1>
					<?php }else{ ?>
					<h1>Error al modificar Cliente</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</script>

</html>	