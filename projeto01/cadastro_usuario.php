<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
include ('conexao.php');

echo "<P>Nome do Usuário: " .$nome ."<br>";
echo "<P>E-mail do Usuário: " .$email ."<br>";
echo "<P>Telefone do Usuário: " .$telefone ."<br>";

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario);
        VALUES ('".$nome."','".$email."','".$telefone."')";

$result = mysqli_query($con, $sql);
if($result)
echo "Dados inseridos com sucesso";
else
echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>