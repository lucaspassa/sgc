<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');

    $query="SELECT idProducto,codigo,descripcion,stockDisponible,precioCosto,precioVenta from productos ";
    $resultado = mysqli_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consulta de Productos</title>

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
                <h1>Lista de Productos</h1>
            </div>
        </div>
           <div class="jumbotron">
            
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <th> Codigo </th>
                            <th> Descripcion </th>
                            <th> Stock </th>
                            <th> Precio Costo</th>
                            <th> Precio Venta </th>
                       </thead>
                        <tbody>
                            <?php while($row=$resultado->fetch_assoc()){ ?>
                            <tr>
                            <td>
                                <?php echo $row['codigo'];?>
                            </td>
                            <td>
                                <?php echo $row['descripcion'];?>
                            </td>
                            <td>
                                <?php echo $row['stockDisponible'];?>
                            </td>
                            <td>
                                <?php echo $row['precioCosto'];?>
                            </td>
                            <td>
                                <?php echo $row['precioVenta'];?>
                            </td>
                            <td>
                                <a href="producto_mod.php?id=<?php echo $row['idProducto'];?>">Modificar</a>
                            </td>
                            <td>
                                <a href="producto_eliminar.php?id=<?php echo $row['idProducto'];?>">Eliminar</a>
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
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>