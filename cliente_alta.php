<?php include "inc/menu.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de clientes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css\bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .form-group >[class*="col-"] + .ws-errorbox {
    padding: 0 15px;
}
    </style>

</head>

<body>

    <!-- Page Content -->
    <div class="container">
        
        <div class="col-lg-12 text-center">
                <h1>Registro de Clientes <span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1>
        </div><br/>

      <form action="inc/cliente_guardar.php" class="form-horizontal ws-validate" method="POST">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Nombre" aria-describedby="sizing-addon1" name="nombre" required="" maxlength="20">
        </div><br/>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Apellido" aria-describedby="sizing-addon1" name="apellido" required="" maxlength="30">
        </div><br/>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Razon Social" aria-describedby="sizing-addon1" name="razon_social" required="" maxlength="20">
        </div><br/>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Categoria" aria-describedby="sizing-addon1" name="categoria" required="" maxlength="20">
        </div><br/>
        
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
            <input type="number" class="form-control" placeholder="CUIT" aria-describedby="sizing-addon1" required="" oninput="maxCuit(this)" maxlength="11">
        </div><br/>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Dirección" aria-describedby="sizing-addon1" required="" maxlength="50">
        </div><br/>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Telefono" aria-describedby="sizing-addon1" required="" oninput="maxTel(this)" maxlength="20">
        </div><br/>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
            <input type="email" class="form-control" placeholder="Correo" aria-describedby="sizing-addon1" required="" maxlength="50">
        </div><br/>
        <div class="form-group">
    </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Registrar</button>
        </div> 
    
    <!-- /.container -->
    
    <!-- Funcion para validar la longitud de caracteres del input DNI>
    <script>
    function maxDni(dni)
    {
    if (dni.value.length > dni.maxLength)
      dni.value = dni.value.slice(0, dni.maxLength)
    }
    </script>
    Funcion para validar la longitud de caracteres del input CUIT
    <script>
    function maxCuit(cuit)
    {
    if (cuit.value.length > cuit.maxLength)
      cuit.value = cuit.value.slice(0, cuit.maxLength)
    }
    </script>
    <!-- Funcion para validar la longitud de caracteres del input telefono
    <script>
    function maxTel(telefono)
    {
    if (telefono.value.length > telefono.maxLength)
      telefono.value = telefono.value.slice(0, telefono.maxLength)
    }
    </script>-->

    
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
