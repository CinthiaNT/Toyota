CREATE DATABASE agencia;
USE agencia;
SET SQL_SAFE_UPDATES = 0;

CREATE TABLE Vendedor(
	id 		  int 		  not null auto_increment,
	nombre 	  varchar(50) not null,
	apellidos varchar(50) not null,
	correo 	  varchar(30),
	primary key (id)
);

INSERT INTO `vendedor` (`id`, `nombre`, `apellidos`, `correo`) VALUES
(1, 'Rafael', 'Paniagua Soto', 'rpaniagua@gmail.com'),
(2, 'Hernan', 'Gonzalez Alcaraz', 'hgonzalez@gmail.com'),
(3, 'Paulina', 'Padilla Guerrero', 'ppadilla@gmail.com');

CREATE TABLE Cliente(
	id 			   int		   not null auto_increment,
	razon_social   varchar(80) not null,
	regimen_fiscal varchar(50),
	rfc 		   varchar(20),
	telefono 	   varchar(10),
	direccion 	   varchar(80),
	correo 		   varchar(30),
	primary key (id)
);

INSERT INTO `cliente` (`id`, `razon_social`, `regimen_fiscal`, `rfc`, `telefono`, `direccion`, `correo`) VALUES
(1, 'Cinthia Nava Torres', 'PF', 'NATJ970623', '477 589238', 'Topografos #111', 'cnava@gmail.com'),
(2, 'GreenSol', 'PM', 'GRSL120505', '477 354781', 'Real de los castillos #220', 'greensol@gmail.com'),
(3, 'Mariscos El Muelle', 'PM', 'MUMA050401', '477 687412', 'Av. Rivera de la presa #23', 'mmuelle@gmail.com'),
(4, 'Tacos los Gallos', 'PFAE', 'LUTA070809', '477 524789', 'Delta #320', 'x@x');

CREATE TABLE Automovil(
	id 				int 		not null auto_increment,
	marca 			varchar(30) not null,
	modelo 			varchar(50) not null,
	precio		 	float(20,2) not null,
	no_serie 		varchar(20),
	clave_vehicular	varchar(20),
	no_inventario	varchar(20),
	tipo			varchar(20),
	color_exterior	varchar(20),
	color_interior	varchar(20),
	no_motor		varchar(20),
	tipo_motor		varchar(20),
	procedencia		varchar(30),
	no_cilindros	int,
	estado_vehiculo	varchar(20), -- nuevo/usado
	transmision		varchar(20),
	puertas			int,
	tipo_auto		varchar(20), -- pasajero/carga
	capacidad		varchar(20),
	combustible		varchar(20),
	imagen 			longblob,
	primary key (id)
);

INSERT INTO `automovil` (`id`, `marca`, `modelo`, `precio`, `no_serie`, `clave_vehicular`, `no_inventario`, `tipo`, `color_exterior`, `color_interior`, `no_motor`, `tipo_motor`, `procedencia`, `no_cilindros`, `estado_vehiculo`, `transmision`, `puertas`, `tipo_auto`, `capacidad`, `combustible`, `imagen`) VALUES
(1, 'Toyota', 'Prius', 500000.00, '123456789', '987654', '9', 'PickUp', 'Azul', 'Beige', '665667', 'Nuevo', 'Nacional', 4, 'Nuevo', 'T/M', 5, 'Pasajeros', '6', 'Gasolina', 0x70726975732e706e67),
(2, 'Toyota', 'Camry', 9999999.00, '159357852', '879543', '5', 'Hibrido', 'Blanco', 'Gris', '5407445', 'Nuevo', 'Extranjera', 6, 'Nuevo', 'T/M', 7, 'Pasajeros', '8', 'Gasolina', 0x63616d72792e706e67),
(3, 'Toyota', 'Hilux', 650000.00, '1237894', '52FGDD6G5DS', '14', 'PickUp', 'Blanco', 'Negro', '120365', 'HidrÃ¡ulico', 'Nacional', 8, 'Nuevo', 'T/M', 5, 'Pasajeros', '6', 'Gasolina', 0x68696c75782e6a7067);

CREATE TABLE CompraCotizacion(
	id 			 			int 		 not null auto_increment,
	fecha					date		not null,
	estatus		 			varchar(20) not null, -- compra/cotizacion
	descuento	 			float(20,2), -- (subtotal = precio-descuento)
	comision	 			float(20,2), -- pesos $
	precio_neto	 			float(20,0), -- = subtotal+comision
	enganche	 			float(10,2), -- porcentaje %
	tasa		 			float(10,2), -- porcentaje %
	plazo		 			int, -- meses
	precio_final			float(20,2), -- = precio_neto-enganche
	mensualidad_sin_interes float(20,2), -- = precio_final/plazo
										 -- (porcentaje_interes = tasa/12/100)
	interes 				float(20,2), -- = porcentaje_interes*precio_final
	mensualidad_con_interes float(20,2), -- = mensualidad_sin_interes+interes
	mensualidades_pagadas	int,
	id_vendedor				int,
	id_cliente 	 			int,
	id_automovil 			int,
	primary key (id),
	foreign key (id_vendedor)  references Vendedor(id) on delete cascade on update cascade,
	foreign key (id_cliente)   references Cliente(id) on delete cascade on update cascade,
	foreign key (id_automovil) references Automovil(id) on delete cascade on update cascade
);

INSERT INTO `compracotizacion` (`id`, `fecha`, `estatus`, `descuento`, `comision`, `precio_neto`, `enganche`, `tasa`, `plazo`, `precio_final`, `mensualidad_sin_interes`, `interes`, `mensualidad_con_interes`, `mensualidades_pagadas`, `id_vendedor`, `id_cliente`, `id_automovil`) VALUES
(1, '2019-01-31', 'venta', 1.00, 1.00, 500000, 1.00, 1.00, 80, 495000.00, 6187.50, 412.50, 6600.00, 3, 2, 2, 2),
(2, '2019-01-01', 'venta', 1.00, 1.00, 500000, 1.00, 1.00, 1, 495000.00, 495000.00, 412.50, 495412.50, 1, 1, 2, 2),
(3, '2019-05-31', 'venta', 1.00, 1.00, 650000, 1.00, 1.00, 18, 643500.00, 35750.00, 536.25, 36286.25, 4, 1, 1, 3),
(4, '2019-05-05', 'venta', 1.00, 1.00, 500000, 1.00, 1.00, 1, 495000.00, 495000.00, 412.50, 495412.50, 1, 1, 3, 1),
(5, '2019-05-28', 'cotizacion', 10000.00, 5000.00, 645000, 19.00, 18.00, 17, 522450.00, 30732.35, 7836.75, 38569.10, 0, 1, 1, 3);

CREATE TABLE Cobranza(
	id 			  		   int  not null auto_increment,
	fecha	  			   date not null,
	mensualidades_abonadas int,
	id_compra 			   int,
	primary key (id),
	foreign key (id_compra) references CompraCotizacion(id) on delete cascade on update cascade
);

INSERT INTO `cobranza` (`id`, `fecha`, `mensualidades_abonadas`, `id_compra`) VALUES
(1, '2019-05-26', 3, 1),
(2, '2019-05-26', 1, 2),
(3, '0001-01-01', 4, 3),
(4, '2019-05-27', 1, 4);

CREATE TABLE Amortizacion(
	numero 		int 		not null,
	fecha 		varchar(30),
	concepto 	varchar(50),
	abono		varchar(30),
	interes 	varchar(30),
	mensualidad varchar(30),
	saldo 		varchar(30)
);