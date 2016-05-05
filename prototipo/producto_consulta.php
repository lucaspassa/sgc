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
                        <th> ID </th>
                        <th> Codigo </th>
                        <th> Nombre </th>
                        <th> Precio Minorista </th>
                        <th> Precio Mayorista </th>
                        <th> Descripcion </th>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td> 21354 </td>
                            <td> MDV566</td>
                            <td> Hitachi </td>
                            <td> 4521,55</td>
                            <td> 7999 </td>
                            <td> LCD 42' Full HD SmartTV 3D </td>
                            <td> <a href="eliminar.php" role="button"  class="btn btn-danger btn-primary btn-block"> Eliminar </a></td>
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
