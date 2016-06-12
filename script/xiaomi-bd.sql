use bd_xiaomi;

create table if not exists produto (
	id_produto int auto_increment primary key,
    nm_produto varchar(40),
    preco decimal(10,2)
);

create table if not exists pedido (
	id_pedido int auto_increment primary key,
    id_produto int,
    qt_produto int,
    total decimal(10,2)
);

create table if not exists cliente (
	id_cliente int primary key auto_increment,
    senha varchar(30) not null,
	email varchar(40) not null
);