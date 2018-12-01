<?php
include"based.php";
//$conexao=@mysqli_connect('localhost','root','','usuario');
  $notificacoes=@mysql_query("CREATE TABLE _notificacoes(
  codigo int(11) auto_increment primary key not null,
  contato varchar(80),
  perfil varchar(80),
  imagem  varchar(255)binary,
  dia varchar(30),
  mes varchar(30) ,
  tipo varchar(20));",$conexao);

  if($notificacoes)
  {
  echo 'A tabela foi criada';
  }
  else
  {
  echo 'Erro';
  }


  
?>






