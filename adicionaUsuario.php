<HTML>
<HEAD>
 <TITLE>- myWeb -</TITLE>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
</HEAD>
<BODY>
<div align="">
<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
</div>
<br/>

<?php

 //@session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];

  include"based.php";
  $tipoParceiro=$_GET["tipoParceiro"];
  $contatos=$_GET["contatos"];
  $login=$_GET["login"];

  if($tipoParceiro=="usuario"){
    $meuTipo=$_GET["meuTipo"];
    $tipoParceiro=$_GET["tipoParceiro"];
    $login=$_GET["login"];
    $contatos=$_GET["contatos"];
    //$perfil=$_GET["perfil"];

  $contato=@mysql_query("SELECT * FROM _notificacoes WHERE perfil='".strtolower($login)."';",$conexao);
  $contato=@mysql_fetch_array("$contato");
  $contato=$contato["contato"];
  $login=isset($_GET['login'])?$_GET['login']:null;
  $contatosMaiusc=strtoupper($contatos);
  //$email=@mysql_query("SELECT * FROM _tudo WHERE perfil='$perfil';",$conexao);
  $anivText="SELECT * FROM _tudo WHERE tituloPerfil='".$contatosMaiusc."'";

  $aniv1=@mysql_query($anivText);
  $diaAniv=@mysql_fetch_array($aniv1);
  $diaAniv1=$diaAniv['dia'];
  //$mesAniv=@mysql_query("SELECT mes FROM _tudo WHERE tituloPerfil='".strtoupper($contatos)."';",$conexao);
  $aniv2=@mysql_query($anivText);
  $mesAniv=@mysql_fetch_array($aniv2);
  $mesAniv1=$mesAniv['mes'];
  //$fetchemail=@mysql_fetch_array($email);
  //$fetchemail=$fetchemail["email"];
  //echo strtoupper($contatos);

  $foto="SELECT * FROM ".strtolower($contatos);
  $incluiFoto=@mysql_query($foto);
  $fetchFoto=@mysql_fetch_array($incluiFoto);
  $fetchFoto1=$fetchFoto['imagem'];



  $diaDaSemana=date('d');
  $mes=date('n');
  $ano=date('Y');
  
 switch($mes){
 case 1:$mes='Janeiro';break;
 case 2:$mes='Fevereiro';break;
 case 3:$mes='Mar&ccedil;o';break;
 case 4:$mes='Abril';break;
 case 5:$mes='Maio';break;
 case 6:$mes='Junho';break;
 case 7:$mes='Julho';break;
 case 8:$mes='Agosto';break;
 case 9:$mes='Setembro';break;
 case 10:$mes='Outubro';break;
 case 11:$mes='Novembro';break;
 case 12:$mes='Dezembro';break;
 }




   //$fetchFoto1="arquivos/0,,11266601,00.jpg";
  $adiciona=@mysql_query("INSERT INTO ".strtolower($login)." (contatos,imagem,dia,mes,tipo) VALUES('".strtolower($contatos)."','".$fetchFoto1."','".$diaAniv1."','".$mesAniv1."','".$meuTipo."');",$conexao);
  //$adiciona1=@mysql_query("INSERT INTO ".strtolower($contatos)." (contatos,imagem,dia,mes,tipo) VALUES('".strtolower($login)."','".$fetchFoto2."','".$diaAniv."','".$mesAniv."','".$tipoParceiro."');",$conexao);
  
  $adicionaMensagem=@mysql_query("INSERT INTO _mensagens (comentario,postar,sessao,diaDaSemana,mes,ano)VALUES('Te adicionei.','".$contatos."','".$login."','".$diaDaSemana."','".$mes."','".$ano."');",$conexao);
  
  
  
  
	//$engatilha=@mysql_query("CREATE TRIGGER 'usuario'.'IncluiContato' AFTER INSERT ON $login 
    //FOR EACH ROW BEGIN
	//INTO $perfil(contatos,imagem) VALUES('$login','$fetchFoto1');
    //END;",$conexao);

    $foto2="SELECT * FROM ".strtolower($login);
    $incluiFoto2=@mysql_query($foto2);
    $fetchFoto2=@mysql_fetch_array($incluiFoto2);
    $fetchFoto3=$fetchFoto2['imagem'];
    $incluiDia2=@mysql_query($foto2);
    $fetchDia2=@mysql_fetch_array($incluiDia2);
    $fetchDia3=$fetchDia2['dia'];
    $incluiMes2=@mysql_query($foto2);
    $fetchMes2=@mysql_fetch_array($incluiMes2);
    $fetchMes3=$fetchMes2['mes'];
    $incluiTipo2=@mysql_query($foto2);
    $fetchTipo2=@mysql_fetch_array($incluiTipo2);
    $fetchTipo3=$fetchTipo2['tipo'];

  $adiciona1=@mysql_query("INSERT INTO ".strtolower($contatos)." (contatos,imagem,dia,mes,tipo) VALUES('".strtolower($login)."','".$fetchFoto3."','".$fetchDia3."','".$fetchMes3."','".$fetchTipo3."');",$conexao);
	
	//$engatilha=@mysql_query("CREATE TRIGGER 'usuario'.'IncluiContato' AFTER INSERT ON $login 
    //FOR EACH ROW BEGIN
	//INSERT INTO $perfil (contatos,imagem) VALUES('".strtolower($login)."','$fetchFoto1');",$conexao);

	//UPDATE $perfil SET contatos,imagem;",$conexao);
	
	//$engatilha=@mysql_query("UPDATE $perfil SET contatos=
	
	
	
	$pesq = @mysql_query("SELECT tituloPerfil FROM _tudo WHERE tituloPerfil = '".$contatos."';", $conexao);
		$mostra = @mysql_num_rows($pesq);
		if ( $mostra > 0 ) {
		echo "<script>alert(\"Esse usu&aacute;rio j&aacute; faz parte de sua rede!\");
		window.location = 'javascript:history.back(-2)';
		</script>";
		}
	
	
	
	

  
  if($adiciona){
    $exclui=@mysql_query("DELETE FROM _notificacoes WHERE perfil='".strtolower($login)."' && contato='".$contatos."';",$conexao);
    echo"<script>alert('Contato ".str_replace("_"," ",$contatos).", adicionado com sucesso!'); history.go(-2);</script>";}
  else{
    echo"<script>alert('Contato ".$contatos.", nao pode ser adicionado!');  history.go(-2);</script>";
  }

}

























if($tipoParceiro=="fornecedor"){
  $meuTipo=$_GET["meuTipo"];
  $tipoParceiro=$_GET["tipoParceiro"];
  $login=$_GET["login"];
  $contatos=$_GET["contatos"];
  //$perfil=$_GET["perfil"];

$contato=@mysql_query("SELECT * FROM _notificacoes WHERE perfil='".strtolower($login)."';",$conexao);
$contato=@mysql_fetch_array("$contato");
$contato=$contato["contato"];
$login=isset($_GET['login'])?$_GET['login']:null;
$contatosMaiusc=strtoupper($contatos);
//$email=@mysql_query("SELECT * FROM _tudo WHERE perfil='$perfil';",$conexao);
$anivText="SELECT * FROM _tudo WHERE tituloPerfil='".$contatosMaiusc."'";

$aniv1=@mysql_query($anivText);
$diaAniv=@mysql_fetch_array($aniv1);
$diaAniv1=$diaAniv['dia'];
//$mesAniv=@mysql_query("SELECT mes FROM _tudo WHERE tituloPerfil='".strtoupper($contatos)."';",$conexao);
$aniv2=@mysql_query($anivText);
$mesAniv=@mysql_fetch_array($aniv2);
$mesAniv1=$mesAniv['mes'];
//$fetchemail=@mysql_fetch_array($email);
//$fetchemail=$fetchemail["email"];
//echo strtoupper($contatos);

$foto="SELECT * FROM ".strtolower($contatos);
$incluiFoto=@mysql_query($foto);
$fetchFoto=@mysql_fetch_array($incluiFoto);
$fetchFoto1=$fetchFoto['imagem'];



$diaDaSemana=date('d');
$mes=date('n');
$ano=date('Y');

switch($mes){
case 1:$mes='Janeiro';break;
case 2:$mes='Fevereiro';break;
case 3:$mes='Mar&ccedil;o';break;
case 4:$mes='Abril';break;
case 5:$mes='Maio';break;
case 6:$mes='Junho';break;
case 7:$mes='Julho';break;
case 8:$mes='Agosto';break;
case 9:$mes='Setembro';break;
case 10:$mes='Outubro';break;
case 11:$mes='Novembro';break;
case 12:$mes='Dezembro';break;
}
 //$fetchFoto1="arquivos/0,,11266601,00.jpg";
 $adiciona=@mysql_query("INSERT INTO ".strtolower($login)." (contatos,imagem,dia,mes,tipo) VALUES('".strtolower($contatos)."','".$fetchFoto1."','".$diaAniv1."','".$mesAniv1."','".$meuTipo."');",$conexao);
 //$adiciona1=@mysql_query("INSERT INTO ".strtolower($contatos)." (contatos,imagem,dia,mes,tipo) VALUES('".strtolower($login)."','".$fetchFoto2."','".$diaAniv."','".$mesAniv."','".$tipoParceiro."');",$conexao);
 
 $adicionaMensagem=@mysql_query("INSERT INTO _mensagens (comentario,postar,sessao,diaDaSemana,mes,ano)VALUES('Te adicionei.','".$contatos."','".$login."','".$diaDaSemana."','".$mes."','".$ano."');",$conexao);
 
 



//$engatilha=@mysql_query("CREATE TRIGGER 'usuario'.'IncluiContato' AFTER INSERT ON $login 
  //FOR EACH ROW BEGIN
//INTO $perfil(contatos,imagem) VALUES('$login','$fetchFoto1');
  //END;",$conexao);
$foto2="SELECT * FROM ".strtolower($login);
$incluiFoto2=@mysql_query($foto2);
$fetchFoto2=@mysql_fetch_array($incluiFoto2);
$fetchFoto3=$fetchFoto2['imagem'];
$incluiDia2=@mysql_query($foto2);
$fetchDia2=@mysql_fetch_array($incluiDia2);
$fetchDia3=$fetchDia2['dia'];
$incluiMes2=@mysql_query($foto2);
$fetchMes2=@mysql_fetch_array($incluiMes2);
$fetchMes3=$fetchMes2['mes'];
$incluiTipo2=@mysql_query($foto2);
$fetchTipo2=@mysql_fetch_array($incluiTipo2);
$fetchTipo3=$fetchTipo2['tipo'];


$adiciona1=@mysql_query("INSERT INTO ".strtolower($contatos)." (contatos,imagem,dia,mes,tipo) VALUES('".strtolower($login)."','".$fetchFoto3."','".$fetchDia3."','".$fetchMes3."','".$fetchTipo3."');",$conexao);

/*if(!$adiciona1){
  $adiciona1=@mysql_query("INSERT INTO ".strtolower($contatos)." (usuarios,imagem,dia,mes,tipo) VALUES('".strtolower($login)."','".$fetchFoto3."','".$fetchDia3."','".$fetchMes3."','".$fetchTipo3."');",$conexao);
  
}*/
//$engatilha=@mysql_query("CREATE TRIGGER 'usuario'.'IncluiContato' AFTER INSERT ON $login 
  //FOR EACH ROW BEGIN
//INSERT INTO $perfil (contatos,imagem) VALUES('".strtolower($login)."','$fetchFoto1');",$conexao);

//UPDATE $perfil SET contatos,imagem;",$conexao);

//$engatilha=@mysql_query("UPDATE $perfil SET contatos=



$pesq = @mysql_query("SELECT tituloPerfil FROM _tudo WHERE tituloPerfil = '".$contatos."';", $conexao);
  $mostra = @mysql_num_rows($pesq);
  if ( $mostra > 0 ) {
  echo "<script>alert(\"Esse usu&aacute;rio j&aacute; faz parte de sua rede!\");
  window.location = 'javascript:history.back(-2)';
  </script>";
  }






if($adiciona){
  $exclui=@mysql_query("DELETE FROM _notificacoes WHERE perfil='".strtolower($login)."' && contato='".$contatos."';",$conexao);
  echo"<script>alert('Contato ".str_replace("_"," ",$contatos).", adicionado com sucesso!'); history.go(-2);</script>";}
else{
  echo"<script>alert('Contato ".$contatos.", nao pode ser adicionado!');  history.go(-2);</script>";
}

}



?>
</BODY>
</HTML>
