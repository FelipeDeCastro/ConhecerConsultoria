<?
	include ("../conn/conn_bd.php");	
	$login=$_POST['ed_usu_email']; // Recebe a variavel do form
	$senhacrip = md5($_POST['ed_usu_senha']); // Encripta a senha
	if($_POST['ed_usu_email'] == "" or $senhacrip == ""){
	echo "<center><br><br><font face='Verdana' color='#FF0000' size='2'><b>Erro:</b> os campos e-mail ou senha estão em branco!</font></center>";
	echo "<meta http-equiv='refresh' content='2;URL=login.php'>";	
	} else {
	//verifica usuário
	if(!(empty($login) AND empty($senhacrip))) {

		//seleciona os dados da base
		$sql = "SELECT * FROM usuario WHERE usu_email LIKE '$login' AND usu_senha LIKE '$senhacrip'";
		$res=mysql_query($sql);
		$ident=mysql_fetch_array($res);
		//usuário existe -> registra as informações na sessão
		if(mysql_num_rows($res) > 0 ) {
			session_start(); //Inicializa a sessão
			$_SESSION["usuario"] = mysql_result($res,0,"usu_nome");
			$_SESSION["senhacrip"] = mysql_result($res,0,"usu_senha");
			$_SESSION["usu_nivel"] = mysql_result($res,0,"usu_nivel");
			$_SESSION["id_empresa"] = mysql_result($res,0,"id_empresa");
			$nivel = mysql_result($res,0,"usu_nivel");
			$data_acesso =  date('Y/m/d');
			$hora_acesso =  date('H:i:s');
			$nivel = mysql_result($res,0,"usu_nivel");
			if ($nivel == "1"){
				$log_acesso = mysql_query("INSERT INTO log_acesso (usuario, data, hora) VALUES ('".mysql_result($res,0,"usu_nome")."', '$data_acesso', '$hora_acesso')");
			    header("Location: principal.php");			   
			}
			/*if ($nivel == "2"){
			   $log_acesso = mysql_query("INSERT INTO log_acesso (usuario, data, hora) VALUES ('".mysql_result($res,0,"usu_nome")."', '$data_acesso', '$hora_acesso')");
			   header("Location: principal.php?navega=21"); 			   
		    }			
			if ($nivel == "3"){
			   $log_acesso = mysql_query("INSERT INTO log_acesso (usuario, data, hora) VALUES ('".mysql_result($res,0,"usu_nome")."', '$data_acesso', '$hora_acesso')");
			   header("Location: principal.php?navega=19"); 		   
		    } */
		} else {
			echo "Erro: Login e Senha não conferem, tente novamente!";			
			echo "<meta http-equiv='refresh' content='2;URL=login.php'>";
				}
			}
		}
?>