<?php

include('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = 'SELECT * FROM usuario where id_usuario = ' .$id_usuario;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro_usuario.css">
    <title>Cadastro</title>
</head>
<body>
    <h2>Alterção de Usuário</h2>
    <hr>
    <form method="post" action="altera_usuario_exe.php">
        <div>
            <label for="nome">Nome:</label>
            <input name="nome" type="text"
            value="<?php echo $row['nome_usuario'] ?>" placeholder="Digite o Nome">
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input name="email" type="text"
            value="<?php echo $row['email_usuario'] ?>" placeholder="Digite o E-mail">
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input name="telefone" type="text"
            value="<?php echo $row['telefone_usuario'] ?>" placeholder="Digite o Telefone">
        </div>
        <div>            
            <button  type="submit">Enviar</button>
        </div>
        <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>";>
        </form>
        </body>
        </html>