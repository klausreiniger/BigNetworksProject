CREATE TABLE carro(
	id INT(6) NOT NULL AUTO_INCREMENT,
	modelo VARCHAR(15) NOT NULL,
	ano SMALLINT NOT NULL,
	cor VARCHAR(15) NOT NULL,
	fabricante VARCHAR(20) NOT NULL,
	placa CHAR(7) NOT NULL,
	PRIMARY KEY(id)
);
