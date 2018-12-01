<html>
<head>
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
</head>
<BODY   style="background-image:url('BACKGROUNDS/Compras.jpg'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;"  >
<div class="container container-fluid  ">
<div class="row">



<main class="container container-fluid col-xs-12 " > 
<?php
include"based.php";
$perfil=$_GET['perfil'];
$tipo=$_GET['tipo'];
$perfilMaiusc=strtoupper($perfil);


if($tipo=="usuario"){
  if((empty($_POST['NovoPerfil']))||(empty($_POST['NovoPerfilSobrenome']))){
    echo"<script>alert('Voce deixou um campo em branco!'); history.go(-1);</script>";
    }
    
    //$mudar=isset($_POST['mudar'])?$_POST['mudar']:null;
    $novoPerfil=isset($_POST['NovoPerfil'])?$_POST['NovoPerfil']:null;
    $novoPerfil=str_replace(" ","_",$novoPerfil);
    $novoPerfilSobrenome=isset($_POST['NovoPerfilSobrenome'])?$_POST['NovoPerfilSobrenome']:null;
    $novoPerfilSobrenome=str_replace(" ","_",$novoPerfilSobrenome);
    $novoPerfilCompleto=strtolower($novoPerfil.'_'.$novoPerfilSobrenome);
    //$novoPerfil=str_replace(" ","_",$novoPerfil);
    //echo  $novoPerfilCompleto;
    
    //$novoPerfil1=str_replace(" ","_",$novoPerfil);
    $novoPerfilCompleto1=strtolower($novoPerfil.'_'.$novoPerfilSobrenome);
    $novoPerfilCompletoMaiusc=strtoupper($novoPerfilCompleto1);
    //$novoPerfil1=strtoupper($novoPerfil);
    //$novoPerfil1=str_replace(" ","_",$novoPerfil1);
    
    
    $nomeOld=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfilMaiusc."';",$conexao);
    $nomeOld=@mysql_fetch_array($nomeOld);
    $nomeOld=$nomeOld["tituloPerfil"];


    $caminho=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$nomeOld."';",$conexao);
    $caminho1=@mysql_fetch_array($caminho);
    $caminho2=$caminho1["imagem"];
    //echo $caminho2;
    $caminho3=explode("/",$caminho2);
    $caminho4=$caminho3[3];
    $caminho5=$caminho3[2];
    $nome=$perfil;
    $id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$nomeOld."';",$conexao);
    $id=@mysql_fetch_array($id);
    $id=$id["codigo"];

    $idUsers=@mysql_query("SELECT * FROM _users WHERE tituloPerfil='".$nomeOld."';",$conexao);
    $idUsers=@mysql_fetch_array($idUsers);
    $idUsers=$idUsers["codigo"];
    //echo $nome;
    //echo $id;
    //echo $caminho4;
    //$conta=@mysql_query("SELECT contatos FROM $novoPerfil WHERE contatos='$novoPerfil';",$conexao); 
    $perfil=$_GET['perfil'];
    $tabela=@mysql_query("SELECT * FROM _tudo;",$conexao);
    $nomeOldMinusc=strtolower($nomeOld);
    

    $alteraTabela=@mysql_query("RENAME TABLE $perfil To $novoPerfilCompleto;", $conexao);
    $alteraContato=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto' WHERE codigo=1;",$conexao);
 	
    //$alteraNome=@mysql_query("UPDATE _users SET tituloPerfil='$novoPerfilCompletoMaiusc' WHERE tituloPerfil ='".strtoupper($perfil)."';",$conexao);	
    //$alteraNome=@mysql_query("UPDATE _tudo SET tituloPerfil='$novoPerfilCompletoMaiusc' WHERE tituloPerfil ='".strtoupper($perfil)."';",$conexao);			
    

    $alteraNome=@mysql_query("UPDATE _users SET tituloPerfil='$novoPerfilCompletoMaiusc', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE codigo ='".$idUsers."';",$conexao);	
    $alteraNome=@mysql_query("UPDATE _tudo SET tituloPerfil='$novoPerfilCompletoMaiusc' , imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE codigo='".$id."';",$conexao);			
    

    $alteraMensagemSessao=@mysql_query("UPDATE _mensagens SET sessao='$novoPerfilCompletoMaiusc' WHERE sessao='".strtoupper($perfil)."';",$conexao);	
    $alteraMensagemPostar=@mysql_query("UPDATE _mensagens SET postar='$novoPerfilCompletoMaiusc' WHERE postar='".strtoupper($perfil)."';",$conexao);	
			
    //$alteraAcervo=@mysql_query("UPDATE _acervos SET usuario='".strtolower($novoPerfilCompletoMaiusc)."' WHERE usuario='".strtolower($perfil)."';",$conexao);	
    //$alteraVitrine=@mysql_query("UPDATE _vitrine SET vendedor='".strtolower($novoPerfilCompletoMaiusc)."' WHERE vendedor='".strtolower($perfil)."';",$conexao);	
    

    $alteraAcervo=@mysql_query("UPDATE _acervos SET usuario='$novoPerfilCompleto', imagem='acervos/$novoPerfilCompleto/$caminho5' WHERE usuario='".$nomeOldMinusc."';",$conexao);	
    $alteraVitrine=@mysql_query("UPDATE _vitrine SET vendedor='$novoPerfilCompleto', imagem='acervos/$novoPerfilCompleto/$caminho5' WHERE vendedor='".$nomeOldMinusc."';",$conexao);	
    
    ?>

    <?php
    //$connection=mysqli_connect("localhost","root","","teletudo");

    //$tabela=@mysqli_query($conection,"SELECT * FROM _tudo;");
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
        //$usuarioContato=@mysql_query("SELECT * FROM $tabela3 WHERE contatos='$novoPerfilCompleto';",$conexao);
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
          $modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
          

          if($modifica){
            //echo $novoPerfilCompleto;
            //echo $nomeOldMinusc;
            echo "tabelas atualizadas";
          }
          else{
            //echo $novoPerfilCompleto;
            //echo strtolower($nomeOld);
            echo"erro";
          }
        }

        if($usuarioContato2=="fornecedor"){
          $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
          $modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
          
          
          if($modifica){
            //echo $novoPerfilCompleto;
            //echo $nomeOldMinusc;
            echo "tabelas atualizadas";
          }
          else{
            /////echo $novoPerfilCompleto;
            //cho strtolower($nomeOld);
            echo"erro";
          }
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
    ?>

    <?php

    $pastaAntiga="usuarios/".$perfil."/";
    $pastaNova="usuarios/".$novoPerfilCompleto."/";
    rename($pastaAntiga,strtoupper($pastaNova));


    $acervoAntigo="acervos/".strtoupper($perfil)."/";
    $acervoNovo="acervos/".$novoPerfilCompleto."/";
    rename($acervoAntigo,strtoupper($acervoNovo));

    $arquivoAntigo="arquivos/usuarios/".$perfil."/";
    $arquivoNovo="arquivos/usuarios/".strtolower($novoPerfilCompleto)."/";
    rename($arquivoAntigo,$arquivoNovo);

      if($alteraTabela){
      echo"<script>alert('Contato ".str_replace("_"," ",$novoPerfilCompleto).", atualizado com sucesso! Favor logar novamente com seu e-mail e senha');location.href='index.php';</script>";}
      else{
      echo"<script>alert('Contato ".str_replace("_"," ",$novoPerfilCompleto).", nao pode ser atualizado!');  history.go(-2);</script>";}
      
}


























if($tipo=="fornecedor"){
  if((empty($_POST['NovoPerfil']))||(empty($_POST['NovoPerfilSobrenome']))){
    echo"<script>alert('Voce deixou um campo em branco!'); history.go(-1);</script>";
    }
    
    //$mudar=isset($_POST['mudar'])?$_POST['mudar']:null;
    $novoPerfil=isset($_POST['NovoPerfil'])?$_POST['NovoPerfil']:null;
    $novoPerfil=str_replace(" ","_",$novoPerfil);
    $novoPerfilSobrenome=isset($_POST['NovoPerfilSobrenome'])?$_POST['NovoPerfilSobrenome']:null;
    $novoPerfilSobrenome=str_replace(" ","_",$novoPerfilSobrenome);
    $novoPerfilCompleto=strtolower($novoPerfil.'_'.$novoPerfilSobrenome);
    //$novoPerfil=str_replace(" ","_",$novoPerfil);
    
    
    //$novoPerfil1=str_replace(" ","_",$novoPerfil);
    $novoPerfilCompleto1=strtolower($novoPerfil.'_'.$novoPerfilSobrenome);
    $novoPerfilCompletoMaiusc=strtoupper($novoPerfilCompleto1);
    //$novoPerfil1=strtoupper($novoPerfil);
    //$novoPerfil1=str_replace(" ","_",$novoPerfil1);
    
    
    
    //$conta=@mysql_query("SELECT contatos FROM $novoPerfil WHERE contatos='$novoPerfil';",$conexao); 
    $nomeOld=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$perfilMaiusc."';",$conexao);
    $nomeOld=@mysql_fetch_array($nomeOld);
    $nomeOld=$nomeOld["tituloPerfil"];


    $caminho=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$nomeOld."';",$conexao);
    $caminho1=@mysql_fetch_array($caminho);
    $caminho2=$caminho1["imagem"];
    //echo $caminho2;
    $caminho3=explode("/",$caminho2);
    $caminho4=$caminho3[3];
    $caminho5=$caminho3[2];
    $nome=$perfil;
    $id=@mysql_query("SELECT * FROM _tudo WHERE tituloPerfil='".$nomeOld."';",$conexao);
    $id=@mysql_fetch_array($id);
    $id=$id["codigo"];

    $idForn=@mysql_query("SELECT * FROM _fornecedores WHERE tituloPerfil='".$nomeOld."';",$conexao);
    $idForn=@mysql_fetch_array($idForn);
    $idForn=$idForn["codigo"];
    //echo $nome;
    //echo $id;
    //echo $caminho4;    
   
    $perfil=$_GET['perfil'];
    $tabela=@mysql_query("SELECT * FROM _tudo;",$conexao);
    $nomeOldMinusc=strtolower($nomeOld);


    
    $alteraTabela=@mysql_query("RENAME TABLE $perfil To $novoPerfilCompleto;", $conexao);
    $alteraContato=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto' WHERE codigo=1;",$conexao);	
    
    $alteraNome=@mysql_query("UPDATE _fornecedores SET tituloPerfil='$novoPerfilCompletoMaiusc', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE codigo ='".$idForn."';",$conexao);	
    $alteraNome=@mysql_query("UPDATE _tudo SET tituloPerfil='$novoPerfilCompletoMaiusc' , imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE codigo='".$id."';",$conexao);			
    

    $alteraMensagemSessao=@mysql_query("UPDATE _mensagens SET sessao='$novoPerfilCompletoMaiusc' WHERE sessao='".strtoupper($perfil)."';",$conexao);	
    $alteraMensagemPostar=@mysql_query("UPDATE _mensagens SET postar='$novoPerfilCompletoMaiusc' WHERE postar='".strtoupper($perfil)."';",$conexao);	
		

    //$alteraProduto=@mysql_query("UPDATE _produtos SET fornecedor='$novoPerfilCompletoMaiusc' WHERE fornecedor='".strtoupper($perfil)."';",$conexao);	
    //$alteraVitrine=@mysql_query("UPDATE _vitrine SET vendedor='".strtolower($novoPerfilCompletoMaiusc)."' WHERE vendedor='".strtolower($perfil)."';",$conexao);	
    
    $alteraAcervo=@mysql_query("UPDATE _produtos SET fornecedor='$novoPerfilCompletoMaiusc', imagem='produtos/$novoPerfilCompleto/$caminho5' WHERE fornecedor='".$nomeOldMinusc."';",$conexao);	
    $alteraVitrine=@mysql_query("UPDATE _vitrine SET vendedor='$novoPerfilCompletoMaiusc', imagem='arquivos/usuarios/$novoPerfilCompleto/$caminho5' WHERE vendedor='".$nomeOldMinusc."';",$conexao);	
    


    //$conection=mysqli_connect("localhost","root","","teletudo");
    
    $tabela=@mysql_query("SELECT * FROM _tudo;",$conexao);
    $nomeOldMinusc=strtolower($nomeOld);
   // echo $tabela3;
    echo $nomeOldMinusc;

    while($tabela1=@mysql_fetch_object($tabela)){
      $tabela2=$tabela1->tituloPerfil;
      $tabela3=strtolower($tabela2);
      //echo $tabela3;
      $usuarioContato=@mysql_query("SELECT * FROM $tabela3 WHERE contatos='".strtolower($nomeOld)."';",$conexao);
      //$usuarioContato=@mysql_query("SELECT * FROM $tabela3 WHERE contatos='$novoPerfilCompleto';",$conexao);
      $usuarioContato=@mysql_fetch_array($usuarioContato);
      $usuarioContato=$usuarioContato["tipo"];

      $perfilMinusc=strtolower($perfil);

      if($usuarioContato=="usuario"){
        $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto' imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
        $modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
        //echo $tabela3;
        echo "tabelas atualizadas";
      }
      else{
        echo"erro";
      }


      if($usuarioContato=="fornecedor"){
        $modifica=@mysql_query("UPDATE $tabela3 SET contatos='$novoPerfilCompleto' imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE contatos='".$nomeOldMinusc."';",$conexao);
        $modifica1=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto', imagem='arquivos/empresas/$novoPerfilCompleto/$caminho4' WHERE codigo=1;",$conexao);
        //echo $tabela3;
        echo "tabelas atualizadas";
      }
      else{
        echo"falha2";
      }
  }






    $pastaAntiga="empresas/".$perfil."/";
    $pastaNova="empresas/".$novoPerfilCompleto."/";
    rename($pastaAntigo,strtoupper($pastaNova));


    $produtoAntigo="produtos/".$perfil."/";
    $produtoNovo="produtos/".$novoPerfilCompleto."/";
    rename($produtoAntigo,strtoupper($produtoNovo));

    $arquivoAntigo="arquivos/empresas/".$perfil."/";
    $arquivoNovo="arquivos/empresas/".strtolower($novoPerfilCompleto)."/";
    rename($arquivoAntigo,$arquivoNovo);


      if($alteraTabela){
      echo"<script>alert('Contato ".str_replace("_"," ",$novoPerfilCompleto).", atualizado com sucesso! Favor logar novamente com seu e-mail e senha'); location.href='index.php';</script>";}
      else{
      echo"<script>alert('Contato ".str_replace("_"," ",$novoPerfilCompleto).", nao pode ser atualizado!');  history.go(-2);</script>";}
      
}
  
  
 ?>

</main>
</div><!--row-->
</div><!--container-->
 </body>
 </html>