# DATOS PARA PRUEBAS INICIALES
INSERT INTO productos(
	codigo ,
	descripcion ,
	stockDisponible ,
	precioCosto ,
	precioVenta
)
VALUES
	(
		'SPR39' ,
		'Producto de limpiza' ,
		102 ,
		9.33 ,
		15.99
	) ,
	(
		'SHR38' ,
		'Producto de limpiza' ,
		34 ,
		6.50 ,
		10.50
	) ,
	(
		'HGJ33' ,
		'Producto de Electronica' ,
		55 ,
		150 ,
		199.99
	) ,
	(
		'JGO98' ,
		'Producto de Bazar' ,
		12 ,
		1.99 ,
		3.00
	) ,
	(
		'TJ384' ,
		'Producto de Indumentaria' ,
		98 ,
		44.40 ,
		50.99
	) ,
	(
		'HGG88' ,
		'Producto de Electronica' ,
		78 ,
		201.50 ,
		220.00
	) ,
	(
		'HVN43' ,
		'Producto de Electronica' ,
		50 ,
		130.10 ,
		160.50
	) ,
	(
		'PPT54' ,
		'Producto de Indumentaria' ,
		23 ,
		34.00 ,
		40.00
	) ,
	(
		'FPT12' ,
		'Producto de Higiene' ,
		67 ,
		4.00 ,
		15.99
	);

INSERT INTO clientes(
	nombre ,
	apellido ,
	razonSocial ,
	categoria ,
	dni ,
	cuit ,
	direccion ,
	telefono ,
	correo
)
VALUES
	(
		'Jose' ,
		'Sanchez' ,
		'Empresa A' ,
		'IVA Inscripto' ,
		30495321 ,
		17304953210 ,
		'Mitre 213' ,
		294453028 ,
		'empresa_a@gmail.com'
	) ,
	(
		'Juan' ,
		'Piñeda' ,
		'Empresa B' ,
		'IVA Inscripto' ,
		20345932 ,
		18203459323 ,
		'Quaglia 20' ,
		294432001 ,
		'empresa_b@gmail.com'
	) ,
	(
		'Carlos' ,
		'Fernandez' ,
		'' ,
		'Consumidor Final' ,
		10948329 ,
		30203459329 ,
		'Panque 120' ,
		294456829 ,
		'cfernandez@gmail.com'
	) ,
	(
		'Alejandro' ,
		'Antiago' ,
		'Empresa C' ,
		'Monotributo' ,
		4932839 ,
		2749328391 ,
		'Belgrano 320' ,
		294458302 ,
		'empresa_c@gmail.com'
	) ,
	(
		'Eduardo' ,
		'Perez' ,
		'' ,
		'Consumidor Final' ,
		33029125 ,
		19330291255 ,
		'Rolando 560' ,
		294485439 ,
		'eperez@gmail.com'
	) ,
	(
		'Augusto' ,
		'Aguilar' ,
		'Empresa D' ,
		'IVA Inscripto' ,
		15940023 ,
		20159400232 ,
		'Tiscornia 1020' ,
		294234120 ,
		'empresa_d@gmail.com'
	) ,
	(
		'Fabian' ,
		'Acosta' ,
		'Empresa F' ,
		'Monotributo' ,
		8954302 ,
		1689543022 ,
		'Palacios 459' ,
		294102934 ,
		'empresa_f@gmail.com'
	) ,
	(
		'Pedro' ,
		'Estero' ,
		'' ,
		'Consumidor Final' ,
		28099223 ,
		27280992239 ,
		'Pudu Norte 90' ,
		294432017 ,
		'pestero@gmail.com'
	);

INSERT INTO proveedores(
	razonSocial ,
	cuit ,
	direccion ,
	telefono ,
	correo ,
	nombreContacto ,
	categoria
)
VALUES
	(
		'Arcor' ,
		9104382912 ,
		'OConnor 402' ,
		294443218 ,
		'arcorventas@arcor.com.ar' ,
		'Jose Vazques' ,
		'IVA Inscripto'
	) ,
	(
		'Quilmes' ,
		8392821114 ,
		'España 55' ,
		294457831 ,
		'quilmesventas@quilmes.com.ar' ,
		'Carla Diaz' ,
		'IVA Inscripto'
	) ,
	(
		'Polar' ,
		2309884323 ,
		'San Martin 200' ,
		294432111 ,
		'polarventas@polar.com.ar' ,
		'Alejandro Vera ' ,
		'Monotributo'
	) ,
	(
		'Massalin' ,
		20763472813 ,
		'Salta 110' ,
		294443218 ,
		'massalingventas@massalin.com.ar' ,
		'Lucia Benitez' ,
		'IVA Inscripto'
	) ,
	(
		'Super Clin' ,
		33176783547 ,
		'Brown 980' ,
		29443332 ,
		'superclinventas@sclin.com.ar' ,
		'Francisco Peña' ,
		'IVA Inscripto'
	) ,
	(
		'CIF' ,
		11273842214 ,
		'Moreno 560' ,
		294424143 ,
		'cifventas@cif.com.ar' ,
		'Florencia Cortez' ,
		'Monotributo'
	);

INSERT INTO tipoComprobante(codigo , descripcion)
VALUES
	('A' , 'IVA') ,
	('B' , 'Otro tipo de comprobante') ,
	('C' , 'Consumidor final') ,
	('D' , 'Otro tipo de comprobante');
