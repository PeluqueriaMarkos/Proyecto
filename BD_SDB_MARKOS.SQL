DROP DATABASE if EXISTS sdb_markos;

CREATE DATABASE sdb_markos;

use sdb_markos;

CREATE TABLE servicios(
    id bigint not null PRIMARY KEY AUTO_INCREMENT,
    codigo bigint not null UNIQUE,
    descripcion varchar(300) not null,
    estado ENUM('activo' , 'inactivo') not null
);

insert into servicios (codigo, descripcion, estado) values 
(1,'manicure sencillo', 'activado'),
(2,'depilacion', 'inactivo'),
(3,'cepillado', 'activo'),
(4,'pigmetacion de cejas', 'inactivo'),
(5,'maquillaje facial', 'inactivo'),
(6,'peinados con trenzas', 'activo'),
(7,'uñas semipermanentes', 'activo'),
(8,'extension de pestañas', 'inactivo'),
(9,'tintura de cabello', 'activo'),
(10,'uñas acrilicas', 'activo'),
(11,'relleno para labios', 'inactivo'),
(12,'uñas postisas', 'activo'),
(13,'pedicura', 'activo'),
(14,'aplicacion de keratina', 'inactivo'),
(15,'corte de cabello', 'activo'),
(16,'tartamiento capilares', 'activo'),
(17,'arreglo de barba', 'inactivo'),
(18,'mascarillas', 'activo'),
(19,'tatuar cejas', 'activo'),
(20,'diseño de cejas', 'activo'),
(21,'sombrado de cejas', 'inactivo'),
(22,'corte para caballero', 'activo'),
(23,'depilacion de pierna', 'activo'),
(24,'rayitos', 'activo'),
(25,'iluminaciones', 'inactivo');

CREATE TABLE personas(
	id bigint not null PRIMARY KEY AUTO_INCREMENT, 
    documento bigint not null,
    primer_nombre varchar(35) not null,
    segundo_nombre varchar(35),
    primer_apellido varchar(35) not null,
    segundo_apellido varchar(35),
    tipo_documento varchar(80) not null,
    direccion varchar(150),
    telefono bigint not null,
    descripcion_rol ENUM('empleado' , 'supervisor' , 'cliente' , 'gerente') not null,
	usuario varchar(100) not null,
    contrasena VARCHAR(100) not null,
    estado ENUM('activo' , 'inactivo') not null
);

insert into personas (documento,primer_nombre,primer_apellido,tipo_documento,direccion,telefono,descripcion_rol, estado, usuario,contrasena) values
(123456789,'pepe','reina','cedula','calle 58 #94b - 59',3134256433,'Cliente','Activo','pepe123','123456'),
(123456729,'pepa','reinita','cedula','calle 58 #10b - 59',3134256434,'gerente','Activo','pepa123','123456'),
(123456767,'pepi','reinas','cedula','calle 58 #687b - 59',3134256435,'supervisor','Activo','pepi123','123456'),
(123456789,'pepo','reinado','cedula','calle 58 #10b - 59',3134256436,'cliente','inactivo','pepo123','123456'),
(123456319,'pepu','reinazo','cedula','calle 58 #13b - 59',3134256437,'empleado','Activo','pepu123','123456'),
(12345619,'pepes','reinaro','cedula','calle 58 #192b - 59',3134256438,'Cliente','Activo','pepes123','123456');


CREATE TABLE citas(
    id bigint PRIMARY KEY not null AUTO_INCREMENT,
    fecha_registro datetime not null,
    fecha datetime not null,
    id_servicio bigint not null,
    id_persona bigint not null,
    estado ENUM('activo' , 'inactivo') not null,
    FOREIGN KEY (id_servicio) REFERENCES servicios(id),
    FOREIGN KEY (id_persona) REFERENCES personas(id)
);

insert into citas (fecha_registro,fecha,id_servicio,id_persona, estado) values 
(now(),now(),(select id from servicios where codigo = 1),1,'activo'),
(now(),now(),(select id from servicios where codigo = 2),2,'activo'),
(now(),now(),(select id from servicios where codigo = 3),3,'activo');



-- Procedimientos Ingresar 


create or replace procedure ingresar_servicio(id bigint, codigo bigint, descripcion varchar(300), estado enum ('Activo','Inactivo'))
insert into servicios values (id, codigo, descripcion, estado);


create or replace procedure ingresar_rol(id bigint, descripcion ENUM('empleado' , 'supervisor' , 'cliente' , 'gerente'), estado enum ('Activo','Inactivo'))
insert into roles values (id, descripcion, estado);


create or replace procedure ingresar_persona(id bigint, documento bigint, primer_nombre varchar(35), segundo_nombre varchar(35), primer_apellido varchar(35), segundo_apellido varchar(35),
								  tipo_documento varchar(80), direccion varchar(150), telefono bigint, rol bigint, estado enum ('Activo','Inactivo'))
insert into personas values (id, documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, tipo_documento, direccion, telefono, rol, estado);


create or replace procedure ingresar_usuario(id bigint, usuario varchar(100), contrasena varchar(50), persona bigint, estado enum('Activo Inactivo'))
insert into usuarios values (id, usuario, contrasena, persona, estado);


create or replace procedure ingresar_cita(id bigint, fecha_registro datetime, fecha DATEtime, servicio bigint, usuario bigint, estado enum('activo', 'inactivo'))
insert into citas values (id, fecha_registro, fecha, servicio, usuario, estado);

-- Procedimientos actualizar


create or replace procedure actualizar_servicio(id bigint, codigo bigint, descripcion varchar(300), estado enum ('Activo','Inactivo'))
update servicios set codigo=codigo, descripcion=descripcion, estado= estado where id=id;


create or replace procedure actualizar_rol(id bigint, descripcion ENUM('empleado' , 'supervisor' , 'cliente' , 'gerente'), estado enum ('Activo','Inactivo'))
update roles set descripcion=descripcion, estado=estado where id=id ;


create or replace procedure actualizar_persona(id bigint, documento bigint, primer_nombre varchar(35), segundo_nombre varchar(35), primer_apellido varchar(35), segundo_apellido varchar(35),
								  tipo_documento varchar(80), direccion varchar(150), telefono bigint, rol bigint, estado enum ('Activo','Inactivo'))
update personas set documento=documento, primer_nombre=primer_nombre, segundo_nombre=segundo_nombre, primer_apellido=primer_apellido, segundo_apellido=segundo_apellido, tipo_documento=tipo_documento, direccion=direccion, telefono=telefono, id_rol = rol, estado=estado where id=id;


create or replace procedure actualizar_usuario(id bigint, usuario varchar(100), contrasena varchar(50), persona bigint, estado enum('Activo Inactivo'))
update usuarios set usuario=usuario, contrasena=contrasena, id_persona=persona, estado=estado where id=id;


create or replace procedure actualizar_cita(id bigint, fecha_registro datetime, fecha DATEtime, servicio bigint, usuario bigint, estado enum('activo', 'inactivo'))
update citas set fecha_registro=fecha_registro, fecha=fecha, id_servicio=servicio, id_usuario=usuario, estado=estado where id=id;


create or replace procedure eliminar_servicio(id bigint)
delete from servicios  where id=id;


create or replace procedure eliminar_rol(id bigint)
delete from roles where id=id ;


create or replace procedure eliminar_persona(id bigint)
delete from personas where id=id;


create or replace procedure eliminar_usuario(id bigint)
delete from usuarios where id=id;


create or replace procedure eliminar_cita(id bigint)
delete from citas where id=id;
