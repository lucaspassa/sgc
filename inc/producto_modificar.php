<?php 
	include "menu.php";
	require('conexiondb.php');
	
	$id=$_POST['idProducto'];
	$codigo=$_POST['codigo'];
	$descripcion=$_POST['descripcion'];
	$stock=$_POST['stock'];
	$precioC=$_POST['precio_costo'];
	$precioV=$_POST['precio_venta'];

	$query="UPDATE productos SET codigo='$codigo', descripcion='$descripcion', stockDisponible='$stock',precioCosto='$precioC', precioVenta='$precioV' WHERE idProducto='$id'";
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

	    <title>Modificar Productos</title>

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
					<h1>Producto Modificado</h1>
					<?php }else{ ?>
					<h1>Error al modificar Producto</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"><

</script>

</html>	