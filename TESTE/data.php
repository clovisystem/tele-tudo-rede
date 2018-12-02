<?php
echo date("d/m/y");
echo'<br/>
     <br/>
     <br/>';

$userTT=date('d/m/y').rand(0,200);

$sorteio=str_replace("/","",$userTT);

echo $sorteio;