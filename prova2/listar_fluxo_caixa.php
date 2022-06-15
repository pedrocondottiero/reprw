<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    $result = mysqli_query($con, $sql);

    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listagem</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body class="center">

    <h1>Listagem</h1><br>
    <hr>
    <table align="center" border="1" width="900">
        
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                $dt = explode("-",$row['dt']);
                echo "<td>" .$row['id']. "</td>";
                echo "<td>" .$dt[2]."/".$dt[1]."/".$dt[0]."</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
    <div align="center">
            <a href='index.php'>Voltar</a>
    </div>
</body>
</html>