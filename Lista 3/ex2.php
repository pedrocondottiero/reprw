<?php
$palavra = "Ad Hoc in Aeternam Vitae, Benedictus Eius Tuus Ad Astra";
$a;
$e;
$i;
$o;
$u;
$x;

$vogais = substr($palavra,$a,$e,$i,$o,$u);
$subsx = substr($palavra,$x);
$subs = $palavra . "" . $vogais . "" . $subsx;
echo $subs;
?>