<?php
echo'
<form method="post" name="form" action="">
    <input type="text" name="encode" value=""/>
</form>';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $encode=$_POST["encode"];
    
    $encode=base64_encode($encode);
    
    echo "<br>".$encode;
}


?>