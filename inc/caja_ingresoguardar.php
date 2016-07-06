
<?php

	require('conexiondb.php');

	$cliente=$_POST['cliente'];
	$producto=$_POST['producto'];
	$cantidad=$_POST['cantidad'];
	$importe=$_POST['importe'];
	$fecha=$_POST['fecha'];
	$comprobante=$_POST['comprobante'];

	$query="INSERT INTO ingreso (idProducto,idCliente,cantidad,importe,fechaVenta,idTipoComprobante) VALUES ('$producto','$cliente','$cantidad','$importe','$fecha','$comprobante')";

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

	    <title>Ingreso de caja</title>

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
					header ("Location: /sgc/ventas.php");

					 }else{ ?>
					<h1>Error al eliminar el proveedor/h1>
				<?php	} ?>
			
			</center>
	</body>
	<script src="/sgc/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</html>
