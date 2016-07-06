<?php
    include "menu.php";
    require('conexiondb.php');
    
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

    <title>Modificar Proveedores</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sgc/css/bootstrap.min.css" rel="stylesheet">

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

        <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" value="<?php echo $row['razonSocial']; ?>" placeholder="Razón Social" aria-describedby="sizing-addon1" name="razon_social" required="" maxlength="20">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" value="<?php echo $row['nombreContacto']; ?>" placeholder="Nombre Contacto" aria-describedby="sizing-addon1" name="nombre_contacto" required="" maxlength="40">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
                <input type="text" class="form-control" value="<?php echo $row['cuit']; ?>" pattern="|^[0123546789]*$|"  placeholder="Cuit" aria-describedby="sizing-addon1" name="cuit" required="" oninput="maxCuit(this)" maxlength="11">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
                <input type="text" class="form-control" value="<?php echo $row['direccion']; ?>" placeholder="Dirección" aria-describedby="sizing-addon1" name="direccion" required="" maxlength="50">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
                <input type="text" pattern="|^[+0123546789]*$|" class="form-control" value="<?php echo $row['telefono']; ?>" placeholder="Teléfono" aria-describedby="sizing-addon1" name="telefono" required="" oninput="maxTel(this)" maxlength="20">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                <input type="email" class="form-control" value="<?php echo $row['correo']; ?>" placeholder="Correo" aria-describedby="sizing-addon1" name="correo" required="" maxlength="50">
            </div><br/>
        <button type="submit" class="btn btn-danger">Modificar</button>
        <a href="\sgc\proveedor_consulta.php"><button type="button" class="btn btn-primary">Cancelar</button></a> 
  </form>




    </div>
    <!-- /.container -->
    <script>
    function maxCuit(cuit)
    {
    if (cuit.value.length > cuit.maxLength)
      cuit.value = cuit.value.slice(0, cuit.maxLength)
    }
    </script>
    <!-- Funcion para validar la longitud de caracteres del input telefono-->
    <script>
    function maxTel(telefono)
    {
    if (telefono.value.length > telefono.maxLength)
      telefono.value = telefono.value.slice(0, telefono.maxLength)
    }
    </script>


    <!-- jQuery Version 1.11.1 -->
    <script src="/sgc/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sgc/js/bootstrap.min.js"></script>

</body>

</html>