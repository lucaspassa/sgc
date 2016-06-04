<?php 
	
	require('inc/conexiondb.php');
	
	
	$nombre_usuario=$_POST['nombre_usuario'];
	$clave_usuario=$_POST['clave'];
	$fecha_alta=$_POST['fecha_alta'];

	$query="INSERT INTO usuarios (nombreUsuario, clave, fechaAlta) VALUES ('$nombre_usuario','$clave_usuario','$fecha_alta')";
	
	$resultado = mysqli_query($conexion,$query);
	
?>

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="principal.php">Regresar</a>
			
		</center>
	</body>
</html>	