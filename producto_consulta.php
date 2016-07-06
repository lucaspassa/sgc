<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');

    $query="SELECT idProducto,codigo,descripcion,stockDisponible,precioCosto,precioVenta from productos order by descripcion";
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
           <div class="input-group">
            <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingresa lo que deseas Buscar...">
            </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th> Código </th>
                            <th> Descripción </th>
                            <th> Stock </th>
                            <th> Precio Costo</th>
                            <th> Precio Venta </th>
                            <td><a href="\sgc\producto_alta.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo</button></a></td>
                       </thead>
                        <tbody class="buscar">
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
                                <a href="inc/producto_mod.php?id=<?php echo $row['idProducto'];?>"> <button type="button" class="btn btn-success"> Modificar </button></a>
                            </td>
                            <td>
                                <a href="inc/producto_eliminar.php?id=<?php echo $row['idProducto'];?>"> <button type="button" class="btn btn-danger"> Eliminar</button></a>
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

        <script src="js/buscador.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>