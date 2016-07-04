<?php include "inc/menu.php";
include "inc/conexiondb.php";

$roles = mysqli_query($conexion,"SELECT * FROM roles");



 ?>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

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
                <h1>Registro de Usuarios</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="inc/usuario_guardar.php" class="form-horizontal ws-validate" method="POST" onsubmit="registrar.disabled = true; return true;" >
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" aria-describedby="sizing-addon3" name="nombre_usuario" required="">
        </div><br/>
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
            <input type="password" class="form-control" placeholder="Clave" aria-describedby="sizing-addon3" name="clave" required="">
        </div><br/>
        <div class="input-group input-group-sm">
            <span class="input-group-addon" id="sizing-addon3"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            <input type="date" class="form-control" placeholder="Fecha de alta" aria-describedby="sizing-addon3" name="fecha_alta" required="">
        </div><br/>
        <fieldset class="form-group">
            <label for="exampleSelect1">Seleccionar Rol</label>
            <select class="form-control" name="tipo_rol" name="tipo_rol" required="">
              <?php while($rolesArr = mysqli_fetch_array($roles)){ ?>
            <option value="<?php echo $rolesArr['idRol']; ?>"><?php echo $rolesArr['nombreRol']; ?> </option>
            <?php } ?>
            </select>
        </fieldset>

        <input type="submit" class="btn btn-primary" value="Registrar" name="registrar">
        <a href="\sgc\usuario_consulta.php"><button type="button" class="btn btn-default"> Cancelar</button></a>


  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/moment.min.js"></script>
   
</body>

</html>
