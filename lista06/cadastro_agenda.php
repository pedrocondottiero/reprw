<?php

include('conexao.php');

// Upload da foto     
$fotoNome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){        
    // Upload file
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

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

echo "Nome: $nome
<br>Apelido: $apelido
<br>Telefone: $telefone
<br>Celular: $celular
<br>Email: $email
<br>Estado: $estado
<br>Cidade: $cidade
<br>Endereco: $endereco
<br>Bairro: $bairro
<br>Data: ".date("d/m/Y");

$sql = "INSERT INTO agenda (nome, apelido, telefone, celular, email, estado, cidade, endereco, bairro, foto_blob, foto_nome, dt_cadastro)
        VALUES ('".$nome."', '".$apelido."', '".$telefone."', '".$celular."', '".$email."', '".$estado."', '".$cidade."', '".$endereco."', '".$bairro."', '".$fotoBlob."','".$fotoNome."', '".$dt_cadastro."')";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<br><br>Dados inseridos com sucesso!";
} else {
    echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
}
?>

<br><br><a href="index.php">Voltar</a>