<?php
include"based.php";

$nomeOld=@mysql_query("SELECT * FROM __teste WHERE nome='clovis';",$conexao);
$nomeOld=@mysql_fetch_array($nomeOld);
$nomeOld=$nomeOld["nome"];
echo'
<form name="form" action="" method="post">
Nome Antigo<input type="text" name="nomeAntigo" value="'.$nomeOld.'"/><br/>
Nome<input type="text" name="nome" value=""/><br/>';
//Caminho<input type="text" name="caminho" value=""/><br/>
echo'
<input type="submit" name="enviar" value="Enviar"/>
</form>';



if($_POST){

    $caminho=@mysql_query("SELECT * FROM __teste WHERE nome='".$nomeOld."';",$conexao);
    $caminho1=@mysql_fetch_array($caminho);
    $caminho2=$caminho1["caminho"];
    echo $caminho2;
    $caminho3=explode("/",$caminho2);
    $caminho4=$caminho3[3];
    $nome=$_POST["nome"];
    $id=@mysql_query("SELECT * FROM __teste WHERE nome='".$nomeOld."';",$conexao);
    $id=@mysql_fetch_array($id);
    $id=$id["id"];
    echo $nome;
    echo $id;
    echo $caminho4;

    $salvar=@mysql_query("UPDATE __teste SET  nome='$nome', caminho='arquivos/usuarios/$nome/$caminho4' WHERE id='".$id."';",$conexao);

    if($salvar){
        echo"dados salvos";
    }
    else{
        echo"falha";
    }
}