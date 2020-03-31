use simple_crud;

create table usuarios(
	id int primary key auto_increment,
	lastname varchar(50),
	firstname varchar(75),
	birthdate date,
	contacto varchar(50),
	bio varchar(75)
);

create table mascota(
	idmascota int primary key auto_increment,
	nombre_mascota varchar(75),
	direccion varchar(100),
	idusuario int
);

ALTER TABLE mascota
ADD FOREIGN KEY (idusuario) REFERENCES usuarios(id) on DELETE CASCADE




CREATE DEFINER=`larz`@`localhost` PROCEDURE `agregar_usuario_mascota`(
IN _firstname varchar(75),
IN _lastname varchar(75),
IN _birthdate date,
IN _contacto varchar(75),
IN _bio varchar(75),
IN _nombre_mascota varchar(75),
IN _direccion varchar(75)
)
BEGIN

insert into usuarios(firstname,lastname,birthdate,contacto,bio)
values(_firstname,_lastname,_birthdate,_contacto,_bio);

SET @idusuario = (select last_insert_id());

insert into mascota(nombre_mascota,direccion,idusuario)
values(_nombre_mascota,_direccion,@idusuario);

END