<?php

function hide_cep_no($numero)

{

    return substr($numero, 0, 0) . '******' . substr($numero, -3);

}

$cep = 16203180;
echo hide_cep_no($cep);

?>