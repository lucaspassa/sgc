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


    <form method="post" action="inc/insert_rol.php">
        <div class="form-group">
            <label >Tipo de rol</label>
            <input name="rol" type="text" class="form-control" id="rol" placeholder="Ej: Administrador">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Descripcion</label>
            <textarea name="descripcion" type="text-area" class="form-control" id="descripcion" placeholder="Ej: Que tipos de permisos tiene el csm"></textarea>
        </div>
        <fieldset>
                <label for="exampleInputEmail1">Permisos</label><br/>
                  <?php while($permisosArr = mysqli_fetch_array($permisos)){?>
                        <input type="checkbox" name="permisos" value="<?php echo $permisosArr['codigoPermiso'];?>"/> <?php echo $permisosArr['descripcion']; ?><br />
                  <?php } ?>
        </fieldset>
        <input type=button value="Agregar rol" class="btn btn-primary" onclick="this.form.submit(); this.disabled=true; this.value='enviando'">
  </form>

 </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
