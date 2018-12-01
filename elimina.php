<HTML>
<HEAD>
 <TITLE> - myWeb -</TITLE>
  <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
</HEAD>
<BODY>
<?php
  include"based.php";
  $sessao=isset($_POST['sessao'])?$_POST['sessao']:null;
  //$sessao=strtoupper($sessao);
  //$sessao1=strtolower($sessao);
  $logado=isset($_POST['logado'])?$_POST['logado']:null;
  $login=isset($_GET['login'])?$_GET['login']:null;
  $login=strtolower($login);

  $elimina=@mysql_query("DELETE FROM $login WHERE contatos ='$sessao';",$conexao);
  $elimina.=@mysql_query("DELETE FROM $sessao WHERE contatos = '$login';",$conexao);



  if($elimina){
  echo"<script>alert('Contato ".$_POST['perfil'].", eliminado com sucesso!'); history.go(-1);</script>";}
  else{
  echo"<script>alert('Contato ".$_POST['perfil'].", n&atilde;o pode ser eliminado!');  history.go(-1);</script>";}
?>
</BODY>
</HTML>
