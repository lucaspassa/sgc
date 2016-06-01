<?php
include "inc/menu.php";
include "inc/conexiondb.php";

$permisos = mysqli_query($conexion,"SELECT * FROM permisos");

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Permisos </title>

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
    </style>

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1> Permisos </h1>
            </div>
        </div>
        <!-- /.row -->


    <form name="form1" method="post" action="ver_permisos.php">
      <select class="form-control" name="rol">
        <option value=""></option>
        <?php while($permisosArr = mysqli_fetch_array($permisos)){ ?>
          <option><?php echo $permisosArr['codigoPermiso']; ?></option>
        <?php } ?>
      </select>
        <button type="submit" class="btn btn-primary">Ver permisos</button>
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
