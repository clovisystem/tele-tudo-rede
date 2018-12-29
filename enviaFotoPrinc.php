<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link type="text/css" rel="stylesheet" href="EstiloFonte.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
<?
include "based.php";
?>
</HEAD>
<BODY bgcolor="#CCCCCC" id="corpo" align="center">

<div align="right">
<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
<BODY>
<br/><br/>
<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>

<br/><br/>
<?php
  include"based.php";

 @session_start();
    $_SESSION['c_email'];
    $_SESSION['c_senha'];


$perfil=$_GET['id'];

if ($_FILES["arquivo"] != "") {
$arquivo = $_FILES["arquivo"];

$pasta_dir = "arquivos/";//diretorio dos arquivos
//se nao existir a pasta ele cria uma


if(!file_exists($pasta_dir)){
mkdir($pasta_dir);

}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);



//conecta no banco

$nome = $_POST['nome'];
$tituloPerfil=$_POST['tituloPerfil'];



$query = "INSERT INTO users (arquivo) VALUES ('$arquivo_nome') WHERE tituloPerfil LIKE'%$_GET[id]%'"; // inser��o sql na tabela recados

mysql_query($query) or die (mysql_error());
mysql_close();//fecha conex�o

?>
<?php
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head><title> - webystem - </title>
<style type='text/css'>
 #Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma; padding:21px;}
 #celula{padding:10px;}
 #celula1{padding:16px;}
 #Proper{text-transform:capitalize;}
 #corpo{padding:30px; font-family:tahoma;}
</style></head>
<body bgcolor='#CCCCCC' id='corpo'>

<center><font size='3'>Foto enviada com sucesso";
echo "</center><br>";
echo  "<img src='$arquivo_nome' width='250'><br/>$nome<br/> <br/>
<center><form method='post' enctype='multipart/form-data' action=''>
<a href='javascript:history.go(-1)'><input type='button' name='sair' value='Voltar' /></a>
</form></center>
</body>
</html>";




}

?>
</BODY>
</HTML>
