

<?php 
include "inc/menu.php" 


?>

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


    <form action="inc/caja_ingresoguardar.php" method="POST">
       
    <div class="form-group">
            <label for="sel1">Cliente</label>
            <select class="form-control" id="sel1" name="cliente">
            
                <option>Seleccione Cliente</option>
        <?php 
        $conexion=mysql_connect("localhost","root","root") or
        die("Problemas en la conexion");
        mysql_select_db("sgc",$conexion) or
        die("Problemas en la selección de la base de datos");  
        mysql_query ("SET NAMES 'utf8'");
        $clavebuscadah=mysql_query("select idCliente,nombre,apellido from clientes",$conexion) or
        die("Problemas en el select:".mysql_error());
        while($row = mysql_fetch_array($clavebuscadah))
        {
        echo'<OPTION VALUE="'.$row['idCliente'].'">'.$row['nombre'].' '.$row['apellido'].'</OPTION>';
        }
         
        ?>



            </select>
        </div>

        <div class="form-group">
            <label for="sel1">Producto</label>
            <select class="form-control" id="sel1" name="producto">
            
                <option>Seleccione una Producto</option>
        <?php 
        $conexion=mysql_connect("localhost","root","root") or
        die("Problemas en la conexion");
        mysql_select_db("sgc",$conexion) or
        die("Problemas en la selección de la base de datos");  
        mysql_query ("SET NAMES 'utf8'");
        $clavebuscadah=mysql_query("select idProducto,descripcion from productos",$conexion) or
        die("Problemas en el select:".mysql_error());
        while($row = mysql_fetch_array($clavebuscadah))
        {
        echo'<OPTION VALUE="'.$row['idProducto'].'">'.$row['descripcion'].'</OPTION>';
        }
         
        ?>



            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cantidad">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Importe</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="importe" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha Alta</label>
            <div class='input-group date' id='divMiCalendario'>
              <input name="fecha" type='text' id="txtFecha" class="form-control"  readonly/>
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
        </div>
        <div class="form-group">
            <label for="sel1">Comprobante</label>
            <select class="form-control" id="sel1" name="comprobante">
            
                <option>Seleccione una tipo</option>
        <?php 
        $conexion=mysql_connect("localhost","root","root") or
        die("Problemas en la conexion");
        mysql_select_db("sgc",$conexion) or
        die("Problemas en la selección de la base de datos");  
        mysql_query ("SET NAMES 'utf8'");
        $clavebuscadah=mysql_query("select idTipoComprobante,descripcion from tipocomprobante",$conexion) or
        die("Problemas en el select:".mysql_error());
        while($row = mysql_fetch_array($clavebuscadah))
        {
        echo'<OPTION VALUE="'.$row['idTipoComprobante'].'">'.$row['descripcion'].'</OPTION>';
        }
 
        ?>



            </select>
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