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
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"><span class="caret"></a>
              <ul class="dropdown-menu">
              
                <li><a href="/sgc/cliente_alta.php">Alta Cliente</a></li>
                <li><a href="/sgc/cliente_consulta.php">Consultar Cliente</a></li>
              </ul>
            </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-signal" aria-hidden="true"><span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/sgc/ventas.php">Ventas realizadas</a></li>
        <li><a href="/sgc/reporte_venta.php">Generar Reporte</a></li>
        </ul>
      </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/sgc/proveedor_alta.php">Alta Proveedor</a></li>
        <li><a href="/sgc/proveedor_consulta.php">Consultar Proveedor</a></li>
        </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-glass" aria-hidden="true"><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/sgc/producto_alta.php">Alta</a></li>
        <li><a href="/sgc/producto_consulta.php">Consultar</a></li>
        </ul>
    </li>

	  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-usd" aria-hidden="true"><span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="/sgc/caja_ingreso.php">Ingreso</a></li>
            <li><a href="/sgc/caja_egreso.php">Egreso</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/sgc/caja_consulta.php">Consultar Movimientos</a></li>
      </ul>
    </li>


    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="/sgc/usuario_alta.php">Nuevo usuario</a></li>
            <li><a href="/sgc/usuario_consulta.php">Consultar usuario</a></li>
            <li><a href="/sgc/roles_alta.php">Nuevo Rol</a></li>
          	<li><a href="/sgc/roles_consulta.php">Consultar Roles</a></li>

      </ul>
    </li>

        <li><a href="index.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
    </li>

    </ul>
  
  <!-- /.navbar-collapse -->
</div>
    <!-- /.container -->
</nav>
