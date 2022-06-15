<?php 
    include ('conexao.php');

    $data = $_POST['data'];
    $tipo = $_POST['opt'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
    echo "Data: $data
    <br>Tipo: $tipo
    <br>Valor: $valor
    <br>Histórico: $historico
    <br>Cheque: $cheque";

    $sql = "INSERT INTO fluxo_caixa (dt, tipo, valor, historico, cheque)
        VALUES ('$data', '$tipo', '$valor', '$historico', '$cheque')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados inseridos com sucesso!";
    } else {
        echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
    }
?>
<a href='index.php'>Voltar</a>