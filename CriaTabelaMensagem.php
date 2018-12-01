<?php
//$conexao=@mysqli_connect('localhost','root','','usuario');
include"based.php";
$mensagem=@mysql_query("CREATE TABLE _mensagens(
id int(255) not null primary key auto_increment,
comentario varchar(255),
postar varchar(255),
sessao varchar(255),
diaDaSemana blob,
mes blob,
ano blob);",$conexao);

if($mensagem)
{ echo"<script>alert('tabela mensagens criada');</script>"; }
else
{ echo"<script>alert('falha');</script>"; }

?>