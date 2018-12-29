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

<?
include "based.php";
?>
<script language="javascript">
function retirarAcento(objResp) {
var varString = new String(objResp.value);
var stringAcentos = new String('����������������������������');
var stringSemAcento = new String('aaeouaoaeioucuAAEOUAOAEIOUCU');
 
var i = new Number();
var j = new Number();
var cString = new String();
var varRes = '';
 
for (i = 0; i < varString.length; i++) {
cString = varString.substring(i, i + 1);
for (j = 0; j < stringAcentos.length; j++) {
if (stringAcentos.substring(j, j + 1) == cString){
cString = stringSemAcento.substring(j, j + 1);
}
}
varRes += cString;
}
objResp.value = varRes;
}
</script>
</HEAD>
<BODY style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >
<div class="container container-fluid  ">
<div class="row">

<main class="container container-fluid col-xs-12 " > 
<div align="right">
<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
</div>
<br/>
<style>
 font{color:#ad0a0a; font-weight:600;}
 input{color:black;}
 select{color:black;}
 textarea{color:black;}
 input.radio{cursor:hand;}
</style>

<style>
 a:visited{text-decoration:none; color:black;}
 a:link{text-decoration:none; color:black;}
 a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>


<body style="background-image:url('BACKGROUNDS/layoutprinc.gif'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;">


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
<?php
ini_set("default_charset","UTF-8");
?> 
<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>
<br/>
<br/>
</main>
</div><!--row-->



<div class="row">
<main  class="container container-fluid  col-xs-12 " > 
<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:20px; color:#ad0a0a; padding-top:16px; padding-left:10px;">INSCREVA-SE E FAÇA SUAS COMPRAS!</p></div>
<BR/><BR/>


<form method="post" enctype="multipart/form-data" name="IncluirUsuario" action="Incluir.php" >
<font face="tahoma" size=1>
<fieldset style="width:40%; border-radius:10px;">
<br/>

<script>
function exibeHobby(){
  var tipo=document.getElementById("tipo");
  
  if(tipo=="usuario"){
    document.getElementById("hobby").visible=true;
    document.getElementById("texto").visible=true;
  }
}


window.changeEvent = function(element, event){
  if(event.keyCode == 0){
    console.log("click event");
    //alert("click event");
  }else{
    console.log("keyboard event");
    //alert("keyboard event");
    event.preventDefault();
  }
}


$(document).ready(function() {
  $("input[name='tipo'").on('click', function() {
    if ($("#tipo").prop("checked", true)) {
      $("#hobby").prop("disabled", true);
    } else {
      $("#hobby").prop("disabled", false);
    }
  });
});
</script>
<div>Você é &nbsp;&nbsp;<input type="radio" name="tipo" value="fornecedor" id="tipo"  checked/>Fornecedor &nbsp;&nbsp;
<input type="radio" name="tipo" value="usuario" id="tipo" onclick="if(document.getElementById('hobby').style.visibility='hidden'){document.getElementById('hobby').style.visibility='visible'}"/>Usuário comum
</div>
<br/><br/>

<?php
$UserTT=$_POST['UserTT'];
//echo $UserTT;
?>
<input type="hidden" name="UserTT" size="16" id="UserTT"  value="<?php if(!isset($UserTT)){ echo $UserTT==str_replace("/","",date('d/m/y').rand(0,999)); }else{ echo $UserTT;} ?>


"/>Nome(T&iacute;tulo para o Perfil):<input type="text" name="tituloPerfil" value="" size="16" id="Estado" maxlength="48"  onchange="javascript:retirarAcento(this);" style="text-transform:uppercase;"/>&nbsp;&nbsp;<span style="color:green;">
</span><br/><br/>
Sobrenome(T&iacute;tulo para o Perfil):<input type="text" name="tituloPerfil1" value="" size="35" id="Estado" maxlength="68" onchange="javascript:retirarAcento(this);"  style="text-transform:uppercase;"/>&nbsp;&nbsp;<span style="color:green;">
</span><br/><br/>
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
<br/>
Senha:<input type="password" name="c_senha" id="c_senha" value="secret" size="20" onClick="javascript:this.value=''"/><br/>
<br/>
Redigite a senha:<input type="password" name="redigiteSenha" value="secret" size="20" onClick="javascript:this.value=''"/>  <br/>
<br/>
Estado:<input type="text" name="estado" id="estado" onClick="javascript:this.value=''" value=">>" size="4" maxlength="2" id="Estado" style="text-transform:uppercase;"/> <br/>
<br/>
Cidade:<input type="text" name="cidade" value="" size="30" id="Proper"  style="text-transform:capitalize;"/>  <br/>
<br/>
<script>

function formatar(documento,mascara){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)

    if (texto.substring(0,1) != saida){
        documentos += texto.substring(0,1);
    }
}
</script>
Telefone:<input type="tel" name="telefone" class="telefone" placeholder="(99)99999-9999" size="30" id="telefone" maxlength="15"   style="" onkeypress="formatar(this,'(##)###-###-###)';"  /><br/> 
<br/>
<script>
function SomenteNumero(e){
  var tecla=(window.event)?event.keyCode:e.which;
  if((tecla>47 && tecla<58)) 
  return true;
  else{
  if (tecla==8 || tecla==0) 
  return true;
  else  
  return false;
  }
 }
</script>
CEP:<input type="text" name="CEP" value="" size="30" id="CEP" placeholder="Ex.:90597070" maxlength=8 onkeypress="return SomenteNumero(event);" />  <br/>
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
<textarea  name="atividades"  cols="40" rows="6" scrolling="yes" maxlength="100" onClick="javascript:this.value=''">Qual o seu ramo?</textarea><br>
Texto do Perfil:<br>
<textarea name="textoPerfil"  cols="40" rows="6"scrolling="yes" maxlength="1500" onClick="javascript:this.value=''">Digite aqui o que voce quer exibir no seu perfil para seus clientes.</textarea><br>
<label style="visibility:hidden;" id="texto">Hobby:</label><br>
<textarea name="hobby" name="hobby" cols="40" rows="6" style="visibility:hidden;" id="hobby"scrolling="yes" maxlength="1500" onClick="javascript:this.value=''">O que você gosta de usar?</textarea><br>

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
    width:100%; background:#ad0a0a; border-radius:8px; font-size:20px; color:white;">
    <BR>
    <BR>


</div>
</span>
</form>
</main>



</BODY>
</HTML>
