drop database if exists MiSolcito;
create database MiSolcito;
use MiSolcito;

ALTER DATABASE MiSolcito DEFAULT CHARACTER SET utf8;

create table if not exists productos(
    idProd int,
    nombre varchar(30),
    constraint pk_productos primary key(idProd)
);

insert into productos values 
(1, "Cupcake"),
(2, "Pasteles"),
(3, "Cookies"),
(4, "Macarrons");