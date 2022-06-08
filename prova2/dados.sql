USE prova2;

INSERT INTO fluxo_caixa (valor, historico,)
VALUES ('100.00', 'Conta de água');

create database prova2;

SELECT * FROM fluxo_caixa;

-- Selecionar banco de dados
use prova2;

-- Criação da tabela agenda
DROP TABLE IF EXISTS fluxo_caixa;
create table fluxo_caixa (
	id int not null auto_increment,
    dt date not null,
    tipo varchar(10) not null,
    valor decimal (10,2)not null,
    historico varchar(150) not null,
    cheque varchar(3) not null,
    primary key(id)
);

select * from fluxo_caixa;