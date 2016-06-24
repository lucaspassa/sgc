<?php
    include "inc/menu.php";
    require('inc/conexiondb.php');
    
    $id=$_GET['id'];
    
    $query="SELECT razonSocial,nombreContacto,cuit,direccion,telefono,correo from proveedores WHERE idProveedor='$id'";
    
    
    
    $resultado = mysqli_query($conexion,$query);
    
    $row=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de Proveedores</title>

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
                <h1>Modificar proveedor</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="proveedor_modificar.php" method="POST">

        <tr>
            <input type="hidden" name="idProveedor" value="<?php echo $id; ?>">
        </tr>

        <div class="form-group">
            <label for="exampleInputPassword1">Razon Social</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['razonSocial']; ?>" name="razon_social"   >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre de Contacto</label>
            <input type="text" class="form-control" id="exampleInputPassword1"  value="<?php echo $row['nombreContacto']; ?>" name="nombre_contacto">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cuit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['cuit']; ?>" name="cuit">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['direccion']; ?>" name="direccion" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" value="<?php echo $row['telefono']; ?>" name="telefono" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Correo Electronico</label>
            <input type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $row['correo']; ?>" name="correo">
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
  </form>




    </div>
    <!-- /.container -->


    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>