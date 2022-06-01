<?php
    include('conexao.php');
    $sql = "SELECT * FROM agenda"; //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql); //retorna a primeira linha,
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cadastro_agenda.css">
    <title>Listar Usuário</title>
</head>
<body>
<table align="center">
        <tr>
            <th colspan="12" id="titulo">Listagem de Usuários</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Data</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Excluir</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                $data = explode("-",$row["dt_cadastro"]);
                echo "<tr>
                    <td>$row[id_agenda]</td>
                    <td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>
                    <td>$data[2]/$data[1]/$data[0]</td>
                    <td><a href='altera_agenda.php?id_agenda=$row[id_agenda]'>$row[nome]</a></td>
                    <td>$row[apelido]</td>
                    <td>$row[telefone]</td>
                    <td>$row[celular]</td>
                    <td>$row[email]</td>
                    <td>$row[estado]</td>
                    <td>$row[cidade]</td>
                    <td>$row[endereco]</td>
                    <td>$row[bairro]</td>
                    <td><a href='excluir_agenda.php?id_agenda=$row[id_agenda]'>Excluir</a>";
            }
        ?>
    </table>
</body>
</html>