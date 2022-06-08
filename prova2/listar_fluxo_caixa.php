<?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Listar</title>
</head>
<body>
<table align="center">
        <tr>
            <th colspan="12" id="titulo">Listagem</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                $data = explode("-",$row["dt"]);
                echo "<tr>
                    <td>$row[id]</td>
                    <td>$data[2]/$data[1]/$data[0]</td>
                    <td><a href='altera_fluxo_caixa.php?id=$row[id]'>$row[tipo]</a></td>
                    <td>$row[tipo]</td>
                    <td>$row[valor]</td>
                    <td>$row[historico]</td>
                    <td>$row[cheque]</td>
                    <td><a href='excluir_fluxo_caixa.php?id=$row[id]'>Excluir</a>";
            }
        ?>
    </table>
</body>
</html>