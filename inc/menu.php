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
          <ul class="nav navbar-nav">
            <li><a href="index.html">Panel Central</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/sgc/cliente_alta.php">Alta Cliente</a></li>
                <li><a href="/sgc/cliente_consulta.php">Consultar Cliente</a></li>
              </ul>
            </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ventas<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="producto_venta.php">Vender Producto</a></li>
          <li><a href="reporte_venta.php">Generar Reporte</a></li>
        </ul>
      </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proveedores<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/sgc/proveedor_alta.php">Alta Proveedor</a></li>
        <li><a href="/sgc/proveedor_consulta.php">Consultar Proveedor</a></li>
        </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/sgc/producto_alta.php">Alta</a></li>
        <li><a href="/sgc/producto_consulta.php">Consultar</a></li>
        </ul>
    </li>

	  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Caja<span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="/sgc/caja_ingreso.php">Ingreso</a></li>
            <li><a href="/sgc/caja_egreso.php">Egreso</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="caja_consulta.php">Consultar Movimientos</a></li>
      </ul>
    </li>


    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="/sgc/usuario_alta.php">Alta usuario</a></li>
            <li><a href="/sgc/usuario_consulta.php">Consultar usuario</a></li>
      </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Roles<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/sgc/roles_alta.php">Alta</a></li>
          <li><a href="/sgc/roles_consulta.php">Consultar</a></li>
        </ul>
    </li>

    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
    <!-- /.container -->
</nav>
