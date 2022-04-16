<?php
 
    $erro = 0;

    if(empty($_POST['opt'])){
        $erro=1;    
    }
    if(empty($_POST['N1']) && $_POST['N1'] != 0){
        $erro=1;    
    }
    if(empty($_POST['N2']) && $_POST['N2'] != 0){
        $erro=1;    
    }
    
    if($erro == 1){
        echo "Prencha os Campos Corretamente";
    }
    else{
        
    $opc = $_POST['opt'];
    $n1 = $_POST['N1'];
    $n2 = $_POST['N2'];

    if($opc == 1){
            echo "A soma dos dois valores é: " . $n1 + $n2; 
}
    else{
    if($opc == 2){
    echo "A subtração dos dois valores é: " . $n1 - $n2; 
}
    else{
    if($opc == 3){
    if($n2 != 0){
    echo "A divisão dos dois valores é: " . $n1 / $n2;
}
    else{
    echo "<h1><span style='color:red'>Divisões por 0 não são possíveis</span></h1>";
}
}
    else
    if($opc == 4){
    echo "A multiplicação dos dois valores é: " . $n1 * $n2;
}
}
}
}
}
?>