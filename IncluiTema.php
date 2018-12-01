<HTML>
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
 <script language="javascript" src="AlteraTema.js"></script>
</HEAD>
<BODY bgcolor="#CCCCCC" id="corpo">

<?php
include"based.php";
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
$login=isset($_POST["emailPerfil"])?$_POST["emailPerfil"]:null;
$tipo=isset($_POST["tipo"])?$_POST["tipo"]:null;
/*$tipo=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
$tipo1=@mysql_fetch_array($tipo);
$tipo2=@$tipo1["tipo"];
echo $login;
echo $tema;*/

if($tipo=="usuario"){
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
$login=isset($_POST["emailPerfil"])?$_POST["emailPerfil"]:null;
$senha=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
$senha1=@mysql_fetch_array($senha);
$senha2=@$senha1["senha"];

$perfil=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
$perfil1=@mysql_fetch_array($perfil);
$perfil2=@$perfil1["tituloPerfil"];



if($tema){
$insereTema=@mysql_query("UPDATE _users SET background = '".$tema."' WHERE email LIKE'%".$login."%';",$conexao);
$insereTemaTudo=@mysql_query("UPDATE _tudo SET background = '".$tema."' WHERE email LIKE'%".$login."%';",$conexao);

echo'<input type="hidden" name="c_email" value='.$login.'/>';
echo'<input type="hidden" name="c_senha" value='.$senha2.'/>';
//echo'<script>alert("Alteracao realizada com sucesso! Atualize sua pagina para ver o resultado (tecla F5)."); location.href="usuarios/'.$perfil2.'/index.php?tipo=usuario"; </script>';
echo'<script>alert("Alteracao realizada com sucesso! Atualize sua pagina para ver o resultado (tecla F5)."); history.go(-1);</script>';


}else{
echo'<script>alert("A alteracao nao pode ser realizada."); history.go(-1);</script>';
}
}


















if($tipo=="fornecedor"){
    $tema=isset($_POST["tema"])?$_POST["tema"]:null;
    $login=isset($_POST["emailPerfil"])?$_POST["emailPerfil"]:null;
    $senha=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
    $senha1=@mysql_fetch_array($senha);
    $senha2=@$senha1["senha"];
    
    $perfil=@mysql_query("SELECT * FROM _tudo WHERE email='".$login."';",$conexao);
    $perfil1=@mysql_fetch_array($perfil);
    $perfilha2=@$perfil1["tituloPerfil"];
    
    if($tema){
    $insereTema=@mysql_query("UPDATE _fornecedores SET background = '".$tema."' WHERE email LIKE'%".$login."%';",$conexao);
    $insereTemaTudo=@mysql_query("UPDATE _tudo SET background = '".$tema."' WHERE email LIKE'%".$login."%';",$conexao);
    
    echo'<input type="hidden" name="c_email" value='.$login.'/>';
    echo'<input type="hidden" name="c_senha" value='.$senha2.'/>';
    //echo'<script>alert("Alteracao realizada com sucesso! Atualize sua pagina para ver o resultado (tecla F5)."); location.href="empresas/'.$perfil.'/index.php?tipo=usuario"; </script>';
    echo'<script>alert("Alteracao realizada com sucesso! Atualize sua pagina para ver o resultado (tecla F5)."); history.go(-1);</script>';
    
    }else{
    echo'<script>alert("A alteracao nao pode ser realizada."); history.go(-1);</script>';
    }
    }
?>
<!--<script language="javascript" src="AlteraTema.js">-->
<!--<button type="button" onclick="AlteraTema()">Voltar</button>-->
<!--<script>alert("Altera��o realizada com sucesso! Atualize sua p�gina para ver o resultado (tecla F5)."); history.go(-1);</script>-->