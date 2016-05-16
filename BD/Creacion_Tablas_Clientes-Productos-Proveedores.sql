
# CREACION DE TABLAS GENERALES

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