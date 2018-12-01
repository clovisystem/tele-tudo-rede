<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<HEAD>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
 <meta name="viewport" content="width=200, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
 <script src="jquery-1.6.2.min.js"></script> 
</head>


<body style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >

<div class="container container-fluid  ">
<div class="row">

<main class="container container-fluid col-xs-12 " > 


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




<div style="background-color:#ad0a0a; width:100%; height:88px; border-radius:12px; padding-top:4px;"  >

<div class="container container-fluid col-xs-12 "  id="faixaMeio" style="margin-left:-10px;  position:absolute; float:left;  width:96%; height:120px; 
  text-align:center;   padding-top:30px; padding-left:-10px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;">
<a href="https://www.google.com.br/" target="_blank" >Google</a>
<a href="http://www.infojobs.com.br/" target="_blank" style="margin-left:20px;">Infojobs</a>
<a href="http://g1.globo.com/" target="_blank" style="margin-left:20px;">G1</a>
<a href="http://www.r7.com/" target="_blank" style="margin-left:20px;">R7</a>
<a href="https://www.youtube.com/" target="_blank" style="margin-left:20px;">YouTube</a>
</div>

</div>

</main>
</div><!--row-->

<div class="row">
<main  class="container container-fluid  col-xs-12 " >
<br/>
<br/>

<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>

    <br/>
    <br/>
</main>
</div><!--row-->


<?php
include"based.php";
ini_set("default_charset","utf-8");
$idRede=$_REQUEST['id2'];
$idPedido=$_REQUEST['idPedido'];
$url=$_REQUEST['url'];



$pesq=@mysql_query("SELECT * FROM _tudo WHERE codigo='".$idRede."';",$conexao);
$pesq=@mysql_fetch_array($pesq);
$nome=$pesq["tituloPerfil"];
$pesq1=@mysql_query("SELECT * FROM _tudo WHERE codigo='".$idRede."';",$conexao);
$pesq1=@mysql_fetch_array($pesq1);
$email=$pesq1["email"];
$pesq2=@mysql_query("SELECT * FROM _tudo WHERE codigo='".$idRede."';",$conexao);
$pesq2=@mysql_fetch_array($pesq2);
$telefone=$pesq2["telefone"];


/*echo $idRede;
echo $idPedido;
echo $nome;
echo $telefone;
echo $email;*/
;
?>


<div class="row">
<main  class="container container-fluid  col-xs-12 " >


    <span class="glow" style="display:inline; padding:0 6px; color:#ffff; text-shadow:0 0 1em red,0 0 1em red, 0 0 1.2em red; font-size:xx-large;">Solicitando informações da Rede Social</span>
        <!--<form action="http://www.tele-tudo.com/ender?id='.$idRede.'&nome='.$nome.'" method="post" name="formRede">-->
        <?php 
        echo'<form action="http://www.tele-tudo.com/ender" method="post" name="formRede">
                <input type="hidden" name="idRede" value="'.$idRede.'"/>
                <input type="hidden" name="nome" value="'.$nome.'"/>
                <input type="hidden" name="email" value="'.$email.'"/>
                <input type="hidden" name="fone" value="'.$telefone.'"/>
                <input type="hidden" name="url" value="'.$url.'"/>
                <input type="hidden" name="idPedido" value="'.$idPedido.'"/>
            </form>';
        ?>
        <script language="javascript" type="text/javascript">
            document.formRede.submit();
        </script>
        <?php
        echo  $pesq['email'];
        ?>
    </span>




</main>
</div><!--row-->

</div><!--container-->
</body>
</html>