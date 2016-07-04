<?php 
	include "menu.php";
	include('conexiondb.php');
	
	$id=$_POST['idUsuario'];
	$usuario=$_POST['nombre_usuario'];
	$clave=$_POST['clave'];
	$fecha=$_POST['fecha_alta'];
	$tipo_rol=$_POST['tipo_rol'];

	$query="UPDATE usuarios SET nombreUsuario='$usuario', clave='$clave', fechaAlta='$fecha',idRol='$tipo_rol' WHERE idUsuario='$id'";
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

	    <title>Guardar Usuarios</title>

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
				
				<?php if($resultado>0){
					header('Location: /sgc/usuario_consulta.php');
					echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>";
					exit(); ?>
					<h1>Usuario Modificado</h1>
					<?php }else{ ?>
					<h1>Error al modificar Usuario</h1>		
				<?php	} ?>		
			
			</center>
	</body>
	<script src="/sgc/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</script>

</html>	