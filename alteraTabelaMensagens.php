<HTML>
<HEAD>
 <TITLE>- webSystem -</TITLE>
 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</HEAD>
<BODY>
<?
  include"base.php";
  
  $alteraMensagem=@mysql_query("ALTER TABLE mensagens ADD postando varchar(255);",$conexao);
  
  if($alteraMensagem)
  {echo"<script>alert('tabela alterada');</script>";}
  else
  {echo"<script>alert('falha');</script>";}
  
?>
</BODY>
</HTML>
