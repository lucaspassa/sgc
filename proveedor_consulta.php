<?php 
    include "inc/menu.php" ;
    require('inc/conexiondb.php');

    $query="SELECT idProveedor,nombreContacto,razonSocial,cuit,direccion,telefono,correo,categoria from proveedores";
    $resultado = mysqli_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consultar proveedores</title>

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
                <h1>Lista de Proveedores</h1>
            </div>
        </div>
        
        <div class="col-lg-6">
            
        </div>
            
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    
                    <h3>&#191;Realmente desea eliminar los proveedores seleccionados?</h3>
                </div>
        
                <div class="modal-footer">
                    <button id="edit-form"  data-id-mutual="" class="btn btn-primary">Eliminar</button>
                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                </div>
                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->                
                        
        <div class="jumbotron">


            <div class="row">
              <table class="table table-hover">
                  <thead>
                       
                        <tr>
                            <td><b>Razon social</b></td>
                            <td><b>Contacto</b></td>
                            <td><b>Cuit</b></td>
                            <td><b>Direccion</b></td>
                            <td><b>Telefono</b></td>
                            <td><b>Email</b></td>    
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$resultado->fetch_assoc()){ ?>
                        <tr>
                            <td>
                                <?php echo $row['razonSocial'];?>
                            </td>
                            <td>
                                <?php echo $row['nombreContacto'];?>
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
                                <a href="proveedor_mod.php?id=<?php echo $row['idProveedor'];?>">Modificar</a>
                            </td>
                            <td>
                                <a href="proveedor_eliminar.php?id=<?php echo $row['idProveedor'];?>">Eliminar</a>
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
