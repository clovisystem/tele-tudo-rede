<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
 
<div align="right">

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




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

<br/><br/>
<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="TELE-TUDO-LOGO/tele-tudo-logo.png" width="200" height="60" /></p></div>
</main>
</div><!--row-->


<div class="row">
<main  class="container container-fluid  col-xs-12 " > 
<br/><br/>
<!--<legend>-->
<div style="background-color:BLACK; border-radius:12px; width:100%; height:60px; "><p STYLE="width:100%; font-size:20px; color:#ad0a0a; padding-top:16px; padding-left:10px;">ALTERE SUA FOTO AQUI</p></div>

<!--<h1>LOGAR E COMPRAR NA REDE</h1>-->
<!--</legend>-->

<BR/>
<?php

ini_set("default_charset","UTF-8");

include"based.php";

// @session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];


$perfil=$_GET['perfil'];

$perfil=strtolower($perfil);

$tipo=$_GET["tipo"];





$sql0 = "SELECT imagem FROM $perfil WHERE contatos='$perfil'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];
echo'<div style="text-align:top; background:#CCCCCC; float:left; position:relative; padding:4px 4px 4px 4px;">Foto Principal
&nbsp;&nbsp;
<br/>';
echo'<a href='.$arquivo0.'>
<img src='.$arquivo0.' width="150"  height="180" border="2" bordercolor="#FF6600"/></a></div>';


}







$perfilMaiusc=strtoupper($perfil);

$localizaContato=@mysql_query("SELECT email FROM _tudo WHERE tituloPerfil LIKE'%$perfilMaiusc%';",$conexao);
echo'<form method="POST" enctype="multipart/form-data" action="" > ';


echo'Foto :<input name="arquivo" type="file" id="arquivo"  value="Escolher arquivo"/>
<input name="email" type="hidden" id="nome" value="';
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

echo '<input type="submit" name="Submit" value="Enviar Foto" />
 <br/>';

echo'</form></div></td></tr>';
//echo $tipo;







if($tipo=="usuario"){
    error_reporting(0);
    ini_set("display_errors",0);
    

    if ($_FILES["arquivo"] != "") {
    
    $arquivo = $_FILES["arquivo"];

    $arquivo=str_replace(" ","_",$arquivo);
    $arquivo=str_replace("%","_",$arquivo);
    $arquivo=str_replace("$","_",$arquivo);
    $arquivo=str_replace("(","_",$arquivo);
    $arquivo=str_replace(")","_",$arquivo);
    
    $pasta_dir = "arquivos/usuarios/$perfil/";//diretorio dos arquivos
    //se nao existir a pasta ele cria uma

    //unlink($pasta_dir.*);



    //$dir = 'images/';
	if(is_dir($pasta_dir))
	{
		if($handle = opendir($pasta_dir))
		{
			while(($file = readdir($handle)) !== false)
			{
				if($file != '.' && $file != '..')
				{
					if( $file != $arquivo)
					{
						unlink($pasta_dir.$file);
					}
				}
			}
		}
	}

    
    if(!file_exists($pasta_dir)){
    mkdir($pasta_dir);
    
    
    }
    


    

    $arquivo_nome = $pasta_dir . $arquivo["name"];
    
    // Faz o upload da imagem
    move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
    
    
    
    //conecta no banco
    
    $email = $_POST['email'];
    $tituloPerfil=$_POST['tituloPerfil'];
    $tituloPerfilMin=strtolower($tituloPerfil);
    
    
    
    $incluImagem1 = "UPDATE $tituloPerfilMin SET imagem='$arquivo_nome' WHERE contatos='$tituloPerfilMin'";
    $inserir1=@mysql_query( $incluImagem1 )or die (mysql_error());

    $perfilMaiusc=strtoupper($perfil);
    $incluImagem2 = "UPDATE _users SET imagem='$arquivo_nome' WHERE tituloPerfil='$perfilMaiusc'";
    $inserir2=@mysql_query( $incluImagem2 )or die (mysql_error());
    
    $incluImagem3 = "UPDATE _tudo SET imagem='$arquivo_nome' WHERE tituloPerfil='$perfilMaiusc'";
    $inserir3=@mysql_query( $incluImagem3 )or die (mysql_error());
    
    mysql_close();//fecha conex�o
    echo"<script>history.go(-2);</script>";




    
    $perfilMaiusc=strtoupper($perfil);

    $nomeOld=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfilMaiusc."';",$conexao);
    $nomeOld=@mysql_fetch_array($nomeOld);
    $nomeOld=$nomeOld["tituloPerfil"];
    $nomeOldMinusc=strtolower($nomeOld);

    $tabela=@mysql_query("SELECT * FROM _tudo;",$conexao);
    $nomeOldMinusc=strtolower($nomeOld);
   // echo $tabela3;
    echo $nomeOldMinusc;
    //echo $usuarioContato2;
    
    while($tabela1=@mysql_fetch_object($tabela)){
        $tabela2=$tabela1->tituloPerfil;
        $tabela3=strtolower($tabela2);
        //echo $tabela3;
        $usuarioContato=@mysql_query("SELECT * FROM $tabela3 WHERE contatos='$nomeOldMinusc';",$conexao);
        $usuarioContato1=@mysql_fetch_array($usuarioContato);
        $usuarioContato2=$usuarioContato1["tipo"];
    //echo $nomeOld;
        echo $perfil;
        //echo $usuarioContato2;
        //echo $perfil;
    //echo $usuarioContato2;
        //$perfilMinusc=strtolower($perfil);
        //echo $perfilMinusc;

        if($usuarioContato2=="usuario"){
          $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
          //$modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
          
/*
          if($modifica){
           
            echo "tabelas atualizadas";
          }
          else{
          
            echo"erro";
          }
          */
        }

        if($usuarioContato2=="fornecedor"){
          $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
          //$modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
          
        /*  
          if($modifica){
           
            echo "tabelas atualizadas";
          }
          else{
            
            echo"erro";
          }
        */
        }
        /*if($usuarioContato2=="fornecedor"){
          $modifica=@mysqli_query($connection,"UPDATE $tabela3 SET contatos='$novoPerfilCompleto' imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE contatos='$nomeOldMinusc';");
          echo $tabela3;
          echo "tabelas atualizadas";
        }
        else{
          echo"falha2";
        }*/
    }


    
}

}






















if($tipo=="fornecedor"){
    error_reporting(0);
    ini_set("display_errors",0);
    
    if ($_FILES["arquivo"] != "") {
    //rm "arquivos/empresas/$perfil/*";
    $arquivo = $_FILES["arquivo"];
    $arquivo=str_replace(" ","_",$arquivo);
    $arquivo=str_replace("%","_",$arquivo);
    $arquivo=str_replace("$","_",$arquivo);
    $arquivo=str_replace("(","_",$arquivo);
    $arquivo=str_replace(")","_",$arquivo);
    
    $pasta_dir = "arquivos/empresas/$perfil/";//diretorio dos arquivos
    //se nao existir a pasta ele cria uma
    

    if(is_dir($pasta_dir))
	{
		if($handle = opendir($pasta_dir))
		{
			while(($file = readdir($handle)) !== false)
			{
				if($file != '.' && $file != '..')
				{
					if( $file != $arquivo)
					{
						unlink($pasta_dir.$file);
					}
				}
			}
		}
	}

    
    if(!file_exists($pasta_dir)){
    mkdir($pasta_dir);
    
    }
    
    $arquivo_nome = $pasta_dir . $arquivo["name"];
    
    // Faz o upload da imagem
    move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
    
    
    
    //conecta no banco
    
    $email = $_POST['email'];
    $tituloPerfil=$_POST['tituloPerfil'];
    $tituloPerfilMin=strtolower($tituloPerfil);
    
    
    
    $incluImagem1 = "UPDATE $tituloPerfilMin SET imagem='$arquivo_nome' WHERE contatos='$tituloPerfilMin'";
    $inserir1=@mysql_query( $incluImagem1 )or die (mysql_error());
    
    $perfilMaiusc=strtoupper($perfil);
    $incluImagem2 = "UPDATE _fornecedores SET imagem='$arquivo_nome' WHERE tituloPerfil='$perfilMaiusc'";
    $inserir2=@mysql_query( $incluImagem2 )or die (mysql_error());
    
    $incluImagem3 = "UPDATE _tudo SET imagem='$arquivo_nome' WHERE tituloPerfil='$perfilMaiusc'";
    $inserir3=@mysql_query( $incluImagem3 )or die (mysql_error());

    mysql_close();//fecha conex�o
    echo"<script>history.go(-2);</script>";


    $perfilMaiusc=strtoupper($perfil);
    
        $nomeOld=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfilMaiusc."';",$conexao);
        $nomeOld=@mysql_fetch_array($nomeOld);
        $nomeOld=$nomeOld["tituloPerfil"];
        $nomeOldMinusc=strtolower($nomeOld);
    
        $tabela=@mysql_query("SELECT * FROM _tudo;",$conexao);
        $nomeOldMinusc=strtolower($nomeOld);
       // echo $tabela3;
        echo $nomeOldMinusc;
        //echo $usuarioContato2;
        
        while($tabela1=@mysql_fetch_object($tabela)){
            $tabela2=$tabela1->tituloPerfil;
            $tabela3=strtolower($tabela2);
            //echo $tabela3;
            $usuarioContato=@mysql_query("SELECT * FROM $tabela3 WHERE contatos='$nomeOldMinusc';",$conexao);
            $usuarioContato1=@mysql_fetch_array($usuarioContato);
            $usuarioContato2=$usuarioContato1["tipo"];
        //echo $nomeOld;
            echo $perfil;
            //echo $usuarioContato2;
            //echo $perfil;
        //echo $usuarioContato2;
            //$perfilMinusc=strtolower($perfil);
            //echo $perfilMinusc;
    
            if($usuarioContato2=="usuario"){
              $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
              //$modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
              
    /*
              if($modifica){
               
                echo "tabelas atualizadas";
              }
              else{
              
                echo"erro";
              }
              */
            }
    
            if($usuarioContato2=="fornecedor"){
              $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
              //$modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
              
            /*  
              if($modifica){
               
                echo "tabelas atualizadas";
              }
              else{
                
                echo"erro";
              }
            */
            }
            /*if($usuarioContato2=="fornecedor"){
              $modifica=@mysqli_query($connection,"UPDATE $tabela3 SET contatos='$novoPerfilCompleto' imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE contatos='$nomeOldMinusc';");
              echo $tabela3;
              echo "tabelas atualizadas";
            }
            else{
              echo"falha2";
            }*/
        }
    
}
?>
<?php
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head><title> - webystem - </title>
<style type='text/css'>
 #Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma; padding:21px;}
 #celula{padding:10px;}
 #celula1{padding:16px;}
 #Proper{text-transform:capitalize;}
 #corpo{padding:30px; font-family:tahoma;}
</style></head>
<body bgcolor='#CCCCCC' id='corpo'>

<center><font size='3'>Foto principal atualizada com sucesso";
//echo "</center><br/>";
//echo  "<img src='$arquivo_nome' width='250'><br/>$nome<br/> <br/>
echo"<center><form method='post' enctype='multipart/form-data' action=''>
<input type='button' name='sair' value='Voltar' onclick='history.go(-2)'/>
</form></a></center>
</body>
</html>";




}




 ?>
     <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>

	</main>
	</div><!--row-->
	  
    
</div><!--fechacontainer-->
</BODY>
</HTML>


