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
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Cargar Cliente</h1>
            </div>
        </div>
        <!-- /.row -->


    <form action="inc/cliente_guardar.php" method="POST" class="form-horizontal ws-validate" name="forms">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="apellido">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Razon Social</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="razon_social" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Categoria</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="categoria">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dni</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="dni">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cuit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cuit" size="11" maxlength="15">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="direccion" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" name="telefono" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Correo Electronico</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="correo">
        </div>
        <input type=button value="Registrar" class="btn btn-primary" onclick="valida();">
  </form>



    </div>
    <!-- /.container -->
    <script language="JavaScript" type="text/JavaScript">
        (function () {
    webshim.setOptions('forms', {
        lazyCustomMessages: true,
        iVal: {
            sel: '.ws-validate',
            handleBubble: 'hide', // hide error bubble

            //add bootstrap specific classes
            errorMessageClass: 'help-block',
            successWrapperClass: 'has-success',
            errorWrapperClass: 'has-error',

            //add config to find right wrapper
            fieldWrapper: '.form-group'
        }
    });

    //load forms polyfill + iVal feature
    webshim.polyfill('forms');
})();

      /*  function valida(){
        if(document.frm.nombre.value == "") {
        alert("Por favor indique Nombre");
        document.frm.nombre.focus();
        return 0;
        }

        if(document.frm.apellido.value == "") {
        alert("Por favor indique el Apellido");
        document.frm.apellido.focus();
        return 0;
        }


        if(document.frm.razon_social.value == "") {
        alert("Por favor indique Razon Social");
        document.frm.razon_social.focus();
        return 0;
        }

        if(document.frm.categoria.value == "") {
        alert("Por favor indica una direccion");
        document.frm.categoria.focus();
        return 0;
        }

        if(document.frm.dni.value == "") {
        alert("Por favor indica un E-Mail valido");
        document.frm.dni.focus();
        return 0;
        }

        document.frm.submit(); 
        return true;
        }*/
</script>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
