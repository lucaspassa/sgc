<?php 
	
	require('inc/conexiondb.php');

	$codigo=$_POST['codigo'];
	$descripcion=$_POST['descripcion'];
	$stock=$_POST['stock'];
	$precioC=$_POST['precio_costo'];
	$precioV=$_POST['precio_venta'];
	
	$query="INSERT INTO productos (codigo, descripcion, stockDisponible, precioCosto, precioVenta) VALUES ('$codigo','$descripcion','$stock','$precioC','$precioV')";
	
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

	    <title>Cargar Productos</title>

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
					<h1>Producto Cargado</h1>
					<?php }else{ ?>
					<h1>Error al Cargar Producto</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>