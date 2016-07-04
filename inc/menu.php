<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="menu" role="navigation">
    <div class="container">
      
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bienvenido</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" method="POST" class="form-control" placeholder="Search" action="buscar.php" >
            </div>
            <button type="submit" class="btn btn-default" name="busqueda" >Submit</button>
          </form>
          
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Clientes <span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="caret"></a>
              <ul class="dropdown-menu">
              
                <li><a href="/sgc/cliente_alta.php">Nuevo Cliente</a></li>
                <li><a href="/sgc/cliente_consulta.php">Lista de Clientes</a></li>
              </ul>
            </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Ventas <span class="glyphicon glyphicon-signal" aria-hidden="true"></span><span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/sgc/ventas.php">Ventas realizadas</a></li>
        <li><a href="/sgc/reporte_venta.php">Generar Reporte</a></li>
        </ul>
      </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Proveedores <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/sgc/proveedor_alta.php">Nuevo Proveedor</a></li>
        <li><a href="/sgc/proveedor_consulta.php">Lista de proveedores</a></li>
        </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Stock <span class="glyphicon glyphicon-glass" aria-hidden="true"><span class="caret"></span></span></a>
      <ul class="dropdown-menu">
        <li><a href="/sgc/producto_alta.php">Nuevo Producto</a></li>
        <li><a href="/sgc/producto_consulta.php">Lista de Productos</a></li>
        </ul>
    </li>

	  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Caja <span class="glyphicon glyphicon-usd" aria-hidden="true"><span class="caret"></span></span></a>
      <ul class="dropdown-menu">
            <li><a href="/sgc/caja_ingreso.php">Ingreso</a></li>
            <li><a href="/sgc/caja_egreso.php">Egreso</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/sgc/caja_consulta.php">Consultar Movimientos</a></li>
      </ul>
    </li>


    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Sistema <span class="glyphicon glyphicon-cog" aria-hidden="true"></span><span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="/sgc/usuario_alta.php">Nuevo usuario</a></li>
            <li><a href="/sgc/roles_alta.php">Nuevo Rol</a></li>
            <li><a href="/sgc/usuario_consulta.php">Usuarios</a></li>
          	<li><a href="/sgc/roles_consulta.php">Roles</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="index.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesion</a></li>

      </ul>

    </ul>
  
  <!-- /.navbar-collapse -->
</div>
    <!-- /.container -->
</nav>
