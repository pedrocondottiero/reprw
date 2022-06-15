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
    <<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Alterar</title>
</head>
<body>
<form action="altera_fluxo_caixa_exe.php" method="post" enctype='multipart/form-data'>
        <table align="center">

        <tr>
                <th colspan="2">Cadastro</th>
            </tr>
            <tr>
                    <td><p>Data:</p> <input type="date" name="data" size="50"><br></td>
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