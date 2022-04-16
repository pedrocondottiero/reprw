<?php 

    $user = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    $usuarios = array('OWNEDCHAMPS', 'Ninguem123', 'funkyblackcat');
    $senhas = array('929305', 'nihongo93', 'itensss');

    $indice = array_search($user, $usuarios);

    if($indice === false){
        echo "Este Usuário não Foi Encontrado!";
    }
    else {
        if ($password == $senhas[$indice]){
            echo "Login Aceito!";
        }
        else {
            echo "Acesso não Permitido!";
        }
    }

?> 