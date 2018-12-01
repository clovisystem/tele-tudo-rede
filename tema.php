<?php

include "based.php";

$perfil=$_GET['perfil'];
$tipo=$_GET['tipo'];
$cor=$_GET['tema'];

switch($cor){
case "0eb8d7":$cor="#".$cor;
break;
case "B5C0C3":$cor="#".$cor;
break;
case "045506":$cor="#".$cor;
break;
case "ad0a0a":$cor="#".$cor;
break;
}

if($tipo=="usuario"){
$insereTudo1=@mysql_query("UPDATE _tudo SET background ='".$cor."' WHERE tituloPerfil='".$perfil."';",$conexao);
$insereUser=@mysql_query("UPDATE _users SET background ='".$cor."' WHERE tituloPerfil='".$perfil."';",$conexao);
$exibe1=@mysql_query("SELECT background FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
}
else{
$insereTudo2=@mysql_query("UPDATE _tudo SET background ='".$cor."' WHERE tituloPerfil='".$perfil."';",$conexao);
$insereFornecedor=@mysql_query("UPDATE _fonecedores SET background ='".$cor."' WHERE tituloPerfil='".$perfil."';",$conexao);
$exibe2=@mysql_query("SELECT background FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
}

echo $perfil;
echo $tipo;
echo $cor;

?>