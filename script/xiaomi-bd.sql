use bd_xiaomi;

CREATE TABLE IF NOT EXISTS produto (
	id_produto MEDIUMINT AUTO_INCREMENT, 
    nm_produto VARCHAR(40),
    preco DECIMAL(10,2),
    PRIMARY KEY (id_produto)
);

CREATE TABLE IF NOT EXISTS pedido (
	id_pedido MEDIUMINT AUTO_INCREMENT,
    id_produto INT,
    qt_produto INT,
    total DECIMAL(10,2),
    PRIMARY KEY (id_pedido)
);

CREATE TABLE IF NOT EXISTS cliente (
	id_cliente MEDIUMINT AUTO_INCREMENT,
    login VARCHAR(40) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    nascimento VARCHAR(10),
    PRIMARY KEY (id_cliente)
);

select * from cliente;