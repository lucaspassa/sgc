<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');

    $query="SELECT * from clientes ";
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
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Lista de Clientes</h1>
            </div>
        </div>
        <div class="jumbotron">
            <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <th> Nombre </th>
                            <th> Apellido </th>
                            <th> Razon Social </th>
                            <th>Categoria</th>
                            <th> Dni </th>
                            <th> Cuit </th>
                            <th> Dirección </th>
                            <th> Telefono </th>
                            <th> Email </th>
                        </thead>
                        <tbody>
                            <?php while($row=$resultado->fetch_assoc()){ ?>
                            <tr>
                            <td>
                                <?php echo $row['nombre'];?>
                            </td>
                            <td>
                                <?php echo $row['apellido'];?>
                            </td>
                            <td>
                                <?php echo $row['razonSocial'];?>
                            </td>
                            <td>
                                <?php echo $row['categoria'];?>
                            </td>
                            <td>
                                <?php echo $row['dni'];?>
                            </td>
                            <td>
                                <?php echo $row['cuit'];?>
                            </td>
                            <td>
                                <?php echo $row['direccion'];?>
                            </td>
                            <td>
                                <?php echo $row['telefono'];?>
                            </td>
                            <td>
                                <?php echo $row['correo'];?>
                            </td>
                            <td>
                                <a href="inc/cliente_mod.php?id=<?php echo $row['idCliente'];?>">Modificar</a>
                            </td>
                            <td>
                            <a  href="inc/cliente_eliminar.php?id=<?php echo $row['idCliente'];?>">Eliminar</button></a>
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
