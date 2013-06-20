<?
	include ("config.php"); 
	session_start();
	$login = $_POST["login"];
	$pass = $_POST["pass"];
	if($login=="admin" AND $pass=="3962"){
		$_SESSION["sess_logado"] = "admin";
		header("Location: index.php");
	}else{	
		echo"<br><br><br><center><b>Nome ou Senha Invalidos!</b></center>";			
	}
?>