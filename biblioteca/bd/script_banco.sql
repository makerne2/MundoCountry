DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');



    //BASE DE DADOS;;; 
show databases;
create database mundocountry;


drop 
use mundocountry;
create table cliente( 
id int not null auto_increment,
nome varchar(20) NOT NULL,
email varchar(30) NOT NULL,
senha varchar(15) NOT NULL,
cpf varchar(11) NOT NULL,
celular varchar(11) NOT NULL,
dataNascimento varchar(8) NOT NULL,
sexo varchar(10) NOT NULL,
tipousuario varchar(20)  NOT NULL,
primary key(id)
);

create table categoria(
codigo int(8) NOT NULL auto_increment,
descricao varchar(20) NOT NULL,
primary key(codigo)
);

create table produto(
codigo int(8) NOT NULL auto_increment,
categoria int(8) NOT NULL,
nomeproduto varchar(20) NOT NULL,
preco double NOT NULL,
descricao varchar(100) NOT NULL,
Imagem varchar(60) NULL,
EstoqueMinimo int(11) NOT NULL,
EstoqueMaximo int(11) NOT NULL,
primary key(codigo),
foreign key(categoria) references categoria(codigo) on delete cascade on update cascade
);




ALTER TABLE cliente DROP novasenha;