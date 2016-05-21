# CREACION DE TABLAS GENERALES

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `codigoPermiso` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`codigoPermiso`, `descripcion`) VALUES
('TODO', 'Todos los permisos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`, `descripcion`) VALUES
(1, 'administrador', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permiso`
--

CREATE TABLE IF NOT EXISTS `rol_permiso` (
  `codigoPermiso` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol_permiso`
--

INSERT INTO `rol_permiso` (`codigoPermiso`, `idRol`) VALUES
('TODO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaAlta` date NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `clave`, `fechaAlta`, `idRol`) VALUES
(1, 'matias', 'matias', '2016-05-06', 1),
(2, 'diego', 'diego', '2016-05-06', 1),
(3, 'lucas', 'lucas', '2016-05-06', 1),
(4, 'bruno', 'bruno', '2016-05-06', 1),
(5, 'bauty', 'bauty', '2016-05-06', 1),
(6, 'daniel', 'daniel', '2016-05-06', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`codigoPermiso`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rol_permiso`
--
ALTER TABLE `rol_permiso`
  ADD PRIMARY KEY (`codigoPermiso`,`idRol`),
  ADD KEY `idRolRestric` (`idRol`);
  ADD KEY `codigoPermisoRestric` (`codigoPermiso`);
--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rol_permiso`
--
ALTER TABLE `rol_permiso`
  ADD CONSTRAINT `codigoPermisoRestric` FOREIGN KEY (`codigoPermiso`) REFERENCES `permisos` (`codigoPermiso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `idRolRestric` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



CREATE TABLE
IF NOT EXISTS productos(
	idProducto INT(10) NOT NULL AUTO_INCREMENT,
	codigo VARCHAR(50) NOT NULL  ,
	descripcion VARCHAR(250) NOT NULL  ,
	stockDisponible INT(10) NOT NULL  ,
	precioCosto DECIMAL(10 , 2) NOT NULL  ,
	precioVenta DECIMAL(10 , 2) NOT NULL ,
	PRIMARY KEY (idProducto)
);

CREATE TABLE
IF NOT EXISTS clientes(
	idCliente INT(10) NOT NULL AUTO_INCREMENT ,
	nombre VARCHAR(50) NOT NULL  ,
	apellido VARCHAR(50) NOT NULL  ,
	razonSocial VARCHAR(50) NOT NULL  ,
	categoria VARCHAR(50) NOT NULL  ,
	dni INT(10)  ,
	cuit INT(15)  ,
	direccion VARCHAR(50) NOT NULL  ,
	telefono INT(20)  ,
	correo VARCHAR(50) NOT NULL ,
	PRIMARY KEY (idCliente)
);

CREATE TABLE
IF NOT EXISTS proveedores(
	idProveedor INT(10) NOT NULL AUTO_INCREMENT,
	razonSocial VARCHAR(50) NOT NULL  ,
	cuit INT(15)  ,
	direccion VARCHAR(50) NOT NULL  ,
	telefono INT(20) NOT NULL  ,
	correo VARCHAR(50) NOT NULL  ,
	nombreContacto VARCHAR(50) NOT NULL  ,
	categoria VARCHAR(50) NOT NULL ,
	PRIMARY KEY (idProveedor)
);

# CREACION DE TABLAS RELACIONADAS.


CREATE TABLE
IF NOT EXISTS venta(
	idProducto INT(10) NOT NULL  ,
	idCliente INT(10) NOT NULL  ,
	cantidad INT(10) NOT NULL  ,
	importe DECIMAL(10 , 2) NOT NULL  ,
	fechaVenta DATE NOT NULL ,
	idTipoComprobante INT(10) NOT NULL 
);

CREATE TABLE
IF NOT EXISTS compra(
	idProveedor INT(10) NOT NULL  ,
	idProducto INT(10) NOT NULL  ,
	nroCompra INT(10) NOT NULL  ,
	fechaRecepcion DATE NOT NULL ,
	fechaOrden DATE NOT NULL ,
	idTipoComprobante INT(10) NOT NULL  ,
	importe DECIMAL(10 , 2) NOT NULL  ,
	cantidad INT(10) NOT NULL 
);

CREATE TABLE
IF NOT EXISTS tipoComprobante(
	idTipoComprobante INT(10) NOT NULL AUTO_INCREMENT,
	codigo VARCHAR(50) NOT NULL  ,
	descripcion VARCHAR(50) NOT NULL ,
	PRIMARY KEY(idTipoComprobante)
);

# CREACION DE LLAVES COMPUESTAS


ALTER TABLE venta
 ADD PRIMARY KEY(idProducto , idCliente) ,
 ADD KEY idProdRestriccion (idProducto) ,
 ADD KEY idClienteRestriccion (idCliente);

ALTER TABLE compra 
 ADD PRIMARY KEY(idProveedor , idProducto) ,
 ADD KEY idProveedorRestriccion (idProveedor) ,
 ADD KEY idProdCompraRestriccion (idProducto);

# RESTRICCION PARA ACTUALIZACION EN CASCADA Y EVITAR BORRADO DE LLAVES RELACIONADAS

ALTER TABLE compra
 ADD CONSTRAINT idProveedorRestriccion FOREIGN KEY (idProveedor) REFERENCES proveedores (idProveedor) ON UPDATE CASCADE,
 ADD CONSTRAINT idProdCompraRestriccion FOREIGN KEY (idProducto) REFERENCES productos (idProducto) ON UPDATE CASCADE;

ALTER TABLE venta
 ADD CONSTRAINT idProdRestriccion FOREIGN KEY (idProducto) REFERENCES productos (idProducto) ON UPDATE CASCADE,
 ADD CONSTRAINT idClienteRestriccion FOREIGN KEY (idCliente) REFERENCES clientes(idCliente) ON UPDATE CASCADE;