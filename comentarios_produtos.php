<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 


<?php



include("based.php");

//$comentario=$_POST["comentario"];
$perfilNotifica=$_POST["nome"];
$tipoParceiro=$_POST["tipoParceiro"];
//$nomeProduto=$_POST["nomeProduto"];

$exibe_comentario=mysqli_query($iconexao,"SELECT * FROM _comentarios JOIN ".$perfilNotifica." ON _comentarios.nome=".$perfilNotifica.".contatos WHERE ".$perfilNotifica.".contatos <> '".$perfilNotifica."' ORDER BY _comentarios.id DESC");












ini_set("Default_Charset","iso-8859-1");

$iphone=strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad=strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android=strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre=strpos($_SERVER['HTTP_USER_AGENT'],"WebOS");
$berry=strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod=strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian=strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

if($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian){
    while($row=mysqli_fetch_assoc($exibe_comentario)){
        echo"<div class='btn btn-success'>";
        echo $nome='<a href="linkContatosMobile .php?sessao='.$row['nome'].'&login='.$perfilNotifica.'&tipoParceiro='.$tipoParceiro.'">"><p style="color:yellow; font-size:18px; font-family:tahoma;">'.ucwords(str_replace("_"," ",$row["nome"]))."</p></a>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<p style='color:white; font-size:12px; font-family:arial;'>Envie uma mensagem para ".$row['nome']." clicando em se nome.</p><br/>";
        echo $comentario='<p style="color:white; font-size:14px; font-family:arial;">'.strip_tags($row["comentario"])."</p>";
        echo  "</div>";
        echo"<hr><br><br>";
    
        $desativa=mysqli_query($iconexao,"UPDATE _comentarios SET notificacao=0 WHERE nome ='".$row['nome']."'"); //MARCA NOTIFICAÇÃO COMO LIDA
    
    
    }


}
else{
    while($row=mysqli_fetch_assoc($exibe_comentario)){
        echo"<div class='btn btn-success'>";
        echo $nome='<a href="linkContatos.php?sessao='.$row['nome'].'&login='.$perfilNotifica.'&tipoParceiro='.$tipoParceiro.'">"><p style="color:yellow; font-size:18px; font-family:tahoma;">'.ucwords(str_replace("_"," ",$row["nome"]))."</p></a>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<p style='color:white; font-size:12px; font-family:arial;'>Envie uma mensagem para ".$row['nome']." clicando em se nome.</p><br/>";
        echo $comentario='<p style="color:white; font-size:14px; font-family:arial;">'.strip_tags($row["comentario"])."</p>";
        echo  "</div>";
        echo"<hr><br><br>";
    
        $desativa=mysqli_query($iconexao,"UPDATE _comentarios SET notificacao=0 WHERE nome ='".$row['nome']."'"); //MARCA NOTIFICAÇÃO COMO LIDA
  
    
    }


}




$buscacredenciais_tipo=mysqli_query($iconexao,"SELECT tipo FROM _tudo WHERE tituloPerfil='$perfilNotifica'");
$buscacredenciais_tipo=mysqli_fetch_assoc($buscacredenciais_tipo);
$tipo=$buscacredenciais_tipo['tipo'];


if($tipo=="usuario"){
    $buscacredenciais_notif=mysqli_query($iconexao,"SELECT * FROM _tudo WHERE tituloPerfil='$perfilNotifica'");
    $buscacredenciais_notif=mysqli_fetch_assoc($buscacredenciais_notif);
    $email=$buscacredenciais_notif['email'];
    $email=explode("@",$email);
    $emailnome=$email[0];
    $emaildominio=$email[1];
    
    echo"<br><br>";
    echo"<form name='voltar' method='post' action='usuarios/".$perfilNotifica."/index.php?tipo=".$tipo."'>";
    echo"<input type='hidden' name='c_email' value='".$emailnome."'/>";
    echo"<input type='hidden' name='dominio' value='".$emaildominio."'/>";
    echo"<input type='hidden' name='c_senha' value='".base64_decode($buscacredenciais_notif['senha'])."'/>";
    echo"<button type='submit' name='voltar'>Voltar ao usuario</button>";
    echo"</form>";
    
 }
 else{
    $buscacredenciais_notif=mysqli_query($iconexao,"SELECT * FROM _tudo WHERE tituloPerfil='$perfilNotifica'");
    $buscacredenciais_notif=mysqli_fetch_assoc($buscacredenciais_notif);
    $email=$buscacredenciais_notif['email'];
    $email=explode("@",$email);
    $emailnome=$email[0];
    $emaildominio=$email[1];
    echo"<br><br>";
    echo"<form name='voltar' method='post' action='usuarios/".$perfilNotifica."/index.php?tipo=".$tipo."'>";
    echo"<input type='hidden' name='c_email' value='".$emailnome."'/>";
    echo"<input type='hidden' name='dominio' value='".$emaildominio."'/>";
    echo"<input type='hidden' name='c_senha' value='".base64_decode($buscacredenciais_notif['senha'])."'/>";
    echo"<button type='submit' name='voltar'>Voltar ao usuario</button>";
    echo"</form>";
 }
    

 ?>