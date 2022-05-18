<?php
    include("conexao.php");
    $id_agenda = $_POST["id_agenda"];
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
    
    echo "Nome: $nome<br>";

    $sql = "UPDATE agenda SET
            nome='$nome',
            apelido='$apelido',
            telefone='$telefone',
            celular='$celular',
            email='$email',
            estado='$estado',
            cidade='$cidade',
            endereco='$endereco',
            bairro='$bairro',
            dt_cadastro='$dt_cadastro'
            WHERE id_agenda=$id_agenda";
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados alterados com sucesso!";
    } else {
        echo "<br><br>Erro ao tentar alterar os dados: ".mysqli_error($con);
    }
?>

<a href="index.php">Voltar</a>