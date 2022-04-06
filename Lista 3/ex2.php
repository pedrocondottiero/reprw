<?php
$palavra = "Pedro";

$nova_pal = str_replace('a', 'X',$palavra);
$nova_pal = str_replace('e', 'X',$nova_pal);
$nova_pal = str_replace('i', 'X',$nova_pal);
$nova_pal = str_replace('o', 'X',$nova_pal);
$nova_pal = str_replace('u', 'X',$nova_pal);

$nova_pal = str_replace('A', 'X',$nova_pal);
$nova_pal = str_replace('E', 'X',$nova_pal);
$nova_pal = str_replace('I', 'X',$nova_pal);
$nova_pal = str_replace('O', 'X',$nova_pal);
$nova_pal = str_replace('U', 'X',$nova_pal);

echo $nova_pal;

?>