<?php




include("Localizacao/class.ipdetails.php");
ini_set("display_errors",0);
//$ip = $_SERVER['HTTP_CLIENT_IP']; //FUNCIONA EM LOCALHOST
$ip = $_SERVER['REMOTE_ADDR']; //FUNCIONA EM PRODUÇÃO
//$ip = get_client_ip();
//$ip = "179.158.169.221";
$ipdetails = new ipdetails($ip); 
$ipdetails->scan();
//echo "<b>IP:</b>        ".$ip                        ."<br />"; 
////echo "<b>País:</b>      ".$ipdetails->get_country()  ."<br />";
//echo "<b>Estado:</b>    ".$ipdetails->get_region()   ."<br />";
/*echo "<b>Cidade:</b>    ".*/$cidade=$ipdetails->get_city() ;
//echo "<b>Latitude:</b>  ".$ipdetails->get_latitude() ."<br />";
////echo "<b>Longitude:</b> ".$ipdetails->get_longitude()."<br />";
////echo "<b>Código país:</b> ".$ipdetails->get_countrycode()."<br />";
//echo "<b>Código continente:</b> ".$ipdetails->get_continentcode()."<br />";
//echo "<b>Código moeda:</b> ".$ipdetails->get_currencycode()."<br />";
//echo "<b>Símbolo moeda:</b> ".htmlspecialchars_decode($ipdetails->get_currencysymbol())."<br />";
//echo "<b>Cotação moeda (dólar):</b> ".$ipdetails->get_currencyconverter()."<br />";    

	$dia=date('d');
	$mes=date('n');
	$ano=date('Y');

	switch($mes){
		case '1': $mes="Janeiro"; break;
		case '2': $mes="Fevereiro"; break;
		case '3': $mes="Março"; break;
		case '4': $mes="Abril"; break;
		case '5': $mes="Maio"; break;
		case '6': $mes="Junho"; break;
		case '7': $mes="Julho"; break;
		case '8': $mes="Agosto"; break;
		case '9': $mes="Setembro"; break;
		case '10': $mes="Outubro"; break;
		case '11': $mes="Novembro"; break;
		case '12': $mes="Dezembro"; break;
	}
	
	echo ucwords($cidade).", ".$dia." de ".$mes." de ".$ano;



