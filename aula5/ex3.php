<?php
$n1 = isset($_GET['n1'])?$_GET['n1']:0;
$n2 = isset($_GET['n2'])?$_GET['n2']:0;
$n3 = isset($_GET['n3'])?$_GET['n3']:0;
//$dec= array($numero1);
$matr = array($n1, $n2, $n3);
rsort($matr);
print_r($matr);
?>