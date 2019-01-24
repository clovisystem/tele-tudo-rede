<?php

class teletudo{
 
        //public function __destruct(){
            //unset ($GLOBALS["cont0"]);
            //@mysql_query("UPDATE _mensagens SET lida = 'sim' WHERE postar = '".strtoupper($perfil)."';",$conexao);
        //}

        public $perfil;
        public $conexao;
        //public function confirmarrecebimento(){
        //  echo  "<br/>Confirmado o recebimento";
        //} 
        
        

        //public function exibe($perfil){
        //  echo "<br/>ola ".$perfil;
         
        //}  
        
        

        public function __construct($perfil){
            //unset ($GLOBALS["cont0"]);
            echo $perfil;
            //echo "sua conexao é ".$conexao;
            @mysql_query("UPDATE _mensagens SET lida = 'sim' WHERE postar = '".strtoupper($perfil)."'");
        }

    }