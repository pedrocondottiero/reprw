<?php 

    $user = $_POST['txtUser'];
    $password = $_POST['txtPass'];

    $usuarios = array('@PedroTricolor' => '92905'
                      'Ninguem123' => 'nihongo93',
                      'funkyblackcat' => 'itensss');

   if(array_key_exists($user,$usuarios)){

    if($usuarios[$user] == $password){
        echo "Login Aceito!";
    }else{
        echo "Acesso não Permitido!";
    }

    }
    else{
    echo "Este Usuário não foi Encontrado!";

    }

?> 