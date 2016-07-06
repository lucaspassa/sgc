<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');
   

    $query="select nombre,apellido,descripcion,cantidad,importe,fechaVenta from clientes,ingreso,productos
where clientes.idCliente = ingreso.idCliente 
and productos.idProducto = ingreso.idProducto order by fechaVenta";
    $resultado = mysqli_query($conexion,$query);


?>


<?php include "inc/menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consulta de Ventas</title>

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
                <h1>Ventas realizadas</h1>
            </div>
        </div>
        <div class="jumbotron">
            <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <th> Cliente </th>
                            <th> Producto</th>
                            <th> Cantidad </th>
                            <th> Importe unitario</th>
                            <th> Total</th>
                            <th> Fecha de venta</th>

                            
                        </thead>
                        <tbody>
                            <?php while($row=$resultado->fetch_assoc()){ ?>
                            <tr>
                            <td>
                                <?php echo $row['nombre'];?> <?php echo $row['apellido'];?>
                            </td>
                            <td>
                                <?php echo $row['descripcion'];?>
                            </td>
                            <td>
                                <?php echo $row['cantidad'];?>
                            </td>
                            <td>
                                <?php echo '$'.$row['importe'];?>
                            </td>
                            <td>
                               <?php echo '$'. $row['cantidad']*$row['importe']; ?>
                            </td>
                            <td>
                                <?php echo $row['fechaVenta'];?>
                            </td>
                            </tr>
                                 <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- /.container -->
    

        <!-- jQuery Version 1.11.1 -->
        <script src="/sgc/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/sgc/js/bootstrap.min.js"></script>

    </body>

</html>
