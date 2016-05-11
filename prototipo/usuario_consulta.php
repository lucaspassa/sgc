<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consulta de clientes</title>

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
                        <th> Nombre y Apellido </th>
                        <th> Nombre de usuario </th>
                        <th> Clave </th>
                        <th> Rol </th>
                        <th> Email </th>
                        
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td> Roberto Gonzalez </td>
                            <td> groberto </td>
                            <td> abcde1234 </td>
                            <td> Administrador </td>
                            <td> groberto@gmail.com</td>
                            <td>
                              <a href="editar_producto.php" role="button"><span class="glyphicon glyphicon-pencil" id="colorGlypiconEdit" aria-hidden="true"></span></a>
                              <a href="imprimir_producto.php" role="button"><span class="glyphicon glyphicon-print" id="colorGlypiconPrint" aria-hidden="true"></span></a>
                              <a href="eliminar_producto.php" role="button"><span class="glyphicon glyphicon-trash" id="colorGlypiconDelete" aria-hidden="true"></span></a>
                            </td>
                        </tr>

                        <tr class="success">
                            <td> Gaston Gutierrez </td>
                            <td> ggutierrez </td>
                            <td> abcde98 </td>
                            <td> Supervisor </td>
                            <td> ggutierrez@gmail.com</td>
                            <td>
                              <a href="editar_producto.php" role="button"><span class="glyphicon glyphicon-pencil" id="colorGlypiconEdit" aria-hidden="true"></span></a>
                              <a href="imprimir_producto.php" role="button"><span class="glyphicon glyphicon-print" id="colorGlypiconPrint" aria-hidden="true"></span></a>
                              <a href="eliminar_producto.php" role="button"><span class="glyphicon glyphicon-trash" id="colorGlypiconDelete" aria-hidden="true"></span></a>
                            </td>
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
