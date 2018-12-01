<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
 <TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
 <link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
 <!--<link type="text/css" rel="stylesheet" href="Estilo.css"/>-->
 <meta name="viewport" content="width=200, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
 <script src="jquery-1.6.2.min.js"></script> 

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="Ap6M_wtc-8emjVHtvXtyea6HztiDHndeONJXrOEtXyA" />
<META NAME="AUTHOR"="Clovis Jr">
<META NAME="DESCRIPTION" CONTENT="myWeb">
<meta name="url" content="http://www.myweb.is-great.net">
<meta name="language" content="Portugues">
<meta name="keywords" content=" myweb ,myWeb , rede social, MYWEB, clovisjr, clovisystem, clov!system, junior, iped,  pragrama��o de sites ">
<meta name="reply-to" content="clovisystem_net@yahoo.com.br">
<meta name="copyright" content="Clov!System">
<meta name="category" content="Internet">
<meta name="Robots" content="Index,Follow">
<link rev=made href="mailto:clovisystem_net@hotmail.com">


</HEAD>
<!--<BODY onload="movePopUp();" style="background-image:url('BACKGROUNDS/layoutprinc.gif'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;" id="body"  >-->
<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >
 <?php
include 'based.php';
$user=isset($_POST['c_email'])?$_POST['c_email']:null;
?>

<div class="container container-fluid  ">
<div class="row">



<main class="container container-fluid col-xs-12 " > 

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="cabecalho" align="right">

<script  Type="text/JavaScript" language="JavaScript" >
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var timeValue = "" + ((hours >12) ? hours -12 :hours)
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += (hours >= 12) ? " pm":" am"
timerRunning = true;

mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year =  myyear



if(myday == 0)
day = " <b><tt>Domingo,</tt></b> "

else if(myday == 1)
day = " <b><tt>Segunda,</tt></b> "

else if(myday == 2)
day = " <b><tt>Ter&ccedil;a,</tt></b> "

else if(myday == 3)
day = " <b><tt>Quarta,</tt></b> "

else if(myday == 4)
day = " <b><tt>Quinta,</tt></b> "

else if(myday == 5)
day = " <b><tt>Sexta,</tt></b> "

else if(myday == 6)
day = " <b><tt>S&aacute;bado,</tt></b> "

if(mymonth == 0)
month = " <b><tt>de Janeiro de</tt></b> "

else if(mymonth ==1)
month = "<b><tt> de Fevereiro de</tt></b> "

else if(mymonth ==2)
month = "<b><tt> de Mar&ccedil;o de</tt></b> "

else if(mymonth ==3)
month = "<b><tt> de Abril de</tt></b> "

else if(mymonth ==4)
month = "<b><tt> de Maio de</tt></b> "

else if(mymonth ==5)
month = "<b><tt> de Junho de</tt></b> "

else if(mymonth ==6)
month = "<b><tt> de Julho de</tt></b> "

else if(mymonth ==7)
month = "<b><tt> de Agosto de</tt></b> "

else if(mymonth ==8)
month = "<b><tt> de Setembro de </tt></b>"

else if(mymonth ==9)
month = "<b><tt> de Outubro de </tt></b>"

else if(mymonth ==10)
month = "<b><tt> de Novembro de </tt></b>"

else if(mymonth ==11)
month = "<b><tt> de Dezembro de </tt></b>"



year="<b><tt>2018</tt></b> "


document.write("<p style='color:white;'>"+ day + "<font size=2>" + myweekday + "</font>" + month + year + " - " + "<font size=2>" + timeValue + "</font></p>")



</script>
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
<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:140%; color:#ad0a0a; padding-top:16px; padding-left:10px;">LOGAR E COMPRAR NA REDE</p></div>

<!--<h1>LOGAR E COMPRAR NA REDE</h1>-->
<!--</legend>-->

<BR/>
<?php

//$usuario=isset($_POST['c_email']@websystem.me)?$_POST['c_email']@websystem.me:null;

?>
<script>
function mudaTransparencia(){
document.getElementById('entrar').style.opacity=1;
//document.getElementById('entrar').style.BackgroundColor=yellow;
}
function mudaTransparencia1(){
document.getElementById('entrar').style.opacity=0.5;

}
</script>

</main>
</div><!--row-->




<div class="row">
<main  class="container col-xs-5 " > 
<?php
echo'<form method="post" name="logar" action="direciona.php">';
$perfil=@mysql_query("SELECT tituloPerfil FROM _users WHERE email='$_POST[c_email]';",$conexao);
?>
<div style="color:white; font-weight:600px; font-size:20px; background:#ad0a0a; border-radius:12px; width:100%; height:50%; padding-left:0px;">

Você é &nbsp;&nbsp;<input type="radio" name="tipo" value="fornecedor" id="tipo" onclick="if(document.getElementById('fornecedor').style.visibility='hidden'){document.getElementById('fornecedor').style.visibility='visible'};
if(document.getElementById('usuario').style.visibility='visible'){document.getElementById('usuario').style.visibility='hidden'}  "/>Fornecedor &nbsp;&nbsp;

<input type="radio" name="tipo" value="usuario" id="tipo" onclick="if(document.getElementById('usuario').style.visibility='hidden'){document.getElementById('usuario').style.visibility='visible'};
if(document.getElementById('fornecedor').style.visibility='visible'){document.getElementById('fornecedor').style.visibility='hidden'}"/>Usuário
</div>




<div id="usuario" style="visibility:hidden; margin-top:20px; margin-left:0px;  float:left; width:100%;"><!--LOGIN DE USUARIO-->
    <font face="tahoma"   style="float:left; position:relative; font-size:15px; color:white; font-weight:600;">
    E-mail:<input type="text" name="c_email" id="c_email" placeholder="Meu e-mail de usuário"  style="color:black; width:40%;" onmouseover="mudaTransparencia();"  onClick="javascript:this.value=''"/>
    @<select name="dominio" id="dominio" style="color:black; width:40%;">
<option value="gmail.com" selected>gmail.com</option>
<option value="hotmail.com" >hotmail.com</option>
<option value="outlook.com" >outlook.com</option>
<option value="yahoo.com" >yahoo.com</option>
<option value="yahoo.com.br" >yahoo.com.br</option>
<option value="ig.com.br">ig.com.br</option>
<option value="ig.com" >ig.com</option>
<option value="globo.com" >globo.com</option>
<option value="terra.com.br" >terra.com.br</option>
<option value="r7.com" >r7.com</option>
<option value="bol.com.br" >bol.com.br</option>
<option value="uol.com" >uol.com</option>
<option value="uol.com.br" >uol.com.br</option>
</select>
<!--@myweb.is-great.net--><BR/><BR/>

    Senha:<input type="password" id="c_senha" name="c_senha" value="secret"  onmouseover="mudaTransparencia();"  onClick="javascript:this.value='';" style="color:black; width:40%;"/ ><BR/>
	<br/>
    <p align="left">
     <label>
    <input type="submit"  id="entrar" name="entrar" value="Entrar!" STYLE="border:0;color:black; height:35px; width:110px; border-radius:8px; "/> 

    </label>
    </p>
	 </font>
<?php	


echo' <input type="hidden" name="perfil" value="'.$perfil.'"/>'; 
echo' <input type="hidden" name="tipo" value="usuario"/>';?>
</form>
</DIV><!--FECHA LOGIN DE USUARIO-->	
<!--</form>-->











<?php
echo'<form method="post" name="logar" action="direciona.php">';
$perfil=@mysql_query("SELECT tituloPerfil FROM _fornecedores WHERE email='$_POST[c_email]';",$conexao);
?>
<div id="fornecedor" style="visibility:hidden; margin-top:20px; margin-left:0px; position:absolute; float:left; width:100%;"><!--LOGIN DE FORNECEDOR-->
    <font face="tahoma"   style="float:left; position:relative; font-size:15px; color:white; font-weight:600;">
    E-mail:<input type="text" name="c_email" id="c_email" placeholder="Meu e-mail de empresário"  style="color:black; width:40%;" onmouseover="mudaTransparencia();"  onClick="javascript:this.value=''"/>
    @<select name="dominio" style="color:black; width:40%;">
<option value="gmail.com" selected>gmail.com</option>
<option value="hotmail.com" >hotmail.com</option>
<option value="outlook.com" >outlook.com</option>
<option value="yahoo.com" >yahoo.com</option>
<option value="yahoo.com.br" >yahoo.com.br</option>
<option value="ig.com.br">ig.com.br</option>
<option value="ig.com" >ig.com</option>
<option value="globo.com" >globo.com</option>
<option value="terra.com.br" >terra.com.br</option>
<option value="r7.com" >r7.com</option>
<option value="bol.com.br" >bol.com.br</option>
<option value="uol.com" >uol.com</option>
<option value="uol.com.br" >uol.com.br</option>
</select>
<!--@myweb.is-great.net--><BR/><BR/>

    Senha:<input type="password" id="c_senha1" name="c_senha1" value="secret"  onmouseover="mudaTransparencia();"   onClick="javascript:this.value='';" style="color:black; width:40%;"/ ><BR/>
	<br/>
    <p align="left">
     <label>
    <input type="submit"  id="entrar1" name="entrar1" value="Entrar!" STYLE="border:0;color:black; height:35px; width:110px; border-radius:8px; "/>

     </label>
    </p>
	 </font>
<?php	
echo' <input type="hidden" name="perfil" value="'.$perfil.'"/>'; 
echo' <input type="hidden" name="tipo" value="fornecedor"/>';
?>
</form>
</DIV><!--FECHA LOGIN DE FORNECEDOR-->


	
</main>

<main  class="container col-xs-5 "  style="margin-left:30px; margin-top:-5px;"> 
<style>
 #botaoCadastrar a:visited{text-decoration:none; color:black;}
 #botaoCadastrar a:link{text-decoration:none; color:black;}
 #botaoCadastrar a:hover{text-decoration:none; color:yellow; cursor:hand}

 #esqueceuaSenha a:visited{text-decoration:none; color:black;}
 #esqueceuaSenha a:link{text-decoration:none; color:black;}
 #esqueceuaSenha a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>
<fieldset  style="border-radius:8px; width:22%;" >
    <form method="post" name="cadastro" action="">
    <p align="center">
     <label>
    <div id="botaoCadastrar" style="background-image:url('BOTOES/botaoCinzaGradiente/botaoCinzaGradiente.png'); background-repeat:no-repeat; width:120px; height:60px; 
 text-align:center; padding-top:14px;">
	<a href="CadastrarUsuario.php">Cadastre-se</a>
	</div><!--STYLE="border:0; height:25;
    width:80; background:#999999;"-->
     </label>
    </p>
   
    </form>
    
    <form method="post" name="esquece" action="">
    <p align="center">
     <label>
	 <div id="esqueceuaSenha" style="background-image:url('BOTOES/botaoCinzaGradiente/botaoCinzaGradiente.png'); background-repeat:no-repeat; width:120px; height:60px; 
 text-align:center;  padding-top:20px; padding-top:5px;">
    <a href="esqueceSenha.php">Esqueceu <br/>a Senha?</a>
	</div>
     </label>
    </p>
    </font>
    </form>
	</fieldset> 
	</main>
	</div><!--row-->
	<!--<form method="post" name="sugestao" action="sugestao.php">	
    <p align="center">
     <label>
    <input type="submit" onmouseover=this.style.cursor="hand" name="sugestao" value="Sugest�es" STYLE="border:0; height:25; width:80;
    background:#999999;"/>
     </label>
    </p>
	</form>-->
	<div class="row">
	<main  class="col-xs-12 " > 
    <br/>
    <div style="margin-top:30%;">
	<p align="left">Desenvolvido por: Clovis Pereira Soares Júnior</p>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    </div>
    <br/>
	</main>
	</div><!--row-->
	  
    
</div><!--fechacontainer-->


</BODY>
</HTML>
