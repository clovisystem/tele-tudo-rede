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
  $tipo=$_GET["tipo"];



  if($tipo=="usuario"){
  $perfil=isset($_POST['perfil'])?$_POST['perfil']:null;
  $logado=isset($_POST['logado'])?$_POST['logado']:null;
  $login=isset($_GET['login'])?$_GET['login']:null;

  $tipoPerfil=@mysql_query("SELECT * FROM $perfil");
  $tipoPerfil1=@mysql_fetch_array($tipoPerfil);
  $tipoPerfil2=$tipoPerfil1["tipo"];

  $email=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='$perfil';",$conexao);
  $diaAniv=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='$perfil';",$conexao);
  $diaAniv=@mysql_fetch_array($diaAniv);
  $diaAniv=$diaAniv["dia"];
  $mesAniv=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='$perfil';",$conexao);
  $mesAniv=@mysql_fetch_array($mesAniv);
  $mesAniv=$mesAniv["mes"];
  $fetchemail=@mysql_fetch_array($email);
  $fetchemail=$fetchemail["email"];
  //$login1=$login;
  //$login1=str_replace("_"," ",$login1);
  //$perfil1=$perfil;
  //$perfil1=str_replace("_"," ",$perfil1)
  //echo $login;
  //echo $perfil;
  $foto="SELECT * FROM ".strtolower($login);
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
   $adiciona=@mysql_query("INSERT INTO _notificacoes (contato,perfil,imagem,dia,mes,tipo,tipoPerfil) VALUES('".$login."','".$perfil."','".$fetchFoto1."','".$diaAniv."','".$mesAniv."','".$tipo."','".$tipoPerfil2."');",$conexao);
   //$adicionaMensagem=@mysql_query("INSERT INTO _mensagens (comentario,postar,sessao,diaDaSemana,mes,ano)VALUES('Te adicionei.','".$fetchemail."','".$login."','".$diaDaSemana."','".$mes."','".$ano."');",$conexao);
  
  
  

  
  
  /*  $foto2="SELECT * FROM ".strtolower($login);
  $incluiFoto2=@mysql_query($foto2);
  $fetchFoto2=@mysql_fetch_array($incluiFoto2);
  $fetchFoto3=$fetchFoto2['imagem'];
  $adiciona1=@mysql_query("INSERT INTO ".strtolower($perfil)." (contatos,imagem) VALUES('".strtolower($login)."','".$fetchFoto3."');",$conexao);
  */
  



	
	
	$pesq = @mysql_query("SELECT tituloPerfil FROM _vitrine WHERE tituloPerfil = '".$perfil."';", $conexao);
		$mostra = @mysql_num_rows($pesq);
		if ( $mostra > 0 ) {
		echo "<script>alert(\"Esse usu&aacute;rio j&aacute; faz parte de sua rede!\");
		window.location = 'javascript:history.back(-1)';
		</script>";
		}
	
	
	
	

  
  if($adiciona){
  echo"<script>alert('Contato ".str_replace("_"," ",$perfil).", adicionado com sucesso!'); history.go(-1);</script>";}
  else{
  echo"<script>alert('Contato ".$perfil.", nao pode ser adicionado!');  history.go(-1);</script>";}

}






































if($tipo=="fornecedor"){
  $perfil=isset($_POST['perfil'])?$_POST['perfil']:null;
  $logado=isset($_POST['logado'])?$_POST['logado']:null;
  $login=isset($_GET['login'])?$_GET['login']:null;


  $tipoPerfil=@mysql_query("SELECT * FROM $perfil");
  $tipoPerfil1=@mysql_fetch_array($tipoPerfil);
  $tipoPerfil2=$tipoPerfil1["tipo"];

  $email=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='$perfil';",$conexao);
  $diaAniv=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='$perfil';",$conexao);
  $diaAniv=@mysql_fetch_array($diaAniv);
  $diaAniv=$diaAniv["dia"];
  $mesAniv=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='$perfil';",$conexao);
  $mesAniv=@mysql_fetch_array($mesAniv);
  $mesAniv=$mesAniv["mes"];
  $fetchemail=@mysql_fetch_array($email);
  $fetchemail=$fetchemail["email"];
  //$login1=$login;
  //$login1=str_replace("_"," ",$login1);
  //$perfil1=$perfil;
  //$perfil1=str_replace("_"," ",$perfil1)

  $foto="SELECT * FROM ".strtolower($login);
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
  $adiciona=@mysql_query("INSERT INTO _notificacoes (contato,perfil,imagem,dia,mes,tipo,tipoPerfil) VALUES('".$login."','".strtolower($perfil)."','".$fetchFoto1."','".$diaAniv."','".$mesAniv."','".$tipo."','".$tipoPerfil2."');",$conexao);
  //$adicionaMensagem=@mysql_query("INSERT INTO _mensagens (comentario,postar,sessao,diaDaSemana,mes,ano)VALUES('Te adicionei.','".$fetchemail."','".$login."','".$diaDaSemana."','".$mes."','".$ano."');",$conexao);
  
  
  
  
	/*
  $foto2="SELECT * FROM ".strtolower($login);
  $incluiFoto2=@mysql_query($foto2);
  $fetchFoto2=@mysql_fetch_array($incluiFoto2);
  $fetchFoto3=$fetchFoto2['imagem'];
  $adiciona1=@mysql_query("INSERT INTO notificacoes (contatos,imagem) VALUES('".strtolower($login)."','".$fetchFoto3."');",$conexao);
	*/

	
	
	
	$pesq = @mysql_query("SELECT tituloPerfil FROM _vitrine WHERE tituloPerfil = '".$perfil."';", $conexao);
		$mostra = @mysql_num_rows($pesq);
		if ( $mostra > 0 ) {
		echo "<script>alert(\"Esse usu&aacute;rio j&aacute; faz parte de sua rede!\");
		window.location = 'javascript:history.back(-1)';
		</script>";
		}
	
	
	
	

  
  if($adiciona){
  echo"<script>alert('Contato ".str_replace("_"," ",$perfil).", adicionado com sucesso!'); history.go(-1);</script>";}
  else{
  echo"<script>alert('Contato ".$perfil.", nao pode ser adicionado!');  history.go(-1);</script>";}

}
?>
</BODY>
</HTML>
