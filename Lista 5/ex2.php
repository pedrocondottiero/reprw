<?php 

$produto = $_POST['txtProd'];
$produtos = array('crucifixo','rosário','bíblia','livro');
$preco = array(1000, 1200, 900, 800);

$produto = strtolower($produto);

$indice = array_search($produto, $produtos);

    if($indice === false){
        echo "O Produto não foi Encontrado! <br>";
    }
    else{
        echo "O Produto foi Encontrado! Aqui está seu código: $indice <br>
              Preço: R$ $preco[$indice]";
    }

?> 