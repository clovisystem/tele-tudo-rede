<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
ini_set( 'default_charset', 'utf-8');
//$login=$_POST["c_email"];
//$senha=$_POST["c_senha"];
//echo'<meta http-equiv="refresh" content="1"; url="ListarPerfil.php?login=$login&senha=$senha">';
?>

<HEAD>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>

 <?php
 echo' <link rel="shortcut icon" href="../../TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
  <script language="javascript" src="..\..\jquery-1.6.2.min.js"></script>
  <script language="javascript" src="..\..\Jquery_Cycle\cycle.all.js"></script>


  
  <link rel="stylesheet" href="../../bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
  <script src="../../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
';
?>



<script language="javascript">
$(document).ready(function(){
$("#slides ul").cycle({
fx:'scrollHorz',
speed:1000
});
});
</script> 
  


<style type="text/css">

textarea
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



</style>

<style>
#Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma;  margin-bottom:60px;}
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
 .contatosNot{float:left; position:absolute; width:98%;  margin-top:0px; margin-left:0px;
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
</style>


</HEAD>
<?php 



include ("../../based.php");

?>
<BODY style="background-image:url('../../BACKGROUNDS/Compras.jpg');  PADDING-LEFT:5%; background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >


<!--<div class="container">-->


<?php
include("../../based.php");

$login=$_POST['c_email']."@".$_POST['dominio'];
$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;

$nome=@mysql_query("SELECT * FROM _tudo WHERE email='$login';",$conexao);
$nome=@mysql_fetch_array($nome);
$nome=$nome["tituloPerfil"];

$tipo=@mysql_query("SELECT * FROM _tudo WHERE email='$login';",$conexao);
$tipo=@mysql_fetch_array($tipo);
$tipo=$tipo["tipo"];




ini_set("Default_Charset","iso-8859-1");

$iphone=strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad=strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android=strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre=strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
$berry=strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod=strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian=strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

if($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian):
    ini_set("Default_Charset","utf-8");
    echo'<form name="mobile" method="post" action="mobilePerfil.php?nome='.$nome.'&tipo='.$tipo.'">
    <input type="hidden" name="email" value="'.$login.'"/>
    <input type="hidden" name="senha" value="'.$password.'"/>
    <button type="submit" name="mobile" value="Versao Mobile" style="width:1150px; height:40px;">Acessar Vers&atilde;o Mobile</button>
    </form>';
else:
    ini_set("Default_Charset","utf-8");
    echo'<form name="mobile" method="post" action="mobilePerfil.php?nome='.$nome.'&tipo='.$tipo.'">
    <input type="hidden" name="email" value="'.$login.'"/>
    <input type="hidden" name="senha" value="'.$password.'"/>
    <button type="submit" name="mobile" value="Versao Mobile" style="width:1150px; height:20px;">Voc&ecirc; est&aacute; usando o computador</button>
    </form>';
endif;




?>

<div align="">


<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold; margin-right:100px;">


<?php
    include ("../../date.php");
?>


</div>

</div>
<br/>


<?php




include ("../../based.php");

session_start();


$login=$_POST['c_email']."@".$_POST['dominio'];
$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;





//$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;

//$password=@mysql_query("SELECT senha FROM users WHERE email=".$login.";",$conexao);
//$password=@mysql_fetch_array($password);
$sql_logar = "SELECT * FROM _tudo WHERE _tudo.email = '$login' && _tudo.senha= '".base64_encode($password)."' ";
//$sql_logar = "SELECT * FROM _users,_fornecedores WHERE _users.email = '$login' && _users.senha= '$password' OR _fornecedores.email = '$login' && _fornecedores.senha = '$password' ";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$fet_logar = mysql_fetch_assoc($exe_logar);
$num_logar = mysql_num_rows($exe_logar);

if ($num_logar == 0){
   echo "<body bgcolor='#ad0a0a;' id='corpo'>";
   echo "<p id='Estado' align='center'><h1>Login ou senha invalido.</h1></p><br/><br/>";
   echo "<br/><center><a href='javascript:window.history.go(-2)'><h2>Clique aqui para voltar.</h2></a><center>";
   echo $login."</body>";
   //echo $password."</body>";
   if(!filter_var($login,FILTER_VALIDATE_EMAIL)){
        echo '<body bgcolor="#ad0a0a;" id="corpo">';
        echo'<p id="Estado">Digite um E-mail v&aacute;lido.</p><br/><br/>';
        echo'</body>';}
}
else{
    //@session_start();
	//@ob_start();
    $_SESSION['c_email']=$login;
    $_SESSION['c_senha']=$password;

    if($_SESSION['c_email']==null){
        echo "<script>history.go(-2);</script>";
    }

	$_POST['c_email']=$login;
    $_POST['c_senha']=$password;
	//$login=$_GET['c_email']."@".$_GET['dominio'];
    //$password=@mysql_query("SELECT * FROM users WHERE email=".$login.";",$conexao);
	//$password=@mysql_fetch_array($password);
    
    echo '<p style="color:white; font-weight:400;">'.$login.' logado(a) com sucesso!</p><br/>';
    echo'<form method="post" action="../../index.php">
        <input type="submit" name="sair" value="Fazer logoff"/>';
    echo'</form>';



  

    $localizaContato=$perfil;
















    include ("../../classes/teletudo.php");

    $tele_tudo=new teletudo();
    $tele_tudo->perfil=$perfil;
    //$tele_tudo->conexao=$conexao;
    //echo $tele_tudo->exibe($perfil);

    

    
    $perfil=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
    $perfil=@mysql_fetch_array($perfil);
    $perfil=$perfil["tituloPerfil"];
	$numeroMensagens0=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='$perfil' AND lida='nao';",$conexao);
    $cont0 = mysql_num_rows($numeroMensagens0);

    //$mensagens=$perfil["lida"];






    

    
$perfilNotifica=strtolower(str_replace(' ','_',$perfil));
//$sql = @mysql_query("SELECT _vitrine.* FROM _vitrine JOIN ".strtolower($perfil)." ON _vitrine.vendedor = ".strtolower($perfil).".contatos WHERE vendedor <> '$perfil' ORDER BY codigo DESC ;",$conexao);
     
     $exibe_comentario=mysqli_query($iconexao,"SELECT * FROM _comentarios JOIN ".$perfilNotifica." ON _comentarios.nome=".$perfilNotifica.".contatos WHERE _comentarios.notificacao='1' AND ".$perfilNotifica.".contatos <> '".$perfilNotifica."' "); //
     $exibe_comentario_linhas=mysqli_num_rows($exibe_comentario);
     $exibe_comentario=mysqli_fetch_assoc($exibe_comentario);


     $redirecionaNotific=@mysqli_query($iconexao,"SELECT * FROM _tudo WHERE email ='$_POST[c_email]';");
     $redirecionaNotific=@mysqli_fetch_array($redirecionaNotific);  
     $redirecionaNotific=$redirecionaNotific["tipo"];
    
     if($exibe_comentario_linhas > 0){
         echo'<div class="alert alert-danger" style="width:1130px;">Voc&ecirc; recebeu novos coment&aacute;rios sobre seu produto!</div>';
         echo"<br>";
         echo"<form name='notificaçoes' method='post' action='../../comentarios_produtos.php'/>";
         echo"<input type='hidden' name='nome' value='".$perfilNotifica."'/>";
         echo"<input type='hidden' name='tipoParceiro' value='".$redirecionaNotific."'/>";
         echo"<button type='submit' name='Ver' class='btn btn-primary'>Ver Comentários</button>";
         echo"</form>";
     }
     


 

	
?>


<style>
#Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma;  margin-bottom:60px;}
body a:link{text-decoration:none;}
 #celula{padding:10px;}
 #celula1{padding:16px; margin-left:0px;}
 #Proper{text-transform:capitalize;}
  #proper{text-transform:capitalize;}
 #corpo{padding:30px; font-family:tahoma;}
 #Titulo{font-size:40px; background-color:#B5C0C3; color:green; font-weight:900; border:none; font-family:arial; text-transform:uppercase;}
 #E-mail{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:lowercase;}
 #Atividades{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #Telefone{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:lowercase;}

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
 .contatos{float:left; position:relative; width:520px;  margin-top:34px; margin-left:20px;
 padding-bottom:20px; padding-top:-10px; padding-left:16px; background-color:gold; border-radius:12px;}
 .contatosNot{float:left; position:absolute; width:98%;  height:80px;margin-top:-20px; margin-left:0px;
 padding-bottom:0px; padding-top:0px; padding-left:16px; background-color:gold; border-radius:12px;}
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

 

 
 #notificacao{background:#e6056a; width:20px; height:20px; float:left; position:relative; margin-left:3px; margin-right:0px; overflow:hidden; }
 #botaoMensagens{ background:transparent; border:none; text-transform:uppercase; }
 .link{margin-left:14%; width:15%; height:40px; float:left; position:relative;  }
 #link1{margin-left:10%; width:15%; height:40px; float:left; position:relative; }
 #link2{margin-left:10%; width:15%; height:40px; float:left; position:relative; margin-top:-18px;}
 #contador{background-image:url("././BACKGROUNDS/contador.png");background-repeat:no-repeat; width:260px; height:30px; }
 #contadorMaior{background-image:url("././BACKGROUNDS/contadorMaior1.png");background-repeat:no-repeat; width:260px; height:40px; }
 /*#contatos1{float:left; position:relative; width:220px;}*/
 #slides{overflow:hidden; width:580px; height:360px; margin-right:14px; margin-left:14px; border-radius:12px;}
fieldset{border-radius:10px;}

/*table{display:block; width:auto; overflow-x: auto; white-space: nowrap; }*/

</style>

<style>
 a:visited{text-decoration:none; color:black;}
 a:link{text-decoration:none; color:black;}
 a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>




<br/>



<header style="width:1000px;" >
<!--<tr>-->
<?php
    /*$numeroMensagens=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='".$perfil."';",$conexao);
    $cont = mysql_num_rows($numeroMensagens);*/
        
    $perfil=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
    $perfil=@mysql_fetch_array($perfil);
    $perfil=$perfil["tituloPerfil"];
?>

<div id="faixa" style="background-color:#ad0a0a; border-radius:16px; width:1150px; padding-top:50px;" >
<?php if($cont0<1){echo'<div class="link"><a href="#mensagens">Minhas mensagens</a></div><div id="notificacao">0</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';}else{ ?>
<?php echo'<div class="link" ><a href="#mensagens"><button name="botaoMensagens" id="botaoMensagens"  value="Minhas mensagens" >Minhas mensagens</button></a></div><div id="notificacao">'.$cont0.'</div>';}?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo'<div id="link1"><a href="#fotos">Meus Produtos</a></div><div id=""></div>'; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo'<div id="link2"><a href="#contatos">Meus parceiros</a></div><div id=""></div>'; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<form method="post" name="enviaSolicitacao" action="">
<input type="hidden" value="<?php echo strtoupper($perfil); ?>" name="perfil" id="perfilEnviaHidden"/>
</form>
tjyjyj

<br/><br/>



</div>
<!--</tr>-->
</header>

<br/><br/>


<script>
$(document).ready(function(){
    
    $("#botaoMensagens").click(function(){
        var perfil=$("#perfilEnviaHidden").val();
            if(perfil != ""){
        //var dados={nome:perfil};
                alert(toString(nome));
                $.post('../../procedures/atualizaLidas.php',{nome:perfil});
                
               
            }
     
        });
});
</script>
</script>


<div style="background-color:white; border-radius:12px; width:1150px; height:60px;"><p align="left"><img src="../../TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>

<br/><br/>



<!--</main>
</div><!--row













<div class="row">
<main class="container container-fluid col-xs-12 " > -->
<?php



$redireciona=@mysql_query("SELECT * FROM _users WHERE _users.email ='$_POST[c_email]';",$conexao);
$redireciona=@mysql_fetch_array($redireciona);  
$redireciona=$redireciona["tipo"];

if($redireciona=="usuario"){
$listar0=@mysql_query("SELECT tituloPerfil FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$perfil=@mysql_result($listar0,0,tituloPerfil);
$listar1=@mysql_query("SELECT email FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar4=@mysql_query("SELECT telefone FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar5=@mysql_query("SELECT status FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar9=@mysql_query("SELECT postar FROM _mensagens WHERE postar = '$perfil' ORDER BY id DESC LIMIT 10;",$conexao);
$listar10=@mysql_query("SELECT comentario FROM _mensagens WHERE postar = '$perfil' ORDER BY id DESC LIMIT 10;",$conexao);
$listar18=@mysql_query("SELECT sessao FROM _mensagens WHERE postar = '$perfil' ORDER BY id DESC LIMIT 10;",$conexao);

$listar11=@mysql_query("SELECT dia FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar13=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar  = '$perfil' ORDER BY id DESC
 LIMIT 50;",$conexao);
$listar14=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar  = '$perfil' ORDER BY id DESC LIMIT 50;",$conexao);
$listar15=@mysql_query("SELECT coalesce(ano,'Nao definido') as ano FROM _mensagens WHERE postar  = '$perfil' ORDER BY id DESC;",$conexao);
$listar16=@mysql_query("SELECT tipo FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar17=@mysql_query("SELECT hobby FROM _users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);



?>







<?php



$perfil1=@mysql_result($listar0,0,tituloPerfil);
$perfil=@mysql_result($listar0,0,tituloPerfil);
?>









<?php
$tipo=$_GET["tipo"];
echo'<div style="width:1150px; height:60px; background:black; color:#ad0a0a; border-radius:12px; padding-top:0px; padding-left:10px;">
<input type="text" readonly="true"  style="background:transparent; border:none; width:86%; font-size:180%; overflow:auto;" name="Titulo"
id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1); 
echo'" /><a href="../../AlteraPerfil.php?titulo='.strtolower($perfil).'&tipo='.$tipo.'"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar nome do perfil" style="border-radius:80px; background-color:white;"/></a></div>';

echo'<br/><br/>';
?>


<?php
include("../../based.php");
$cor=@mysql_query("SELECT coalesce(background,'#ad0a0a') as background FROM _users WHERE  email LIKE '%$login%';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];

?>



<?php

$perfilNot=strtolower(str_replace(" ","_",$perfil));


$notificacoes=@mysql_query("SELECT * FROM _notificacoes WHERE perfil ='".$perfilNot."';",$conexao);
//$exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
$linhasContato=@mysql_num_rows($notificacoes);
//echo $linhasContato;
$LinhasContato1=@mysql_fetch_array($notificacoes);
$LinhasContato2=$LinhasContato1["contato"];



if($linhasContato>0){

echo'<div style="float:left; position:relative; width:100%;  margin-top:0px; margin-left:0px;
padding-bottom:20px; padding-top:-10px; padding-left:16px; background-color:gold; border-radius:12px;"><b>QUERO SER SEU PARCEIRO 
<br/>';
if($linhasContato==1){
   echo'<a href="../../notificacoes.php?perfil='.$perfil.'&tipo='.$tipo.'"><font color="white" >'.$linhasContato.' notificação de parceria</font></a></b>'
   ;
}
else{
   echo'<a href="../../notificacoes.php?perfil='.$perfil.'&tipo='.$tipo.'"><font color="white" >'.$linhasContato.' notificações de parcerias</font></a></b>'
   ;
/*}*/

}
echo'</div>';
}
?>






<?php

echo'<table id="tabelaUser" style="background:'.$cor.'; width:1000px;  margin-top:0%; z-index:-90; border-radius:12px;" ><tr><td>';
//$cor="blue";
//echo $cor;
#B5C0C3
echo'<form>';

?>

<div>


<?php
$tipo=$_GET["tipo"];
echo'</td><td style="color:transparent;"></td></tr>
<td   align="left" valign="bottom"style="padding-left:20px; padding-top:30px;"><font color="#06438E" size="3" face="verdana">
<b>Minhas informa&ccedil;&otilde;es</b>&nbsp;<a href="../../alteraInformacoes.php?meuPerfil='.$perfil.'&tipo='.$tipo.'">
<input type="button"
name="alteraInformacoes" id="alteraTexto" value="Alterar Informacoes" style="border-radius:80px; background-color:white;"/></a></td>
<td width="50%"  colspan="3" align="left" valign="bottom"><font color="#06438E" size="3" face="verdana">
<b>Quem sou eu...</b></td></tr>';
echo'<tr><td  colspan="1" height="50" rowspan="1" valign="bottom" >
<div id="campo" style="background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">

E-mail:&nbsp;&nbsp;
<input type="text" readonly="true" name="E-mail" size="30" valign="bottom" style="background-color:transparent; font-weight:600;" id="E-mail" value="'
.@mysql_result($listar1,0,email);

echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td  rowspan="3" valign="top" style="border-radius:10px;"
 id="celula1"><div style="background:#B0C6D2; border-radius:12px;">
<textarea name="texto" readonly="true"  valign="bottom"  id="Texto" wrap="on" cols="45" rows="10" style="border-radius:10px;"
value="" >'.@mysql_result($listar2,0,textoPerfil).'</textarea>';
echo '<br/><br/></div></td>
</tr>';

echo'<tr><td colspan="1" height="50" rowspan="1" valign="bottom" >
<div id="campo" style="background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Telefone:&nbsp;&nbsp;
<input type="text" readonly="true" name="Telefone" size="30" valign="bottom" style="background-color:transparent; font-weight:600;" id="Telefone" value="'
.@mysql_result($listar4,0,telefone);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';



echo'"/></div></td></tr>';
echo'<tr><td colspan="1" height="80" valign="bottom"><div id="campo1" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="atividades" valign="bottom" cols="44" rows="6" style="background-color:transparent; font-weight:600;"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 0px;" scrolling="yes">' .@mysql_result($listar3,0,atividades);
echo'</textarea></font></div></td></tr>';

/*echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo3" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Status:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" name="status" valign="bottom" style="background-color:transparent; font-weight:600;" id="status"
value="' .@mysql_result($listar5,0,status);*/
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td  colspan="1" height="50" valign="bottom"><div id="campo4" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Estado:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="estado1" name="estado" valign="bottom"
value="' .@mysql_result($listar6,0,estado);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td  rowspan="3">
<div id="slides">
<ul>
<li><a href="http://g1.globo.com/" target="_blank"><img src="../../slides/globo1.jpg" alt="G1" width="600" height="200"/></li>
<li><a href="http://www.r7.com/" target="_blank"><img src="../../slides/R7.png" alt="R7" width="600" height="200"/></li>
<li><a href="https://www.youtube.com/" target="_blank"><img src="../../slides/YouTube.jpg" alt="Google" width="600" height="200"/></li>
</ul>
</div>
</td>
</tr>';
echo'<tr><td  colspan="1" height="50" valign="bottom"><div id="campo5" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Cidade:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="cidade" name="cidade" valign="bottom"
value="' .@mysql_result($listar7,0,cidade);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td  colspan="1" height="50" valign="bottom"><div id="campo6" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="aniversario" valign="bottom" name="aniversario"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><br/><br/></td></tr>';

echo'<tr><td  colspan="1" height="80" valign="bottom"><div id="campo17" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Do que gosto de comprar:
&nbsp;&nbsp;<br/><textarea  readonly="true"  name="hobbies" valign="bottom" cols="33" rows="5" 
id="hobbies" style="text-align:justify; margin:4px 0px 0px 0px; border:transparent; background-color:transparent; font-weight:600;" scrolling="yes">' .@mysql_result($listar17,0,hobby);
echo'</textarea></font></div></td></tr>';

echo'<tr><td height="30"colspan="1" height="50" valign="bottom"></td>
<td width="50%" height="30" colspan="1" height="50" valign="bottom"></td></tr>';

?>




<?php
echo'<tr><td></td></tr>';
echo'<tr><td>';
$tipo=$_GET["tipo"];
echo'<tr><td width="90%" colspan="2" align="left" bgcolor="'.$cor.'">
<p>
<div style="margin-left:11%;"><b>LOCALIZAR PARCEIROS</b></div><br/>
<form name="form1" action="" method="post">
<input type="hidden" name="logar" value="'.$login.'"/>
</form>
<a href="../../localizaContatos.php?login='.$perfil.'&tipo='.$tipo.'"><button type="button" name="localizar" style="border-radius:80px; background-color:white; margin-left:36px;">
LOCALIZAR SEUS PARCEIROS</button></a>|<a href="../../localizaContatos.php?login='.$perfil.'&tipo='.$tipo.'">
<button type="button" name="Mensagem" style="border-radius:80px; background-color:white; margin-left:52px;">COMPRAR</button></a>';


?>
</p>

<!--USAR FUTURAMENTE-->
<input type="hidden" id="perfil" value="<?php echo $perfil; ?>"/>
<input type="hidden" id="tipo" value="<?php echo $tipo; ?>"/>
<!--<input type="hidden" id="tema" value="blue"/>-->
<div style="font-size:18px; font-family:tahoma; font-weight:600; margin-left:850px; padding-bottom:10px; margin-top:-70px;position:absolute; width:40%; float:left;">Escolha um tema:</div><br/>


<script language="javascript">
    /*function CarregarTema(){
       
        var tema="";
    
    
        var cor=$('#tema1').val();
		//var cor=document.getElementsByClassName('tema1').value;

        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&cor="+cor;
        window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&cor="+cor;
        
        $.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
        
    }*/
$(document).ready(function(){
	$('#tema1').click(function(){
		var cor=document.getElementById('input1').value="0eb8d7";
        var tema=$('#input1').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
        
        })
    })
	
	$('#tema2').click(function(){
		var cor=document.getElementById('input2').value="yellow";
        var tema=$('#input2').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema3').click(function(){
		var cor=document.getElementById('input3').value="red";
        var tema=$('#input3').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema4').click(function(){
		var cor=document.getElementById('input4').value="purple";
        var tema=$('#input4').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema5').click(function(){
		var cor=document.getElementById('input5').value="white";
        var tema=$('#input5').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
               
            }
            
        })
    })
	
	$('#tema6').click(function(){
		var cor=document.getElementById('input6').value="gray";
        var tema=$('#input6').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema7').click(function(){
		var cor=document.getElementById('input7').value="black";
        var tema=$('#input7').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema8').click(function(){
		var cor=document.getElementById('input8').value="ad0a0a";
        var tema=$('#input8').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema9').click(function(){
		var cor=document.getElementById('input9').value="045506";
        var tema=$('#input9').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema10').click(function(){
		var cor=document.getElementById('input10').value="B5C0C3";
        var tema=$('#input10').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
});
</script>

<!--<form name="alteraTemaForm" action="../../IncluiTema.php" method="post" style="margin-top:16px; margin-top:-50px">-->
<!--<div onclick="CarregarTema()" >-->
<div style="position:absolute; float:left; margin-left:830px;"><button type="button"  id="tema1"  value="#0eb8d7"  onClick='parent.location="javascript:location.reload()"' style="background-color:#0eb8d7; width:60px; height:20px; border-radius:8px;">
</button>
<input type="hidden" value="" id="input1"/>
</div>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button"  id="tema2" value="yellow" onClick='parent.location="javascript:location.reload()"' style="background-color:yellow; 
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input2"/>
</div>

<div style="position:absolute; float:left; margin-left:970px;"><button type="button" id="tema3" value="red" onClick='parent.location="javascript:location.reload()"' style="background-color:red;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input3"/>
</div><br/><br/>

<div style="position:absolute; float:left; margin-left:830px;"><button type="button"  id="tema4" value="purple" onClick='parent.location="javascript:location.reload()"' style="background-color:purple;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input4"/>
</div>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button"  id="tema5" value="white" onClick='parent.location="javascript:location.reload()"' style="background-color:white;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input5"/>
</div>

<div style="position:absolute; float:left; margin-left:970px;"><button type="button" id="tema6" value="gray" onClick='parent.location="javascript:location.reload()"' style="background-color:gray;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input6"/>
</div><br/><br/>

<div style="position:absolute; float:left; margin-left:830px;"><button type="button"  id="tema7" value="black" onClick='parent.location="javascript:location.reload()"' style="background-color:black;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input7"/>
</div>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button"  id="tema8" value="#ad0a0a" onClick='parent.location="javascript:location.reload()"' style="background-color:#ad0a0a;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input8"/>
</div>

<div style="position:absolute; float:left; margin-left:970px;"><button type="button" id="tema9" value="#045506" onClick='parent.location="javascript:location.reload()"' style="background-color:#045506; width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input9"/>
</div><br/><br/>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button" id="tema10" value="#B5C0C3" onClick='parent.location="javascript:location.reload()"' style="background-color:#B5C0C3;
width:60px; height:20px; border-radius:8px;" ></button>
<input type="hidden" value="" id="input10"/>
</div><br/>

<!--</div>-->
<br/>

<?php
/*
$login=isset($_POST['c_email'])?$_POST['c_email']:null;
//echo $login;
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
$tipo=@mysql_query("SELECT * FROM _users WHERE tituloPerfil='".strtoupper($perfil)."';",$conexao);
$tipo1=@mysql_fetch_array($tipo);
$tipo2=$tipo1["tipo"];
//echo $tipo2;
echo'<input type="hidden" name="emailPerfil" value="'.$login.'"/>';
echo'<input type="hidden" name="tipo" value="'.$tipo2.'"/>
</form>';
*/
?>

<div style="position:absolute; float:left; margin-left:840px; margin-top:-10px; padding-bottom:20px;">
<button type="button" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:180px; height:22px; border-radius:8px; " onClick='parent.location="javascript:location.reload()"'>Atualizar pagina</button>
</div><br/>


</td></tr>  <tr><td>


<?php
//$login=$_SESSION['c_email'];
$login=$_POST['c_email']."@".$_POST['dominio'];


 $exibeContato=@mysql_query("SELECT * FROM ".strtolower($perfil).";",$conexao);
 $exibeFoto=@mysql_query("SELECT imagem FROM ".$perfil.";",$conexao);
 $fetchImagem=@mysql_fetch_array($exibeFoto);
 
 $linhasContato=@mysql_num_rows($exibeContato);

 $limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 10;",$conexao);
 
 $limiteContato=@mysql_num_rows($limiteContato);

 $exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
 $linhasContatoMenos=@mysql_num_rows($exibeContatoMenos);
 $LinhasContato1=@mysql_fetch_array($exibeContato);
 $LinhasContato2=$LinhasContato1["contatos"];

 $tipoParceiro=@mysql_query("SELECT * FROM ".strtolower($perfil).";",$conexao);
 $tipoParceiro1=@mysql_fetch_array($tipoParceiro);
 $tipoParceiro2=$tipoParceiro1["tipo"];
 
 if($linhasContato>1){

echo'<div class="contatos"><br/><a name="contatos"><b>MEUS PARCEIROS</a></div><div id="contador" style="float:left; position:relative; margin-top:-45px; margin-left:160px;
padding:6px 0px 0px 16px;">';
if($linhasContatoMenos==1){
    echo'<font color="white" >'.$linhasContatoMenos.' parceiro</font></div></b>
    <form name="form2" action="" method="get">
    <div style="width:100%; ">';
}
else{
    echo'<font color="white" >'.$linhasContatoMenos.' parceiros</font></div></b>
    <form name="form2" action="" method="get">
    <div style="width:100%; ">';
}



 //$colunas=4;

 //$i=0;
 $j=1; //faz com que o seu perfil n�o apare�a na p�gina


 for($j==1;$j<$limiteContato;$j++){
 
$contact=@mysql_result($exibeContato,$j,contatos);
$contact=str_replace("_"," ",$contact);
//if($contact=$perfil1){echo "";}
//$tipoParceiro=@mysql_query("SELECT * FROM ".$exibeContato.";",$conexao);


 echo '<div class="botao"><a href="../../linkContatos.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'&tipoParceiro='.@mysql_result($exibeContato,$j,tipo).'">';
 $meusContatos=@mysql_result($exibeContato,$j,contatos);

 echo'<a href="../../linkContatos.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'&tipoParceiro='.@mysql_result($exibeContato,$j,tipo).'"><div class="imagemContato"><img src="../../'.@mysql_result($exibeContato,$j,imagem).'" width="60"  height="80" style="border-radius:10px;"/></div></a>';
 //src="arquivos/97b77915013e0a68dea8c323be0983d4.jpg"
 echo'<div class="texto">'.strtoupper($contact);
 echo'</a></div></div>';

 echo'</div>
 ';
 //}
 echo'&nbsp;&nbsp;';
 echo'<input type="hidden" name="perfil" value="'; 
 echo'<input type="hidden" name="email" value="'.$login=$_POST['c_email'].'"/>';


  echo'</div>';
  
  
  
  
  
  
  
 }
 
 //}//fecha i
 
//}

//$meusContatos=@mysql_query("SELECT contatos FROM clovis jr;",$conexao);
echo'<div style="float:left; position:absolute; margin-top:-96px;">';
  $anivDia=@mysql_query("SELECT dia FROM _tudo WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $anivMes=@mysql_query("SELECT mes FROM _tudo WHERE tituloPerfil =".$meusContatos.";",$conexao);
  //$anivAno=@mysql_query("SELECT ano FROM users WHERE tituloPerfil =".$perfil.";",$conexao);
  $anivContato=@mysql_query("SELECT tituloPerfil FROM _users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $perfil=str_replace(" ","_",$perfil);
  $anivContato=@mysql_query("Select contatos  From ".strtolower($perfil)." Where dia = ".date('d')." And mes = ".date('n').";",$conexao);
  $linhasAnivContato=@mysql_num_rows($anivContato);
  $fetchAniversario=@mysql_fetch_array($anivContato);
  $fetchAniversario=$fetchAniversario['contatos'];
  //$anoAtual=date(Y);
  $diaAtual=date("d");
  $mesAtual=date("n");
  $dataAtual=$diaAtual."/".$mesAtual; //echo $dataAtual;
  $anivPerfil=$anivDia."/".$anivMes;
  //$meusContatos=@mysql_query("SELECT tituloPerfil,".$perfil." FROM users WHERE tituloPerfil.dia=".$diaAtual." AND tituloPerfil.mes=".$mesAtual." AND ".$perfil.".contatos;",$conexao);
  if($linhasAnivContato > 0){
  echo"<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<font color='green'><b>Hoje e aniversario de ".str_replace("_"," ",$fetchAniversario);
  }
echo'</b></font></div>';






$limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 10;",$conexao);

$TotalContato=@mysql_num_rows($exibeContato);

$email=$_POST['c_email'];

if($TotalContato > 10){
    echo'<div style="margin-left:20%; margin-top:22%;"><a href="../../parceiros.php?login='.$perfil.'&id='.$email.'"><button type="button" name="mais" value="Mais Amigos">Veja mais parceiros seus aqui...</button></a></div>';
    echo'<input type="hidden" name="perfil" value="perfil"/>';

}

echo'</div></form>';
echo'</div>';
}
else{
echo'';
}
//echo'<div style="float:left; position:absolute; margin-left:41%; margin-top:1%;"><iframe name="quadro" width=180% height=300%
//scrolling="auto" src="http://g1.globo.com/"></iframe></div>';

/*echo'</td><td style="padding-left:204px; margin-top:35px; height:200px; position:absolute; float:left; width:396px; background-color:#B0C6D2;">

<div style="font-size:18px; font-family:tahoma; font-weight:600; margin-left:20px; padding-top:10px;">Escolha um tema:</div><br/>';

echo'

<form name="alteraTemaForm" action="../../IncluiTema.php" method="post">
<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="#0eb8d7" style="background-color:#0eb8d7;
width:60px; height:20px; border-radius:8px;"></button>
</div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="yellow" style="background-color:yellow;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="red" style="background-color:red;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="purple" style="background-color:purple;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="white" style="background-color:white;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="gray" style="background-color:gray;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="black" style="background-color:black;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="gold" style="background-color:gold;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="#045506" style="background-color:#045506;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>';

echo'<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:60px; height:20px; border-radius:8px;" ></button></div><br/>


<br/>';*/


?>



<?php
/*
$login=isset($_POST['c_email'])?$_POST['c_email']:null;
//echo $login;
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
echo'<input type="hidden" name="emailPerfil" value="'.$login.'"/>

</form>';*/

?>

<!--<div style="position:absolute; float:left; margin-left:15px; margin-top:40px; padding-bottom:20px;">
<button type="button" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:180px; height:20px; border-radius:8px; " onClick='parent.location="javascript:location.reload()"'>Atualizar pagina</button>
</div><br/>-->


<?php


?>

</td></tr>


<?php
 echo'<tr><td  colspan="2" height="50" valign="bottom" bgcolor="'.$cor.'"><div style="margin-left:14px; margin-top:16px;">
<a name="fotos"><b></b></a></div><br/><br/>';



$perfilFoto=explode("_", $perfil);



$sql0 = "SELECT imagem FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";

/*$tipo0= "SELECT tipo FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";


//$tipo = "SELECT * FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";
$tipo1 = @mysql_fetch_array ($tipo0);
$tipo2=$tipo1['tipo'];*/
$tipo=$_GET["tipo"];

$limite0 = @mysql_query("$sql0");
//echo  strtolower($perfil);
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];


echo'<div style="text-align:top; background:#CCCCCC; border-radius:12px; float:left; position:relative; margin-left:36px; padding:4px 20px 4px 20px;"><center>'.str_replace("_"," ",$perfilFoto[0]).'</center>';
echo'&nbsp;&nbsp;
<br/>';
echo'<form name="fotoPrincipal" enctype="multipart/form-data" method="post action="">
 <a href='.$arquivo0;
echo'><img src=../../'.$arquivo0;
echo' width="150"  height="180" border=2 bordercolor="#FF6600" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a></form>
<form method="POST" enctype="multipart/form-data" action="../../AtualizaFoto.php?perfil='.$perfil.'&tipo='.$tipo.'" > ';
echo'
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $localizaContato;
?>
<?php
echo'"/>';
echo'<br/>
<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php
echo $perfil;
?>
<?php
echo'"/>';
echo'<br/>
';
echo '<center><input type="submit" name="atualizarfoto" value="Atualizar Foto" style="border-radius:10px 30px; border:outset; "/></center>
 <br/>';
echo'</form>





</div>




</div>';


}



/*-------------------ALTERADO EM 15-11-2018----------------*/

$sql = @mysql_query("SELECT * FROM _vitrine WHERE vendedor ='$perfil' ORDER BY codigo DESC LIMIT 6 ;",$conexao);

/*-------------------ALTERADO EM 15-11-2018----------------*/



//$limite = @mysql_query("$sql");
$limite=@mysql_num_rows($sql);
//$limiteNum=@mysql_num_rows($limite);
//$i=0;e
echo'<div style="margin-left:30px;">';
//or($i==0; $i<$limiteNum; $i++){}
    while($consulta = @mysql_fetch_array ($sql) ) {
        $arquivo = $consulta['imagem'];
        $nomeProduto = $consulta['nomeProduto'];
        $descricaoProduto = $consulta['Descricao'];
        $url = $consulta['url'];
        
        error_reporting(E_ALL);
        echo'<span style="float:left; position:relative; padding:23px 4px 4px 4px; font-weight:600; " ><a href=../../'.$arquivo.'>
        <img src="../../'.$arquivo.'" width="90"  height="120" border="2" bordercolor="#FF6600" style="border-radius:10px; alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
        <a href="../../eliminaFoto.php?&arquivo='.$arquivo.'&tipo='.$tipo.'"><button type="button" name="excluir" style="border-radius:80px; background-color:white;" />Excluir</button>
        </a>
<br/>
<input type="text" name="nomeDoProduto" style="background:transparent; border:none; text-transform:uppercase;"  value="'.$nomeProduto.'" />
<br/>
<textarea name="descricaoDoProduto" style="background:transparent; border:none; text-transform:capitalize;">'.$descricaoProduto.'</textarea>
<br/>
<input type="url" name="url" style="background:transparent; border:none;" value="'.$url.'"/>';
/*<br/>
<input type="text" name="nomeProduto" style="background:transparent; border:none;" value="'.$url.'"/>*/
echo'</span>

';
}
if($limite<1){
    echo"<h2  style='margin-left:30%;'>Aqui aparecerão seus produtos</h2>";
}
echo'</div>';   


echo'</td></tr>








<tr><td><div style="float:left; position:relative; margin-left:20px;"><h2><b>&nbsp;&nbsp;Insira a foto do seu produto aqui!</b></h2>
<form method="POST" enctype="multipart/form-data" action="../../upload.php?perfil" > ';


echo'<input name="arquivo" type="file" id="arquivo"  class="btn btn-primary" value="Escolher foto" style="margin-left:15px;" />
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $localizaContato;
?>
<?php
echo'"/>';
echo'<br/>


<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php


/*-------------------ALTERADO EM 15-11-2018----------------*/
echo strtoupper(str_replace(" ","",$perfil));
?>
<?php
echo'"/>';
echo'<br/>
';
echo'<br/>
<input name="tipo" type="hidden" id="nome" value="';
?>
<?php
echo $redireciona;
?>
<?php
echo'"/>';
echo'<br/>
';
/*-------------------ALTERADO EM 15-11-2018----------------*/


echo'&nbsp;&nbsp;&nbsp;&nbsp;<b>Nome do produto</b><br/>  &nbsp;&nbsp;<input type="text"  required style="margin-top:0px;margin-left:10px;" size="40" name="nomeProduto" placeholder="Ex.:notebook."/>&nbsp;&nbsp;<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<b>Descrição</b> &nbsp;&nbsp;<br/><textarea  required style="margin-top:15px;margin-left:17px;" maxlength=200 placeholder="A descrição do produto aqui com no máximo 200 caracteres e seu valor." name="descricaoProduto" cols="41.5" rows="7" wrap="on" scrolling="yes"></textarea><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<b>URL do produto:</b>  <br/>&nbsp;&nbsp;<input type="url"   style="margin-top:0px;margin-left:10px;" size="40" name="urlProduto" placeholder="Ex.:http://www.seusite.com/seuproduto/"/>&nbsp;&nbsp;<br/><br/>';
echo '<input type="submit" name="Submit" value="Enviar Produto" style="margin-left:15px;" class="btn btn-primary"/>
 <br/>';


echo'</form></div></td>';
?>
<style>
#buscaProdutos{
    background:gold;
    border-radius:12px;
    padding-left:40px;
    padding-top:200px;
    padding-bottom:200px;
    width:90%;
    height:100%;
    
}
</style>
<style>
#buscaProdutos{
    background:gold;
    border-radius:12px;
    padding-left:40px;
    width:80%;
    height:100%;
    padding-top:50px;
    
}
</style>
<?php
echo'
<td  style=" height:100%;">
<div id="buscaProdutos" >';


?>
<style>

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
		margin-top:0.9px;
		width:28px;
		height:28px;
		background-image:url("../../OBJETOS/search4.png");
		background-repeat:no-repeat;
		background-size:35px 25px;
		background-position: -5px 1px;
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
        margin-top:0px;
		}
.divBusca2{
		background-color:white;
		border:transparent 1px;
        border:none;
		border-radius:4px;
		width:260px;
		height:30px;
		padding-bottom:6px;
        margin-top:0px;
		}

</style>


<?php



echo'<b>BUSQUE ALGUM PRODUTO AQUI:</b><br/>  <br/>
<form name="produtos" method="post" action="../../redirecionaSite.php">';

$CEP=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$CEP1=@mysql_fetch_array($CEP);
$CEP2=$CEP1["CEP"];

$id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$id1=@mysql_fetch_array($id);
$id2=$id1["codigo"];


echo'<div class="divBusca">

    <input type="search" name="CEP" id="CEP" class="txtBusca"  value="'.$CEP2.'" readonly=true/>
    <input type="hidden" name="id" id="id" value="'.$id2.'"/>';
    //echo $id2;
?>	
</div>
<br/>
<div class="divBusca2">
<input type="search" name="PESQ" id="PESQ" class="txtBusca" placeholder="Produto procurado"/>
<button type="submit" id="btnBusca" name="pesquisar" value="Localizar" style="margin-left:-31px;" onclick="ValidaCEPProduto();"/></button><!--<img src="../../OBJETOS/search4.png" width="40" height="25" id="imgBusca" alt="Buscar"/>-->
</div>
<br/>


<!--<input type="text" name="contato" value="" size="30"/><br/><br/>
<button type="submit" name="pesquisar" value="Localizar" />Localizar</button>| --><input type="reset" value="Limpar" name="limpar"/>
<br/><br/>
</form>

<?php





echo'</div></td></tr></table>


<br/><br/>




<table style="background:'.$cor.'; width:1150px;  margin-top:0%; z-index:-90; border-radius:12px;">
<tr>';



$linhas=@mysql_num_rows($listar9);


if($linhas>0){

$numeroMensagens=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='".$perfil."';",$conexao);
$cont = mysql_num_rows($numeroMensagens); 
//$numeroMensagens=@mysql_fetch_array($numeroMensagens["comentario"]);
echo'<td width="100%" colspan="2"  valign="top" align="left" cellspacing="8">';
echo'<br/><br/><div style="float:left; position:relative; width:260px; margin-left:10px;">
<a name="mensagens"><b>MINHAS MENSAGENS</a>&nbsp;&nbsp;
</div><div id="contadorMaior" style="float:left; position:relative; margin-top:20px; margin-left:-140px;
padding:6px 0px 0px 16px;">';
    if($cont>=10){
        echo'<font color="white" >10 mensagens de '.$cont.'</font></div></b><br/><br/>';
    }else{
        echo'<font color="white" >'.$cont.' novas mensagens</font></div></b><br/><br/>';
    }
//$nome=@mysql_result($listar9,$i);
$i=0;
for($i==0;$i<$linhas;$i++){
echo '<tr><id ><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
bgcolor="'.$cor.'" id="celula" height="50" align="left" >
<form method="post" action="excluir.php"
id="coluna"><font size="3" color="#0e3aa8" face="impact" style="text-transform:capitalize">
<input type="text" name="sessao" value="'.str_replace("_"," ",$nome=@mysql_result($listar18,$i)).'" readonly="true"
style="background:'.$cor.'; border:none; width:200px; height:40px; font-family:impact; color:#0e3aa8;
font-size:20px;"/>
<input type="text" name="data" value="'.@mysql_result($listar13,$i).' de '.@mysql_result($listar14,$i).' de '.@mysql_result($listar15,$i).'" readonly="true"
style="background:'.$cor.'; border:none; width:400px; height:40px; font-family:calibri,arial; color:#0e3aa8;
font-size:14px;"/><hr size="2%" align="right" width="88%" color="#a2c2f2"><input type="text"
name="comentario" value="'.@mysql_result($listar10,$i).'" readonly="true"  style="background:'.$cor.';
 border:none; font-family:calibri; color:#136389; font-size:18px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="excluir" value="Apagar" style="float:right; margin-right:15px; border-radius:80px; background-color:white;"/></form>';
echo'</font><br/><br/>';
}
}
else{
echo'';
}
echo'</td></tr>';



echo'<tr><td colspan=3>';






error_reporting(0);
ini_set("display_errors", 0 );

$perfilAltera=str_replace(" ","_",$perfil1);
$perfilAltera1=strtolower($perfilAltera);

echo'<form name="remover" method="post" action="../../RemoverConta.php">
<input type="hidden" name="usuario" value="'.$perfilAltera;
echo'"/>';
echo'<input type="hidden" name="tabela" value="'.$perfilAltera1;
echo'"/>';
echo'<button type="submit" name="removerconta" value="RemoverConta" style="border-radius:15px; background:red; color:white;">Remover conta</button>
</form>';
echo'';





echo'<p align="right"><img src="../../BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
</td></tr>';




echo'<tr><td>';
echo'</td></tr>';

echo'<tr><td>';


//echo $perfil;

$sql = @mysql_query("SELECT _vitrine.* FROM _vitrine  JOIN ".strtolower($perfil)."  ON _vitrine.vendedor = ".strtolower($perfil).".contatos WHERE contatos <> '".strtolower($perfil)."' ORDER BY codigo DESC ;",$conexao);
//echo strtolower($perfil);
$limite = @mysql_query("$sql");
$linhasOfertas = @mysql_num_rows($sql);


//$sql=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil=".$perfil.";",$conexao);
//$sql=$sql+$sql;
//$CEPdoComprador1 = @mysql_fetch_array ($CEPdoComprador);
//$CEP = $CEPdoComprador1['CEP'];


//echo $linhasOfertas;
//$limiteNum=@mysql_num_rows($limite);
//$i=0;e
if($linhasOfertas>0){
echo'<div style="margin-left:30px;"><H2>OFERTA DE PRODUTOS</h2>';
//or($i==0; $i<$limiteNum; $i++){}
    while($consulta = @mysql_fetch_array ($sql)) {
        
        $arquivo = $consulta['imagem'];
        $nomeProduto = $consulta['nomeProduto'];
        $descricaoProduto = $consulta['Descricao'];
        $url = $consulta['url'];
        $PESQ=$consulta['nomeProduto'];
        
        
        //echo $perfil;

        error_reporting(E_ALL);
        echo'<span style="float:left; position:relative; padding:23px 4px 4px 4px; font-weight:600; width:100%;" >
        <a href=../../'.$arquivo.'>
<img src="../../'.$arquivo.'" width="90"  height="120" border="2" bordercolor="#FF6600" style=" position:relative; float:left; width:20%;  border-radius:10px; alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
        

<div name="nomeDoProduto" style=" position:relative; float:left; width:20%; margin-left:10px;  background:transparent; border:none; text-transform:uppercase; background:gold; border-radius:12px; height:40px; width:200px;"  >'.$nomeProduto.'</div>

<div name="descricaoDoProduto" style=" position:relative; float:left; width:50%; margin-left:10px;  border:none; text-transform:capitalize;background:gold; border-radius:12px; height:100px; width:300px; ">'.$descricaoProduto.'</div>

<div name="url" style="position:relative; float:left; width:20%; margin-left:10px; background:transparent; border:none;" >
';
$id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$id1=@mysql_fetch_array($id);
$id2=$id1["codigo"];
$idPedido=rand(0,6000).date("dmYHis");



$CEP0=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$CEP1 = @mysql_fetch_array ($CEP0);
$CEP=$CEP1["CEP"];
//echo'

/*COM FORM*/
//<form name="produtos" method="get" action="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'">';



/*echo'<input type="hidden" name="id" value="'.$id2.'"/>';
echo'<input type="hidden" name="idPedido" value="'.$idPedido.'"/>';
echo'<input type="hidden" name="PESQ" value="'.$PESQ.'"/>';
echo'<input type="hidden" name="CEP" value="'.$CEP.'"/>';
//echo'<input type="hidden" name="url" value="'.$url.'"/>';*/
//echo'<button type="submit" name="comprar" value="Comprar" style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>';


/*COM HREF*/
echo'<a href="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'">
<button type="button" name="comprar" value="Comprar"  style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>
</a>';

$selecionatipo=mysqli_query($iconexao,"SELECT tipo FROM _tudo WHERE tipo='usuario'");
$selecionatipo=mysqli_fetch_assoc($selecionatipo);

/*-------------------------------- ALTERADO EM 22-12-2018 ---------------------------*/
//echo'<script src="../../js/incluiComentario.js"></script>';
echo"<div style='padding:12px;'>";
echo'<form name="comentario" method="POST" action="../../comentario_enviado.php">
    <input type="text" multiline name="comentario" id="comentario" value="" placeholder="Comente e pressione ENTER" style="width:200px; border:none; border-radius:6px; margin-left:20px; margin-top:10px;"/>
    <input type="hidden" name="perfil" id="perfil" value="'.$perfil.'" />
    <input type="hidden" name="nomeProduto" id="nomeProduto" value="'.$nomeProduto.'"/>
    <input type="hidden" name="tipo" id="tipo" value="'.$selecionatipo['tipo'].'"/>';


echo'</form>';


     
$exibe_comentario=mysqli_query($iconexao,"SELECT * FROM _comentarios WHERE produto = '$nomeProduto' ORDER BY id DESC LIMIT 4 ");

       $exibe_comentario_linhas=mysqli_num_rows($exibe_comentario);
       //$exibe_comentario=mysql_fetch_assoc($exibe_comentario);
    if($exibe_comentario_linhas>0){
       while ($row = mysqli_fetch_assoc($exibe_comentario)){
           ////echo "<ul>";
           if($row['nome']==$perfil){echo "<span style='color:green; font-size:12px; list-style-type:none; margin-left:20px' >Voc&ecirc; disse:</span>";
           echo "<span style='color:white; list-style-type:none; font-size:12px; margin-left:20px; width:800px;'>".$row['comentario']."</span>";
           }
           else{
           echo "<span style='color:green; font-size:12px; list-style-type:none; margin-left:20px' >".ucwords(str_replace("_"," ",$row['nome']))."</span>";
           echo "<span style='color:white; list-style-type:none; font-size:12px; margin-left:20px; width:800px;'>".$row['comentario']."</span>";
           //echo "</ul>";
           }
           echo "<br/><br/>";
  
        }
    }
 echo"</div>";  
//COLOCADO NO  COMENTARIO ENVIADO.PHP
/*
echo "<div class='comentarioRetorno'>";
include ('../../comentario_enviado.php');
echo"</div>";

*/








echo'</div>';//fecha a div da url

}



/*-------------------------------- ALTERADO EM 22-12-2018 ---------------------------*/


//echo'</form>';



//ESSE É O FORM ORIGINAL DE ACIONAMENTO DA PAGINA
/*<form name="produtos" method="post" action="../../obterDados.php">';
//echo $perfil;
$id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$id1=@mysql_fetch_array($id);
$id2=$id1["codigo"];
$idPedido=rand(0,9).date("dmYHis");

echo'<input type="hidden" name="id2" value="'.$id2.'"/>';
echo'<input type="hidden" name="idPedido" value="'.$idPedido.'"/>';
echo'<input type="hidden" name="url" value="'.$url.'"/>';
echo'<button type="submit" name="comprar" value="Comprar" style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>

</form>*/
echo'
</div>
</span>
<br/><br/>
';
}


else{
    echo 'ADICIONE PARCEIROS PARA QUE ELES MOSTREM SEUS PRODUTOS AQUI!';
}



echo'</td></tr>';


echo'<tr><td>';


}

echo'<div style="opacity:0;">';//para esconder o />
echo '<input type="hidden" name="meuPerfil" id="meuPerfil" value='.$login.'/>';
echo '<input type="hidden" name="minhaSenha" id="minhaSenha" value='.$password.'/>';
echo'</div>';




?>
</td></tr></table>











































































































<?php
$redireciona=@mysql_query("SELECT * FROM _fornecedores WHERE _fornecedores.email ='$_POST[c_email]';",$conexao);
$redireciona=@mysql_fetch_array($redireciona);  
$redireciona=$redireciona["tipo"];

if($redireciona=="fornecedor"){
$listar0=@mysql_query("SELECT tituloPerfil FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$perfil=@mysql_result($listar0,0,tituloPerfil);
$listar1=@mysql_query("SELECT email FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar4=@mysql_query("SELECT telefone FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar5=@mysql_query("SELECT status FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar9=@mysql_query("SELECT sessao FROM _mensagens WHERE postar = '$perfil' ORDER BY codigo DESC LIMIT 10;",$conexao);
$listar10=@mysql_query("SELECT comentario FROM _mensagens WHERE postar = '$perfil' ORDER BY id DESC LIMIT 10;",$conexao);
$listar11=@mysql_query("SELECT dia FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar13=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar  = '$perfil' ORDER BY id DESC
 LIMIT 50;",$conexao);
$listar14=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar  = '$perfil' ORDER BY id DESC LIMIT 50;",$conexao);
$listar15=@mysql_query("SELECT coalesce(ano,'Nao definido') as ano FROM _mensagens WHERE postar  = '$perfil' ORDER BY id DESC;",$conexao);
$listar16=@mysql_query("SELECT tipo FROM _fornecedores WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar18=@mysql_query("SELECT sessao FROM _mensagens WHERE postar = '$perfil' ORDER BY id DESC LIMIT 10;",$conexao);



?>







<?php



$perfil1=@mysql_result($listar0,0,tituloPerfil);
$perfil=@mysql_result($listar0,0,tituloPerfil);



$tipo=$_GET["tipo"];
echo'<div style="width:1150px; height:60px; background:black; color:#ad0a0a; border-radius:12px; padding-top:0px; padding-left:10px;">
<input type="text" readonly="true"  style="background:transparent; border:none; width:86%; font-size:180%; overflow:auto;" name="Titulo"
id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1); 
echo'" /><a href="../../AlteraPerfil.php?titulo='.strtolower($perfil).'&tipo='.$tipo.'"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar nome do perfil" style="border-radius:80px; background-color:white;"/></a></div>';

echo'<br/><br/>';


include("../../based.php");
$cor=@mysql_query("SELECT coalesce(background,'#ad0a0a') as background FROM _fornecedores WHERE  email LIKE '%$login%';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];

?>

<?php



$perfilNot=strtolower(str_replace(" ","_",$perfil));


$notificacoes=@mysql_query("SELECT * FROM _notificacoes WHERE perfil ='".$perfilNot."';",$conexao);
//$exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
$linhasContato=@mysql_num_rows($notificacoes);
//echo $linhasContato;
$LinhasContato1=@mysql_fetch_array($notificacoes);
$LinhasContato2=$LinhasContato1["contato"];



if($linhasContato>0){

echo'<div style="float:left; position:relative; width:100%;  margin-top:0px; margin-left:0px;
padding-bottom:20px; padding-top:-10px; padding-left:16px; background-color:gold; border-radius:12px;"><b>QUERO SER SEU PARCEIRO 
<br/>';
if($linhasContato==1){
   echo'<a href="../../notificacoes.php?perfil='.$perfil.'&tipo='.$tipo.'"><font color="white" >'.$linhasContato.' notificação de parceria</font></a></b>'
   ;
}
else{
   echo'<a href="../../notificacoes.php?perfil='.$perfil.'&tipo='.$tipo.'"><font color="white" >'.$linhasContato.' notificações de parcerias</font></a></b>'
   ;
/*}*/

}
echo'</div>';
}
?>







<?php

echo'<table id="tabelaUser" style="background:'.$cor.'; width:1150px;  margin-top:0%; z-index:-90; border-radius:12px;" ><tr><td>';
//echo'<table style="background:'.$cor.'; width:1000px;  margin-top:0%; z-index:-90; border-radius:12px;"><tr><td>';
//$cor="blue";
//echo $cor;
#B5C0C3
echo'<form>';
/*echo'<tr>
<td width="80%" colspan="2"  id="estado"><div id="TituloPerfil"><input type="text" readonly="true"  style="background-color:'.$cor.'; width:800px;" name="Titulo"
id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1);
echo'" style="width:auto;"/><a href="../../AlteraPerfil.php?titulo='.strtolower($perfil).'"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar nome do perfil" style="border-radius:80px; background-color:white;"/></a></div></td>';
*/
?>




<?php
$tipo=$_GET["tipo"];
echo'</td><td style="color:transparent;"></td></tr>
<td   align="left" valign="bottom"style="padding-left:20px; padding-top:30px;"><font color="#06438E" size="3" face="verdana">
<b>Minhas informa&ccedil;&otilde;es</b>&nbsp;<a href="../../alteraInformacoes.php?meuPerfil='.$perfil.'&tipo='.$tipo.'">
<input type="button"
name="alteraInformacoes" id="alteraTexto" value="Alterar Informacoes" style="border-radius:80px; background-color:white;"/></a></td>
<td width="50%"  colspan="3" align="left" valign="bottom"><font color="#06438E" size="3" face="verdana">
<b>Quem sou eu...</b></td></tr>';
echo'<tr><td  colspan="1" height="50" rowspan="1" valign="bottom" >
<div id="campo" style="background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">

E-mail:&nbsp;&nbsp;
<input type="text" readonly="true" name="E-mail" size="30" valign="bottom" style="background-color:transparent; font-weight:600;" id="E-mail" value="'
.@mysql_result($listar1,0,email);

echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="40%" rowspan="3" valign="top" style="border-radius:10px;"
bgcolor="#B0C6D2" id="celula1">
<div style="background:#B0C6D2; border-radius:12px;">
<textarea name="texto" readonly="true"  valign="bottom"  id="Texto" wrap="on" cols="45" rows="10" style="border-radius:10px;"
value="" >'.@mysql_result($listar2,0,textoPerfil).'</textarea>';
echo '<br/><br/></div></td>
</tr>';

echo'<tr><td width="50%" colspan="1" height="50" rowspan="1" valign="bottom" >
<div id="campo" style="background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Telefone:&nbsp;&nbsp;
<input type="text" readonly="true" name="Telefone" size="30" valign="bottom" style="background-color:transparent; font-weight:600;" id="Telefone" value="'
.@mysql_result($listar4,0,telefone);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';


/*echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo3" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Status:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" name="status" valign="bottom" style="background-color:transparent; font-weight:600;" id="status"
value="' .@mysql_result($listar5,0,status);*/

echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo4" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Estado:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="estado1" name="estado" valign="bottom"
value="' .@mysql_result($listar6,0,estado);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>

</tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo5" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Cidade:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="cidade" name="cidade" valign="bottom"
value="' .@mysql_result($listar7,0,cidade);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo6" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="aniversario" valign="bottom" name="aniversario"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><br/><br/></td>';

echo'
<td  rowspan="3">
<div id="slides">
<ul>
<li><a href="http://g1.globo.com/" target="_blank"><img src="../../slides/globo1.jpg" alt="G1" width="600" height="200"/></li>
<li><a href="http://www.r7.com/" target="_blank"><img src="../../slides/R7.png" alt="R7" width="600" height="200"/></li>
<li><a href="https://www.youtube.com/" target="_blank"><img src="../../slides/YouTube.jpg" alt="Google" width="600" height="200"/></li>
</ul>
</div>
</td>';

echo'<tr><td width="50%" colspan="1" height="80" valign="bottom"><div id="campo1" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="atividades" valign="bottom" cols="44" rows="6" style="background-color:transparent; font-weight:600;"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 0px;" scrolling="yes">' .@mysql_result($listar3,0,atividades);
echo'</textarea></font></div></td></tr>';

echo'<tr><td width="50%" height="30"colspan="1" height="50" valign="bottom"></td>
<td width="50%" height="30" colspan="1" height="50" valign="bottom"></td></tr>';

?>




<?php

echo'<tr><td></td></tr>';
echo'<tr><td>';
$tipo=$_GET["tipo"];
echo'<br/><br/><br/>';

echo'<tr><td width="90%" colspan="2" align="left" bgcolor="'.$cor.'">
<p>
<div style="margin-left:11%;"><b>LOCALIZAR PARCEIROS</b></div><br/>
<form name="form1" action="" method="post">
<input type="hidden" name="logar" value="'.$login.'"/>
</form>
<a href="../../localizaContatos.php?login='.$perfil.'&tipo='.$tipo.'"><button type="button" name="localizar" style="border-radius:80px; background-color:white; margin-left:36px;">
LOCALIZAR SEUS PARCEIROS</button></a>|<a href="../../localizaContatos.php?login='.$perfil.'&tipo='.$tipo.'">
<button type="button" name="Mensagem" style="border-radius:80px; background-color:white; margin-left:52px;">COMPRAR</button></a>';

?>
</p>
<!--USAR FUTURAMENTE-->
<input type="hidden" id="perfil" value="<?php echo $perfil; ?>"/>
<input type="hidden" id="tipo" value="<?php echo $tipo; ?>"/>
<!--<input type="hidden" id="tema" value="blue"/>-->
<!--/td><td style="padding-left:204px; margin-top:35px; height:200px; position:absolute; float:left; width:396px; background-color:#B0C6D2;">-->
<div style="font-size:18px; font-family:tahoma; font-weight:600; margin-left:850px; padding-bottom:10px; margin-top:-70px;position:absolute; width:40%; float:left;">Escolha um tema:</div><br/>

<script language="javascript">
    /*function CarregarTema(){
       
        var tema="";
    
    
        var cor=$('#tema1').val();
		//var cor=document.getElementsByClassName('tema1').value;

        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&cor="+cor;
        window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&cor="+cor;
        
        $.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
        
    }*/
$(document).ready(function(){
	$('#tema1').click(function(){
		var cor=document.getElementById('input1').value="0eb8d7";
        var tema=$('#input1').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
        
        })
    })
	
	$('#tema2').click(function(){
		var cor=document.getElementById('input2').value="yellow";
        var tema=$('#input2').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema3').click(function(){
		var cor=document.getElementById('input3').value="red";
        var tema=$('#input3').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema4').click(function(){
		var cor=document.getElementById('input4').value="purple";
        var tema=$('#input4').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema5').click(function(){
		var cor=document.getElementById('input5').value="white";
        var tema=$('#input5').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema6').click(function(){
		var cor=document.getElementById('input6').value="gray";
        var tema=$('#input6').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema7').click(function(){
		var cor=document.getElementById('input7').value="black";
        var tema=$('#input7').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema8').click(function(){
		var cor=document.getElementById('input8').value="ad0a0a";
        var tema=$('#input8').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema9').click(function(){
		var cor=document.getElementById('input9').value="045506";
        var tema=$('#input9').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
	$('#tema10').click(function(){
		var cor=document.getElementById('input10').value="B5C0C3";
        var tema=$('#input10').val();
        var perfil=$('#perfil').val();
        var tipo=$('#tipo').val();
        var url="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
        //window.location="../../tema.php?perfil="+perfil+"&tipo="+tipo+"&tema="+tema;
		var tema="";
		$.ajax({
            url:url,
            //type: "POST",
            //cache:false,
            //dataType:"json",
            success:function(retorno){
                //for(var i=0;i<retorno.lenght;i++){
                    tema="<style='background:"+ retorno.background +";' >";
                //}
                $("#tabelaUser table").html(tema);
            }
            
        })
    })
	
});
</script>

<!--<form name="alteraTemaForm" action="../../IncluiTema.php" method="post" style="margin-top:16px; margin-top:-50px">-->
<!--<div onclick="CarregarTema()" >-->
<div style="position:absolute; float:left; margin-left:830px;"><button type="button"  id="tema1"  value="#0eb8d7"  onClick='parent.location="javascript:location.reload()"' style="background-color:#0eb8d7; width:60px; height:20px; border-radius:8px;">
</button>
<input type="hidden" value="" id="input1"/>
</div>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button"  id="tema2" value="yellow" onClick='parent.location="javascript:location.reload()"' style="background-color:yellow; 
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input2"/>
</div>

<div style="position:absolute; float:left; margin-left:970px;"><button type="button" id="tema3" value="red" onClick='parent.location="javascript:location.reload()"' style="background-color:red;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input3"/>
</div><br/><br/>

<div style="position:absolute; float:left; margin-left:830px;"><button type="button"  id="tema4" value="purple" onClick='parent.location="javascript:location.reload()"' style="background-color:purple;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input4"/>
</div>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button"  id="tema5" value="white" onClick='parent.location="javascript:location.reload()"' style="background-color:white;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input5"/>
</div>

<div style="position:absolute; float:left; margin-left:970px;"><button type="button" id="tema6" value="gray" onClick='parent.location="javascript:location.reload()"' style="background-color:gray;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input6"/>
</div><br/><br/>

<div style="position:absolute; float:left; margin-left:830px;"><button type="button"  id="tema7" value="black" onClick='parent.location="javascript:location.reload()"' style="background-color:black;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input7"/>
</div>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button"  id="tema8" value="#ad0a0a" onClick='parent.location="javascript:location.reload()"' style="background-color:#ad0a0a;
width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input8"/>
</div>

<div style="position:absolute; float:left; margin-left:970px;"><button type="button" id="tema9" value="#045506" onClick='parent.location="javascript:location.reload()"' style="background-color:#045506; width:60px; height:20px; border-radius:8px;"></button>
<input type="hidden" value="" id="input9"/>
</div><br/><br/>

<div style="position:absolute; float:left; margin-left:900px;"><button type="button" id="tema10" value="#B5C0C3" onClick='parent.location="javascript:location.reload()"' style="background-color:#B5C0C3;
width:60px; height:20px; border-radius:8px;" ></button>
<input type="hidden" value="" id="input10"/>
</div><br/>

<!--</div>-->
<br/>


<?php
/*
$login=isset($_POST['c_email'])?$_POST['c_email']:null;
//echo $login;
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
$tipo=@mysql_query("SELECT * FROM _users WHERE tituloPerfil='".strtoupper($perfil)."';",$conexao);
$tipo1=@mysql_fetch_array($tipo);
$tipo2=$tipo1["tipo"];
//echo $tipo2;
echo'<input type="hidden" name="emailPerfil" value="'.$login.'"/>';
echo'<input type="hidden" name="tipo" value="'.$tipo2.'"/>
</form>';
*/
?>

<div style="position:absolute; float:left; margin-left:840px; margin-top:-10px; padding-bottom:20px;">
<button type="button" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:180px; height:22px; border-radius:8px; " onClick='parent.location="javascript:location.reload()"'>Atualizar pagina</button>
</div><br/>


</td></tr>  <tr><td>


<?php
//$login=$_SESSION['c_email'];
$login=$_POST['c_email']."@".$_POST['dominio'];


 $exibeContato=@mysql_query("SELECT * FROM ".strtolower($perfil).";",$conexao);
 $exibeFoto=@mysql_query("SELECT imagem FROM ".$perfil.";",$conexao);
 $fetchImagem=@mysql_fetch_array($exibeFoto);
 
 $linhasContato=@mysql_num_rows($exibeContato);

 $limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 10;",$conexao);
 
 $limiteContato=@mysql_num_rows($limiteContato);

 $exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
 $linhasContatoMenos=@mysql_num_rows($exibeContatoMenos);
 $LinhasContato1=@mysql_fetch_array($exibeContato);
 $LinhasContato2=$LinhasContato1["contatos"];


 
 if($linhasContato>1){
    
    echo'<div class="contatos"><br/><a name="contatos"><b>MEUS PARCEIROS</a></div><div id="contador" style="float:left; position:relative; margin-top:-45px; margin-left:160px;
    padding:6px 0px 0px 16px;">';
    if($linhasContatoMenos==1){
        echo'<font color="white" >'.$linhasContatoMenos.' parceiro</font></div></b>
        <form name="form2" action="" method="get">
        <div style="width:100%; ">';
    }
    else{
        echo'<font color="white" >'.$linhasContatoMenos.' parceiros</font></div></b>
        <form name="form2" action="" method="get">
        <div style="width:100%; ">';
    }
    
 //$colunas=4;

 //$i=0;
 $j=1; //faz com que o seu perfil n�o apare�a na p�gina


 for($j==1;$j<$limiteContato;$j++){
 
$contact=@mysql_result($exibeContato,$j,contatos);
$contact=str_replace("_"," ",$contact);
//if($contact=$perfil1){echo "";}

 echo '<div class="botao"><a href="../../linkContatos.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'&tipoParceiro='.@mysql_result($exibeContato,$j,tipo).'">';
 $meusContatos=@mysql_result($exibeContato,$j,contatos);

 echo'<a href="../../linkContatos.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'&tipoParceiro='.@mysql_result($exibeContato,$j,tipo).'"><div class="imagemContato"><img src="../../'.@mysql_result($exibeContato,$j,imagem).'" width="60"  height="80" style="border-radius:10px;"/></div></a>';
 //src="arquivos/97b77915013e0a68dea8c323be0983d4.jpg"
 echo'<div class="texto">'.strtoupper($contact);
 echo'</a></div></div>';

 echo'</div>
 ';
 //}
 echo'&nbsp;&nbsp;';
 echo'<input type="hidden" name="perfil" value="'; 
 echo'<input type="hidden" name="email" value="'.$login=$_POST['c_email'].'"/>';


  echo'</div>';
  
  
  
  
  
  
  
 }
 
 //}//fecha i
 
//}

//$meusContatos=@mysql_query("SELECT contatos FROM clovis jr;",$conexao);
echo'<div style="float:left; position:absolute; margin-top:-96px;">';
  $anivDia=@mysql_query("SELECT dia FROM _tudo WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $anivMes=@mysql_query("SELECT mes FROM _tudo WHERE tituloPerfil =".$meusContatos.";",$conexao);
  //$anivAno=@mysql_query("SELECT ano FROM users WHERE tituloPerfil =".$perfil.";",$conexao);
  $anivContato=@mysql_query("SELECT tituloPerfil FROM _users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $perfil=str_replace(" ","_",$perfil);
  $anivContato=@mysql_query("Select contatos  From ".strtolower($perfil)." Where dia = ".date('d')." And mes = ".date('n').";",$conexao);
  $linhasAnivContato=@mysql_num_rows($anivContato);
  $fetchAniversario=@mysql_fetch_array($anivContato);
  $fetchAniversario=$fetchAniversario['contatos'];
  //$anoAtual=date(Y);
  $diaAtual=date("d");
  $mesAtual=date("n");
  $dataAtual=$diaAtual."/".$mesAtual; //echo $dataAtual;
  $anivPerfil=$anivDia."/".$anivMes;
  //$meusContatos=@mysql_query("SELECT tituloPerfil,".$perfil." FROM users WHERE tituloPerfil.dia=".$diaAtual." AND tituloPerfil.mes=".$mesAtual." AND ".$perfil.".contatos;",$conexao);
  if($linhasAnivContato > 0){
  echo"<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<font color='green'><b>Hoje e aniversario de ".str_replace("_"," ",$fetchAniversario);
  }
echo'</b></font></div>';






$limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 10;",$conexao);

$TotalContato=@mysql_num_rows($exibeContato);

$email=$_POST['c_email'];

if($TotalContato > 10){
    echo'<div style="margin-left:20%; margin-top:22%;"><a href="../../parceiros.php?login='.$perfil.'&id='.$email.'"><button type="button" name="mais" value="Mais Amigos">Veja mais parceiros seus aqui...</button></a></div>';
    echo'<input type="hidden" name="perfil" value="perfil"/>';

}

echo'</div></form>';
echo'</div>';
}
else{
echo'';
}
//echo'<div style="float:left; position:absolute; margin-left:41%; margin-top:1%;"><iframe name="quadro" width=180% height=300%
//scrolling="auto" src="http://g1.globo.com/"></iframe></div>';

/*echo'</td><td style="padding-left:204px; margin-top:35px; height:200px; position:absolute; float:left; width:396px; background-color:#B0C6D2;">

<div style="font-size:18px; font-family:tahoma; font-weight:600; margin-left:20px; padding-top:10px;">Escolha um tema:</div><br/>';

echo'

<form name="alteraTemaForm" action="../../IncluiTema.php" method="post">
<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="#0eb8d7" style="background-color:#0eb8d7;
width:60px; height:20px; border-radius:8px;"></button>
</div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="yellow" style="background-color:yellow;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="red" style="background-color:red;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="purple" style="background-color:purple;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="white" style="background-color:white;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="gray" style="background-color:gray;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="black" style="background-color:black;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="gold" style="background-color:gold;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="#045506" style="background-color:#045506;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>';

echo'<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:60px; height:20px; border-radius:8px;" ></button></div><br/>


<br/>';*/


?>



<?php
/*
$login=isset($_POST['c_email'])?$_POST['c_email']:null;
//echo $login;
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
echo'<input type="hidden" name="emailPerfil" value="'.$login.'"/>

</form>';*/

?>

<!--<div style="position:absolute; float:left; margin-left:15px; margin-top:40px; padding-bottom:20px;">
<button type="button" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:180px; height:20px; border-radius:8px; " onClick='parent.location="javascript:location.reload()"'>Atualizar pagina</button>
</div><br/>-->


<?php


?>

</td></tr>


<?php
 echo'<tr><td width="50%" colspan="3" height="50" valign="bottom" bgcolor="'.$cor.'"><div style="margin-left:48%; margin-top:16px;">
<a name="fotos"></a></div><br/><br/>';

?>

<?php



$perfilFoto=explode("_", $perfil);



$sql0 = "SELECT imagem FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";
$tipo=@mysql_fetch_array($sql0);
$tipo=$_GET["tipo"];

$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];
echo'<div style="text-align:top; background:#CCCCCC; border-radius:12px; float:left; position:relative; margin-left:36px; padding:4px 20px 4px 20px;"><center>'.str_replace("_"," ",$perfilFoto[0]).'</center>';
echo'&nbsp;&nbsp;
<br/>';
echo'<form name="fotoPrincipal" enctype="multipart/form-data" method="post action="">
 <a href='.$arquivo0;
echo'><img src=../../'.$arquivo0;
echo' width="150"  height="180" border=2 bordercolor="#FF6600" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a></form>
<form method="POST" enctype="multipart/form-data" action="../../AtualizaFoto.php?perfil='.$perfil.'&tipo='.$tipo.'" > ';
echo'
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $localizaContato;
?>
<?php
echo'"/>';
echo'<br/>
<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php
echo $perfil;
?>
<?php
echo'"/>';
echo'<br/>
';
echo '<center><input type="submit" name="atualizarfoto" value="Atualizar Foto" style="border-radius:10px 30px; border:outset; "/></center>
 <br/>';
echo'</form>





</div>




</div>';


}

/*-------------------ALTERADO EM 15-11-2018----------------*/

$sql = @mysql_query("SELECT * FROM _vitrine WHERE vendedor ='$perfil' ORDER BY codigo DESC LIMIT 8 ;",$conexao);

/*-------------------ALTERADO EM 15-11-2018----------------*/





$limite = @mysql_query("$sql");
$limite=@mysql_num_rows($sql);
//$limiteNum=@mysql_num_rows($limite);
//$i=0;
echo'<div style="margin-left:30px;">';
//or($i==0; $i<$limiteNum; $i++){}
//foreach($consulta as $sql)
while($consulta = @mysql_fetch_array ($sql) ) {
$arquivo = $consulta['imagem'];
$nomeProduto = $consulta['nomeProduto'];
$descricaoProduto = $consulta['Descricao'];
$url = $consulta['url'];

error_reporting(E_ALL);
echo'<span style="float:left; position:relative; padding:23px 4px 4px 14px; font-weight:600; " ><a href=../../'.$arquivo.'>
<img src="../../'.$arquivo.'" width="120"  height="150" border="2" bordercolor="#FF6600" style="border-radius:10px;" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
<a href="../../eliminaFoto.php?arquivo='.$arquivo.'"><button type="button" name="excluir" style="border-radius:80px; background-color:white;" />Excluir</button>
</a>

<br/>
<input type="text" name="nomeDoProduto" readonly="true" style="background:transparent; border:none; text-transform:uppercase;"  value="'.$nomeProduto.'" />
<br/>
<textarea name="descricaoDoProduto" readonly="true" style="background:transparent; border:none; text-transform:capitalize;">'.$descricaoProduto.'</textarea>
<br/>
<a href="'.$url.'"><input type="url" name="descricaoDoProduto" readonly="true" style="background:transparent; border:none; cursor:hand;" value="'.$url.'"/></a>
</span>';
}
if($limite<1){

    echo"<h2 style='margin-left:30%;'>Aqui aparecerão seus produtos</h2>";

}
echo'</div>';


echo'</td></tr>


<tr><td><div style="float:left; position:relative; margin-left:20px;"><h2><b>&nbsp;&nbsp;Insira a foto do seu produto!</b></h2>
<form method="POST" enctype="multipart/form-data" action="../../upload.php" > ';


echo'<input name="arquivo" type="file" id="arquivo"  value="Escolher arquivo" style="margin-left:15px;"/>
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $localizaContato;
?>
<?php
echo'"/>';
echo'<br/>
<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php
/*-------------------ALTERADO EM 15-11-2018----------------*/
echo strtoupper(str_replace(" ","",$perfil));
?>
<?php
echo'"/>';
echo'<br/>
';
echo'<br/>
<input name="tipo" type="hidden" id="nome" value="';
?>
<?php
echo $redireciona;
?>
<?php
echo'"/>';
echo'<br/>
';
/*-------------------ALTERADO EM 15-11-2018----------------*/

echo'&nbsp;&nbsp;&nbsp;&nbsp;<b>Nome do produto</b><br/>  &nbsp;&nbsp;<input type="text"  required style="margin-top:0px;margin-left:10px;" size="40" name="nomeProduto" placeholder="Ex.:notebook."/>&nbsp;&nbsp;<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<b>Descrição</b> &nbsp;&nbsp;<br/><textarea  required style="margin-top:15px;margin-left:17px;" maxlength=200 placeholder="A descrição do produto aqui com no máximo 200 caracteres e seu valor." name="descricaoProduto" cols="41.5" rows="7" wrap="on" scrolling="yes"></textarea><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<b>URL do produto:</b>  <br/>&nbsp;&nbsp;<input type="url" style="margin-top:0px;margin-left:10px;" size="40" name="urlProduto" placeholder="Ex.:http://www.seusite.com/seuproduto/"/>&nbsp;&nbsp;<br/><br/><br/>';
echo '<input type="submit" name="Submit" value="Enviar Produto" style="margin-left:15px;"/>
 <br/>';

echo'</form></div></td>';





?>

<style>
#buscaProdutos{
    background:gold;
    border-radius:12px;
    padding-left:40px;
    width:80%;
    height:100%;
    padding-top:50px;
    
}
</style>
<?php
echo'
<td  style=" height:100%;">
<div id="buscaProdutos" >';


?>
<style>

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
		margin-top:0.9px;
		width:28px;
		height:28px;
		background-image:url("../../OBJETOS/search4.png");
		background-repeat:no-repeat;
		background-size:35px 25px;
		background-position: -5px 1px;
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
        margin-top:0px;
		}
.divBusca2{
		background-color:white;
		border:transparent 1px;
        border:none;
		border-radius:4px;
		width:260px;
		height:30px;
		padding-bottom:6px;
        margin-top:0px;
		}

</style>


<?php



echo'<b>BUSQUE ALGUM PRODUTO AQUI:</b><br/>  <br/>
<form name="produtos" method="post" action="../../redirecionaSite.php">';

$CEP=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$CEP1=@mysql_fetch_array($CEP);
$CEP2=$CEP1["CEP"];

$id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
$id1=@mysql_fetch_array($id);
$id2=$id1["codigo"];


echo'<div class="divBusca">

    <input type="search" name="CEP" id="CEP" class="txtBusca"  value="'.$CEP2.'" readonly=true/>
    <input type="hidden" name="id" id="id" value="'.$id2.'"/>';
    //echo $id2;
?>	
</div>
<br/>
<div class="divBusca2">
<input type="search" name="PESQ" id="PESQ" class="txtBusca" placeholder="Produto procurado"/>
<button type="submit" id="btnBusca" name="pesquisar" value="Localizar" style="margin-left:-31px;" onclick="ValidaCEPProduto();"/></button><!--<img src="../../OBJETOS/search4.png" width="40" height="25" id="imgBusca" alt="Buscar"/>-->
</div>
<br/>

<!--<input type="text" name="contato" value="" size="30"/><br/><br/>
<button type="submit" name="pesquisar" value="Localizar" />Localizar</button>| --><input type="reset" value="Limpar" name="limpar"/>
<br/><br/>
</form>
<?php





echo'</div></td></tr></table>';






echo'
<br/><br/>







<table style="background:'.$cor.'; width:1150px;  margin-top:0%; z-index:-90; border-radius:12px;">
<tr><td>';







error_reporting(0);
ini_set("display_errors", 0 );

$perfilAltera=str_replace(" ","_",$perfil1);
$perfilAltera1=strtolower($perfilAltera);


echo'</td></tr>';


$linhas=@mysql_num_rows($listar9);


if($linhas>0){
    
    $numeroMensagens=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='".$perfil."';",$conexao);
    $cont = mysql_num_rows($numeroMensagens); 
    //$numeroMensagens=@mysql_fetch_array($numeroMensagens["comentario"]);
    echo'<td width="125%" colspan="2"  valign="top" align="left" cellspacing="8">';
    echo'<br/><br/><div style="float:left; position:relative; width:260px; margin-left:10px;"><a name="mensagens"><b>MINHAS MENSAGENS</a>&nbsp;&nbsp;
    </div><div id="contadorMaior" style="float:left; position:relative; margin-top:20px; margin-left:-140px;
    padding:6px 0px 0px 16px;">';
    if($cont>=10){
        echo'<font color="white" >10 mensagens de '.$cont.'</font></div></b><br/><br/>';
    }else{
        echo'<font color="white" >'.$cont.' novas mensagens</font></div></b><br/><br/>';
    }
    //$nome=@mysql_result($listar9,$i);
    $i=0;
    for($i==0;$i<$linhas;$i++){
    echo '<tr><id ><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
    bgcolor="'.$cor.'" id="celula" height="50" align="left" >
    <form method="post" action="excluir.php"
    id="coluna"><font size="3" color="#0e3aa8" face="impact" style="text-transform:capitalize">
    <input type="text" name="sessao" value="'.str_replace("_"," ",$nome=@mysql_result($listar18,$i)).'" readonly="true"
    style="background:'.$cor.'; border:none; width:200px; height:40px; font-family:impact; color:#0e3aa8;
    font-size:20px;"/>
    <input type="text" name="data" value="'.@mysql_result($listar13,$i).' de '.@mysql_result($listar14,$i).' de '.@mysql_result($listar15,$i).'" readonly="true"
    style="background:'.$cor.'; border:none; width:400px; height:40px; font-family:calibri,arial; color:#0e3aa8;
    font-size:14px;"/><hr size="2%" align="right" width="88%" color="#a2c2f2"><input type="text"
    name="comentario" value="'.@mysql_result($listar10,$i).'" readonly="true"  style="background:'.$cor.';
     border:none; font-family:calibri; color:#136389; font-size:18px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="excluir" value="Apagar" style="float:right; margin-right:15px; border-radius:80px; background-color:white;"/></form>';
    echo'</font><br/><br/>';
    }
    }
    else{
    echo'';
    }
    echo'</td></tr>';
    
    
    
    echo'<tr><td colspan=3>';



error_reporting(0);
ini_set("display_errors", 0 );

$perfilAltera=str_replace(" ","_",$perfil1);
$perfilAltera1=strtolower($perfilAltera);

echo'<form name="remover" method="post" action="../../RemoverConta.php">
<input type="hidden" name="usuario" value="'.$perfilAltera;
echo'"/>';
echo'<input type="hidden" name="tabela" value="'.$perfilAltera1;
echo'"/>';
echo'<button type="submit" name="removerconta" value="RemoverConta" style="border-radius:15px; background:red; color:white;">Remover conta</button>
</form>';
echo'';



    echo'<p align="right"><img src="../../BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p></td></tr>';
    
    
    
    
    echo'<tr><td>';
    echo'</td></tr>';
    
    echo'<tr><td>';
    
    
    //echo $perfil;
    
    $sql = @mysql_query("SELECT _vitrine.* FROM _vitrine JOIN ".strtolower($perfil)." ON _vitrine.vendedor = ".strtolower($perfil).".contatos WHERE vendedor <> '$perfil' ORDER BY codigo DESC ;",$conexao);
    //$sql1 = @mysql_query("SELECT _acervos.* FROM _acervos JOIN ".strtolower($perfil)." ON _vitrine.vendedor = ".strtolower($perfil).".contatos WHERE vendedor <> '$perfil' ORDER BY codigo DESC ;",$conexao);
    //$sql=$sql.$sql1;
    //echo strtolower($perfil);
    $limite = @mysql_query($sql);
    $linhasOfertas = @mysql_num_rows($sql);
    //echo $linhasOfertas;
    //$limiteNum=@mysql_num_rows($limite);
    //$i=0;e
    //if(!$linhasOfertas){echo "erro";}
    if($linhasOfertas>0){
    echo'<div style="margin-left:30px;"><H2>OFERTA DE PRODUTOS</h2>';
    //or($i==0; $i<$limiteNum; $i++){}
        while($consulta = @mysql_fetch_array ($sql) ) {
            $arquivo = $consulta['imagem'];
            $nomeProduto = $consulta['nomeProduto'];
            $descricaoProduto = $consulta['Descricao'];
            $url = $consulta['url'];
            $PESQ=$consulta['nomeProduto'];
            $CEP=$consulta['CEP'];
            
            error_reporting(E_ALL);
            echo'<span style="float:left; position:relative; padding:23px 4px 4px 4px; font-weight:600; width:100%;" >
            <a href=../../'.$arquivo.'>
    <img src="../../'.$arquivo.'" width="90"  height="120" border="2" bordercolor="#FF6600" style=" position:relative; float:left; width:20%;  border-radius:10px; alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
            
    
    <div name="nomeDoProduto" style=" position:relative; float:left; width:20%; margin-left:10px; background:transparent; border:none; text-transform:uppercase; background:gold; border-radius:12px; height:40px; width:200px;"  >'.$nomeProduto.'</div>
    
    <div name="descricaoDoProduto" style=" position:relative; float:left; width:50%; margin-left:10px; border:none; text-transform:capitalize;background:gold; border-radius:12px; height:100px; width:300px; ">'.$descricaoProduto.'</div>
    
    <div name="url" style="position:relative; float:left; width:20%; margin-left:10px; background:transparent; border:none;" >
    ';
    $id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
    $id1=@mysql_fetch_array($id);
    $id2=$id1["codigo"];
    $idPedido=rand(0,6000).date("dmYHis");
   
    


    $CEP0=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
    $CEP1 = @mysql_fetch_array ($CEP0);
    $CEP=$CEP1["CEP"];
    //echo'
    
    /*COM FORM*/
    //<form name="produtos" method="get" action="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'">';
    
    
    
    /*echo'<input type="hidden" name="id" value="'.$id2.'"/>';
    echo'<input type="hidden" name="idPedido" value="'.$idPedido.'"/>';
    echo'<input type="hidden" name="PESQ" value="'.$PESQ.'"/>';
    echo'<input type="hidden" name="CEP" value="'.$CEP.'"/>';
    //echo'<input type="hidden" name="url" value="'.$url.'"/>';*/
    //echo'<button type="submit" name="comprar" value="Comprar" style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>';
    
    
    /*COM HREF*/
    echo'<a href="http://www.tele-tudo.com/produtos?CEP='.$CEP.'&PESQ='.$PESQ.'&Tpe=0&id='.$id2.'&idPedido='.$idPedido.'">
    <button type="button" name="comprar" value="Comprar"  style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>
    </a>';



    $selecionatipo=mysqli_query($iconexao,"SELECT tipo FROM _tudo WHERE tipo='fornecedor'");
    $selecionatipo=mysqli_fetch_assoc($selecionatipo);
    
    /*-------------------------------- ALTERADO EM 22-12-2018 ---------------------------*/
    //echo'<script src="../../js/incluiComentario.js"></script>';
    echo"<div style='padding:12px;'>";
    echo'<form name="comentario" method="POST" action="../../comentario_enviado.php">
        <input type="text" multiline name="comentario" id="comentario" value="" placeholder="Comente e pressione ENTER" style="width:200px; border:none; border-radius:6px; margin-left:20px; margin-top:10px;"/>
        <input type="hidden" name="perfil" id="perfil" value="'.$perfil.'" />
        <input type="hidden" name="nomeProduto" id="nomeProduto" value="'.$nomeProduto.'"/>
        <input type="hidden" name="tipo" id="tipo" value="'.$selecionatipo['tipo'].'"/>';
    
    
    echo'</form>';

         
$exibe_comentario=mysqli_query($iconexao,"SELECT * FROM _comentarios WHERE produto = '$nomeProduto' ORDER BY id DESC LIMIT 4 ");

       $exibe_comentario_linhas=mysqli_num_rows($exibe_comentario);
       //$exibe_comentario=mysql_fetch_assoc($exibe_comentario);
    if($exibe_comentario_linhas>0){
       while ($row = mysqli_fetch_assoc($exibe_comentario)){
           ////echo "<ul>";
           if($row['nome']==$perfil){echo "<span style='color:green; font-size:12px; list-style-type:none; margin-left:20px' >Voc&ecirc; disse:</span>";
           echo "<span style='color:white; list-style-type:none; font-size:12px; margin-left:20px; width:800px;'>".$row['comentario']."</span>";
           }
           else{
           echo "<span style='color:green; font-size:12px; list-style-type:none; margin-left:20px' >".ucwords(str_replace("_"," ",$row['nome']))."</span>";
           echo "<span style='color:white; list-style-type:none; font-size:12px; margin-left:20px; width:800px;'>".$row['comentario']."</span>";
           //echo "</ul>";
           }
           echo "<br/><br/>";
  
        }
    }
 echo"</div>";





echo'</div>';//fecha a div da url

}



/*-------------------------------- ALTERADO EM 22-12-2018 ---------------------------*/

    //echo'</form>';
    //ESSE É O FORM ORIGINAL DE ACIONAMENTO DA PAGINA
    /*<form name="produtos" method="post" action="../../obterDados.php">';
    //echo $perfil;
    $id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfil."';",$conexao);
    $id1=@mysql_fetch_array($id);
    $id2=$id1["codigo"];
    $idPedido=rand(0,9).date("dmYHis");
    
    echo'<input type="hidden" name="id2" value="'.$id2.'"/>';
    echo'<input type="hidden" name="idPedido" value="'.$idPedido.'"/>';
    echo'<input type="hidden" name="url" value="'.$url.'"/>';
    echo'<button type="submit" name="comprar" value="Comprar" style="float:right; margin-right:15px; margin-left;15px; border-radius:80px; background-color:white; width:80%;">Comprar</button>
    
    </form>*/
    
    echo'
    </div>
    </span>
    <br/><br/>
    ';
    }
 
    
    else{
        echo '<h3>ADICIONE PARCEIROS PARA QUE ELES MOSTREM SEUS PRODUTOS AQUI!</h3>';
    }
    






echo'</td></tr>';


echo'<tr><td>';



}

echo'<div style="opacity:0;">';//para esconder o />
echo '<input type="hidden" name="meuPerfil" id="meuPerfil" value='.$login.'/>';
echo '<input type="hidden" name="minhaSenha" id="minhaSenha" value='.$password.'/>';
echo'</div>';


}

?>
</td></tr></table>

<BR>
<BR>



<!--</table>-->


</main>
</div><!--row-->



<!--</div><!--container-->



</BODY>
</body>
</HTML>
