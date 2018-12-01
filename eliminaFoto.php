<HTML>
<HEAD>
 <TITLE> - myWeb -</TITLE>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
</HEAD>
<BODY>
<?php

 //@session_start();
    //$_SESSION['c_email'];
   //$_SESSION['c_senha'];

  include"based.php";

  $arquivo=$_GET['arquivo'];
  $tipo=$_GET['tipo'];

if($tipo=="usuario"){
  $eliminaFoto=@mysql_query("DELETE FROM _acervos WHERE imagem LIKE'%$arquivo%';",$conexao);
  $eliminaFoto1=@mysql_query("DELETE FROM _vitrine WHERE imagem LIKE'%$arquivo%';",$conexao);
  $apagaArq=unlink($arquivo);


  if($eliminaFoto){
  echo"<script>alert('Foto, eliminada com sucesso!'); history.go(-1);</script>";}
  else{
  echo"<script>alert('Foto, nao pode ser eliminada!');  history.go(-1);</script>";}

  }



  if($tipo=="fornecedor"){
    $eliminaFoto=@mysql_query("DELETE FROM _produtos WHERE imagem LIKE'%$arquivo%';",$conexao);
    $eliminaFoto1=@mysql_query("DELETE FROM _vitrine WHERE imagem LIKE'%$arquivo%';",$conexao);
    $apagaArq=unlink($arquivo);
  
  
    if($eliminaFoto){
    echo"<script>alert('Foto, eliminada com sucesso!'); history.go(-1);</script>";}
    else{
    echo"<script>alert('Foto, nao pode ser eliminada!');  history.go(-1);</script>";}
  
    }
?>
</BODY>
</HTML>
