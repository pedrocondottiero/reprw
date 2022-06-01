<?php
    include("conexao.php");
    $id_agenda = $_GET["id_agenda"];
    $sql = "SELECT * FROM agenda WHERE id_agenda='$id_agenda'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="cadastro_agenda.css">
    <title>Alterar usuário</title>
</head>
<body>
<form action="altera_agenda_exe.php" method="post" enctype='multipart/form-data'>
<?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>
        <table align="center">
            <tr>
                <th colspan="2">Cadastro de usuário</th>
            </tr>
            <tr>
                <td>
                    <p>Nome:</p>
                </td>
                <td><input type="text" name="nome" value="<?php echo $row['nome'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Apelido:</p>
                </td>
                <td><input type="text" name="apelido" value="<?php echo $row['apelido'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Telefone:</p>
                </td>
                <td><input type="text" name="telefone" value="<?php echo $row['telefone'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Celular:</p>
                </td>
                <td><input type="text" name="celular" value="<?php echo $row['celular'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Email:</p>
                </td>
                <td><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Estado:</p>
                </td>
                <td>
                    <select name="estado" id="estado" >
                        <option>Selecionar</option>
                        <option <?php if($row['estado']=='AC') echo "selected"?>>AC</option>
                        <option <?php if($row['estado']=='AL') echo "selected"?>>AL</option>
                        <option <?php if($row['estado']=='AP') echo "selected"?>>AP</option>
                        <option <?php if($row['estado']=='AM') echo "selected"?>>AM</option>
                        <option <?php if($row['estado']=='BA') echo "selected"?>>BA</option>
                        <option <?php if($row['estado']=='CE') echo "selected"?>>CE</option>
                        <option <?php if($row['estado']=='DF') echo "selected"?>>DF</option>
                        <option <?php if($row['estado']=='ES') echo "selected"?>>ES</option>
                        <option <?php if($row['estado']=='GO') echo "selected"?>>GO</option>
                        <option <?php if($row['estado']=='MA') echo "selected"?>>MA</option>
                        <option <?php if($row['estado']=='MT') echo "selected"?>>MT</option>
                        <option <?php if($row['estado']=='MS') echo "selected"?>>MS</option>
                        <option <?php if($row['estado']=='MG') echo "selected"?>>MG</option>
                        <option <?php if($row['estado']=='PA') echo "selected"?>>PA</option>
                        <option <?php if($row['estado']=='PB') echo "selected"?>>PB</option>
                        <option <?php if($row['estado']=='PR') echo "selected"?>>PR</option>
                        <option <?php if($row['estado']=='PE') echo "selected"?>>PE</option>
                        <option <?php if($row['estado']=='PI') echo "selected"?>>PI</option>
                        <option <?php if($row['estado']=='RJ') echo "selected"?>>RJ</option>
                        <option <?php if($row['estado']=='RN') echo "selected"?>>RN</option>
                        <option <?php if($row['estado']=='RS') echo "selected"?>>RS</option>
                        <option <?php if($row['estado']=='RO') echo "selected"?>>RO</option>
                        <option <?php if($row['estado']=='RR') echo "selected"?>>RR</option>
                        <option <?php if($row['estado']=='SC') echo "selected"?>>SC</option>
                        <option <?php if($row['estado']=='SP') echo "selected"?>>SP</option>
                        <option <?php if($row['estado']=='SE') echo "selected"?>>SE</option>
                        <option <?php if($row['estado']=='TO') echo "selected"?>>TO</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Cidade:</p>
                </td>
                <td><input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Endereço:</p>
                </td>
                <td><input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Bairro:</p>
                </td>
                <td><input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro'] ?>"></td>
            </tr>
            <tr class="form-item">
                <td><input type="file" id="foto" name="foto" accept="image/*" /></td>
            <tr class="form-item">
            <tr>
                <input type="hidden" name="id_agenda" value="<?php echo $row['id_agenda'] ?>">
                <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>