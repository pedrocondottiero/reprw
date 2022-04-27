USE projeto01;

INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
VALUES ('Pedro Benedito', 'pedrovilelabenedito22@gmail.com', '18991038486');

SELECT * FROM usuario;


-- Selecionar banco de dados
use projeto01;

-- Criação da tabela usuario 
create table usuario (
	id_usuario int not null auto_increment,
    nome_usuario varchar(100) not null,
    email_usuario varchar(100) not null,
    telefone_usuario varchar(30) not null,
    primary key(id_usuario)
);

select * from usuario;