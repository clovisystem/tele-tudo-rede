<?php
$conexao=mysqli_connect("localhost","root","","teletudo");

$tabela=@mysqli_query($conexao,"SELECT * FROM _tudo;");

while($tabela1=@mysqli_fetch_object($tabela)){
    $tabela2=$tabela1->tituloPerfil;
    $tabela3=strtolower($tabela2);
    echo $tabela3;
    $modifica=@mysqli_query($conexao,"ALTER TABLE ".$tabela3." ADD coluna varchar (60);");
    if($modifica){
        echo"modificado";
    }
    else{
        echo"falha";
    }
}
?>