use bd_xiaomi;

create table if not exists pais (
	id_pais int primary key auto_increment,
    nm_pais varchar(30) not null
);

insert into pais (nm_pais) value ("brasil");
insert into pais (nm_pais) value ("india");
insert into pais (nm_pais) value ("indonésia");
insert into pais (nm_pais) value ("venezuela");
insert into pais (nm_pais) value ("argentina");
insert into pais (nm_pais) value ("estados unidos");

create table if not exists cliente (
	id_cliente int primary key auto_increment,
    senha varchar(30) not null,
	email varchar(40) not null,
    id_pais int
);

create table if not exists pedido (
	id_pedido int primary key auto_increment,
    id_cliente int,
    id_endereco int,
    itens_pedido int,
    valor_pedido double
);