<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modificar proveedores</title>

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
                <h1>Modificar proveeedor</h1>
            </div>
        </div>
        <!-- /.row -->


    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Razon Social</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="MegaInfoMaxPowerQuadCore">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre Contacto</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Zambatruli Gimenez">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cuit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="30-9990876123-1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Direccion</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Av. San Martin 567">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="5676543320">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="campus@capacitas.com">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-primary">Borrar</button>
        <button> <a href="proveedor_consulta.php" role="button"  class="btn btn-primary"> Cancelar </a> </button>
        
  </form>



    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
