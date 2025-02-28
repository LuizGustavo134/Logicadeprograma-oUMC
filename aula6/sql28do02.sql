create database lelo;
use lelo;
create table  produtos (
	id int AUTO_INCREMENT NOT NULL,
	nome varchar(30)  NOT NULL,
	data_de_fabricação int NOT NULL,
	quantidade_produto int NOT NULL,
	valor_unitário float NOT NULL,
	PRIMARY KEY (`id`, `nome`, `data_de_fabricação`, `quantidade_produto`, `valor_unitário`)
);

create table marcas (
	cod_marca_produto int AUTO_INCREMENT NOT NULL,
	id_marca int  NOT NULL,
	nome_marca int NOT NULL,
	PRIMARY KEY (`cod_marca_produto`, `id_marca`, `nome_marca`)
);

insert into produtos("id","nome","data_de_fabricação","quantidade_produto","valor_unitário"),
values(null,"iphone","2018-17-9","20","5000,50");