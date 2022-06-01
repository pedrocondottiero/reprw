<?php

    include("conexao.php");

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

    if(strlen($fotoNome) > 0){
    $sql = "UPDATE agenda SET
            nome='".$nome."',
            apelido='".$apelido."',
            telefone='".$telefone."',
            celular='".$celular."',
            email='".$email."',
            estado='".$estado."',
            cidade='".$cidade."',
            endereco='".$endereco."',
            bairro='".$bairro."',
            dt_cadastro='".$dt_cadastro."',
            foto_blob='".$fotoBlob."',
            foto_nome='".$fotoNome."'
            WHERE id_agenda=$id_agenda";
    }
    else
  {
    $sql = "UPDATE agenda SET
    nome='".$nome."',
    apelido='".$apelido."',
    telefone='".$telefone."',
    celular='".$celular."',
    email='".$email."',
    estado='".$estado."',
    cidade='".$cidade."',
    endereco='".$endereco."',
    bairro='".$bairro."',
    dt_cadastro='".$dt_cadastro."',
    foto_blob='".$fotoBlob."',
    foto_nome='".$fotoNome."'
    WHERE id_agenda=$id_agenda";
  }
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados alterados com sucesso!";
    } else {
        echo "<br><br>Erro ao tentar alterar os dados: ".mysqli_error($con);
    }
?>

<a href="index.php">Voltar</a>