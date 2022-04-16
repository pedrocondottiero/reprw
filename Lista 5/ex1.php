<?php 

$produto = $_POST['txtProd'];
$produtos = array('crucifixo','rosário','bíblia','livro');
$produto = strtolower($produto);

$indice = array_search($produto, $produtos);

    if($indice === false){
        echo "O Produto não foi Encontrado! <br>";
    }
    else{
        echo "O Produto foi Encontrado! Aqui está seu código: $indice <br>";
    }

?> 