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
<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
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
