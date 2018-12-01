<HTML>
<HEAD>
 <TITLE> - websystem - </TITLE>
</HEAD>
<BODY>
<?php
$conexao=@mysql_connect('localhost','user_websystem','987789987789');
mysql_select_db('usuario',$conexao);
if(!($conexao))

{echo '<font color="black">falha</font>';}
?>

</BODY>
</HTML>
