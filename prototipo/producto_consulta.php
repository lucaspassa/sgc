<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Gestión</title>

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
      <div class="jumbotron">
    <div class="row">
              <table class="table table-hover">
                  <thead>
                      <th> Nombre </th>
                        <th> Direccion </th>
                        <th> Telefono </th>
                        <th> Correo </th>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td> Matias </td>
                            <td> En mi casa </td>
                            <td> 2944655052 </td>
                            <td> matute@micorreo.com.ar </td>
                            <td>  <a href="eliminar.php" role="button"  class="btn btn-danger btn-primary btn-block"> Eliminar </a></td>
                        </tr>
                    </tbody>
        </table>

    </div>
      </div>

    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
