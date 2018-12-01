<?php


//usuarios

$conexao=mysqli_connect("localhost","root","","teletudo");
//@mysql_select_db(hp_18627480_usuario',$conexao);
$consulta=mysqli_query($conexao,"SELECT * FROM _users");


	  
	  
	 while($retorno=mysqli_fetch_object($consulta)){
	 $usuarios=$retorno -> tituloPerfil;
     $arquivo = 'ListarPerfil.php';
	 $arqMobile='mobile/mobilePerfil.php';
	$destino = 'usuarios/'.$usuarios.'/index.php';
	$destino1 = 'usuarios/'.$usuarios.'/mobilePerfil.php';
	$move = copy($arquivo, $destino);
	$move1= copy($arqMobile, $destino1);
	if($move){echo"movido";}else{echo"error";}
	}
	  
	
//fornecedores



	$conexao1=mysqli_connect("localhost","root","","teletudo");
	//@mysql_select_db(hp_18627480_usuario',$conexao);
	$consulta1=mysqli_query($conexao1,"SELECT * FROM _fornecedores");
	

		  
		  
		 while($retorno1=mysqli_fetch_object($consulta1)){
		 $usuarios1=$retorno1 -> tituloPerfil;
		 $arquivo1 = 'ListarPerfil.php';
		 $arqMobile1='mobile/mobilePerfil.php';
		$destinoFornecedor = 'empresas/'.$usuarios1.'/index.php';
		$destinoFornecedor1 = 'empresas/'.$usuarios1.'/mobilePerfil.php';
		$moveFornecedor = copy($arquivo1, $destinoFornecedor);
		$moveFornecedor1= copy($arqMobile1, $destinoFornecedor1);
		if($moveFornecedor){echo"movido";}else{echo"error";}
		}
		  