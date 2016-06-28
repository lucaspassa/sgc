<?php include "inc/menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ingresos de Caja</title>

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
                <h1>Ingresos de Caja</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="inc/caja_egresoguardar.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Cliente</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Producto</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Importe</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cantidad" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha Venta</label>
            <div class='input-group date' id='divMiCalendario'>
              <input name="txtFecha" type='text' id="txtFecha" class="form-control"  readonly/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tipo de comprobante</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
        
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