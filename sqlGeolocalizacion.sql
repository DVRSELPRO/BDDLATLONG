create table Cliente (
cod_cliente int(12) not null primary key auto_increment,
nombreCliente varchar(80) not null,
emailCliente varchar (100) not null,
direccionCliente varchar(129) not null,
latCliente varchar(20) not null,
lngCliente varchar(20) not null
);