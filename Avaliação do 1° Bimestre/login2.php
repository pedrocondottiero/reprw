<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuarios = array('Pedro' => 'SP' => '00001' => '118394002' => '884403' => 'Masculino' => '700' => '200',
                      'vilela' => 'abc');

    if(array_key_exists($login,$usuarios)){
        if($usuarios[$login] == $senha){
            echo 'Acesso permitido \o/';
        }else{
            echo 'Senha inválida!';
        }
    }else{
        echo 'Usuario não encontrado!';
    }
?>