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


    <form name=frm action="inc/proveedor_guardar.php" method="POST"  >
        <div class="form-group">
            <label for="exampleInputEmail1">Razon Social</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="razon_social" required="" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre Contacto</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nombre_contacto" required=" ">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cuit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cuit" required=" ">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Direccion</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="direccion" required=" ">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="telefono" required=" ">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Correo</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="correo" required=" ">
        </div>
        
        <input type=button value="Registrar" class="btn btn-primary" onclick="valida_envia();">
        
        
  </form>

    </div>
    <!-- /.container -->

    <script language="JavaScript" type="text/JavaScript">

        function valida_envia(){
        if(document.frm.razon_social.value == "") {
        alert("Por favor indique la Razon Social");
        document.frm.razon_social.focus();
        return 0;
        }

        if(document.frm.nombre_contacto.value == "") {
        alert("Por favor indique el nombre de contacto");
        document.frm.nombre_contacto.focus();
        return 0;
        }


        if(document.frm.cuit.value == "") {
        alert("Por favor indica un cuit");
        document.frm.cuit.focus();
        return 0;
        }

        if(document.frm.direccion.value == "") {
        alert("Por favor indica una direccion");
        document.frm.direccion.focus();
        return 0;
        }

        if(document.frm.correo.value == "") {
        alert("Por favor indica un E-Mail valido");
        document.frm.correo.focus();
        return 0;
        }

        
        document.frm.submit(); 
        return true;
        }
</script>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
</script>
    <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>

</html>
