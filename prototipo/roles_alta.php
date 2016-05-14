<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de Roles</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    .btn {
        margin-top: 10px;
    }
    textarea {

        resize: none;
    }
    </style>

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Roles</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="roles_consulta.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Tipo de rol</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ej: Administrador">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Descripcion</label>
            <textarea type="text-area" class="form-control" id="exampleInputPassword1" placeholder=""></textarea> 
        </div>
        <fieldset>
                <label for="exampleInputEmail1">Permisos</label><br/>
                        <input type="checkbox" name="rol" value="" />Permiso1<br />
                        <input type="checkbox" name="rol" value="" />Permiso2<br />
                        <input type="checkbox" name="rol" value="" />Permiso3<br />
                        <input type="checkbox" name="rol" value="" />Permiso4<br />
                        
        </fieldset>
        
        <button type="submit" class="btn btn-primary">Agregar rol</button>
  </form>

 </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
