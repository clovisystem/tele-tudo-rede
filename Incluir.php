<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=200, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
 <script src="jquery-1.6.2.min.js"></script> 
<HEAD>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
<?
include "based.php";

?>

<link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
 <style>
#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
</style>
</HEAD>
<BODY style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >

<div class="container container-fluid  ">
<div class="row">

<main class="container container-fluid col-xs-12 " > 

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


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
</div>
<br/>

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




<div class="row">
<main  class="container container-fluid  col-xs-12 " >
<?php
include "based.php";
  //@session_start();
  /*  $_SESSION['c_email'];
      $_SESSION['c_senha']; */


$email=isset($_POST['c_email'])?$_POST['c_email']:null;
$dominio=isset($_POST['dominio'])?$_POST['dominio']:null;
$senha=isset($_POST['c_senha'])?$_POST['c_senha']:null;
$tituloPerfil=isset($_POST['tituloPerfil'])?$_POST['tituloPerfil']:null;
$tituloPerfil=str_replace(" ","_",$tituloPerfil);
//$tituloPerfil=preg_replace('/[^[:alpha:]_]/', '',$tituloPerfil);
$tituloPerfil1=isset($_POST['tituloPerfil1'])?$_POST['tituloPerfil1']:null;
$tituloPerfil1=str_replace(" ","_",$tituloPerfil1);
//$tituloPerfil1=preg_replace('/[^[:alpha:]_]/', '',$tituloPerfil1);
$senhaDigitada=isset($_POST['c_senha'])?$_POST['c_senha']:null;
//$senhaDigitada=preg_replace('/[^[:alnum:]_]/', '',$senhaDigitada);
$senhaConfirmada=isset($_POST['redigiteSenha'])?$_POST['redigiteSenha']:null;
$email=$email."@".$dominio;
//$email=preg_replace('/[^[:alpha:]_]/', '',$email);





$Perfil=$tituloPerfil."_".$tituloPerfil1;











if($_POST["tipo"]=="usuario"){
        $pesq = @mysql_query("SELECT tituloPerfil FROM _tudo WHERE tituloPerfil = '".strtolower($Perfil)."';", $conexao);
		$mostra = @mysql_num_rows($pesq);
	if ( $mostra > 0 ) {
		echo "<script>alert(\"O nome que voce digitou ja existe em nosso banco de dados, tente outro.\");
		window.location = 'javascript:history.back(-1)';
		</script>";
    }
  
    }


    if($_POST["tipo"]=="fornecedor"){
        $pesq = @mysql_query("SELECT tituloPerfil FROM _tudo WHERE tituloPerfil = '$tituloPerfil';", $conexao);
		$mostra = @mysql_num_rows($pesq);
	if ( $mostra > 0 ) {
		echo "<script>alert(\"O nome que voce digitou ja existe em nosso banco de dados, tente outro.\");
		window.location = 'javascript:history.back(-1)';
		</script>";
    }
  
    }

  


if($senhaDigitada!=$senhaConfirmada or ($senhaDigitada == "" || $_POST['redigiteSenha'] == "" || $_POST['c_email'] 
== ""|| $_POST['tituloPerfil'] == ""|| $_POST['tituloPerfil1'] == ""|| $_POST['estado'] == ""|| 
$_POST['cidade'] == "" || $_POST['tipo'] == ""))
{echo '<body bgcolor="#CCCCCC"><BR><BR><font color="red"><b>'.$tituloPerfil.$tituloPerfil1.' ,nao pode ser cadastrado,
 reveja a sua senha ou se algum campo nao foi preenchido.</b></font></body>';
 echo"<form><input type='button'  value='Voltar' onclick='history.go(-1)'></form>";
 
		
}


	  

else
{

$incluiUsuario=strtoupper($_POST['tituloPerfil'])."_".strtoupper($_POST['tituloPerfil1']);
$incluiUsuario=str_replace("ç","C",$incluiUsuario);
}





function tirarAcentos($incluiUsuario){
    return preg_replace(array("/(�|�|�|�|�)/","/(�|�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�|�)/","/(�|�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�)/","/(�)/"),explode(" ","a A e E i I o O u U n N"),$incluiUsuario);
}

//echo tirarAcentos($incluiUsuario);

$incluiUsuario=str_replace(" ","_",$incluiUsuario);
$incluiUsuario=str_replace("Á","A",$incluiUsuario);
$incluiUsuario=str_replace("À","A",$incluiUsuario);
$incluiUsuario=str_replace("Ã","A",$incluiUsuario);
$incluiUsuario=str_replace("Â","A",$incluiUsuario);
$incluiUsuario=str_replace("É","E",$incluiUsuario);
$incluiUsuario=str_replace("È","E",$incluiUsuario);
$incluiUsuario=str_replace("Ê","E",$incluiUsuario);
$incluiUsuario=str_replace("Í","I",$incluiUsuario);
$incluiUsuario=str_replace("Ì","I",$incluiUsuario);
$incluiUsuario=str_replace("Î","I",$incluiUsuario);
$incluiUsuario=str_replace("Ó","O",$incluiUsuario);
$incluiUsuario=str_replace("Ò","O",$incluiUsuario);
$incluiUsuario=str_replace("Ô","O",$incluiUsuario);
$incluiUsuario=str_replace("Õ","O",$incluiUsuario);
$incluiUsuario=str_replace("Ú","U",$incluiUsuario);
$incluiUsuario=str_replace("Ù","U",$incluiUsuario);
$incluiUsuario=str_replace("Û","U",$incluiUsuario);
$incluiUsuario=str_replace("Ç","C",$incluiUsuario);


$incluiUsuario=str_replace("á","a",$incluiUsuario);
$incluiUsuario=str_replace("à","a",$incluiUsuario);
$incluiUsuario=str_replace("ã","a",$incluiUsuario);
$incluiUsuario=str_replace("â","a",$incluiUsuario);
$incluiUsuario=str_replace("é","e",$incluiUsuario);
$incluiUsuario=str_replace("è","e",$incluiUsuario);
$incluiUsuario=str_replace("ê","e",$incluiUsuario);
$incluiUsuario=str_replace("í","i",$incluiUsuario);
$incluiUsuario=str_replace("ì","i",$incluiUsuario);
$incluiUsuario=str_replace("î","i",$incluiUsuario);
$incluiUsuario=str_replace("ó","o",$incluiUsuario);
$incluiUsuario=str_replace("ò","o",$incluiUsuario);
$incluiUsuario=str_replace("ô","o",$incluiUsuario);
$incluiUsuario=str_replace("õ","o",$incluiUsuario);
$incluiUsuario=str_replace("ú","u",$incluiUsuario);
$incluiUsuario=str_replace("ù","u",$incluiUsuario);
$incluiUsuario=str_replace("û","u",$incluiUsuario);
$incluiUsuario=str_replace("ç","c",$incluiUsuario);


//$incluiUsuario=strtolower($incluiUsuario);



/*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/






    


    if($_POST["tipo"]=="usuario"){

        $telefone=$_POST['telefone'];
        $telefone1=substr($telefone,2,1);
        $celular=$telefone1;
        
        if($celular == 9 || $celular == 8 ||$celular == 7 || $celular == 6 ){

        if($mostra == 0){


        $resultado=@mysql_query("Insert into _users (tituloPerfil,email,senha,estado,cidade,dia,mes,ano,atividades,
        telefone,hobby,textoPerfil,imagem,background,tipo,CEP,USERTT)
        VALUES('".strtolower(str_replace(" ","_",$incluiUsuario))."','$email','".base64_encode($senhaDigitada)."',
        '$_POST[estado]','$_POST[cidade]',
        '$_POST[dia]','$_POST[mes]','$_POST[ano]','$_POST[atividades]','+55".$_POST['telefone']."','$_POST[hobby]',
        '$_POST[textoPerfil]','null','#ad0a0a','$_POST[tipo]','$_POST[CEP]'),'".now()._.rand()."';",$conexao);

        $resultado1=@mysql_query("Insert into _tudo (tituloPerfil,email,senha,estado,cidade,dia,mes,ano,atividades,
        telefone,hobby,textoPerfil,imagem,background,tipo,CEP,USERTT)
        VALUES('".strtolower(str_replace(" ","_",$incluiUsuario))."','$email','".base64_encode($senhaDigitada)."',
        '$_POST[estado]','$_POST[cidade]',
        '$_POST[dia]','$_POST[mes]','$_POST[ano]','$_POST[atividades]','+55".$_POST['telefone']."','$_POST[hobby]',
        '$_POST[textoPerfil]','null','#ad0a0a','$_POST[tipo]','$_POST[CEP]','".now()._.rand()."';",$conexao);
/*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/
        


$incluiUsuario=$tituloPerfil." ".$tituloPerfil1;
error_reporting(0);
ini_set("display_errors",0);
  /*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/
if($resultado){
    if($resultado1){
        echo '<body bgcolor="#CCCCCC"><BR><BR><form method="post" action="index.php"><font color="green"><b>'.str_replace("_"," ",$incluiUsuario).',cadastrado(a) com sucesso! </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<input onmouseover=this.style.cursor="hand" name="acessar" value="Acesse sua Conta" type="submit" 
        STYLE="border:0; height:18px;
        width:200px; background:#999999;"/ ></form>';
        echo'</body>';
    }
}
  /*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/
$TabelaPerfil=$tituloPerfil.'_'.$tituloPerfil1;
$TabelaPerfil=str_replace("ç","c",$TabelaPerfil);
//$TabelaPerfil=tirarAcentos($TabelaPerfil);
$TabelaPerfil=strtolower($TabelaPerfil);


$TabelaPerfil=str_replace("á","a",$TabelaPerfil);
$TabelaPerfil=str_replace("à","a",$TabelaPerfil);
$TabelaPerfil=str_replace("ã","a",$TabelaPerfil);
$TabelaPerfil=str_replace("â","a",$TabelaPerfil);
$TabelaPerfil=str_replace("é","e",$TabelaPerfil);
$TabelaPerfil=str_replace("è","e",$TabelaPerfil);
$TabelaPerfil=str_replace("ê","e",$TabelaPerfil);
$TabelaPerfil=str_replace("í","i",$TabelaPerfil);
$TabelaPerfil=str_replace("ì","i",$TabelaPerfil);
$TabelaPerfil=str_replace("î","i",$TabelaPerfil);
$TabelaPerfil=str_replace("ó","o",$TabelaPerfil);
$TabelaPerfil=str_replace("ò","o",$TabelaPerfil);
$TabelaPerfil=str_replace("õ","o",$TabelaPerfil);
$TabelaPerfil=str_replace("ô","o",$TabelaPerfil);
$TabelaPerfil=str_replace("ú","u",$TabelaPerfil);
$TabelaPerfil=str_replace("ù","u",$TabelaPerfil);
$TabelaPerfil=str_replace("û","u",$TabelaPerfil);
$TabelaPerfil=str_replace("ç","c",$TabelaPerfil);

$TabelaPerfil=str_replace(" ","_",$TabelaPerfil);
$TabelaPerfil=str_replace("Á","A",$TabelaPerfil);
$TabelaPerfil=str_replace("À","A",$TabelaPerfil);
$TabelaPerfil=str_replace("Ã","A",$TabelaPerfil);
$TabelaPerfil=str_replace("Â","A",$TabelaPerfil);
$TabelaPerfil=str_replace("É","E",$TabelaPerfil);
$TabelaPerfil=str_replace("È","E",$TabelaPerfil);
$TabelaPerfil=str_replace("Ê","E",$TabelaPerfil);
$TabelaPerfil=str_replace("Í","I",$TabelaPerfil);
$TabelaPerfil=str_replace("Ì","I",$TabelaPerfil);
$TabelaPerfil=str_replace("Î","I",$TabelaPerfil);
$TabelaPerfil=str_replace("Ó","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Ò","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Ô","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Õ","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Ú","U",$TabelaPerfil);
$TabelaPerfil=str_replace("Ù","U",$TabelaPerfil);
$TabelaPerfil=str_replace("Û","U",$TabelaPerfil);
$TabelaPerfil=str_replace("Ç","C",$TabelaPerfil);



$tabela=@mysql_query("CREATE TABLE ".$TabelaPerfil."(
codigo integer primary key auto_increment,
id varchar(255),
mensagens varchar(255),
imagem varchar(255)binary,
dia varchar(60),
mes varchar(60),
tipo varchar(20),
contatos varchar(70));",$conexao);

$criaPasta=mkdir("usuarios/".strtoupper($TabelaPerfil));

$arquivo_origem = "ListarPerfil.php";
$arquivoMobile_origem='mobile/mobilePerfil.php';
$arquivo_destino = "usuarios/".strtoupper($TabelaPerfil)."/index.php";


$arquivoMobile_destino = "usuarios/".strtoupper($TabelaPerfil)."/mobilePerfil.php";
$move = copy($arquivo_origem, $arquivo_destino);
$move1= copy($arquivoMobile_origem, $arquivoMobile_destino);
//copy($arquivo_origem, $arquivo_destino);



 $arquivo = $_FILES["arquivo"];
 $arquivo=str_replace(" ","_",$arquivo);
 //$arquivo=str_replace(" ","_",$arquivo);
 $pasta_dir = "arquivos/usuarios/".$TabelaPerfil."/";//diretorio dos arquivos
 //se nao existir a pasta ele cria uma
 if(!file_exists($pasta_dir)){
 mkdir($pasta_dir);
 }
 $arquivo_nome = $pasta_dir.$arquivo["name"];
 // Faz o upload da imagem
 move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
 $tituloPerfilMin=strtolower($TabelaPerfil);
 $tituloPerfilTrim=rtrim($tituloPerfilMin);
 $incluImagem="Insert into $tituloPerfilMin ($tituloPerfilMin.contatos,$tituloPerfilMin.imagem,$tituloPerfilMin.dia,$tituloPerfilMin.mes,$tituloPerfilMin.tipo)
 VALUES('$tituloPerfilMin.$tituloPerfilMin','$tituloPerfilMin.$arquivo_nome','$_POST[dia]','$_POST[mes]','$_POST[tipo]')";
 
 
 
 
 $incluImagem1 = "INSERT INTO $tituloPerfilMin (contatos,imagem,dia,mes,tipo) VALUES ('$tituloPerfilMin','$arquivo_nome','$_POST[dia]','$_POST[mes]','$_POST[tipo]')";
 $inserir1=@mysql_query( $incluImagem1 )or die (mysql_error());
 
 $id = mysql_insert_id();
 

/*-----------------------------ATUALIZADO EM 15-11-2018-------------------------------*/
 $incluImagem2 = "UPDATE _users SET imagem='$arquivo_nome' WHERE tituloPerfil='".$tituloPerfilMin."'";
 $inserir2=@mysql_query( $incluImagem2 )or die (mysql_error());
 
 
 $incluImagem3 = "UPDATE _tudo SET imagem='$arquivo_nome' WHERE tituloPerfil='".$tituloPerfilMin."'";
 $inserir3=@mysql_query( $incluImagem3)or die (mysql_error());
 
 
/*-----------------------------ATUALIZADO EM 15-11-2018-------------------------------*/
 
 
 @mysql_close();//fecha conex�o
 


}




}
else{
    
        echo "<script>alert('Informe um número de celular!'); setTimeout('history.go(-1);',3000);</script>";
    }
}
















































if($_POST["tipo"]=="fornecedor"){

    /*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/
    $telefone=$_POST['telefone'];
    $telefone1=substr($telefone,2,1);
    echo "<H1>".$celular=$telefone1."</H1>";
    
    if($celular == 9 || $celular == 8 ||$celular == 7 || $celular == 6 ){    

    if($mostra == 0){
    $resultado2=@mysql_query("Insert into _fornecedores (tituloPerfil,email,senha,estado,cidade,dia,mes,ano,atividades,
    telefone,textoPerfil,imagem,background,tipo,CEP,USERTT)
    VALUES('".strtolower(str_replace(" ","_",$incluiUsuario))."','$email','".base64_encode($senhaDigitada)."',
    '$_POST[estado]','$_POST[cidade]',
    '$_POST[dia]','$_POST[mes]','$_POST[ano]','$_POST[atividades]','+55".$_POST['telefone']."',
    '$_POST[textoPerfil]','null','#ad0a0a','$_POST[tipo]','$_POST[CEP]'),'".now()._.rand()."';",$conexao);

    $resultado3=@mysql_query("Insert into _tudo (tituloPerfil,email,senha,estado,cidade,dia,mes,ano,atividades,
    telefone,textoPerfil,imagem,background,tipo,CEP,USERTT)
    VALUES('".strtolower(str_replace(" ","_",$incluiUsuario))."','$email','".base64_encode($senhaDigitada)."a',
    '$_POST[estado]','$_POST[cidade]',
    '$_POST[dia]','$_POST[mes]','$_POST[ano]','$_POST[atividades]','+55".$_POST['telefone']."',
    '$_POST[textoPerfil]','null','#ad0a0a','$_POST[tipo]','$_POST[CEP]'),'".now()._.rand()."';",$conexao);

    /*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/


 
   

$incluiUsuario=$tituloPerfil." ".$tituloPerfil1;
error_reporting(0);
ini_set("display_errors",0);
  /*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/
if($resultado){
    if($resultado1){
        echo '<body bgcolor="#CCCCCC"><BR><BR><form method="post" action="index.php"><font color="green"><b>'.str_replace("_"," ",$incluiUsuario).',cadastrado(a) com sucesso! </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<input onmouseover=this.style.cursor="hand" name="acessar" value="Acesse sua Conta" type="submit" 
        STYLE="border:0; height:18px;
        width:200px; background:#999999;"/ ></form>';
        echo'</body>';
    }
}
  /*-----------------------------ATUALIZADO EM 17-11-2018-------------------------------*/

$TabelaPerfil=$tituloPerfil.'_'.$tituloPerfil1;
$TabelaPerfil=str_replace("ç","c",$TabelaPerfil);
//$TabelaPerfil=tirarAcentos($TabelaPerfil);
$TabelaPerfil=strtolower($TabelaPerfil);


$TabelaPerfil=str_replace("á","a",$TabelaPerfil);
$TabelaPerfil=str_replace("à","a",$TabelaPerfil);
$TabelaPerfil=str_replace("ã","a",$TabelaPerfil);
$TabelaPerfil=str_replace("â","a",$TabelaPerfil);
$TabelaPerfil=str_replace("é","e",$TabelaPerfil);
$TabelaPerfil=str_replace("è","e",$TabelaPerfil);
$TabelaPerfil=str_replace("ê","e",$TabelaPerfil);
$TabelaPerfil=str_replace("í","i",$TabelaPerfil);
$TabelaPerfil=str_replace("ì","i",$TabelaPerfil);
$TabelaPerfil=str_replace("î","i",$TabelaPerfil);
$TabelaPerfil=str_replace("ó","o",$TabelaPerfil);
$TabelaPerfil=str_replace("ò","o",$TabelaPerfil);
$TabelaPerfil=str_replace("õ","o",$TabelaPerfil);
$TabelaPerfil=str_replace("ô","o",$TabelaPerfil);
$TabelaPerfil=str_replace("ú","u",$TabelaPerfil);
$TabelaPerfil=str_replace("ù","u",$TabelaPerfil);
$TabelaPerfil=str_replace("û","u",$TabelaPerfil);
$TabelaPerfil=str_replace("ç","c",$TabelaPerfil);

$TabelaPerfil=str_replace(" ","_",$TabelaPerfil);
$TabelaPerfil=str_replace("Á","A",$TabelaPerfil);
$TabelaPerfil=str_replace("À","A",$TabelaPerfil);
$TabelaPerfil=str_replace("Ã","A",$TabelaPerfil);
$TabelaPerfil=str_replace("Â","A",$TabelaPerfil);
$TabelaPerfil=str_replace("É","E",$TabelaPerfil);
$TabelaPerfil=str_replace("È","E",$TabelaPerfil);
$TabelaPerfil=str_replace("Ê","E",$TabelaPerfil);
$TabelaPerfil=str_replace("Í","I",$TabelaPerfil);
$TabelaPerfil=str_replace("Ì","I",$TabelaPerfil);
$TabelaPerfil=str_replace("Î","I",$TabelaPerfil);
$TabelaPerfil=str_replace("Ó","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Ò","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Ô","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Õ","O",$TabelaPerfil);
$TabelaPerfil=str_replace("Ú","U",$TabelaPerfil);
$TabelaPerfil=str_replace("Ù","U",$TabelaPerfil);
$TabelaPerfil=str_replace("Û","U",$TabelaPerfil);
$TabelaPerfil=str_replace("Ç","C",$TabelaPerfil);


$tabelaFornecedor=@mysql_query("CREATE TABLE ".$TabelaPerfil."(
    codigo integer primary key auto_increment,
    id varchar(255),
    mensagens varchar(255),
    imagem varchar(255)binary,
    dia varchar(60),
    mes varchar(60),
    tipo varchar(20),
    contatos varchar(70));",$conexao);


    $criaPasta1=mkdir("empresas/".strtoupper($TabelaPerfil));
    
     $arquivo_origem1 = "ListarPerfil.php";
     $arquivoMobile_origem1='mobile/mobilePerfil.php';
     $arquivo_destino1 = "empresas/".strtoupper($TabelaPerfil)."/index.php";
     

     $arquivoMobile_destino1 = "empresas/".strtoupper($TabelaPerfil)."/mobilePerfil.php";
     $move2 = copy($arquivo_origem1, $arquivo_destino1);
     $move3= copy($arquivoMobile_origem, $arquivoMobile_destino);
     //copy($arquivo_origem, $arquivo_destino);











 $arquivo = $_FILES["arquivo"];
 $arquivo=str_replace(" ","_",$arquivo);
 $arquivo=str_replace(" ","_",$arquivo);
 $pasta_dir = "arquivos/empresas/".$TabelaPerfil."/";//diretorio dos arquivos
 //se nao existir a pasta ele cria uma
 if(!file_exists($pasta_dir)){
 mkdir($pasta_dir);
 }
 $arquivo_nome = $pasta_dir.$arquivo["name"];
 // Faz o upload da imagem
 move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
 $tituloPerfilMin=strtolower($TabelaPerfil);
 $tituloPerfilTrim=rtrim($tituloPerfilMin);
 $incluImagem="Insert into $tituloPerfilMin ($tituloPerfilMin.usuarios,$tituloPerfilMin.imagem,$tituloPerfilMin.dia,$tituloPerfilMin.mes,$tituloPerfilMin.tipo)
 VALUES('$tituloPerfilMin.$tituloPerfilMin','$tituloPerfilMin.$arquivo_nome','$_POST[dia]','$_POST[mes]','$_POST[tipo]')";
 
 
 
 
 $incluImagem4 = "INSERT INTO $tituloPerfilMin (contatos,imagem,dia,mes,tipo) VALUES ('$tituloPerfilMin','$arquivo_nome','$_POST[dia]','$_POST[mes]','$_POST[tipo]')";
 $inserir4=@mysql_query( $incluImagem1 )or die (mysql_error());
 
 $id = mysql_insert_id();
 

/*-----------------------------ATUALIZADO EM 15-11-2018-------------------------------*/

 $incluImagem5 = "UPDATE _fornecedores SET imagem='$arquivo_nome' WHERE tituloPerfil='".$tituloPerfilMin."'";
 $inserir5=@mysql_query( $incluImagem2 )or die (mysql_error());
 
 
 $incluImagem6 = "UPDATE _tudo SET imagem='$arquivo_nome' WHERE tituloPerfil='".$tituloPerfilMin."'";
 $inserir6=@mysql_query( $incluImagem3 )or die (mysql_error());
 
 
/*-----------------------------ATUALIZADO EM 15-11-2018-------------------------------*/

 
 @mysql_close();//fecha conex�o
 

}






}
else{
    
        echo "<script>alert('Informe um número de celular!'); setTimeout('history.go(-1);',3000);</script>";
    }




}






?>
<?php
ini_set("default_charset","utf-8");
echo'<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:20px; color:#ad0a0a; padding-top:16px; padding-left:10px;">INSCREVA-SE E FA&Ccedil;A SUAS COMPRAS!</p></div>';
?>
<BR/><BR/>

<form method="post" enctype="multipart/form-data" name="IncluirUsuario" action="Incluir.php" >
<font face="tahoma" size=1>
<fieldset style="width:40%; border-radius:10px;">
<br/>
<div>Você é &nbsp;&nbsp;<input type="radio" name="tipo" value="fornecedor" id="tipo" checked/><label for="fornecedor"> Fornecedor</label> &nbsp;&nbsp;<input type="radio" name="tipo" value="usuario" id="tipo"/><label for="usuario">  Usuário comum</label>
</div>
<br/><br/>

Nome(T&iacute;tulo para o Perfil):<input type="text" name="tituloPerfil" value="" size="16" id="Estado" maxlength="48"  onchange="javascript:retirarAcento(this);" style="text-transform:uppercase;"/>&nbsp;&nbsp;<span style="color:green;">
</span><br/>
Sobrenome(T&iacute;tulo para o Perfil):<input type="text" name="tituloPerfil1" value="" size="35" id="Estado" maxlength="68" onchange="javascript:retirarAcento(this);"  style="text-transform:uppercase;"/>&nbsp;&nbsp;<span style="color:green;">
</span><br/>
E-mail(Seu Login):<input type="text" name="c_email" value="" size="10" id="email"/>@
<select name="dominio">
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
<br/>
<!--@myweb.is-great.net<br/>-->
Senha:<input type="password" name="c_senha" id="c_senha" value="secret" size="20" onClick="javascript:this.value=''"/><br/>
Redigite a senha:<input type="password" name="redigiteSenha" value="secret" size="20" onClick="javascript:this.value=''"/>  <br/>
Estado:<input type="text" name="estado" id="estado" onClick="javascript:this.value=''" value=">>" size="4" maxlength="2" id="Estado" style="text-transform:uppercase;"/> <br/>
Cidade:<input type="text" name="cidade" value="" size="30" id="Proper"  style="text-transform:capitalize;"/>  
<br/>
Data de nascimento:<select name="dia">
<option value="01" Selected>01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="mes">
<option value="01" Selected>Janeiro</option>
<option value="02">Fevereiro</option>
<option value="03">Mar&ccedil;o</option>
<option value="04">Abril</option>
<option value="05">Maio</option>
<option value="06">Junho</option>
<option value="07">Julho</option>
<option value="08">Agosto</option>
<option value="09">Setembro</option>
<option value="10">Outubro</option>
<option value="11">Novembro</option>
<option value="12">Dezembro</option>
</select>
<select name="ano">
<option value="2011" Selected>2011</option>
<option value="2011">2015</option>
<option value="2011">2014</option>
<option value="2011">2013</option>
<option value="2011">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1980">1959</option>
<option value="1979">1958</option>
<option value="1978">1957</option>
<option value="1977">1956</option>
<option value="1976">1955</option>
<option value="1975">1954</option>
<option value="1974">1953</option>
<option value="1973">1952</option>
<option value="1972">1951</option>
<option value="1971">1950</option>
<option value="1970">1949</option>
<option value="1969">1948</option>
<option value="1968">1947</option>
<option value="1967">1946</option>
<option value="1966">1945</option>
<option value="1965">1944</option>
<option value="1964">1943</option>
<option value="1963">1942</option>
<option value="1962">1941</option>
<option value="1961">1940</option>
<option value="1960">1939</option>
<option value="1968">1938</option>
<option value="1967">1937</option>
<option value="1966">1936</option>
<option value="1965">1935</option>
<option value="1964">1934</option>
<option value="1963">1933</option>
<option value="1962">1932</option>
<option value="1961">1931</option>
<option value="1960">1930</option>
</select> <BR><br>

Atividades:<br/>
<textarea  name="atividades"  cols="40" rows="6" scrolling="yes" maxlength="100" onClick="javascript:this.value=''">O que voce faz?</textarea><br>
Hobby:<br>
<textarea name="hobby"  cols="40" rows="6" scrolling="yes" maxlength="100" onClick="javascript:this.value=''">De que voce gosta?</textarea><br>
Texto do Perfil:<br>
<textarea name="textoPerfil"  cols="40" rows="6"
scrolling="yes" maxlength="1500" onClick="javascript:this.value=''">Digite aqui o que voce quer exibir no seu perfil.</textarea><br>
Status:<select name="status">
<option value="solteiro" Selected>Solteiro(a)</option>
<option value="namorando">Namorando</option>
<option value="casado(a)">Casado(a)</option>
</select> 
<BR/>
</div>

<main  class="container container-fluid  col-xs-4 " >  
<div>
<br/><br/><br/><br/><h5 style="float:left;">Insira sua foto aqui !</h5>
<br/><br/><br/>
<p style="float:left;">Foto :</p><input name="arquivo" type="file"   value="Escolher arquivo"/>
<?php $tituloPerfil=isset($_POST['tituloPerfil'])?$_POST['tituloPerfil']:null; echo'<input name="nome" type="hidden" id="nome" value="'.$tituloPerfil.'"/>'; ?>

</fieldset>
</div>
</main>



<main  class="container container-fluid  col-xs-12 " > 
<br/><br/>
<span STYLE="width:50%; margin-left:130px;">
<div align="center">

    <input onmouseover=this.style.cursor="hand" name="cadastrar" value="Cadastre-se" type="submit" STYLE="border:0; height:48px;
    width:180px; background:#999999; border-radius:8px; font-size:20px;">
    <BR>
    <BR>


</div>
</span>
</form>
</main>
</div><!--row-->


</BODY>
</HTML>
