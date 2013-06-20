<? 
	session_start();
	if(!(session_is_registered("email") AND session_is_registered("senha"))) {
		echo "<form name='autentica' action='restrito.php?erro=restrito' method='POST'>";
		echo "</form>";
		echo "<script language='javascript'>";
		echo " autentica.submit();";
		echo "</script>";
	} 
?>