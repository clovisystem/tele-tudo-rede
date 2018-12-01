
<?php
include "based.php";
$parceiro=$_GET["parceiro"];

if($parceiro=="excluido"){

        $contact=str_replace(" ","_",$_POST["contato"]);
        $exclui=@mysql_query("DELETE FROM _notificacoes WHERE contato = '".$contact."';",$conexao);
        

        if($exclui){
            echo"<script>alert('Parceiro ignorado'); history.go(-1);</script>"; 
            //echo $contact;
        }
        else{
            echo"<script>history.go(-1);</script>";
            //echo $contact;
        }
}


?>