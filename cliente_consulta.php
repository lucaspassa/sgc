<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');

    $query="SELECT idCliente,nombre,apellido,razonSocial,categoria,dni,cuit,direccion,telefono,correo from clientes ";
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
                                <a href="cliente_mod.php?id=<?php echo $row['idCliente'];?>">Modificar</a>
                            </td>
                            <td>
                                
                                <a data-toggle="modal" href="#myModal1" >Eliminar</a>      
                                </td>
                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    
                    <h3>&#191;Realmente desea eliminar los clientes seleccionados?</h3>
                </div>
                <div class="modal-footer">  
                    <a data-toggle="modal" href="cliente_eliminar.php?id=<?php echo $row['idCliente'];?>">Eliminar</button>
                    <a data-toggle="modal" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                </div>
                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
        </div>
                            

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
