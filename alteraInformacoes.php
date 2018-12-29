<HTML>
<HEAD>
<TITLE> Tele-Tudo &lt;Rede Social&gt; </TITLE>
 <link rel="shortcut icon" href="TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
 <!--<link type="text/css" rel="stylesheet" href="Estilo.css"/>-->
 <meta name="viewport" content="width=200, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
 <script src="jquery-1.6.2.min.js"></script> 


</HEAD>
<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >


<div class="container container-fluid  ">
<div class="row">



<main class="container container-fluid col-xs-12 " > 


<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div align="right">
<div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
</div>
<br/>



<style>
 a:visited{text-decoration:none; color:black;}
 a:link{text-decoration:none; color:black;}
 a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>


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
<!--<legend>-->
<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:20px; color:#ad0a0a; padding-top:16px; padding-left:10px;">ALTERE SUAS INFORMAÇÕES AQUI!</p></div>

<!--<h1>LOGAR E COMPRAR NA REDE</h1>-->
<!--</legend>-->

<BR/>
<?php

 //@session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];

include "based.php";

//@session_start();
$meuPerfil=$_GET['meuPerfil'];
$tipo=$_GET['tipo'];

echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Index.php">
<input type="button" name="logoff" value="Fazer logoff" /></a>'.'|'.'
<input type="button" name="voltar" value="Voltar" onclick="history.go(-1)"/>';
$textoPerfil=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoPerfil=@mysql_fetch_array($textoPerfil);
$textoAtividades=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoAtividades=@mysql_fetch_array($textoAtividades);
$textoHobbies=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoHobbies=@mysql_fetch_array($textoHobbies);
$textoEstado=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoEstado=@mysql_fetch_array($textoEstado);
$textoEstado=$textoEstado["estado"];
$textoCidade=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoCidade=@mysql_fetch_array($textoCidade);
$textoCidade=$textoCidade["cidade"];;
$textoEmail=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoEmail=@mysql_fetch_array($textoEmail);
$textoEmail=$textoEmail["email"];
$textoTelefone=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoTelefone=@mysql_fetch_array($textoTelefone);
$textoTelefone=$textoTelefone["telefone"];
$textoCEP=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoCEP=@mysql_fetch_array($textoCEP);
$textoCEP=$textoCEP["CEP"];
$textoSenha=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoSenha=@mysql_fetch_array($textoSenha);
$textoSenha=$textoSenha["senha"];
$textoId=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoId=@mysql_fetch_array($textoId);
$textoId=$textoId["codigo"];
$textoIdUser=@mysql_query("SELECT * FROM _users WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoIdUser=@mysql_fetch_array($textoIdUser);
$textoIdUser=$textoIdUser["codigo"];
$textoIdForn=@mysql_query("SELECT * FROM _fornecedores WHERE tituloPerfil LIKE '%$meuPerfil%';",$conexao);
$textoIdForn=@mysql_fetch_array($textoIdForn);
$textoIdForn=$textoIdForn["codigo"];

$textoEmail=str_replace("@hotmail.com","",$textoEmail);
$textoEmail=str_replace("@outlook.com","",$textoEmail);
$textoEmail=str_replace("@gmail.com","",$textoEmail);
$textoEmail=str_replace("@yahoo.com","",$textoEmail);
$textoEmail=str_replace("@yahoo.com.br","",$textoEmail);
$textoEmail=str_replace("@globo.com","",$textoEmail);
$textoEmail=str_replace("@r7.com","",$textoEmail);
$textoEmail=str_replace("@uol.com.br","",$textoEmail);
$textoEmail=str_replace("@uol.com","",$textoEmail);
$textoEmail=str_replace("@bol.com","",$textoEmail);
$textoEmail=str_replace("@terra.com.br","",$textoEmail);
$textoEmail=str_replace("@ig.com","",$textoEmail);
$textoEmail=str_replace("@ig.com.br","",$textoEmail);


?>
<style>
label{
	color:#ad0a0a;
}
</style>

<br><br>



<?php
if($tipo=="usuario"){

 //echo  $textoIdUser;
 //echo  $textoId;
;

echo'
<form method="post" action="incluirTexto.php?tipo='.$tipo.'&confirmacao=PERFIL_ALTERADO">   <img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" 
height="60" align="right" id="body"/>';

echo'
<input type="hidden" name="textoId" value="'.$textoId.'"/><input type="hidden" name="textoIdUser" value="'.$textoIdUser.'"/>
<label>Texto do Perfil:</label><BR><textarea name="textoPerfil" cols="40" rows="8" wrap="on" scrolling="yes" >'.$textoPerfil["textoPerfil"].'</textarea>    <BR><BR>
<label>Minhas Atividades:</label><BR><textarea  name="textoAtividades"  cols="40" rows="8" wrap="on" scrolling="yes" >'.$textoAtividades["atividades"].'</textarea> <BR><BR>
<label>Do que gosto de usar:</label><BR><textarea  name="textoHobbies"  cols="40" rows="8" wrap="on" scrolling="yes" >'.$textoHobbies["hobby"].'</textarea>    <BR><BR>
<label>Estado:</label><input type="text"  name="textoEstado" size="6" maxlength="2" id="Estado" value="'.$textoEstado.'"/>  <BR><BR>
<label>Cidade:</label><input type="text"  name="textoCidade" size="30" id="Proper" value="'.$textoCidade.'"/>    <BR><BR>
<label>Senha:</label><input type="text"  name="textoSenha" size="30" value="'.$textoSenha.'" />    <BR><BR>
<label>Dia de anivers&aacute;rio:</label><select name="textoDia">
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
</select>    <BR><BR>
<label>M&ecirc;s:</label><select name="textoMes">
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
</select>   <BR><BR>
<label>Ano:</label><select name="textoAno">
<option value="2006" Selected>2006</option>
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
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
</select> <BR><br>

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

<label>Telefone:</label><input name="textoTelefone" maxlength="14" value="'.$textoTelefone.'" onkeypress="formatar(this,(##)###-###-###);"/>
<BR><br>

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

<label>CEP:</label><input name="textoCEP" maxlength="8" value="'.$textoCEP.'" onkeypress="return SomenteNumero(event);"/>';

/*while($textoStatus=mysql_fetch_array($textoStatus)){
            echo "<option value='".$textoStatus[status]."' select>".$textoStatus[status]."</option>";
        }
echo'
<option value="solteiro">Solteiro(a)</option>
<option value="namorando">Namorando</option>
<option value="casado">Casado(a)</option>
<option value="outro...">Outro...</option>
</select>*/

echo'<BR>   <BR>
<label>Digite seu E-mail:</label>  <BR>
<input type="text" value="'.$textoEmail.'" name="textoEmail" size="15" maxlength="40" id="Email"/><label>@</label>
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

<BR>
<BR>
<font color="green"><b>Informe seu e-mail corretamente para alterar seu perfil.</b> </font>
<BR>
<BR>
<input type="submit" name="confirmacao"  value="Confirmar"/>';
?>
</form>
<?php
}
?>

























<?php
if($tipo=="fornecedor"){

echo'
<form method="post" action="incluirTexto.php?tipo='.$tipo.'&confirmacao=PERFIL_ALTERADO">   <img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" 
height="60" align="right" id="body"/>';

echo'
<input type="hidden" name="textoId" value="'.$textoId.'"/><input type="hidden" name="textoIdForn" value="'.$textoIdForn.'"/>
<label>Texto do Perfil:</label><BR><textarea name="textoPerfil" cols="40" rows="8" wrap="on" scrolling="yes" value="'.$textoPerfil.'">'.$textoPerfil["textoPerfil"].'</textarea>    <BR><BR>
<label>Minhas Atividades:</label><BR><textarea  name="textoAtividades"  cols="40" rows="8" wrap="on" scrolling="yes" value="'.$textoAtvidades.'">'.$textoAtividades["atividades"].'</textarea> <BR><BR>
<label>Estado:</label><input type="text"  name="textoEstado" size="6" maxlength="2" id="Estado" value="'.$textoEstado.'"/>  <BR><BR>
<label>Cidade:</label><input type="text"  name="textoCidade" size="30" id="Proper" value="'.$textoCidade.'"/>    <BR><BR>
<label>Senha:</label><input type="text" name="textoSenha" size="30" value="'.$textoSenha.'"/>    <BR><BR>
<label>Dia de anivers&aacute;rio:</label><select name="textoDia">
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
</select>    <BR><BR>
<label>M&ecirc;s:</label><select name="textoMes">
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
</select>   <BR><BR>
<label>Ano:</label><select name="textoAno">
<option value="2012" Selected>2012</option>
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
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
</select> <BR><br>

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

<label>Telefone:</label><input name="telefone" maxlength="14" value="'.$textoTelefone.'" onkeypress="formatar(this,(##)###-###-###);"/>
<BR><br>

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

<label>CEP:</label><input name="CEP" maxlength="8" value="'.$textoCEP.'" onkeypress="return SomenteNumero(event);"/>';


/*while($textoStatus=mysql_fetch_array($textoStatus)){
            echo "<option value='".$textoStatus[status]."' select>".$textoStatus[status]."</option>";
        }
echo'
<option value="solteiro">Solteiro(a)</option>
<option value="namorando">Namorando</option>
<option value="casado">Casado(a)</option>
<option value="outro...">Outro...</option>
</select>*/

echo'<BR>   <BR>
<label>Digite seu E-mail: </label> <BR>
<input type="text" value="'.$textoEmail.'" name="textoEmail" size="15" maxlength="40" id="Email"/><label>@</label>
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

<BR>
<BR>
<font color="green"><b>Informe seu e-mail corretamente para alterar seu perfil.</b> </font>
<BR>
<BR>
<input type="submit" name="confirmacao"  value="Confirmar"/>';
?>
</form>
<?php
}
?>




</main>
</div><!--row-->
	  
    
</div><!--fechacontainer-->


</BODY>


</HTML>
