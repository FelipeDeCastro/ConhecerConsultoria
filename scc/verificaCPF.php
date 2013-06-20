<?php
//error_reporting(0);
session_start();
header("content-type: application/json; chaset=iso-8859-1");
header("expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("cache-control: no-cache, no-store, must-revalidate");
header("pragma: no-cache");  
include("admin/config.php");

if( empty($_POST["cpf"]) ){
    exit('{ "msg" : "<br />Por favor, digite seu CPF!" }');      
}

if (validaCPF($_POST["cpf"])) {
    //consultar e verificar se existe cpf
	
	$cpf = preg_replace( '#[^0-9]#', '', $_POST["cpf"] );
	
	$strQuery = mysql_query("SELECT codigo, nome, cpf FROM curriculo WHERE cpf = '$cpf' LIMIT 1");	
	$res =  mysql_num_rows($strQuery);
	
	if ( $res == 1 ){
		$_SESSION["cpfCandidato"] = mysql_result($strQuery,0,"cpf");
		$_SESSION["nomeCandidato"] = mysql_result($strQuery,0,"nome");
		exit('{ "msg" : "login" }');		
	} else {
		$_SESSION["cpfCandidato"] = $_POST["cpf"];
		exit('{ "msg" : "ok" }');
	}
}
else { 
    exit('{ "msg" : "<br />Este CPF &eacute; inv&aacute;lido!" }');   
}
?>