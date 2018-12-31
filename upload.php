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
 <div id="cabecalho" align="right" style="background:transparent; color:white; font-weight:bold;">


<?php
    include ("date.php");
?>


</div>
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

   //$nome = $_POST['nome'];
   $tipo = $_POST['tipo'];
   $tituloPerfil=$_POST['tituloPerfil'];

   if($tipo=="usuario"){
    $buscacredenciais=mysqli_query($iconexao,"SELECT * FROM _tudo WHERE tituloPerfil='$tituloPerfil'");
    $buscacredenciais=mysqli_fetch_assoc($buscacredenciais);
    $email=$buscacredenciais['email'];
    $email=explode("@",$email);
    $emailnome=$email[0];
    $emaildominio=$email[1];
    
    echo"<br><br>";
    echo"<form name='voltar' method='post' action='usuarios/".$tituloPerfil."/index.php?tipo=".$tipo."'>";
    echo"<input type='hidden' name='c_email' value='".$emailnome."'/>";
    echo"<input type='hidden' name='dominio' value='".$emaildominio."'/>";
    echo"<input type='hidden' name='c_senha' value='".base64_decode($buscacredenciais['senha'])."'/>";
    echo"<button type='submit' name='voltar'>Voltar ao usuario</button>";
    echo"</form>";
    
 }
 else{
    $buscacredenciais=mysqli_query($iconexao,"SELECT * FROM _tudo WHERE tituloPerfil='$tituloPerfil'");
    $buscacredenciais=mysqli_fetch_assoc($buscacredenciais);
    $email=$buscacredenciais['email'];
    $email=explode("@",$email);
    $emailnome=$email[0];
    $emaildominio=$email[1];
    echo"<br><br>";
    echo"<form name='voltar' method='post' action='empresas/".$tituloPerfil."/index.php?tipo=".$tipo."'>";
    echo"<input type='hidden' name='c_email' value='".$emailnome."'/>";
    echo"<input type='hidden' name='dominio' value='".$emaildominio."'/>";
    echo"<input type='hidden' name='c_senha' value='".base64_decode($buscacredenciais['senha'])."'/>";
    echo"<button type='submit' name='voltar'>Voltar ao usuario</button>";
    echo"</form>";
 }








echo "<div style='width:100%;'>";



/*------------ALTERADO EM 15/11/2018-------------------------*/

if($_POST["tipo"]=="usuario"){
$perfil=$_POST['tituloPerfil'];
/*------------ALTERADO EM 15/11/2018-------------------------*/


if($_FILES["arquivo"]["name"] ==""){
    
      
          echo "<h4 class='btn btn-danger'>Selecione uma foto de seu produto!</h4>";
          echo"oi";
  
      }
elseif ($_FILES["arquivo"] != "") {
    $arquivo = $_FILES["arquivo"];
    $arquivoExt=explode(".",$_FILES["arquivo"][name]);
    $extensao=$arquivoExt[1];
    if($extensao == "txt" || $extensao == "js" || $extensao == "php" || $extensao == "bat" || $extensao == "py" || $extensao == "exe" || $extensao == "inf" || $extensao == "ini"){
        echo "<h4 class='btn btn-danger'>Este tipo de arquivo n&atilde;o &eacute; permitido!</h4>";
        
        
    }
    else{



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
        $verifica = mysql_query("SELECT * FROM _vitrine WHERE vendedor = '".strtolower($tituloPerfil)."' AND nomeProduto = '".$_POST['nomeProduto']."';",$conexao); // inser��o sql na tabela recados
        

            
        //$verifica2=mysql_fetch_array($verifica);
        //$query2=@mysql_query($query1) or die (mysql_error());

    
      
        //@mysql_query($query) or die (mysql_error());
        if(mysql_num_rows($verifica) === 0){
            
            $query1 = mysql_query("INSERT INTO _vitrine (vendedor,nomeProduto,Descricao,imagem,url) VALUES ('".strtolower($tituloPerfil)."','$_POST[nomeProduto]','$_POST[descricaoProduto]','$arquivo_nome','$_POST[urlProduto]');",$conexao); // inser��o sql na tabela recados
            
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
            }//fecha o if de linhas ==1
            else{
                echo "<h4 class='btn btn-danger'>Voce ja inseriu esse produto.</h4>";
               
                   }
            
        
                @mysql_close();//fecha conex�o
                
    }

        /*------------ALTERADO EM 15/11/2018-------------------------*/

      


        echo "<center><form method='post' enctype='multipart/form-data' action=''>
        <a href='javascript:history.go(-1)'><input type='button' name='sair' value='Voltar' /></a>
        </form></center>";

        

        }//ffecha o else que valida o arquivo


    


}//fecha o usuario






































/*------------ALTERADO EM 15/11/2018-------------------------*/

if($_POST["tipo"]=="fornecedor"){
    $perfil=$_POST['tituloPerfil'];
/*------------ALTERADO EM 15/11/2018-------------------------*/
   

if($_FILES["arquivo"]["name"] ==""){
    
      
          echo "<h4 class='btn btn-danger'>Selecione uma foto de seu produto!</h4>";
          echo"oi";
  
      }
elseif ($_FILES["arquivo"] != "") {
    $arquivo = $_FILES["arquivo"];
    $arquivoExt=explode(".",$_FILES["arquivo"][name]);
    $extensao=$arquivoExt[1];
    if($extensao == "txt" || $extensao == "js" || $extensao == "php" || $extensao == "bat" || $extensao == "py" || $extensao == "exe" || $extensao == "inf" || $extensao == "ini"){
        echo "<h4 class='btn btn-danger'>Este tipo de arquivo n&atilde;o &eacute; permitido!</h4>";
        
        
    }
    else{



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




        //$query = "INSERT INTO _acervos (usuario,nomeProduto,Descricao,imagem,url) VALUES ('$tituloPerfil','$_POST[nomeProduto]','$_POST[descricaoProduto]','$arquivo_nome','$_POST[CEP]','$_POST[urlProduto]')"; // inser��o sql na tabela recados
        $verifica = mysql_query("SELECT * FROM _vitrine WHERE vendedor = '".strtolower($tituloPerfil)."' AND nomeProduto = '".$_POST['nomeProduto']."';",$conexao); // inser��o sql na tabela recados
        

            
        //$verifica2=mysql_fetch_array($verifica);
        //$query2=@mysql_query($query1) or die (mysql_error());

    
      
        //@mysql_query($query) or die (mysql_error());
        if(mysql_num_rows($verifica) === 0){
            
            $query1 = mysql_query("INSERT INTO _vitrine (vendedor,nomeProduto,Descricao,imagem,url) VALUES ('".strtolower($tituloPerfil)."','$_POST[nomeProduto]','$_POST[descricaoProduto]','$arquivo_nome','$_POST[urlProduto]');",$conexao); // inser��o sql na tabela recados
            
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
            }//fecha o if de linhas ==1
            else{
                echo "<h4 class='btn btn-danger'>Voce ja inseriu esse produto.</h4>";
               
                   }
            
        
                @mysql_close();//fecha conex�o
                
    }

        /*------------ALTERADO EM 15/11/2018-------------------------*/

      


        echo "<center><form method='post' enctype='multipart/form-data' action=''>
        <a href='javascript:history.go(-1)'><input type='button' name='sair' value='Voltar' /></a>
        </form></center>";

        

        }//ffecha o else que valida o arquivo


    


}//fecha o fornecedor




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


