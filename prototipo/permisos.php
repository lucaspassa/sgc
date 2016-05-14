<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de proveedores</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    .btn {
        margin-top: 10px;
    }
    </style>

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1> Permisos </h1>
            </div>
        </div>
        <!-- /.row -->


    <form name="form1" method="post" action="ver_permisos.php">
      <select class="form-control" name="rol">
        <option value=""></option>
          <option>Supervisor</option>
          <option>Administrador</option>
          <option>Cajero</option>
          <option>Ventas</option>
          <option>Deposito</option>
      </select>
        <button type="submit" class="btn btn-primary">Ver permisos</button>
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
