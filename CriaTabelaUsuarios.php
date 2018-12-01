
<?php
include"based.php";
//$conexao=@mysqli_connect('localhost','root','','usuario');
  $user=@mysql_query("CREATE TABLE _users(
  codigo int(255) not null primary key auto_increment,
  tipo varchar(20),
  tituloPerfil varchar(60),
  email varchar(60),
  senha varchar(30),
  estado varchar(2),
  cidade varchar(40),
  dia integer(2),
  mes varchar(20),
  ano integer(4),
  atividades varchar(255),
  telefone varchar(255),
  hobby varchar(255),
  textoPerfil varchar(255),
  imagem varchar(255)binary,
  background varchar(255),
  CEP int(10));",$conexao);

  if($user)
  {
  echo 'A tabela foi criada';
  }
  else
  {
  echo 'Erro';
  }


  $fornecedor=@mysql_query("CREATE TABLE _fornecedores(
    codigo int(255) not null primary key auto_increment,
    tipo varchar(20),
    tituloPerfil varchar(60),
    email varchar(60),
    senha varchar(30),
    estado varchar(2),
    cidade varchar(40),
    dia integer(2),
    mes varchar(20),
    ano integer(4),
    atividades varchar(255),
    telefone varchar(255),
    textoPerfil varchar(255),
    imagem varchar(255)binary,
    background varchar(255),
	CEP int(10));",$conexao);
  
    if($fornecedor)
    {
    echo 'A tabela foi criada';
    }
    else
    {
    echo 'Erro';
    }
  


?>

