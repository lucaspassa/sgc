<?php 
	
	require('conexiondb.php');
	
	$razon_social=$_POST['razon_social'];
	$nombre_contacto=$_POST['nombre_contacto'];
	$cuit=$_POST['cuit'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];

	$query="INSERT INTO proveedores (razonSocial, nombreContacto, cuit, direccion, telefono, correo) VALUES ('$razon_social','$nombre_contacto','$cuit','$direccion','$telefono','$correo')";
	
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

	    <title>Guardar Proveedores</title>

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
				
				<?php if($resultado>0){ 
					header('Location: /sgc/proveedor_consulta.php');
					echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>";
					exit();
					?>

					<h1>Proveedor Guardado</h1>
					<?php }else{ ?>
					<h1>Error al Guardar Proveedor</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>