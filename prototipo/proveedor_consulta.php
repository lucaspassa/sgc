<?php include "menu.php" ?>

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
        <!-- <a data-toggle="modal" href="#example" class="btn btn-danger btn-primary">Eliminar</a>
         <a role="button" href="proveedor_modificar.php" class="btn btn-warning btn-primary">Modificar</a>
         
        <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">  
                <a class="close" data-dismiss="modal">x</a>
                <h3> &#191;Realmente desea eliminar los proveedores seleccionados? </h3>
            </div>
            <div class="modal-body">
                <h4>Atencion!</h4>
                <p>alerta!!!</p>
            </div>               
            <div class="modal-footer">
                <a href="#" class="btn btn-success">Eliminar</a>
                <a href="#" class="btn" data-dismiss="modal">Cancelar</a>
            </div>
        </div>-->
        <div class="col-lg-6">
            <div class="input-group">
            <input type="text" class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
                </span>
            </div>
        </div>
            
        <a data-toggle="modal" href="#myModal" class="btn btn-danger btn-primary">Eliminar</a>
        <a role="button" href="proveedor_modificar.php" class="btn btn-warning btn-primary">Modificar</a>
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


            <div class="table-responsive">
              <table class="table table-hover">
                  <thead>
                        <th> <input type="checkbox" value=""></th>
                        <th> Nombre </th>
                        <th> Direccion </th>
                        <th> Telefono </th>
                        <th> Correo </th>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td><input type="checkbox" value=""></td>
                            <td> Matias </td>
                            <td> En mi casa </td>
                            <td> 2944655052 </td>
                            <td> matute@micorreo.com.ar </td>
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
