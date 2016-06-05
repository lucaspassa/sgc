<?php include "inc/menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de usuarios</title>

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
                <h1>Cargar Usuario</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="usuario_guardar.php" method="POST" >
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre de usuario</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nombre_usuario">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Clave</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="clave">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha Alta</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="fecha_alta">
        </div>
        
        <fieldset class="form-group">
            <label for="exampleSelect1">Seleccionar Rol</label>
            <select class="form-control" name="tipo_rol">
            <option value="1">Administrador</option>
            <option value="2">Supervisor</option>
            <option value="3">Ventas</option>
            <option value="4">Deposito</option>
            </select>
        </fieldset>

        <button type="submit" class="btn btn-primary">Registrar</button>

       
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
