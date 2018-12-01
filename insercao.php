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
day = " <b><tt>Terccedil;a,</tt></b> "

else if(myday == 3)
day = " <b><tt>Quarta,</tt></b> "

else if(myday == 4)
day = " <b><tt>Quinta,</tt></b> "

else if(myday == 5)
day = " <b><tt>Sexta,</tt></b> "

else if(myday == 6)
day = " <b><tt>Saccute;bado,</tt></b> "

if(mymonth == 0)
month = " <b><tt>de Janeiro de</tt></b> "

else if(mymonth ==1)
month = "<b><tt> de Fevereiro de</tt></b> "

else if(mymonth ==2)
month = "<b><tt> de Marccedil;o de</tt></b> "

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
<br/>

<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>

    <br/>
    <br/>



<?php
include"based.php";
 
 $comentario=$_POST['comentarios'];
 $postar=$_POST['postar'];
 $sessao=$_POST['sessao'];
 $diaDaSemana=date('d');
 $mes=date('n');
 $ano=date('Y');
 
 switch($mes){
 case 1:$mes='Janeiro';break;
 case 2:$mes='Fevereiro';break;
 case 3:$mes='Marccedil;o';break;
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
 //$dia=$diaDaSemana.'/'.$mes.'/'.$ano;
$intro=@mysql_query("INSERT INTO _mensagens(comentario,postar,sessao,diaDaSemana,mes,ano) VALUES('$comentario','$postar','$sessao','$diaDaSemana','$mes','$ano');"
,$conexao);


/*
$para=$postar;
$nome=$sessao
$assunto='Mensagem do myWeb.';
$mensagem='Voce recebeu uma mensagem no myWeb, acesse: http://myweb.is-great.net';
$headers="Content-Type:text/html; charset=UTF-8\n";
$headers.="From:mx.byetcluster.com<clovisystem@yahoo.com>\n";//vai set mostrado que o email partiu deste email e seguido do nome
$headers.="X-Sender:<clovisystem@yahoo.com\n";//email do servidor que enviou
$headers.="X-Mailer:PHP v".phpversion()."\n";
$headers.="X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
$headers.="Return-Path:<clovisystem@yahoo.com>\n";//caso a mensagem seja respondida vai para esse email
$headers.="MIME-version:1.0\n";

mail($para,$assunto,$mensagem,$headers); //fun��o que faz o envio de email
*/

echo'<br/><br/> ';
      if($intro)
      {
      echo'<center><p id="Estado">MENSAGENS</p>';

      echo'Sua mensagem foi enviada com com sucesso! <br/><br/>';
      echo'<input type="button"  value="Voltar" onclick="history.go(-1)"/></center>'; }
      else
      {
           echo'<center><p id="Estado">MENSAGENS</p>';

          echo'A mensagem nao pode ser enviada.<br/><br/>';
          echo'<input type="button"  value="Voltar" onclick="history.go(-1)"/></center>';}



?>

    <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>
</BODY>
</HTML>
