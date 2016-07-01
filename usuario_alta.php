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
                <h1>Cargar Usuario</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="inc/usuario_guardar.php" method="POST" >
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
            <div class='input-group date' id='divMiCalendario'>
              <input name="fecha_alta" type='text' id="txtFecha" class="form-control"  readonly/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
        </div>

        <fieldset class="form-group">
            <label for="exampleSelect1">Seleccionar Rol</label>
            <select class="form-control" name="tipo_rol">
              <?php while($rolesArr = mysqli_fetch_array($roles)){ ?>
            <option value="<?php echo $rolesArr['idRol']; ?>"><?php echo $rolesArr['nombreRol']; ?> </option>
            <?php } ?>
            </select>
        </fieldset>

        <input type=button value="Registrar" class="btn btn-primary" onclick="this.form.submit(); this.disabled=true; this.value='enviando'">


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
   <script src="js/bootstrap-datetimepicker.min.js"></script>
   <script src="js/bootstrap-datetimepicker.es.js"></script>
   <script type="text/javascript">
	 $('#divMiCalendario').datetimepicker({
		  format: 'YYYY-MM-DD'
	  });
	  $('#divMiCalendario').data("DateTimePicker").show();
   </script>
</body>

</html>
