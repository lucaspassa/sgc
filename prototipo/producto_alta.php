<?php include "menu.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de productos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    textarea {

        resize: none;
    }
    </style>

</head>

<body>
    <!-- Container & Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Cargar Productos</h1>
            </div>
        </div>
        <!-- /.row -->

    <form>
        <div class="form-group">
            <label for="productoId">ID Producto</label>
            <input type="text" class="form-control" id="productoId" placeholder="Codigo de producto">
        </div>
        <div class="form-group">
            <label for="productoCode">Codigo Producto</label>
            <input type="text" class="form-control" id="productoCode" placeholder="Ej: 01269755">
        </div>
        <div class="form-group">
            <label for="productName">Nombre Producto</label>
            <input type="text" class="form-control" id="productName" placeholder="Ej: Hitachi 42 pulgadas 3D">
        </div>
        <div class="form-group">
            <label for="precioMinorista">Precio Minorista</label>
            <input type="number" required="" class="form-control" id="precioMinorista" placeholder="Ej: 5000">
        </div>
        <div class="form-group">
            <label for="precioMayorista">Precio Mayorista o de Costo</label>
            <input type="number" class="form-control" id="precioMayorista" placeholder="Ej: 8599">
        </div>
        <div class="form-group">
            <label for="descripcionProd">Descripcion</label>
            <textarea type="text" class="form-control" id="descripcionProd" placeholder="Descripcion del producto a cargar."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>

    <!-- JavaScript Custom -->
    <script src="js/currency.js"></script>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
