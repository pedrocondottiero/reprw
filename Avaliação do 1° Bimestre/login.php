<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

$imc = array($peso => $altura);

if(array_key_exists($peso,$altura)){
    if($imc[$peso] < 17 .$altura){
        echo 'Muito abaixo do peso';
   
    }
    if($imc[$peso] == 17 && 18.49 .$altura){
        echo 'Abaixo do peso';
}
if($imc[$peso] == 18.5 && 24.99 .$altura){
    echo 'Peso normal';
}
if($imc[$peso] == 25 && 29.99 .$altura){
    echo 'Acima do peso';
}
if($imc[$peso] == 30 && 34.99 .$altura){
    echo 'Obesidade I';
}
if($imc[$peso] == 35 && 39.99 .$altura){
    echo 'Obesidade II';
}
if($imc[$peso] > 40 .$altura){
    echo 'Obesidade III';
}
}
?>