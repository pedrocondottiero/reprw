<?php

include('conexao.php');

$dt = date("Y-m-d");
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "<br>Tipo: $tipo
<br>Valor: $valor
<br>Historico: $historico
<br>Cheque: $cheque
<br>Data: ".date("d/m/Y");

$sql = "INSERT INTO fluxo_caixa (dt, tipo, valor, historico, cheque)
        VALUES ('".$dt."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<br><br>Dados inseridos com sucesso!";
} else {
    echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
}
?>

<br><br><a href="index.php">Voltar</a>