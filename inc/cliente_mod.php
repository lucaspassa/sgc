<?php
	include "inc/menu.php";
	require('inc/conexiondb.php');
	
	$id=$_GET['id'];
	
	$query="SELECT nombre, apellido, razonSocial, categoria, dni, cuit, direccion, telefono, correo FROM clientes WHERE idCliente='$id'";
	
	
	
	$resultado = mysqli_query($conexion,$query);
	
	$row=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de Cliente</title>

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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Modificar Cliente</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="cliente_modificar.php" method="POST">

    	<tr>
			<input type="hidden" name="idCliente" value="<?php echo $id; ?>">
		</tr>

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['nombre']; ?>" name="nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['apellido']; ?>" name="apellido">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Razon Social</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['razonSocial']; ?>" name="razon_social" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Categoria</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  value="<?php echo $row['categoria']; ?>" name="categoria">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dni</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['dni']; ?>" name="dni">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cuit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['cuit']; ?>" name="cuit">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['direccion']; ?>" name="direccion" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" value="<?php echo $row['telefono']; ?>" name="telefono" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Correo Electronico</label>
            <input type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $row['correo']; ?>" name="correo">
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
  </form>




    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</body>

</html>