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

<link rel="shortcut icon" href="../../TELE-TUDO-LOGO/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="../../bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="../../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 

<?php
include"based.php";

$user=isset($_POST['usuario'])?$_POST['usuario']:null;;
$tabela=isset($_POST['tabela'])?$_POST['tabela']:null;;
$removeUser=@mysql_query("DELETE FROM _users WHERE tituloPerfil='$user';",$conexao);
$removetabela=@mysql_query("DROP TABLE $tabela;",$conexao);

$user=strtoupper($user);










$pasta = "usuarios/".$user."/";
i($pasta==null){
    
    $pastaForn = "empresas/".$user."/";

    if(is_dir($pastaForn))
    {
     $diretorioForn = dir($pastaForn);
   
     while($arquivoForn = $diretorioForn->read())
     {
      if(($arquivoForn != '.') && ($arquivoForn != '..'))
      {
       unlink($pastaForn.$arquivoForn);
       //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
      }
     }
   
     $diretorioForn->close();
     $removepasta=rmdir("empresas/".strtoupper($user));
     echo"<label class='btn btn-success'>Sua conta foi removida da rede</label>";
    }
    else
    {
     echo 'A conta nao existe.';
    }
   
}
else{
        if(is_dir($pasta))
        {
        $diretorio = dir($pasta);

        while($arquivo = $diretorio->read())
        {
        if(($arquivo != '.') && ($arquivo != '..'))
        {
            unlink($pasta.$arquivo);
            //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
        }
        }

        $diretorio->close();
        $removepasta=rmdir("usuarios/".strtoupper($user));
        echo"<label class='btn btn-success'>Sua conta foi removida da rede</label>";
        }
        else
        {
        echo 'A conta nao existe.';
        }
    }
//------------------------------------------------------------------------------------

 $pasta1 = "arquivos/usuarios/".strtolower($tabela)."/";
 i($pasta1==null){

    $pasta1Forn = "arquivos/empresas/".strtolower($tabela)."/";
    
        if(is_dir($pasta1Forn))
        {
         $diretorio1Forn = dir($pasta1Forn);
       
         while($arquivo1Forn = $diretorio1Forn->read())
         {
          if(($arquivo1Forn != '.') && ($arquivo1Forn != '..'))
          {
           unlink($pasta1Forn.$arquivo1Forn);
           //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
          }
         }
       
         $diretorio1Forn->close();
         $removeimagem=rmdir("arquivos/empresas".strtolower($tabela));
        }
        else
        {
         echo 'A conta nao existe.';
        }
       
    }
    else{

            if(is_dir($pasta1))
            {
            $diretorio1 = dir($pasta1);
        
            while($arquivo1 = $diretorio1->read())
            {
            if(($arquivo1 != '.') && ($arquivo1 != '..'))
            {
            unlink($pasta1.$arquivo1);
            //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
            }
            }
        
            $diretorio1->close();
            $removeimagem=rmdir("arquivos/usuarios".$tabela); 
            }
            else
            {
            echo 'A conta nao existe.';
            }

    }

 



/*$removepasta=rmdir("usuarios/".strtoupper($user));
$removeimagem=rmdir("arquivos/usuarios".$tabela); 

$removepasta=rmdir("empresas/".strtoupper($user));
$removeimagem=rmdir("arquivos/empresas".strtolower($tabela));


$removeimagembanco=@mysql_query("DELETE FROM _image WHERE tituloPerfil='$user';",$conexao);
$removemensagem=@mysql_query("DELETE FROM _mensagens WHERE sessao='$user';",$conexao);
*/


if($removeUser){
echo "<script>alert('Sua conta foi exclu�da.');location.href='index.php';</script>";
}else{
echo "<script>alert('Sua conta n�o p�de ser exclu�da.');history.go(-1);</script>";
}


?>
