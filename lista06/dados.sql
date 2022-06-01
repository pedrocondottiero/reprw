USE lista06;

INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email)
VALUES ('Pedro Benedito', 'Bene', 'Rua Augustus Magnus', 'Nova Roma', 'Birigui', 'SP', '18991038486', '36348291', 'pedrovilelabenedito22@gmail.com');

create database lista06;

SELECT * FROM agenda;


-- Selecionar banco de dados
use lista06;

-- Criação da tabela agenda 
create table agenda (
	id_agenda int not null auto_increment,
    nome varchar(50) not null,
    apelido varchar(40) not null,
    endereco varchar(70) not null,
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    estado varchar(02) not null,
    telefone varchar(15) not null,
    celular varchar(15) not null,
    email varchar(70) not null,
    foto_blob blob,
    foto_nome varchar(100),
    dt_cadastro date not null,
    primary key(id_agenda)
);

select * from agenda;