<?
	include ("db.php");	
	$login=$_POST['email']; // Recebe a variavel do form
	$senhacrip = $_POST['senha']; // Encripta a senha
	if($_POST['email'] == "" or $senhacrip == ""){
	echo "<script>alert('Erro: os campos e-mail ou senha estão em branco!');</script>";	
	echo "<meta http-equiv='refresh' content='0;URL=login.php'>";	
	} else {
	//verifica usuário
	if(!(empty($login) AND empty($senhacrip))) {

		//seleciona os dados da base
		$sql = "SELECT codigo, nome FROM curriculo WHERE email='$email' and senha='$senha'";
		$res=mysql_query($sql);
		$ident=mysql_fetch_array($res);
		//usuário existe -> registra as informações na sessão
		if(mysql_num_rows($res) > 0 ) {
			session_start(); //Inicializa a sessão
			$_SESSION["sess_codigo"] = mysql_result($res,0,"codigo");
			$_SESSION["nome_cand"] = mysql_result($res,0,"nome");
			$_SESSION["email"] = $login;
			$_SESSION["senha"] = $senhacrip;
			//$nivel = mysql_result($res,0,"usu_nivel");
			$data_acesso =  date('Y/m/d');
			$hora_acesso =  date('H:i:s');
			$ip_user = $_SERVER['REMOTE_ADDR'];  // pega o IP do navegante 
			$log_acesso = mysql_query("INSERT INTO log_acesso (usuario, data, hora, ip) VALUES ('".mysql_result($res,0,"nome")."', '$data_acesso', '$hora_acesso', '$ip_user')");
			  header("Location: principal.php");			   
					
		} else {
			echo "<script>alert('Erro: Login e Senha não conferem, tente novamente!');</script>";			
			echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
				}
			}
		}
?>