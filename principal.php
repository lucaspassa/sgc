
<?php
require_once("inc/validar.php");
include "inc/menu.php"; ?>


<?php

include("inc/conexiondb.php");

$query="select * from clientes";
    
$resultado = mysqli_query($conexion,$query);
$numero = mysqli_num_rows($resultado); 

$productos = "select * from productos";
$resultado = mysqli_query($conexion,$productos);
$productos = mysqli_num_rows($resultado); 

?>
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
    <link href="css/font-awesome.min.css" rel="stylesheet">

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
                <h1>Panel Central</h1>

            </div>

        <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $numero;  ?></div>
                                        <div>Clientes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <a href="/sgc/cliente_consulta.php"><span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div></a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $productos;  ?></div>
                                        <div>Productos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <a href="/sgc/producto_consulta.php"><span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div></a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="cliente_alta.php"><div align="right"></data><img src="img/usuario.png" class="img-rounded pull-xs-left img-fluid"></div></a>
                    <a href="producto_consulta.php"><div align="left"></data><img src="img/stock.png" class="img-thumbnail img-fluid" width="200" height="200"></div></a>

            




        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
