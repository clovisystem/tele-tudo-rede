<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
<link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
<!--<link type="text/css" rel="stylesheet" href="Estilo.css"/>-->
<meta name="viewport" content="width=200, initial-scale=1">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
<script src="jquery-1.6.2.min.js"></script> 

<?
include "based.php";
?>
</HEAD>
<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >


<div class="container container-fluid  ">
<div class="row">



<main class="container container-fluid col-xs-12 " > 

<div align="right">

<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
<br/>


<style>
 a:visited{text-decoration:none; color:black;}
 a:link{text-decoration:none; color:black;}
 a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>



<div style="background-color:#ad0a0a; width:100%; height:88px; border-radius:12px; padding-top:4px;"  >
<!--<div class="container container-fluid col-xs-12 ">-->
<!--<div class="container container-fluid col-xs-1 "  id="faixaEsq" style="margin-left:-10px; position:absolute; float:left; background-image:url('BACKGROUNDS/faixaEsq.png');background-repeat:no-repeat;  width:2%; height:120px; 
 text-align:center;  background-size:100%  padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; "></div>
-->
<div class="container container-fluid col-xs-12 "  id="faixaMeio" style="margin-left:-10px;  position:absolute; float:left;  width:96%; height:120px; 
  text-align:center;   padding-top:30px; padding-left:-10px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;">
<a href="https://www.google.com.br/" target="_blank" >Google</a>
<a href="http://www.infojobs.com.br/" target="_blank" style="margin-left:20px;">Infojobs</a>
<a href="http://g1.globo.com/" target="_blank" style="margin-left:20px;">G1</a>
<a href="http://www.r7.com/" target="_blank" style="margin-left:20px;">R7</a>
<a href="https://www.youtube.com/" target="_blank" style="margin-left:20px;">YouTube</a>
</div>
<!--<div class="container container-fluid col-xs-1 "  id="faixaDir"  style="margin-left:95.2%;  position:absolute; float:left; background-image:url('BACKGROUNDS/faixaDir.png');background-repeat:no-repeat;  width:2%; height:120px; 
    text-align:center;  background-size:100%  padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; "></div>
-->
<!--</div>-->
</div>


</main>
</div><!--row-->



<div class="row">
<main  class="container container-fluid  col-xs-12 " > 
<?php
ini_set("default_charset","UTF-8");
?>
<br/><br/>
<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>
</main>
</div><!--row-->


<div class="row">
<main  class="container container-fluid  col-xs-12 " > 
<br/><br/>
<!--<legend>-->
<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:20px; color:#ad0a0a; padding-top:16px; padding-left:10px;">SALVANDO INFORMAÇÕES...</p></div>

<!--<h1>LOGAR E COMPRAR NA REDE</h1>-->
<!--</legend>-->

<BR/>


<?php

 // @session_start();
 //   $_SESSION['c_email'];
 //   $_SESSION['c_senha'];


include "based.php";


//@session_start();
$confirmacao=$_GET['confirmacao'];
$tipo=$_GET['tipo'];




//$email=@mysql_query("SELECT email FROM users WHERE email LIKE'%$textoEmail%';",$conexao);
//if($textoEmail!=$email){echo"<script>alert('Informe seu e-mail corretamente!'); history.go(-1);</script>";}


if($tipo=="usuario"){
    $textoPerfil=$_POST['textoPerfil'];
    $textoAtividades=$_POST['textoAtividades'];
    $textoHobbies=$_POST['textoHobbies'];
    $textoEstado=$_POST['textoEstado'];
    $textoCidade=$_POST['textoCidade'];
    //$textoStatus=$_POST['textoStatus'];
    $textoDominio=$_POST['dominio'];
    $textoEmail=$_POST['textoEmail'];
    $email=$textoEmail."@".$textoDominio;
    $textoSenha=$_POST['textoSenha'];
    $textoDia=$_POST['textoDia'];
    $textoMes=$_POST['textoMes'];
    $textoAno=$_POST['textoAno'];
    $textoTelefone=$_POST['textoTelefone'];
    $textoCEP=$_POST['textoCEP'];
    $textoId=$_POST['textoId'];
    $textoIdUser=$_POST['textoIdUser'];
    //$textoIdForn=$_POST['textoIdForn'];
    
    $perfil=@mysql_query("SELECT * FROM _tudo WHERE codigo='".$textoId."';",$conexao);
    $perfil1=@mysql_fetch_array($perfil);
    $perfil2=$perfil1["tituloPerfil"];

if($_POST['textoPerfil'] == "" || $_POST['textoAtividades'] == "" || $_POST['textoHobbies'] == ""|| $_POST['textoEstado']
== ""|| $_POST['textoCidade'] == ""|| $_POST['textoEmail'] == "" || $_POST['dominio'] == "" || $_POST['textoSenha'] == ""
|| $_POST['textoDia'] == "" || $_POST['textoMes'] == "" || $_POST['textoAno'] == "" || $_POST['textoTelefone'] == "" || $_POST['textoCEP'] == "")
{echo '<body bgcolor="#CCCCCC"><BR><BR><font color="red"><b>Us&aacute;rio n&atilde;o p&ocirc;de ser alterado, preencha todos os campos!</b>
</font></body><BR><BR>';
 echo $confirmacao.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="logar.php"><input type="button" name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar"
  onclick="history.go(-2)"/>';
// echo '<br><br>';
/*echo $_POST['textoEmail'];
echo $_POST['textoPerfil'];
echo $_POST['textoTelefone'];*/

?>

<?php
}else{

 $resultado=@mysql_query("UPDATE _users SET textoPerfil='".$_POST['textoPerfil']."', estado='".$_POST['textoEstado']."',
 cidade='".$_POST['textoCidade']."', atividades='".$_POST['textoAtividades']."', hobby='".$_POST['textoHobbies']."',
  email='".$email."',senha='".$_POST['textoSenha']."',
 dia='".$_POST['textoDia']."',mes='".$_POST['textoMes']."', ano='".$_POST['textoAno']."', CEP='".$_POST['textoCEP']."', telefone='".$_POST['textoTelefone']."'
 WHERE codigo = $textoIdUser ;",$conexao);

 $resultado1=@mysql_query("UPDATE _tudo SET textoPerfil='".$_POST['textoPerfil']."', estado='".$_POST['textoEstado']."',
 cidade='".$_POST['textoCidade']."', atividades='".$_POST['textoAtividades']."', hobby='".$_POST['textoHobbies']."', 
 email='".$email."',senha='".$_POST['textoSenha']."',
 dia='".$_POST['textoDia']."',mes='".$_POST['textoMes']."', ano='".$_POST['textoAno']."', CEP='".$_POST['textoCEP']."', telefone='".$_POST['textoTelefone']."'
 WHERE codigo = $textoId ;",$conexao);

 $resultado2=@mysql_query("UPDATE '".$perfil2."' SET dia='".$_POST['textoDia']."',mes='".$_POST['textoMes']."';",$conexao);
 
 
 


echo '<font color="green">'.$confirmacao.'</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logar.php"><input type="button" 
name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar" onclick="history.go(-2)"/>';
echo '<br><br>';
?>


<?php


        if($resultado){
    
                    echo"<script>alert('Alteracoes atualizadas no proximo Logon.'); location.href='index.php';</script>";        
    
                }
                else{
    
                    echo"<script>alert('Nao podemos atualizar suas informacoes, veja o que ha de errado.');</script>";        
                    echo"<script>document.write('<button onclick=history.go(-1)>Voltar</button>');</script>";
                }
        }
        echo  $textoIdUser;
}


?>























<?php
if($tipo=="fornecedor"){

    $textoPerfil=$_POST['textoPerfil'];
    $textoAtividades=$_POST['textoAtividades'];
    $textoHobbies=$_POST['textoHobbies'];
    $textoEstado=$_POST['textoEstado'];
    $textoCidade=$_POST['textoCidade'];
    //$textoStatus=$_POST['textoStatus'];
    $textoDominio=$_POST['dominio'];
    $textoEmail=$_POST['textoEmail'];
    $email=$textoEmail."@".$textoDominio;
    $textoSenha=$_POST['textoSenha'];
    $textoDia=$_POST['textoDia'];
    $textoMes=$_POST['textoMes'];
    $textoAno=$_POST['textoAno'];
    $textoTelefone=$_POST['textoTelefone'];
    $textoCEP=$_POST['textoCEP'];
    $textoId=$_POST['textoId'];
    //$textoIdUser=$_POST['textoIdUser'];
    $textoIdForn=$_POST['textoIdForn'];
    
    $perfil=@mysql_query("SELECT * FROM _tudo WHERE codigo='".$textoId."';",$conexao);
    $perfil1=@mysql_fetch_array($perfil);
    $perfil2=$perfil1["tituloPerfil"];


    if($_POST['textoPerfil'] == "" || $_POST['textoAtividades'] == "" || $_POST['textoEstado']
    == ""|| $_POST['textoCidade'] == ""|| $_POST['textoEmail'] == "" || $_POST['dominio'] == "" || $_POST['textoSenha'] == ""
    || $_POST['textoDia'] == "" || $_POST['textoMes'] == "" || $_POST['textoAno'] == "" || $_POST['textoTelefone'] == "" || $_POST['textoCEP'] == "")
{echo '<body bgcolor="#CCCCCC"><BR><BR><font color="red"><b>Us&aacute;rio n&atilde;o p&ocirc;de ser alterado, preencha todos os campos!</b>
</font></body><BR><BR>';
 echo $confirmacao.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="logar.php"><input type="button" name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar"
  onclick="history.go(-2)"/>';
// echo '<br><br>';
?>

<?php
}else{

    $resultado=@mysql_query("UPDATE _users SET textoPerfil='".$_POST['textoPerfil']."', estado='".$_POST['textoEstado']."',
    cidade='".$_POST['textoCidade']."', atividades='".$_POST['textoAtividades']."', hobby='".$_POST['textoHobbies']."',
     email='".$email."',senha='".$_POST['textoSenha']."',
    dia='".$_POST['textoDia']."',mes='".$_POST['textoMes']."', ano='".$_POST['textoAno']."', CEP='".$_POST['textoCEP']."', telefone='".$_POST['textoTelefone']."'
    WHERE codigo = $textoIdForn ;",$conexao);
   
    $resultado1=@mysql_query("UPDATE _tudo SET textoPerfil='".$_POST['textoPerfil']."', estado='".$_POST['textoEstado']."',
    cidade='".$_POST['textoCidade']."', atividades='".$_POST['textoAtividades']."', hobby='".$_POST['textoHobbies']."', 
    email='".$email."',senha='".$_POST['textoSenha']."',
    dia='".$_POST['textoDia']."',mes='".$_POST['textoMes']."', ano='".$_POST['textoAno']."', CEP='".$_POST['textoCEP']."', telefone='".$_POST['textoTelefone']."'
    WHERE codigo = $textoId ;",$conexao);

    $resultado2=@mysql_query("UPDATE '".$perfil2."' SET dia='".$_POST['textoDia']."',mes='".$_POST['textoMes']."';",$conexao);
    

echo '<font color="green">'.$confirmacao.'</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logar.php"><input type="button" 
name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar" onclick="history.go(-2)"/>';
echo '<br><br>';

    if($resultado){

        echo"<script>alert('Alteracoes atualizadas no proximo Logon.'); location.href='index.php';</script>";        

    }
    else{

        echo"<script>alert('Nao podemos atualizar suas informacoes, veja o que ha de errado.');</script>";        
        echo"<script>document.write('<button onclick=history.go(-1)>Voltar</button>');</script>";
    }
?>


<?php
 }

 }

?>




</main>
</div><!--row-->
	  
    
</div><!--fechacontainer-->

</BODY>
</HTML>
