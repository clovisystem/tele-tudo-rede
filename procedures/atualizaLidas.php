<?php
           
      include("../based.php");
      
      extract($_POST);
      
      echo $nome=$_POST["nome"];

           
           
    @mysql_query("UPDATE _mensagens SET lida = 'sim' WHERE postar = '".strtoupper($nome)."'", $conexao);
