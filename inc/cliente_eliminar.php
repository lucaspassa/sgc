<?php 
	include "inc/menu.php";
	require('inc/conexiondb.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM clientes WHERE idCliente='$id'";
	
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

	    <title>Eliminar Clientes</title>

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
					<h1>Cliente eliminado</h1>
					<?php
					header ("Location: cliente_consulta.php");

					 }else{ ?>
					<h1>Error al eliminar Cliente</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</script>

</html>	