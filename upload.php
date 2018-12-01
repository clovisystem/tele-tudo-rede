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
 <div class="container container-fluid  ">
<div class="row">



<main class="container container-fluid col-xs-12 " > 
 
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
day = " <b><tt>Ter&ccedil;a,</tt></b> "

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
month = "<b><tt> de Mar&ccedil;o de</tt></b> "

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

<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>

    <br>
    <br>
<?php
include"based.php";

 //@session_start();
   // $_SESSION['c_email'];
   // $_SESSION['c_senha'];










echo "<div style='width:100%;'>";



/*------------ALTERADO EM 15/11/2018-------------------------*/

if($_POST["tipo"]=="usuario"){
$perfil=$_POST['tituloPerfil'];
/*------------ALTERADO EM 15/11/2018-------------------------*/



if ($_FILES["arquivo"] != "") {
$arquivo = $_FILES["arquivo"];
$arquivo=str_replace(" ","_",$arquivo);
$pasta_dir = "acervos/".$perfil."/";//diretorio dos arquivos
//se nao existir a pasta ele cria uma


if(!file_exists($pasta_dir)){
mkdir($pasta_dir);

}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);



//conecta no banco

$nome = $_POST['nome'];
$tituloPerfil=$_POST['tituloPerfil'];




//$query = "INSERT INTO _acervos (usuario,nomeProduto,Descricao,imagem,url) VALUES ('$tituloPerfil','$_POST[nomeProduto]','$_POST[descricaoProduto]','$arquivo_nome','$_POST[CEP]','$_POST[urlProduto]')"; // inser��o sql na tabela recados


$query1 = "INSERT INTO _vitrine (vendedor,nomeProduto,Descricao,imagem,url) VALUES ('".strtolower($tituloPerfil)."','$_POST[nomeProduto]','$_POST[descricaoProduto]','$arquivo_nome','$_POST[urlProduto]')"; // inser��o sql na tabela recados

@mysql_query($query1) or die (mysql_error());
//@mysql_query($query) or die (mysql_error());



echo "  

<center><font size='3'>Foto enviada com sucesso";
echo "</center><br>";
echo  "<img src='$arquivo_nome' width='250'><br/>$nome<br/> <br/>";




/*------------ALTERADO EM 15/11/2018-------------------------*/
$minhaTabela=strtolower($tituloPerfil);
//echo $minhaTabela;
$telefone=@mysql_query("SELECT _tudo.telefone,_tudo.tituloPerfil FROM _tudo,".$minhaTabela." WHERE _tudo.tituloPerfil = ".$minhaTabela.".contatos;",$conexao) or die (mysql_error());
//$telefone0=@mysql_query($telefone) or die (mysql_error());
$telefone1=@mysql_fetch_array($telefone);
$telefone1=str_replace("(","",$telefone1);
$telefone1=str_replace(")","",$telefone1);
$telefone1=str_replace("-","",$telefone1);

$foneLinhas=@mysql_num_rows($telefone);
$foneLinhasMenos1=@mysql_num_rows($telefone)-1; //para exibir na pagina
$i=1;//começa do 1 pra nao pegar o seu contato proprio
//echo "<form name='enviaZap' method='post' action='https://api.whatsapp.com/send?phone=55".$telefone1."&text=Você+tem+um+novo+produto+(".$produto.")+a+venda+na+Rede+Social+do+Tele-Tudo!'>";
//echo "<form name='enviaZap' method='post' action='https://api.whatsapp.com/send?phone=55".$telefone1."&text=Você+tem+um+novo+produto+(".$produto.")+a+venda+na+Rede+Social+do+Tele-Tudo!'>";
echo "<h1>Enviando para seus ".$foneLinhasMenos1." clientes</h1>"; 
$produto=$_POST["nomeProduto"];
if($foneLinhas > 1){
    for($i==0;$i<$foneLinhas;$i++){
        echo "<form name='enviaZap' method='post' action='Whatsapp.php'>";
        $enviandoNome=ucwords(@mysql_result($telefone,$i,tituloPerfil));
        //$enviandoNome=explode("_",$enviandoNome);
        //$enviandoNome1=explode("_",$enviandoNome);
        //$enviandoNome2="";
        //$enviandoNome2=$enviandoNome1[0]."-".$enviandoNome1[1];
        //$zero=' ';
        echo "<div style='border-radius:8px; background-color:white; color:green;'><h3><input type='text' readonly='true' name='contato' style='border:none; background:transparent; width:30%;' value=".$enviando=@mysql_result($telefone,$i,telefone)."-".$enviandoNome.">";
        //echo "<input type='text' readonly='true' name='contatoNome' style='border:none; background:transparent;' value=".$enviandoNome=@mysql_result($telefone,$i,tituloPerfil)."/>";
        echo "<input type='hidden' name='produto' value=".$produto." />";
        echo "<input type='submit' style='border-radius:8px; background:green; color:white; margin-left:15%;'value='Enviar Whatsapp' /></h3></div>";
        //echo $telefone1["telefone"];
        //echo @mysql_result($telefone1,telefone,$i);
        echo "</form>";
        echo "<br/>";
    }
}

/*------------ALTERADO EM 15/11/2018-------------------------*/


@mysql_close();//fecha conex�o


echo "<center><form method='post' enctype='multipart/form-data' action=''>
<a href='javascript:history.go(-1)'><input type='button' name='sair' value='Voltar' /></a>
</form></center>";



}



}



























/*------------ALTERADO EM 15/11/2018-------------------------*/

if($_POST["tipo"]=="fornecedor"){
    $perfil=$_POST['tituloPerfil'];
/*------------ALTERADO EM 15/11/2018-------------------------*/
   


    if ($_FILES["arquivo"] != "") {
    $arquivo = $_FILES["arquivo"];
    $arquivo=str_replace(" ","_",$arquivo);
    $pasta_dir = "produtos/".$perfil."/";//diretorio dos arquivos
    //se nao existir a pasta ele cria uma
    
    
    if(!file_exists($pasta_dir)){
    mkdir($pasta_dir);
    
    }
    
    $arquivo_nome = $pasta_dir . $arquivo["name"];
    
    // Faz o upload da imagem
    move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
    
    
    
    //conecta no banco
    
    $nome = $_POST['nome'];
    $tituloPerfil=$_POST['tituloPerfil'];
    

  

    //$query = "INSERT INTO _produtos (fornecedor,nomeProduto,Descricao,url,imagem) VALUES ('$tituloPerfil','$_POST[nomeProduto]','$_POST[descricaoProduto]','$_POST[urlProduto]','$arquivo_nome')"; // inser��o sql na tabela recados
    
    $query1 = "INSERT INTO _vitrine (vendedor,nomeProduto,Descricao,imagem,url) VALUES ('".strtolower($tituloPerfil)."','$_POST[nomeProduto]','$_POST[descricaoProduto]','$arquivo_nome','$_POST[urlProduto]')"; // inser��o sql na tabela recados
    

    @mysql_query($query1) or die (mysql_error());


    /*$resultado=@mysql_query("Insert into _produtos (fornecedor,nomeProduto,Descricao)
    VALUES('".strtoupper(str_replace(" ","_",$incluiUsuario))."','$_POST[nomeProduto]','$_POST[descricaoProduto]');",$conexao);
    */
    //@mysql_query($query) or die (mysql_error());

    


    echo "
    
    <center><font size='3'>Foto enviada com sucesso";
    echo "</center><br>";
    echo  "<img src='$arquivo_nome' width='250'><br/>$nome<br/> <br/>";
    


/*------------ALTERADO EM 15/11/2018-------------------------*/
$minhaTabela=strtolower($tituloPerfil);
//echo $minhaTabela;
$telefone=@mysql_query("SELECT _tudo.telefone FROM _tudo,".$minhaTabela." WHERE _tudo.tituloPerfil = ".$minhaTabela.".contatos;",$conexao) or die (mysql_error());
//$telefone0=@mysql_query($telefone) or die (mysql_error());
$telefone1=@mysql_fetch_array($telefone);
$telefone1=str_replace("(","",$telefone1);
$telefone1=str_replace(")","",$telefone1);
$telefone1=str_replace("-","",$telefone1);

$foneLinhas=@mysql_num_rows($telefone);
$i=1;//começa do 1 pra nao pegar o seu contato proprio
//echo "<form name='enviaZap' method='post' action='https://api.whatsapp.com/send?phone=55".$telefone1."&text=Você+tem+um+novo+produto+(".$produto.")+a+venda+na+Rede+Social+do+Tele-Tudo!'>";
//echo "<form name='enviaZap' method='post' action='https://api.whatsapp.com/send?phone=55".$telefone1."&text=Você+tem+um+novo+produto+(".$produto.")+a+venda+na+Rede+Social+do+Tele-Tudo!'>";
echo "<h1>Enviando para seus ".$foneLinhas." clientes</h1>"; 
$produto=$_POST["nomeProduto"];
if($foneLinhas > 1){
        for($i==0;$i<$foneLinhas;$i++){
            echo "<form name='enviaZap' method='post' action='Whatsapp.php'>";
            echo "<h3><input type='text' readonly='true' name='contato' style='border:none; background:transparent; width:30%;' value=".$enviando=@mysql_result($telefone,$i,telefone)."-".$enviandoNome=@mysql_result($telefone,$i,tituloPerfil)."></h3>";
            //echo "<input type='text' readonly='true' name='contatoNome' style='border:none; background:transparent;' value=".$enviandoNome=@mysql_result($telefone,$i,tituloPerfil)."/>";
            echo "<input type='hidden' name='produto' value=".$produto." />";
            echo "<input type='submit' style='border-radius:8px; background:green; color:white; margin-left:10%;'value='Enviar Whatsapp' />";
            //echo $telefone1["telefone"];
            //echo @mysql_result($telefone1,telefone,$i);
            echo "</form>";
            echo "<br/>";
        }
    }


/*------------ALTERADO EM 15/11/2018-------------------------*/


@mysql_close();//fecha conex�o


    echo "<center><form method='post' enctype='multipart/form-data' action=''>
    <a href='javascript:history.go(-1)'><input type='button' name='sair' value='Voltar' /></a>
    </form></center>
";




    }

}








?>

     <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>
</div>
    </main><!--row-->
	  
    
</div><!--fecharow-->
</div><!--fechacontainer-->
 </BODY>
</HTML>


