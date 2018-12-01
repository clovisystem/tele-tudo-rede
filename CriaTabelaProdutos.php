
<?php
include"based.php";
//$conexao=@mysqli_connect('localhost','root','','usuario');
  $fornecedor=@mysql_query("CREATE TABLE _produtos(
  codigo int(255) auto_increment primary key not null,
  fornecedor varchar(60),
  nomeProduto  varchar(255),
  Descricao varchar(255),
  imagem varchar(255) binary,
  url varchar(200));",$conexao);

  if($fornecedor)
  {
  echo 'A tabela foi criada';
  }
  else
  {
  echo 'Erro';
  }


  $user=@mysql_query("CREATE TABLE _acervos(
  codigo int(255) auto_increment primary key not null,
  usuario varchar(60),
  nomeProduto  varchar(255),
  Descricao varchar(255),
  imagem varchar(255) binary,
  url varchar(200));",$conexao);
  
    if($user)
    {
    echo 'A tabela foi criada';
    }
    else
    {
    echo 'Erro';
    }
  
  $vitrine=@mysql_query("CREATE TABLE _vitrine(
  codigo int(255) auto_increment primary key not null,
  vendedor varchar(60),
  nomeProduto  varchar(255),
  Descricao varchar(255),
  imagem varchar(255) binary,
  url varchar(200));",$conexao);
  
     if($vitrine)
    {
    echo 'A tabela foi criada';
    }
    else
    {
    echo 'Erro';
    }
?>

