<HTML>
<HEAD>
 <TITLE> - teletudo - </TITLE>
</HEAD>
<BODY>
<?php
/*$conexao=@mysql_connect('sql302.hyperphp.com','hp_18627480','9877xc');
@mysql_select_db('hp_18627480_usuario',$conexao);*/

$conexao=@mysql_connect('localhost','root','');
@mysql_select_db('teletudo',$conexao);

$iconexao=@mysqli_connect('localhost','root','','teletudo');






$conexaoDaRede=@mysql_connect('localhost','inton634_RPL','bdrede3753');
@mysql_select_db('inton634_rede',$conexao);

$iconexaoDaRede=@mysqli_connect('localhost','inton634_RPL','bdrede3753','inton634_rede');






if(!($conexao))

{echo '<font color="black">falha</font>';}
?>

</BODY>
</HTML>
