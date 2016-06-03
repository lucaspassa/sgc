<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de clientes</title>

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
                <h1>Cargar Cliente</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="cliente_consulta.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ej: Juan">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ej: Perez">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Razon Social</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ej: JuanPerez">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dni</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ej: 34768958">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cuit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ej: 20347689589">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ej: Av Bustillo km 10">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2944768798">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Ej: juanperez@gmail.com">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
