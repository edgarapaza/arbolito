CREATE SCHEMA arbolito DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

USE arbolito;

CREATE TABLE datos(
iddatos  int not null auto_increment,
otorgante varchar(255) not null,
favorecido varchar(255) not null,
fecha date not null,
protocolo int not null,
escritura int not null,
folio varchar(10),
bien varchar(255),
primary key(iddatos)
)