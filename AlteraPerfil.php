<HTML>
<HEAD>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
<link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
<meta name="viewport" content="width=200, initial-scale=1">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
<script src="jquery-1.6.2.min.js"></script> 
<style>

a:visited{text-decoration:none; color:black;}
a:link{text-decoration:none; color:black;}
a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>
</HEAD>
<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >
<div class="container container-fluid  ">
<div class="row">



<main class="container container-fluid col-xs-12 " > 
<div align="">
<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
</div>
<br/>

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

<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:20px; color:#ad0a0a; padding-top:16px; padding-left:10px;">INFORME-NOS UM NOVO NOME PARA EXIBIR</p></div>



<BR/>


</main>
</div><!--row-->




<div class="row">
<main  class="container col-xs-5 " > 
<?php 

$perfil=$_GET['titulo'];
$tipo=$_GET['tipo'];


echo'<form name="form1" method="post" action="TituloPerfilAlterado.php?perfil='.$perfil.'&tipo='.$tipo.'">
Informe o novo nome do perfil<br/><br/>
<div style="float:left; position:relative; width:100px;">
Nome:</div><div style="float:left; position:relative; width:100px;"><input type="text" name="NovoPerfil" size="20" value="" style="text-transform:uppercase;"/></div>
<br/><br/>
<div style="float:left; position:relative; width:100px;">
Sobrenome:</div><div style="float:left; position:relative; width:100px;"><input type="text" name="NovoPerfilSobrenome" size="20" value="" style="text-transform:uppercase;"/></div>
<br/><br/>
<button type="submit" name="mudar" value="Mudar">Mudar</button>
</form>';



  

?>
</main>
</div><!--row-->
	  
    
</div><!--fechacontainer-->
</div><!--fecharow-->

</BODY>
</HTML>
