<?
	session_start();
	if (($_SESSION["sess_logado"] == "admin") or ($_SESSION["sess_logado"] == "professor")){	
	}else {
		header("Location: login.php");
	}
?>