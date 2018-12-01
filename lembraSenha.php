echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<head>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
<link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
 <link rel='shortcut icon' href="MY_WEB-LOGO/favicon.ico" type='image/x-icon'/>
</head>

<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >
<div class="container container-fluid  ">
<div class="row">

<main class="container container-fluid col-xs-12 " > 
<div align='right'>
<script  Type='text/JavaScript' language='JavaScript' >


var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var timeValue = '' + ((hours >12) ? hours -12 :hours)
timeValue += ((minutes < 10) ? ':0' : ':') + minutes
timeValue += (hours >= 12) ? ' pm':' am'
timerRunning = true;

mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year =  myyear



if(myday == 0)
day = ' <b><tt>Domingo,</tt></b> '

else if(myday == 1)
day = ' <b><tt>Segunda,</tt></b> '

else if(myday == 2)
day = ' <b><tt>Ter&ccedil;a,</tt></b> '

else if(myday == 3)
day = ' <b><tt>Quarta,</tt></b> '

else if(myday == 4)
day = ' <b><tt>Quinta,</tt></b> '

else if(myday == 5)
day = ' <b><tt>Sexta,</tt></b> '

else if(myday == 6)
day = ' <b><tt>S&aacute;bado,</tt></b> '

if(mymonth == 0)
month = ' <b><tt>de Janeiro de</tt></b> '

else if(mymonth ==1)
month = '<b><tt> de Fevereiro de</tt></b> '

else if(mymonth ==2)
month = '<b><tt> de Mar&ccedil;o de</tt></b> '

else if(mymonth ==3)
month = '<b><tt> de Abril de</tt></b> '

else if(mymonth ==4)
month = '<b><tt> de Maio de</tt></b> '

else if(mymonth ==5)
month = '<b><tt> de Junho de</tt></b> '

else if(mymonth ==6)
month = '<b><tt> de Julho de</tt></b> '

else if(mymonth ==7)
month = '<b><tt> de Agosto de</tt></b> '

else if(mymonth ==8)
month = '<b><tt> de Setembro de </tt></b>'

else if(mymonth ==9)
month = '<b><tt> de Outubro de </tt></b>'

else if(mymonth ==10)
month = '<b><tt> de Novembro de </tt></b>'

else if(mymonth ==11)
month = '<b><tt> de Dezembro de </tt></b>'



year='<b><tt>2018</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')



</script>
</div>
<br/>



<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>
<br/>
<br/>
</main>
</div><!--row-->


<div class="row">
<main class="container container-fluid col-xs-12 " > 
<?php
include"based.php";

$login = isset($_POST['login'])?$_POST['login']:null;

  

   //$login = $_POST['c_email'];
   //Verifica se existe usuario
   $sql_busca = "SELECT * FROM _tudo WHERE email = '$login'";
   $exe_busca = @mysql_query($sql_busca) or die (mysql_error());
   $fet_busca = @mysql_fetch_assoc($exe_busca);
   $num_busca = @mysql_num_rows($exe_busca);
   //verifica se existe uma linha com o login digitado
   if ($num_busca > 0){
      $email = $fet_busca['email'];
	  $senha = $fet_busca['senha'];
	  
	  echo"<div id='lembraSenha'>Sua senha &eacute;: ".$senha;
	  echo"&nbsp;&nbsp;&nbsp;&nbsp;<button type='button' name='voltar' value='Voltar' onclick='history.go(-2)'>Voltar</button></div>";
	  
	  

   }
  else if((empty($login))){
  echo"<script> alert('Preencha o campo.');location.href='esqueceSenha.php';</script>";
  
  }
   else{
   echo"Usu&aacute;rio n&atilde;o se encontra no nosso banco de dados";
	}

?>

</main>
</div><!--row-->

</DIV><!--CONTAINER-->

</body>
</html>
