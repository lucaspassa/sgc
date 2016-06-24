<?php include "inc/menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de Productos</title>

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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Cargar Productos</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="producto_guardar.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Codigo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="codigo">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Descripcion</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="descripcion">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Stock</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="stock" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Precio Costo</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="precio_costo">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Precio Venta</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="precio_venta">
        </div>
        
        <button type="submit" class="btn btn-primary">Cargar Producto</button>
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>