<?php
    include("conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM fluxo_caixa WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Alterar</title>
</head>
<body>
<form action="altera_fluxo_caixa_exe.php" method="post" enctype='multipart/form-data'>
        <table align="center">

        <tr>
                <th colspan="2">Cadastro</th>
            </tr>

            <td>
                    <p>Tipo:</p>
                </td>
                <td>
                    <select name="tipo" id="tipo">
                        <option>Entrada</option>
                        <option>Saída</option>
                    </select>
                </td>

            <tr>
                <td>
                    <p>Valor:</p>
                </td>
                <td><input type="text" name="valor"></td>
            </tr>

            <tr>
                <td>
                    <p>Histórico:</p>
                </td>
                <td><input type="text" name="historico"></td>
            </tr>

                <td>
                    <p>Cheque:</p>
                </td>
                <td>
                    <select name="cheque" id="cheque">
                        <option>Selecionar</option>
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </td>
                <tr>
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
            </tr>
            <a href='index.php'>Voltar</a>
            </div>
        </table>
    </form>
</body>
</html>