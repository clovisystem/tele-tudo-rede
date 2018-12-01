<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
 <link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
 <meta name="viewport" content="width=200, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
 <script src="jquery-1.6.2.min.js"></script> 

 </HEAD>
 <BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >

<?php

$contato=$_POST["contato"];
$produto=$_POST["produto"];


echo "<h2 style='background:black; color:gold; border-radius:8px; padding:20px;'>enviando para ".$contato."</h2>";

$contato=str_replace("(","",$contato);
$contato=str_replace(")","",$contato);
$contato=str_replace("-","",$contato);
$contato=str_replace("/","",$contato);
$contato=str_replace("+","",$contato);

echo "<form name='enviaZap' method='post' target='_blank' action='https://api.whatsapp.com/send?phone=".$contato."&text=Você tem um novo produto ".strtoupper($produto)." a venda na Rede Social do Tele-Tudo!'>";

echo "<script>setTimeout('document.enviaZap.submit();',2000);</script>";

echo "</form>";

echo "<script>setTimeout('history.go(-1);',5000);</script>";

?>

</body>
</html>