<?php include "inc/menu.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alta de proveedores</title>

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
                <h1>Cargar proveeedor</h1>
            </div>
        </div>
        <!-- /.row -->


        <form action="inc/proveedor_guardar.php" method="POST" onsubmit="registrar.disabled = true; return true;">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" placeholder="Razón Social" aria-describedby="sizing-addon1" name="razon_social" required="" maxlength="20">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                <input type="text" class="form-control" placeholder="Nombre Contacto" aria-describedby="sizing-addon1" name="nombre_contacto" required="" maxlength="40">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
                <input type="text" class="form-control" pattern="|^[0123546789]*$|"  placeholder="Cuit" aria-describedby="sizing-addon1" name="cuit" required="" oninput="maxCuit(this)" maxlength="11">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
                <input type="text" class="form-control" placeholder="Dirección" aria-describedby="sizing-addon1" name="direccion" required="" maxlength="50">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
                <input type="text" pattern="|^[0123546789]*$|" class="form-control" placeholder="Teléfono" aria-describedby="sizing-addon1" name="telefono" required="" oninput="maxTel(this)" maxlength="20">
            </div><br/>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                <input type="email" class="form-control" placeholder="Correo" aria-describedby="sizing-addon1" name="correo" required="" maxlength="50">
            </div><br/>

            <input type="submit" value="Registrar" name="registrar" class="btn btn-primary">
            <a href="\sgc\proveedor_consulta.php"><button type="button" class="btn btn-default"> Cancelar</button></a>
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
    <script src="js/jquery.js"></script>
</script>
    <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>

</html>
