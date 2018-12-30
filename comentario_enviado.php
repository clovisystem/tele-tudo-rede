<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 


<?php


include("based.php");

$comentario=$_POST["comentario"];
$perfil=$_POST["perfil"];
$nomeProduto=$_POST["nomeProduto"];
//$login=$_POST["c_email"];
//$password=$_POST["c_senha"];
$tipo=$_POST["tipo"];
 




 $exibe_comentario=mysqli_query($iconexao,"SELECT * FROM _comentarios WHERE produto = '$nomeProduto' AND comentario ='$comentario'");

 $exibe_comentario_linhas=mysqli_num_rows($exibe_comentario);
 $exibe_comentario=mysqli_fetch_assoc($exibe_comentario);

 if($exibe_comentario_linhas > 0){
     echo'<div class="alert alert-danger">Voc&ecirc; j&aacute; inseriu o coment&aacute;rio</div>';
 }
 else{
    $insere_comentario=mysqli_query($iconexao,"INSERT INTO _comentarios(nome,produto,comentario,notificacao) VALUES('$perfil','$nomeProduto','$comentario',1)");

 }


 $exibe_comentario_exibe=mysqli_query($iconexao,"SELECT * FROM _comentarios WHERE produto = '$nomeProduto' AND nome ='$perfil'");
 
 $exibe_comentario_linhas_exibe=mysqli_num_rows($exibe_comentario_exibe);
        //$exibe_comentario=mysql_fetch_assoc($exibe_comentario);
     if($exibe_comentario_linhas_exibe>0){
        while ($row = mysqli_fetch_array($exibe_comentario_exibe)){
            
            echo "<li style='color:green; font-size:18px; list-style-type:none;' >".ucwords(str_replace("_"," ",$row['nome']))."</li>";
           
            echo "<span style='color:white; list-style-type:none; font-size:10px; margin-left:20px;' >".$row['comentario']."</span>";
           
            echo "<br/><br/>";
   
         }
     }


    /* 
    echo str_replace("_"," ",$exibe_comentario["nome"]);
    echo "<br/>";
    echo strip_tags($exibe_comentario["comentario"]);
     */
     if($tipo=="usuario"){
        $buscacredenciais=mysqli_query($iconexao,"SELECT * FROM _tudo WHERE tituloPerfil='$perfil'");
        $buscacredenciais=mysqli_fetch_assoc($buscacredenciais);
        $email=$buscacredenciais['email'];
        $email=explode("@",$email);
        $emailnome=$email[0];
        $emaildominio=$email[1];
        
        echo"<br><br>";
        echo"<form name='voltar' method='post' action='usuarios/".$perfil."/index.php?tipo=".$tipo."'>";
        echo"<input type='hidden' name='c_email' value='".$emailnome."'/>";
        echo"<input type='hidden' name='dominio' value='".$emaildominio."'/>";
        echo"<input type='hidden' name='c_senha' value='".base64_decode($buscacredenciais['senha'])."'/>";
        echo"<button type='submit' name='voltar'>Voltar ao usuario</button>";
        echo"</form>";
        
     }
     else{
        $buscacredenciais=mysqli_query($iconexao,"SELECT * FROM _tudo WHERE tituloPerfil='$perfil'");
        $buscacredenciais=mysqli_fetch_assoc($buscacredenciais);
        $email=$buscacredenciais['email'];
        $email=explode("@",$email);
        $emailnome=$email[0];
        $emaildominio=$email[1];
        echo"<br><br>";
        echo"<form name='voltar' method='post' action='empresas/".$perfil."/index.php?tipo=".$tipo."'>";
        echo"<input type='hidden' name='c_email' value='".$emailnome."'/>";
        echo"<input type='hidden' name='dominio' value='".$emaildominio."'/>";
        echo"<input type='hidden' name='c_senha' value='".base64_decode($buscacredenciais['senha'])."'/>";
        echo"<button type='submit' name='voltar'>Voltar ao usuario</button>";
        echo"</form>";
     }

 ?>