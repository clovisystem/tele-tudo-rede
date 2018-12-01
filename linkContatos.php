<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
<link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
<!--<link type="text/css" rel="stylesheet" href="Estilo.css"/>-->
<!--<meta name="viewport" content="width=200, initial-scale=1">-->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
<script src="jquery-1.6.2.min.js"></script> 
<?
include "based.php";
?>

<script language="javascript" src="Jquery_Cycle\cycle.all.js"></script>
  
<script language="javascript">
$(document).ready(function(){
$("#slides ul").cycle({
fx:'scrollHorz',
speed:1000
});
});
</script>

</HEAD>
<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >

<div class="container">

<div class="row">
<main class="container container-fluid col-xs-12">


<div align="">
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
day = " <b><tt>Ter&ccedila,</tt></b> "

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
month = "<b><tt> de Mar&ccedilo de</tt></b> "

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



year='<b><tt>2018</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')

</script>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</div>
<br/>




<style>
#Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma; padding:21px; margin-bottom:60px;}
body a:link{text-decoration:none;}
 #celula{padding:10px;}
 #celula1{padding:16px; margin-left:0px;}
 #Proper{text-transform:capitalize;}
  #proper{text-transform:capitalize;}
 #corpo{padding:30px; font-family:tahoma;}
 #Titulo{font-size:40px; background-color:#B5C0C3; color:green; font-weight:900; border:none; font-family:arial; text-transform:uppercase;}
 #E-mail{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:lowercase;}
 #Atividades{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #Texto{font-size:14px; background-color:#B0C6D2; color:#168ECF; font-weight:100; border:none; font-family:verdana; text-transform:capitalize;}
 #hobbies{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #objetivo{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #status{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #cidade{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #estado1{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:uppercase;}
 #aniversario{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #email{text-transform:lowercase;}
  #Body{font-family:tahoma; padding:21px;}
  .botao{background-image:url("././botaoGradienteAzul/botaoGradienteAzulGrande.png"); background-repeat:no-repeat; margin-top:10px; width:160px; height:160px; 
  text-align:center; float:left; position:relative;
  }
  .texto{ padding-top:8px; font-size:11px; }
  .textoLocaliza{ padding-top:8px; font-size:11px; margin-top:25px;}
  .imagemContato{ padding-top:35px;}
  #segmento{width:800px; float:left; position:absolute;}
  
  #formulario1{position:relative; float:left; width:160px;}
   #formulario2{position:relative; float:left; width:160px;}
 .contatos{float:left; position:relative; width:520px;  margin-top:34px; margin-left:-2px;
 padding-bottom:20px; padding-top:-10px; padding-left:16px; background-color:#B0C6D2;}
 #lembraSenha{background-color:#B5C0C3; padding: 45px 45px 45px 45px;}
 #botaoCadastrar{background-image:url("././BOTOES/botaoCinzaGradiente/botaoCinzaGradiente.png"); background-repeat:no-repeat; width:120px; height:60px; 
 text-align:center;  margin-left:600px; padding-top:14px;}
 #botaoCadastrar a:visited{text-decoration:none; color:black;}
 #botaoCadastrar a:link{text-decoration:none; color:black;}
 #botaoCadastrar a:hover{text-decoration:none; color:yellow; cursor:hand}
 #esqueceuaSenha{background-image:url("././BOTOES/botaoCinzaGradiente/botaoCinzaGradiente.png"); background-repeat:no-repeat; width:120px; height:60px; 
 text-align:center; margin-left:600px; padding-top:20px;} 
 #esqueceuaSenha a:visited{text-decoration:none; color:black;}
 #esqueceuaSenha a:link{text-decoration:none; color:black;}
 #esqueceuaSenha a:hover{text-decoration:none; color:yellow; cursor:hand}

 
 #faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat;  width:100%; height:120px; 
  text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
 

 #faixaEsq{background-image:url("BACKGROUNDS/faixaEsq.png");background-repeat:no-repeat;  width:5%; height:120px; 
 text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}

 #faixaMeio{background-image:url("BACKGROUNDS/faixaMeio.png");background-repeat:no-repeat;  width:90%; height:120px; 
  text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}

#faixaDir{background-image:url("BACKGROUNDS/faixaDir.png");background-repeat:no-repeat;  width:5%; height:120px; 
    text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
 
 #faixa a:visited{text-decoration:none; color:white;}
 #faixa a:link{text-decoration:none; color:white;}
 #faixa a:hover{text-decoration:none; color:yellow;}
 
 #notificacao{background:#e6056a; width:20px; height:20px; float:left; position:relative; margin-left:3px; margin-right:0px; overflow:hidden; }
 #link{margin-left:180px; width:160px; height:40px; float:left; position:relative; }
 #link1{margin-left:100px; width:160px; height:40px; float:left; position:relative; }
 #link2{margin-left:100px; width:160px; height:40px; float:left; position:relative; margin-top:-18px;}
 #contador{background-image:url("././BACKGROUNDS/contador.png");background-repeat:no-repeat; width:260px; height:30px; }
 #contadorMaior{background-image:url("././BACKGROUNDS/contadorMaior1.png");background-repeat:no-repeat; width:260px; height:40px; }
 /*#contatos1{float:left; position:relative; width:220px;}*/
 #slides{overflow:hidden; width:600px; height:300px;}
fieldset{border-radius:10px;}
/*table{display:block; width:auto; overflow-x: auto; white-space: nowrap; }*/
</style>

<style>
 a:visited{text-decoration:none; color:black;}
 a:link{text-decoration:none; color:black;}
 a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>



<div style="background-color:#ad0a0a; width:98%; height:88px; border-radius:12px; padding-top:4px;"  >
<!--<div class="container container-fluid col-xs-12 ">-->
<!--<div class="container container-fluid col-xs-1 "  id="faixaEsq" style="margin-left:-10px; position:absolute; float:left; background-image:url('BACKGROUNDS/faixaEsq.png');background-repeat:no-repeat;  width:2%; height:120px; 
 text-align:center;  background-size:100%  padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; "></div>
-->
<div class="container container-fluid col-xs-12 "   style="margin-left:-10px;  position:absolute; float:left;  width:96%; height:120px; 
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
<div style="background-color:white; border-radius:12px; width:98%; height:60px;"><p align="left"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>
</main>
</div><!--row-->


<div class="row">
<main  class="container container-fluid  col-xs-12 " > 
<br/><br/>
	
	

	
	



<?php

 //@session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];
    
include "based.php";

$sessao=$_GET['sessao'];
$sessaoMaior=strtoupper($_GET['sessao']);
$login=$_GET['login'];
$tipo=$_GET['tipoParceiro'];






$sessao1=str_replace("_"," ",$sessao);
//"#B5C0C3"
//echo'<body style="background:'.$cor.';" id="corpo">';


if ($tipo=="usuario"){
  
  
  ini_set("default_charset","utf-8");
  $listar0=@mysql_query("SELECT tituloPerfil FROM _users WHERE tituloPerfil LIKE '%$sessao%' ;",$conexao);
  $listar1=@mysql_query("SELECT email FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $emailSessao=@mysql_result($listar1,0,email);
  $listar2=@mysql_query("SELECT textoPerfil FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar3=@mysql_query("SELECT atividades FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar4=@mysql_query("SELECT hobby FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar5=@mysql_query("SELECT status FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar6=@mysql_query("SELECT estado FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar7=@mysql_query("SELECT cidade FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar8=@mysql_query("SELECT imagem FROM _acervos WHERE imagem LIKE '%$sessao%';",$conexao);
  $listar9=@mysql_query("SELECT sessao FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  $listar10=@mysql_query("SELECT comentario FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  $listar11=@mysql_query("SELECT dia FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar12=@mysql_query("SELECT mes FROM _users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar13=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar  = '$sessao' ORDER BY id DESC
  LIMIT 50;",$conexao);
  $listar14=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar  = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  
  $listar16=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC
  LIMIT 50;",$conexao);
  $listar17=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  $listar18=@mysql_query("SELECT coalesce(ano,'Nao definido') as ano FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC;",$conexao);
  
  //echo $tipo;
  //$listar21="Clovis_Jr";
  //$listar20=str_replace("_"," ",$listar0);
  
  $perfil1=@mysql_result($listar0,0,tituloPerfil);
  $perfil=@mysql_result($listar0,0,tituloPerfil);
  
  
  
  echo'<div style="width:98%; height:60px; background:black; color:#ad0a0a; border-radius:12px; padding-top:0px; padding-left:10px;"><input type="text" readonly="true"  style="background:transparent; border:none; width:800px; " name="Titulo"
  id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1);
  echo'" />';
  echo'<br/><br/>';
  ?>
  </main>
  </div><!--row-->
  
  
  
  
  <?php
  include("based.php");
  
  
  

  $voce=strtoupper($_GET['login']);
  
  $voce1=str_replace("_"," ",$voce);



  $localizado=strtoupper($_GET['sessao']);
  
  $localizado1=str_replace("_"," ",$localizado);


  echo'<br/><br/>';
  
  ini_set("default_charset","utf-8");
  
  
 
  
  //echo'<table style="background:'.$cor.'; width:98%;  margin-top:0%; z-index:-90; border-radius:12px;"><tr><td>';
  
  //echo'<form>';
  
$sessao=$_GET['sessao'];
$sessaoMaior=strtoupper($_GET['sessao']);
$login=$_GET['login'];
$tipo=$_GET['tipoParceiro'];
  
  //echo '<h1>'.$sessaoMaior.'</h1>';
  
    
  $cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM _users WHERE tituloPerfil LIKE '%$sessaoMaior%';",$conexao); 
  //$cor=@msql_query($cor)or die(@mysql_error());
  $cor=@mysql_fetch_array($cor);
  $cor=$cor["background"];
  
  
  echo'<table width="98%" style="background:'.$cor.'; border-radius:12px;" ><tr><td colspan="3" align="left">';
  echo '<input type="text" name="logon" value="'.str_replace("_"," ",$login).'" readonly="true"  STYLE="background-color:transparent; padding-left:20px; padding-top:30px;border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold; "/>, esta e a Pagina do perfil de <input type="text" name="logon" value="'.strtoupper($sessao1).'" readonly="true" size="16" STYLE="background-color:transparent; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/>';
  echo'</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Voltar" onclick="history.back();" style="margin-left:90%; margin-top:-20px;" />';
  echo'</td></tr>';


  echo'<tr><td width="15%" colspan="1" height="50" valign="bottom"><br/><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWebTextArea.png);
  background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px; ">Minhas atividades:
  &nbsp;&nbsp;<br/><textarea  readonly="true" name="Atividades" valign="bottom" cols="42" rows="6"
  id="Atividades" style="text-align:justify; margin:4px 0px 0px 7px; background-color:transparent; font-weight:600;">'
  .@mysql_result($listar3,0,atividades);
  echo'</textarea></font></div></td>';






  //echo '<form>';
  /*echo'
  
  <font color="#06438E" size="3" face="verdana" style="margin-top:0px;"><b>Quem sou eu...</b>';
  */
  echo'
  <td width="40%" rowspan="2" valign="top" 
   id="celula1"><div style="border-radius:12px; background:#B0C6D2; margin-left:-20px; width:20%;"><textarea name="texto" readonly="true"  valign="bottom"  id="Texto" wrap="on" cols="45" rows="10" style="border-radius:10px; "
  value="" >'.@mysql_result($listar2,0,textoPerfil).'</textarea></div></td></tr>';
  
  




  echo'<tr>';




  echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Telefone:&nbsp;&nbsp;
  <font size="2" color="green" face="arial" style="font-weight:600;"> ' .@mysql_result($listar13,0,telefone);
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';

  
  
  echo'<tr><td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Estado:&nbsp;&nbsp;
  <font size="2" color="green" face="arial" style="text-transform:uppercase; font-weight:600;"> '
   .@mysql_result($listar6,0,estado);
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
  echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Cidade:&nbsp;&nbsp;
  <font size="2" color="green" face="arial" style="text-transform:capitalize; font-weight:600;"> '
   .@mysql_result($listar7,0,cidade);
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
  </tr>';
  echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Anivers&aacute;rio:&nbsp;&nbsp;
  <input type="text" readonly="true" size="30" id="aniversario" valign="bottom" name="aniversario" style="background-color:transparent; font-weight:600;"
  value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
  echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
  
  
  
  echo'<tr><td width="50%" height="30"colspan="1" height="50" valign="bottom" style="padding-left:20px;">
  <br/><br/>
  <b></b><br/><br/></td>
  <td width="50%" height="30" colspan="1" height="50" valign="bottom" ></td>




  </tr>';






  

/*
echo'

  <td style="height:100%;" rowspan="5">
  <style>
  #buscaProdutos{
      background:gold;
      border-radius:12px;
      padding-left:40px;
      padding-top:200px;
      padding-bottom:200px;
      width:105%;
      height:100%;
      margin-left:-35px;
      
      
  }
  </style>
 
  <div id="buscaProdutos">
  
  
 
  <style>
  #buscaProdutos{
      background:gold;
      border-radius:12px;
      padding-left:30px;
  }
  
  .select
  {
  scrollbar-arrow-color: "#FFF";
  scrollbar-base-color: "#FFF";
  scrollbar-3dlight-color:"#FFF";
  scrollbar-highlight-color:"#FFF";
  scrollbar-face-color:"#FFF";
  scrollbar-shadow-color:"#FFF";
  scrollbar-darkshadow-color:"#FFF";
  scrollbar-track-color:"#FFF";
  overflow:hidden;
  margin-bottom:8px;
  }
  #imgBusca{
      
      float:left; 
      position:absolute;
      margin-left:-60px;
      margin-top:4px;
      }
      
  #btnBusca{
      
      float:left; 
      position:absolute;
      margin-left:-34px;
      margin-top:1.3px;
      width:28px;
      height:28px;
      background-image:url("OBJETOS/search4.png");
      background-repeat:no-repeat;
      background-size:35px 25px;
      background-position: -5px 0px;
      }
      
  .txtBusca{
      float:left;
      background-color:transparent;
      padding-left:5px;
      font-style:italic;
      font-size:18px;
      border:none;
      height:32px;
      width:260px;
      margin-top:2.2px;
      }
      
  .divBusca{
      background-color:white;
      border:transparent 1px;
          border:none;
      border-radius:4px;
      width:260px;
      height:30px;
      padding-bottom:6px;
      }
  
  
  </style>
  
  
  
  
  
  
  
  <b>BUSQUE ALGUM PRODUTO AQUI:</b><br/>  <br/>
  <form name="produtos" method="post" action="redirecionaSite.php">

  
  <div class="divBusca">
  
    <input type="search" name="CEP" id="CEP" class="txtBusca" placeholder="Seu CEP" />
    
  </div>
  <br/>
  <div class="divBusca">
  <input type="search" name="PESQ" id="PESQ" class="txtBusca" placeholder="Produto procurado"/>
  <button type="submit" id="btnBusca" name="pesquisar" value="Localizar" style="margin-left:-31px;" onclick="ValidaCEPProduto();"/></button><!--<img src="../../OBJETOS/search4.png" width="40" height="25" id="imgBusca" alt="Buscar"/>-->
  </div>
  <br/>
  
  
  <!--<input type="text" name="contato" value="" size="30"/><br/><br/>
  <button type="submit" name="pesquisar" value="Localizar" />Localizar</button>| --><input type="reset" value="Limpar" name="limpar"/>
  <br/><br/>
  </form>
  </div>
  </td>



*/



echo'
  <tr><td width="100%" colspan="1" height="100" valign="top" align="left" style="padding-left:20px; padding-bottom:20px;" >';


  $localizado=strtoupper($_GET['sessao']);
  $sql0 = "SELECT * FROM $localizado WHERE contatos='".strtolower($localizado)."'";
  $limite0 = @mysql_query("$sql0");
  $localizado1=explode("_",$localizado);
  //echo $localizado1[0];
  while($sql2 = @mysql_fetch_array ($limite0)){
  $arquivo0 = $sql2['imagem'];
  echo'<div style="text-align:top; border-radius:12px; background:#CCCCCC; float:left; position:relative; padding:4px 4px 4px 4px; text-transform:capitalize;"><center>'.$localizado1[0].'</center><br/>';
  echo'<a href='.$arquivo0.'>
  <img src='.$arquivo0.' width="150"  height="180" border="2" border-radius:12px; bordercolor="#FF6600"/></a></div>
  </div>';
  
  
  }
  
  
  
  ?>
  <?php
  
  
  
  $localizadomaiusc=strtoupper($localizado);
  
  $sql =  @mysql_query("SELECT * FROM _acervos WHERE usuario ='$localizadomaiusc' ORDER BY codigo DESC LIMIT 8 ; ",$conexao);
  //echo $localizadomaiusc;
  //$sql = @mysql_query('$sql');
  //$limiteNum=@mysql_num_rows($limite);
  //$i=0;
  $sqlCont=@mysql_num_rows($sql);
  
  if($sqlCont > 0){
  echo'<div style="margin-left:-14px; margin-top:80%;">';
  
  echo'<h3 style="padding-left:10px;"><b>MEUS PRODUTOS</b></h3>';

  echo'<div style="margin-left:30px;">';
  //echo'<b>MEUS PRODUTOS</b>';
  
  //or($i==0; $i<$limiteNum; $i++){}
  while($consulta = @mysql_fetch_array($sql) ) {
  $arquivo = $consulta['imagem'];
  $nomeProduto = $consulta['nomeProduto'];
  $descricaoProduto = $consulta['Descricao'];
  $url = $consulta['url'];
  $PESQ=$consulta['nomeProduto'];
  
  error_reporting(E_ALL);
  echo'<span style="float:left; position:relative; padding:23px 4px 4px 14px; font-weight:600;" ><a href='.$arquivo.'>
  <img src="'.$arquivo.'" width="120"  height="150" border="2" bordercolor="#FF6600" style="border-radius:10px;" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
  ';

  //echo $voce;
  $id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$voce."';",$conexao);
  $id1=@mysql_fetch_array($id);
  $id2=$id1["codigo"];
  $idPedido=rand(0,6000).date("dmYHis");
  
  
  
  $CEP0=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$voce."';",$conexao);
  $CEP1 = @mysql_fetch_array ($CEP0);
  $CEP=$CEP1["CEP"];

  


  /*COM HREF*/
  echo'<a href="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'">
  <button type="button" name="comprar" value="Comprar"  style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>
  </a>';
  
 /*COM FORM*/
  /*echo'<a href="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'"><button type="button" name="comprar" style="border-radius:80px; background-color:white;" />Comprar</button>
  </a>';
  echo'<input type="hidden" name="id" value="'.$id2.'"/>';
  echo'<input type="hidden" name="idPedido" value="'.$idPedido.'"/>';
  echo'<input type="hidden" name="PESQ" value="'.$PESQ.'"/>';
  echo'<input type="hidden" name="CEP" value="'.$CEP.'"/>';
  */
  echo'
  <br/>
  <input type="text" name="nomeDoProduto" readonly="true" style="background:transparent; border:none; text-transform:uppercase;"  value="'.$nomeProduto.'" />
  <br/>
  <textarea name="descricaoDoProduto" readonly="true" style="background:transparent; border:none; text-transform:capitalize;">'.$descricaoProduto.'</textarea>
  <br/>
  <a href="'.$url.'"><input type="url" name="descricaoDoProduto" readonly="true" style="background:transparent; border:none; cursor:hand;" value="'.$url.'"/></a>
  </span>';
  }
  echo'</div>';
  echo'</form>';
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';

}
else{
echo "<h4>Eu ainda não cadastrei produtos.</h4>";
}
  
  
  
  echo'</table>';



echo'<table width="98%" bgcolor='.$cor.' id="body" align="center"><tr>

<td colspan="3"> <br/>



<div id="formulario2">
<form name="elimina" method="post" action="elimina.php?login='.$login.'">
<input type="hidden" name="sessao" value="'.$sessao.'"/>
<input type="submit" name="remove" value="Eliminar contato"/>
</form>
</div>
</td></tr>
</table>';




echo'<table width="98%" style="background:'.$cor.'; border-radius:12px; " ><tr>
<td style="padding-left:20px;">
<h1>ENVIO DE MENSAGENS</h1>
Deixe sua Mensagem aqui !
<form name="coment" action="insercao.php" method="post"><br>

<textarea name="comentarios" cols="50" rows="6" scrolling="no" wrap="on"></textarea><br><br>


De <input type="hidden" name="sessao" size="30" value="';?>
<?php
echo $login;

echo'" readonly="true"/>
Para <input type="hidden" name="postar" size="30" value="';

echo strtoupper($sessao);

echo'" readonly="true"/><br/><br/><p align="left"><input type="button"  value="Voltar" onclick="history.go(-1)">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="envio" value="Enviar" />

</p>
</form>



</td></tr></table>';




$linhas=@mysql_num_rows($listar9);


if($linhas>0){

  $numeroMensagens=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='".strtoupper($sessao)."';",$conexao);
  $cont = mysql_num_rows($numeroMensagens); 
  echo'<br/><br/><table style="width:98%;  border-radius:12px; background:'.$cor.'">';
  echo'<td width="100%" colspan="2"  valign="top" align="left" cellspacing="8">';
  echo'<br/><br/><div style="float:left; position:relative; width:260px; margin-left:10px;"><a name="mensagens"><b>MINHAS MENSAGENS</a>&nbsp;&nbsp;
  </div>';
  /*<div id="contadorMaior" style="float:left; position:relative; margin-top:0px; margin-left:-40px;
  padding:6px 0px 0px 16px;">
  <font color="white" >'.$cont.' novas mensagens</font></div></b><br/><br/>';*/
  //$nome=@mysql_result($listar9,$i);
  $i=0;
  for($i==0;$i<$linhas;$i++){
  echo '<tr><id ><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
  style=" background:'.$cor.';" id="celula" height="50" align="left" ><form method="post" action="excluir.php"
  id="coluna"><font size="3" color="#0e3aa8" face="impact" style="text-transform:capitalize">
  <input type="text" name="sessao" value="'.str_replace("_"," ",$nome=@mysql_result($listar9,$i)).'" readonly="true"
  style="background:'.$cor.'; border:none; width:200px; height:40px; font-family:impact; color:#0e3aa8;
  font-size:20px;"/>
  <input type="text" name="data" value="'.@mysql_result($listar16,$i).' de '.@mysql_result($listar17,$i).' de '.@mysql_result($listar18,$i).'" readonly="true"
  style="background:'.$cor.'; border:none; width:400px; height:40px; font-family:calibri,arial; color:#0e3aa8;
  font-size:14px;"/><hr size="2%" align="right" width="88%" color="#a2c2f2"><input type="text"
  name="comentario" value="'.@mysql_result($listar10,$i).'" readonly="true"  style="background:'.$cor.';
   border:none; font-family:calibri; color:#136389; font-size:18px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="excluir" value="Excluir" style="float:right; margin-right:15px; border-radius:80px; background-color:white;"/></form>';
  echo'</font><br/><br/>';
  }
}
else{
  echo'';
}
echo'</td></tr>';
echo'</table>';
}


?>




































<?php

if ($tipo=="fornecedor"){
  
  
  ini_set("default_charset","utf-8");
  $listar0=@mysql_query("SELECT tituloPerfil FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%' ;",$conexao);
  $listar1=@mysql_query("SELECT email FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $emailSessao=@mysql_result($listar1,0,email);
  $listar2=@mysql_query("SELECT textoPerfil FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar3=@mysql_query("SELECT atividades FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar4=@mysql_query("SELECT hobby FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar5=@mysql_query("SELECT status FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar6=@mysql_query("SELECT estado FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar7=@mysql_query("SELECT cidade FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar8=@mysql_query("SELECT arquivo FROM _produtos WHERE imagem LIKE '%$sessao%';",$conexao);
  $listar9=@mysql_query("SELECT sessao FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  $listar10=@mysql_query("SELECT comentario FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  $listar11=@mysql_query("SELECT dia FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar12=@mysql_query("SELECT mes FROM _fornecedores WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
  $listar13=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar  = '$sessao' ORDER BY id DESC
  LIMIT 50;",$conexao);
  $listar14=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar  = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  
  $listar16=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC
  LIMIT 50;",$conexao);
  $listar17=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC LIMIT 50;",$conexao);
  $listar18=@mysql_query("SELECT coalesce(ano,'Nao definido') as ano FROM _mensagens WHERE postar = '$sessao' ORDER BY id DESC;",$conexao);
  
  //echo $tipo;
  //$listar21="Clovis_Jr";
  //$listar20=str_replace("_"," ",$listar0);
  
  $perfil1=@mysql_result($listar0,0,tituloPerfil);
  $perfil=@mysql_result($listar0,0,tituloPerfil);
  
  
  
  echo'<div style="width:98%; height:60px; background:black; color:#ad0a0a; border-radius:12px; padding-top:0px; padding-left:10px;"><input type="text" readonly="true"  style="background:transparent; border:none; width:800px; " name="Titulo"
  id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1);
  echo'" />';
  echo'<br/><br/>';
  ?>
  </main>
  </div><!--row-->
  
  
  
  
  <?php
  include("based.php");
  
  
  

  $voce=strtoupper($_GET['login']);
  
  $voce1=str_replace("_"," ",$voce);



  $localizado=strtoupper($_GET['sessao']);
  
  $localizado1=str_replace("_"," ",$localizado);


  echo'<br/><br/>';
  
  ini_set("default_charset","utf-8");
  
  
 
  
  //echo'<table style="background:'.$cor.'; width:98%;  margin-top:0%; z-index:-90; border-radius:12px;"><tr><td>';
  
  //echo'<form>';
  
$sessao=$_GET['sessao'];
$sessaoMaior=strtoupper($_GET['sessao']);
$login=$_GET['login'];
$tipo=$_GET['tipoParceiro'];
  
  //echo '<h1>'.$sessaoMaior.'</h1>';
  
    
  $cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM _fornecedores WHERE tituloPerfil LIKE '%$sessaoMaior%';",$conexao); 
  //$cor=@msql_query($cor)or die(@mysql_error());
  $cor=@mysql_fetch_array($cor);
  $cor=$cor["background"];
  
  
  echo'<table width="98%" style="background:'.$cor.'; border-radius:12px;" ><tr><td colspan="3" align="left">';
  echo '<input type="text" name="logon" value="'.str_replace("_"," ",$login).'" readonly="true"  STYLE="background-color:transparent; padding-left:20px; padding-top:30px;border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold; "/>, esta e a Pagina do perfil de <input type="text" name="logon" value="'.strtoupper($sessao1).'" readonly="true" size="16" STYLE="background-color:transparent; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/>';
  echo'</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Voltar" onclick="history.back();" style="margin-left:90%; margin-top:-20px;" />';
  echo'</td></tr>';


  echo'<tr><td width="15%" colspan="1" height="50" valign="bottom"><br/><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWebTextArea.png);
  background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px; ">Minhas atividades:
  &nbsp;&nbsp;<br/><textarea  readonly="true" name="Atividades" valign="bottom" cols="42" rows="6"
  id="Atividades" style="text-align:justify; margin:4px 0px 0px 7px; background-color:transparent; font-weight:600;">'
  .@mysql_result($listar3,0,atividades);
  echo'</textarea></font></div></td>';






  //echo '<form>';
  /*echo'
  
  <font color="#06438E" size="3" face="verdana" style="margin-top:0px;"><b>Quem sou eu...</b>';
  */
  echo'
  <td width="40%" rowspan="2" valign="top" 
   id="celula1"><div style="border-radius:12px; background:#B0C6D2; margin-left:-20px; width:20%;"><textarea name="texto" readonly="true"  valign="bottom"  id="Texto" wrap="on" cols="45" rows="10" style="border-radius:10px; "
  value="" >'.@mysql_result($listar2,0,textoPerfil).'</textarea></div></td></tr>';
  
  




  echo'<tr>';




  echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Telefone:&nbsp;&nbsp;
  <font size="2" color="green" face="arial" style="font-weight:600;"> ' .@mysql_result($listar13,0,telefone);
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';

  
  
  echo'<tr><td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Estado:&nbsp;&nbsp;
  <font size="2" color="green" face="arial" style="text-transform:uppercase; font-weight:600;"> '
   .@mysql_result($listar6,0,estado);
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
  echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Cidade:&nbsp;&nbsp;
  <font size="2" color="green" face="arial" style="text-transform:capitalize; font-weight:600;"> '
   .@mysql_result($listar7,0,cidade);
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
  </tr>';
  echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
  background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Anivers&aacute;rio:&nbsp;&nbsp;
  <input type="text" readonly="true" size="30" id="aniversario" valign="bottom" name="aniversario" style="background-color:transparent; font-weight:600;"
  value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
  echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
  
  
  
  echo'<tr><td width="50%" height="30"colspan="1" height="50" valign="bottom" style="padding-left:20px;">
  <br/><br/>
  <b></b><br/><br/></td>
  <td width="50%" height="30" colspan="1" height="50" valign="bottom" ></td>




  </tr>';






  

/*
echo'

  <td style="height:100%;" rowspan="5">
  <style>
  #buscaProdutos{
      background:gold;
      border-radius:12px;
      padding-left:40px;
      padding-top:200px;
      padding-bottom:200px;
      width:105%;
      height:100%;
      margin-left:-35px;
      
      
  }
  </style>
 
  <div id="buscaProdutos">
  
  
 
  <style>
  #buscaProdutos{
      background:gold;
      border-radius:12px;
      padding-left:30px;
  }
  
  .select
  {
  scrollbar-arrow-color: "#FFF";
  scrollbar-base-color: "#FFF";
  scrollbar-3dlight-color:"#FFF";
  scrollbar-highlight-color:"#FFF";
  scrollbar-face-color:"#FFF";
  scrollbar-shadow-color:"#FFF";
  scrollbar-darkshadow-color:"#FFF";
  scrollbar-track-color:"#FFF";
  overflow:hidden;
  margin-bottom:8px;
  }
  #imgBusca{
      
      float:left; 
      position:absolute;
      margin-left:-60px;
      margin-top:4px;
      }
      
  #btnBusca{
      
      float:left; 
      position:absolute;
      margin-left:-34px;
      margin-top:1.3px;
      width:28px;
      height:28px;
      background-image:url("OBJETOS/search4.png");
      background-repeat:no-repeat;
      background-size:35px 25px;
      background-position: -5px 0px;
      }
      
  .txtBusca{
      float:left;
      background-color:transparent;
      padding-left:5px;
      font-style:italic;
      font-size:18px;
      border:none;
      height:32px;
      width:260px;
      margin-top:2.2px;
      }
      
  .divBusca{
      background-color:white;
      border:transparent 1px;
          border:none;
      border-radius:4px;
      width:260px;
      height:30px;
      padding-bottom:6px;
      }
  
  
  </style>
  
  
  
  
  
  
  
  <b>BUSQUE ALGUM PRODUTO AQUI:</b><br/>  <br/>
  <form name="produtos" method="post" action="redirecionaSite.php">

  
  <div class="divBusca">
  
    <input type="search" name="CEP" id="CEP" class="txtBusca" placeholder="Seu CEP" />
    
  </div>
  <br/>
  <div class="divBusca">
  <input type="search" name="PESQ" id="PESQ" class="txtBusca" placeholder="Produto procurado"/>
  <button type="submit" id="btnBusca" name="pesquisar" value="Localizar" style="margin-left:-31px;" onclick="ValidaCEPProduto();"/></button><!--<img src="../../OBJETOS/search4.png" width="40" height="25" id="imgBusca" alt="Buscar"/>-->
  </div>
  <br/>
  
  
  <!--<input type="text" name="contato" value="" size="30"/><br/><br/>
  <button type="submit" name="pesquisar" value="Localizar" />Localizar</button>| --><input type="reset" value="Limpar" name="limpar"/>
  <br/><br/>
  </form>
  </div>
  </td>



*/



echo'
  <tr><td width="100%" colspan="1" height="100" valign="top" align="left" style="padding-left:20px; padding-bottom:20px;" >';


  $localizado=strtoupper($_GET['sessao']);
  $sql0 = "SELECT * FROM $localizado WHERE contatos='".strtolower($localizado)."'";
  $limite0 = @mysql_query("$sql0");
  $localizado1=explode("_",$localizado);
  //echo $localizado1[0];
  while($sql2 = @mysql_fetch_array ($limite0)){
  $arquivo0 = $sql2['imagem'];
  echo'<div style="text-align:top; border-radius:12px; background:#CCCCCC; float:left; position:relative; padding:4px 4px 4px 4px; text-transform:capitalize;"><center>'.$localizado1[0].'</center><br/>';
  echo'<a href='.$arquivo0.'>
  <img src='.$arquivo0.' width="150"  height="180" border="2" border-radius:12px; bordercolor="#FF6600"/></a></div>
  </div>';
  
  
  }
  
  
  
  ?>
  <?php
  
  
  
  $localizadomaiusc=strtoupper($localizado);
  
  $sql =  @mysql_query("SELECT * FROM _produtos WHERE usuario ='$localizadomaiusc' ORDER BY codigo DESC LIMIT 8 ; ",$conexao);
  //echo $localizadomaiusc;
  //$sql = @mysql_query('$sql');
  //$limiteNum=@mysql_num_rows($limite);
  //$i=0;
  
  $sqlCont=@mysql_num_rows($sql);
  
  if($sqlCont > 0){
  echo'<div style="margin-left:-14px; margin-top:80%;">';
  
  echo'<h3 style="padding-left:10px;"><b>MEUS PRODUTOS</b></h3>';


  echo'<div style="margin-left:30px;">';
  //echo'<b>MEUS PRODUTOS</b>';
  
  //or($i==0; $i<$limiteNum; $i++){}
  while($consulta = @mysql_fetch_array($sql) ) {
  $arquivo = $consulta['imagem'];
  $nomeProduto = $consulta['nomeProduto'];
  $descricaoProduto = $consulta['Descricao'];
  $url = $consulta['url'];
  $PESQ=$consulta['nomeProduto'];
  
  error_reporting(E_ALL);
  echo'<span style="float:left; position:relative; padding:23px 4px 4px 14px; font-weight:600;" ><a href='.$arquivo.'>
  <img src="'.$arquivo.'" width="120"  height="150" border="2" bordercolor="#FF6600" style="border-radius:10px;" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
  ';

  //echo $voce;
  $id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$voce."';",$conexao);
  $id1=@mysql_fetch_array($id);
  $id2=$id1["codigo"];
  $idPedido=rand(0,6000).date("dmYHis");
  
  
  
  $CEP0=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$voce."';",$conexao);
  $CEP1 = @mysql_fetch_array ($CEP0);
  $CEP=$CEP1["CEP"];

  


  /*COM HREF*/
  echo'<a href="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'">
  <button type="button" name="comprar" value="Comprar"  style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>
  </a>';
  
 /*COM FORM*/
  /*echo'<a href="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'"><button type="button" name="comprar" style="border-radius:80px; background-color:white;" />Comprar</button>
  </a>';
  echo'<input type="hidden" name="id" value="'.$id2.'"/>';
  echo'<input type="hidden" name="idPedido" value="'.$idPedido.'"/>';
  echo'<input type="hidden" name="PESQ" value="'.$PESQ.'"/>';
  echo'<input type="hidden" name="CEP" value="'.$CEP.'"/>';
  */
  echo'
  <br/>
  <input type="text" name="nomeDoProduto" readonly="true" style="background:transparent; border:none; text-transform:uppercase;"  value="'.$nomeProduto.'" />
  <br/>
  <textarea name="descricaoDoProduto" readonly="true" style="background:transparent; border:none; text-transform:capitalize;">'.$descricaoProduto.'</textarea>
  <br/>
  <a href="'.$url.'"><input type="url" name="descricaoDoProduto" readonly="true" style="background:transparent; border:none; cursor:hand;" value="'.$url.'"/></a>
  </span>';
  }
  echo'</div>';
  echo'</form>';
  echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';

}
else{
echo "<h4>Eu ainda não cadastrei produtos.</h4>";
}
  
  
  
  
  echo'</table>';



echo'<table width="98%" bgcolor='.$cor.' id="body" align="center"><tr>

<td colspan="3"> <br/>



<div id="formulario2">
<form name="elimina" method="post" action="elimina.php?login='.$login.'">
<input type="hidden" name="sessao" value="'.$sessao.'"/>
<input type="submit" name="remove" value="Eliminar contato"/>
</form>
</div>
</td></tr>
</table>';




echo'<table width="98%" style="background:'.$cor.'; border-radius:12px; " ><tr>
<td style="padding-left:20px;">
<h1>ENVIO DE MENSAGENS</h1>
Deixe sua Mensagem aqui !
<form name="coment" action="insercao.php" method="post"><br>

<textarea name="comentarios" cols="50" rows="6" scrolling="no" wrap="on"></textarea><br><br>


De <input type="hidden" name="sessao" size="30" value="';?>
<?php
echo $login;

echo'" readonly="true"/>
Para <input type="hidden" name="postar" size="30" value="';

echo strtoupper($sessao);

echo'" readonly="true"/><br/><br/><p align="left"><input type="button"  value="Voltar" onclick="history.go(-1)">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="envio" value="Enviar" />

</p>
</form>



</td></tr></table>';




$linhas=@mysql_num_rows($listar9);


if($linhas>0){

  $numeroMensagens=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='".strtoupper($sessao)."';",$conexao);
  $cont = mysql_num_rows($numeroMensagens); 
  echo'<br/><br/><table style="width:98%;  border-radius:12px; background:'.$cor.'">';
  echo'<td width="100%" colspan="2"  valign="top" align="left" cellspacing="8">';
  echo'<br/><br/><div style="float:left; position:relative; width:260px; margin-left:10px;"><a name="mensagens"><b>MINHAS MENSAGENS</a>&nbsp;&nbsp;
  </div>';
  /*<div id="contadorMaior" style="float:left; position:relative; margin-top:0px; margin-left:-40px;
  padding:6px 0px 0px 16px;">
  <font color="white" >'.$cont.' novas mensagens</font></div></b><br/><br/>';*/
  //$nome=@mysql_result($listar9,$i);
  $i=0;
  for($i==0;$i<$linhas;$i++){
  echo '<tr><id ><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
  style=" background:'.$cor.';" id="celula" height="50" align="left" ><form method="post" action="excluir.php"
  id="coluna"><font size="3" color="#0e3aa8" face="impact" style="text-transform:capitalize">
  <input type="text" name="sessao" value="'.str_replace("_"," ",$nome=@mysql_result($listar9,$i)).'" readonly="true"
  style="background:'.$cor.'; border:none; width:200px; height:40px; font-family:impact; color:#0e3aa8;
  font-size:20px;"/>
  <input type="text" name="data" value="'.@mysql_result($listar16,$i).' de '.@mysql_result($listar17,$i).' de '.@mysql_result($listar18,$i).'" readonly="true"
  style="background:'.$cor.'; border:none; width:400px; height:40px; font-family:calibri,arial; color:#0e3aa8;
  font-size:14px;"/><hr size="2%" align="right" width="88%" color="#a2c2f2"><input type="text"
  name="comentario" value="'.@mysql_result($listar10,$i).'" readonly="true"  style="background:'.$cor.';
   border:none; font-family:calibri; color:#136389; font-size:18px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="excluir" value="Excluir" style="float:right; margin-right:15px; border-radius:80px; background-color:white;"/></form>';
  echo'</font><br/><br/>';
  }
}
else{
  echo'';
}
echo'</td></tr>';
echo'</table>';
}

?>


















 <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>


</main>
</div><!--row-->

</div><!--container-->
</BODY>
</HTML>
