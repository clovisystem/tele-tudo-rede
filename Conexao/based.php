<HTML>
<HEAD>
 <TITLE> - websystem - </TITLE>
</HEAD>
<BODY>
<?php
$conexao=@mysql_connect('localhost','root','');
@mysql_select_db('usuario',$conexao);
if(!($conexao))

{echo '<font color="black">falha</font>';}
?>

</BODY>
</HTML>
