<?php
include('conexao.php');

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$dt_cadastro = date("Y-m-d");

echo "Nome: $nome
<br>Apelido: $apelido
<br>Telefone: $telefone
<br>Celular: $celular
<br>Email: $email
<br>Estado: $estado
<br>Cidade: $cidade
<br>Endereco: $endereco
<br>Bairro: $bairro
<br>Data: ".date("d/m/Y");

$sql = "INSERT INTO agenda (nome, apelido, telefone, celular, email, estado, cidade, endereco, bairro, dt_cadastro)
        VALUES ('$nome', '$apelido', '$telefone', '$celular', '$email', '$estado', '$cidade', '$endereco', '$bairro', '$dt_cadastro')";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<br><br>Dados inseridos com sucesso!";
} else {
    echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
}
?>

<br><br><a href="index.php">Voltar</a>