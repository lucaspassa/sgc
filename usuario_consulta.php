<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');

    $query="SELECT idUsuario,nombreUsuario,clave,fechaAlta from usuarios ";
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
                        
                        <tr>
                            <td><b>Nombre de Usuario</b></td>
                            <td><b>Clave</b></td>
                            <td><b>Fecha de Alta</b></td>
                            <td></td>
                        </tr>
                       
                        
                    </thead>
                    <tbody>
                        <?php while($row=$resultado->fetch_assoc()){ ?>
                        <tr>
                            <td>
                                <?php echo $row['nombreUsuario'];?>
                            </td>
                            <td>
                                <?php echo $row['clave'];?>
                            </td>
                            <td>
                                <?php echo $row['fechaAlta'];?>
                            </td>
                            <td>
                                <a href="usuario_mod.php?id=<?php echo $row['idUsuario'];?>">Modificar</a>
                            </td>
                            <td>
                                <a href="eliminar.php?id=<?php echo $row['idUsuario'];?>">Eliminar</a>
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


