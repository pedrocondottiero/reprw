<?php

    if(empty($_POST['chkBox'])){
        $_POST['chkBox'] = "Você não gosta do número um";
    }
    if(empty($_POST['chkBox2'])){
        $_POST['chkBox2'] = "Você não gosta do número dois";
    }
    if(empty($_POST['optBox'])){
        $_POST['optBox'] = "Nenhuma opção foi selecionada";;
    }

    $text = $_POST['txtText'];
    $textArea = $_POST['txtTextArea'];
    $optChk = $_POST['chkBox'];
    $optChk2 = $_POST['chkBox2'];
    $optOpt = $_POST['optBox'];
    $selCione = $_POST['selCionar'];

    if(empty($text)){
        $text = "Nada foi colocado";
    }
    if(empty($textArea)){
        $textArea = "Nada foi colocado";
    }
    if($selCione == "Selecione"){
        $selCione = "Você não selecionou nenhuma opção";
    }

    echo "Texto de uma linha colocada: ". $text. "<br>";
    echo "Texto que você colocou: ". $textArea. "<br>";
    echo "Número: ". $optChk. "<br>";
    echo "Número: ". $optChk2. "<br>";  
    echo "Opção Selecionada: ". $optOpt. "<br>"; 
    echo "Seleção: ". $selCione. "<br>"; 

?>