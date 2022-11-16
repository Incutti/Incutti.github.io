drop database ZLATAN;
create database ZLATAN;
use ZLATAN;

create table `Usuario`(
	`idUsuario` int not null auto_increment,
    `Nombre` varchar(45) not null,
    `Apellido` varchar(45) not null,
    `NombreDeUsuario` varchar(45) not null,
    `CorreoElectronico` varchar(45) not null,
    `Contrasena` varchar(45) not null,
    primary key (idUsuario)
);

create table `Carta`(
	`idCarta` int not null auto_increment,
	`MED` int,
	`PAC` int,
	`DRI` int,
	`SHO` int,
	`DEF` int,
	`PAS` int,
	`PHY` int,
    `Usuario_idUsuario` int not null,
	primary key(idCarta),
    foreign key(Usuario_idUsuario) references Usuario(idUsuario)
);

insert into Usuario values (null, "1", "1", "1", "1@gmail.com", "1");
insert into Carta values (null, 1, 1, 1, 1, 1, 1, 1, 1);
select * from Usuario;
select * from Carta;
