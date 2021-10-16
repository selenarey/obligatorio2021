CREATE DATABASE BEE;

CREATE TABLE usuario (
CI int(8) PRIMARY KEY,
nombre varchar(20) not null,
apellido varchar(20) not null,
grupo varchar(5),
telefono int(9) not null
);

CREATE TABLE laboratorista (
CI_lab int(8) PRIMARY KEY,
contraseña varchar(20) not null,
foreign key (CI_lab) references usuario (CI)
);
CREATE TABLE elemento (
ID int(5) PRIMARY KEY,
estado varchar(15) not null,
descripcion_estado varchar(40),
cantidad int(5) not null,
tipo varchar(20) not null
);

CREATE TABLE computadora (
ID_compu int(5) PRIMARY KEY,
numero_serie varchar(15) not null,
foreign key (ID_compu) references elemento(ID)
);

CREATE TABLE toma_prestado (
CI_user int(8) not null,
ID_elemento int(5),
fecha date,
hora time,
fecha_prestamo date,
plazo varchar(30) not null,
fecha_devolucion date,
PRIMARY KEY (ID_elemento, fecha, hora, fecha_prestamo),
foreign key (ID_elemento) references ID(elemento),
foreign key (CI_user) references CI(usuario)
);
