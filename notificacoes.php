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


<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>




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

$perfil=$_GET["perfil"];
$tipo=$_GET["tipo"];


$contatos=@mysql_query("SELECT * FROM _notificacoes WHERE perfil='".strtolower($perfil)."';",$conexao);

$contatosLinhas=@mysql_num_rows($contatos);

$meuTipo=@mysql_fetch_array($contatos);
$meuTipo1=$meuTipo["tipo"];

//$contato=@mysql_query("SELECT contato FROM _notificacoes WHERE perfil='".strtolower($perfil)."';",$conexao);


 //faz com que o seu perfil n�o apare�a na p�gina
$j=0;

for($j==0;$j<$contatosLinhas;$j++){
 
    $contact=@mysql_result($contatos,$j,contato);
    $contact=str_replace("_"," ",$contact);
    //if($contact=$perfil1){echo "";}
    //$tipoParceiro=@mysql_query("SELECT * FROM ".$exibeContato.";",$conexao);
    $tipoParceiro=@mysql_query("SELECT * FROM _notificacoes WHERE perfil='".strtolower($perfil)."';",$conexao);
    $tipoParceiro1=@mysql_fetch_array($tipoParceiro);
    $tipoParceiro2=$tipoParceiro1["tipoPerfil"];
  
    echo '<div class="botao" >
    <a href="adicionaUsuario.php?contatos='.@mysql_result($contatos,$j,contato).'&login='.$perfil.'&meuTipo='.$meuTipo1.'&tipoParceiro='.$tipoParceiro2.'">';
    $meusContatos=@mysql_result($contatos,$j,contatos);

    echo'<div class="imagemContato" style="padding-left:0px; width:110px;"><img src="'.@mysql_result($contatos,$j,imagem).'" width="120"  height="120" style="border-radius:10px;"/></div>';
    //src="arquivos/97b77915013e0a68dea8c323be0983d4.jpg"
    echo'<div class="texto" style="width:116px; background:#ad0a0a; border-radius:10px; padding:5px;">'.strtoupper($contact);
    echo'</a></div>';
    echo'<form name="form1" action="ignorarParceiro.php?parceiro=excluido" method="post">
    <button type="submit" name="excluir" id="excluir" class="texto" style="width:116px; background:black; border-radius:10px; padding:5px;" value="Nao incluir">Nao incluir';
    echo'<input type="hidden" name="contato" value="'.$contact.'"/>';
    echo'</button>
    </form>';

    echo'</div>
    ';
 //}
    echo'&nbsp;&nbsp;';
    echo'<input type="hidden" name="perfil" value="'; 
    //echo'<input type="hidden" name="email" value="'.$login.'"/>';


    echo'</div>';
  
    

  
 }
 
 echo"<br/><br/>";
 echo"<button style='width:98%; height:60px; background:gold; border-radius:12px;' onclick='<script>history.go(-1);</script>'>
 <center>Voltar</center></button>";
 ?>


 </main>
 </div><!--row-->
 </div><!--container-->

 </body>
 </html>