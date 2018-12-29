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
</div>
<br/>

<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>

    <br>
    <br>
<?

 //@session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];

include "based.php";




    ini_set("default-charset","utf-8");
    $comentario=$_POST['comentario'];
    $sessao=$_POST['sessao'];
    $sessao=str_replace(" ","_",$sessao);
    
    $exclusao=@mysql_query("DELETE FROM _mensagens WHERE comentario='$comentario' AND sessao='$sessao' ;",$conexao);
    if($exclusao){
    echo'<center>Mensagem Exclu&iacute;da com sucesso!';
    echo '<br/><a href="javascript:window.history.go(-1)">Clique aqui para voltar.</a><center>';
    }else{
    echo'<center>A mensagem n&atilde;o pode ser excluida.';
    echo '<br/><a href="javascript:window.history.go(-1)">Clique aqui para voltar.</a><center>';}

}
?>
 <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>
</BODY>
</HTML>
