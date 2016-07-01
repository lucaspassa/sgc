<?php 
	
	require('conexiondb.php');

	$cantidad=$_POST['cantidad'];
	$importe=$_POST['importe'];
	
	

	$query="INSERT INTO egreso (cantidad,importe) VALUES ('$cantidad','$importe')";
	
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

	    <title>Guardar egreso</title>

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
					<h1>Egreso almacenado</h1>
					<h3><a button type="button" class="btn btn-primary" href="caja_egreso.php">Volver a egresos</a> 
					<?php }else{ ?>
					<h1>Error al Guardar Egreso</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</html>