<?php include "inc/menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de Productos</title>

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
                <h1>Registro de Productos</h1>
            </div>
        </div>
        <!-- /.row -->
        <form action="inc/producto_guardar.php" method="POST" onsubmit="registrar.disabled = true; return true;">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span></span>
                <input type="text" class="form-control" placeholder="Código" aria-describedby="sizing-addon1" name="codigo" required="" maxlength="20">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-apple" aria-hidden="true"></span></span>
                <input type="text" class="form-control" placeholder="Descripción" aria-describedby="sizing-addon1" name="descripcion" required="" maxlength="30">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></span>
                <input type="number" class="form-control" placeholder="Stock" aria-describedby="sizing-addon1" name="stock" required="" maxlength="20">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></span>
                <input type="number" class="form-control" placeholder="Precio Costo" aria-describedby="sizing-addon1" name="precio_costo" oninput="maxPrecioCosto(this)" required="" maxlength="10">
            </div><br/>
              <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></span>
                <input type="number" class="form-control" placeholder="Precio Venta" aria-describedby="sizing-addon1" name="precio_venta" required="" oninput="maxPrecioVenta(this)" maxlength="10">
            </div><br/>

            <input type="submit" class="btn btn-primary" value="Registrar" name="registrar">
            <a href="\sgc\producto_consulta.php"><button type="button" class="btn btn-default"> Cancelar</button></a>
        </form>
    </div>
    <!-- /.container -->
    <script>
    function maxPrecioCosto(precio_costo)
    {
    if (precio_costo.value.length > precio_costo.maxLength)
      precio_costo.value = precio_costo.value.slice(0, precio_costo.maxLength)
    }
    </script>
    <!-- Funcion para validar la longitud de caracteres del input telefono-->
    <script>
    function maxPrecioVenta(precio_venta)
    {
    if (precio_venta.value.length > precio_venta.maxLength)
      precio_venta.value = precio_venta.value.slice(0, precio_venta.maxLength)
    }
    </script>


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
