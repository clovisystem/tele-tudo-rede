<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 


<?php

$_SESSION['usuario']==$_POST["perfil"];

include("based.php");

$comentario=$_POST["comentario"];
$perfil=$_POST["perfil"];
$nomeProduto=$_POST["nomeProduto"];

 
 $exibe_comentario=mysqli_query($iconexao,"SELECT * FROM _comentarios WHERE produto = '$nomeProduto'");

 $exibe_comentario_linhas=mysqli_num_rows($exibe_comentario);
 $exibe_comentario=mysqli_fetch_assoc($exibe_comentario);

 if($exibe_comentario_linhas > 0){
     echo'<div class="alert alert-danger">Voc&ecirc; j&aacute; inseriu o coment&aacute;rio</div>';
 }
 else{
     $insere_comentario=mysqli_query($iconexao,"INSERT INTO _comentarios(nome,produto,comentario,notificacao) VALUES('$perfil','$nomeProduto','$comentario',1)");
 }

    echo str_replace("_"," ",$exibe_comentario["nome"]);
    echo "<br/>";
    echo strip_tags($exibe_comentario["comentario"]);

    echo"<br><br>";
    echo"<button type='button' name='voltar' onclick='history.go(-1);'>Voltar</button>";

 ?>