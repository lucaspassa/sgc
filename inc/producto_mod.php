<?php
	include "menu.php";
	require('conexiondb.php');
	
	$id=$_GET['id'];
	
	$query="SELECT codigo, descripcion, stockDisponible, precioCosto, precioVenta FROM productos WHERE idProducto='$id'";
	
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

    <title>Modificacion de Productos</title>

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
                <h1>Modificar Producto</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="producto_modificar.php" method="POST" >

    	<tr>
			<input type="hidden" name="idProducto" value="<?php echo $id; ?>">
		</tr>	

        <div class="form-group">
            <label for="exampleInputPassword1">Codigo Producto</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['codigo']; ?>" name="codigo" maxlength="20">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Descripcion</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['descripcion']; ?>" name="descripcion" maxlength="30">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Stock Disponible</label>
            <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $row['stockDisponible']; ?>" name="stock">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Precio Costo</label>
            <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $row['precioCosto']; ?>" name="precio_costo">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Precio Venta</label>
            <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $row['precioVenta']; ?>" name="precio_venta">
        </div>
        
    	<button type="submit" class="btn btn-danger">Modificar</button>
        <a href="\sgc\producto_consulta.php"><button type="submit" class="btn btn-primary">Cancelar</button></a> 

       
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="/sgc/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</body>
