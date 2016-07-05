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

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Lista de Proveedores</h1>
            </div>
        </div>
        
        <div class="col-lg-6">
            
        </div>             
                        
        <div class="jumbotron">
        

        <div class="input-group">
            <span class="input-group-addon">Buscar</span>
            <input id="filtrar" type="text" class="form-control" placeholder="Ingresa lo que deseas Buscar...">
        </div>

            <div class="table-responsive">
              <table class="table table-hover">

                  <thead>
                       
                        <tr>
                            <td><b>Razón social</b></td>
                            <td><b>Contacto</b></td>
                            <td><b>Cuit</b></td>
                            <td><b>Dirección</b></td>
                            <td><b>Teléfono</b></td>
                            <td><b>Email</b></td>    
                            <td><a href="\sgc\proveedor_alta.php"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Nuevo</button></a></td>
                        </tr>
                    </thead>
                    <tbody class="buscar">
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
                                <a href="inc/proveedor_mod.php?id=<?php echo $row['idProveedor'];?>"><span class="glyphicon glyphicon-pencil" id="colorGlypiconEdit" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                <a href="inc/proveedor_eliminar.php?id=<?php echo $row['idProveedor'];?>"><span class="glyphicon glyphicon-trash" id="colorGlypiconDelete" aria-hidden="true"></span></a>
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
