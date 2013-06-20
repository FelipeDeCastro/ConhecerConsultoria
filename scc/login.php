<?php
/**
*Area Administrativa SCC
*@author Michael Colla <michael.colla@mkinformatica.net>
*@version 1.0 - 23/05/2013 - 14:41
*@copyright © 2013 - Todos os direitos reservados
*
*/
session_start();
include ("admin/config.php");
        switch ($_GET['acao']){
            case 1:
                $login = preg_replace( '#[^0-9]#', '', $_POST['ed_usu_email'] );
                $senhacrip = $_POST['ed_usu_senha'];
                if($login == NULL or $_POST['ed_usu_senha'] == NULL){
                print "	<div class=\"aviso\" align=\"center\"><strong>ERRO</strong></div>
                        <div class=\"aviso\" align=\"center\"><strong><p>Os campos CPF ou senha est&atilde;o em branco!</p></strong></div>    
                        <meta http-equiv=\"refresh\" content=\"2;URL=index.php?p=3\">";
                } else {
                
					if(!(empty($login) AND empty($senhacrip))){
						bd("C");
						$res = mysql_query("SELECT * FROM ".BD.".curriculo WHERE cpf = '$login' AND senha = '$senhacrip' LIMIT 1;");
						$ident = mysql_fetch_array($res);
						$result = mysql_num_rows($res);
						if ($result == 1) {
							$_SESSION["usu_id"] = mysql_result($res,0,"codigo");
							$_SESSION["usuario"] = mysql_result($res,0,"nome");
							$_SESSION["senhacrip"] = mysql_result($res,0,"senha");
							$data_acesso =  date('Y/m/d');
							$hora_acesso =  date('H:i:s');
								
							$log_acesso = mysql_query("INSERT INTO ".BD.".log_acesso (usuario, data, hora, ip) VALUES ('".mysql_result($res,0,"codigo")."', '$data_acesso', '$hora_acesso', '".$_SERVER['REMOTE_ADDR']."');");
								if (isset($_POST["edit"]) && $_POST["edit"] == 1){
									echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?p=1&acao=form\">";
								} else {
									echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?p=2\">";
								}
							
						}  else {
							print "<h2>ERRO</h2>
									<div class=\"aviso\" align=\"center\"><strong><p>Login e/ou Senha n&atilde;o conferem!</p></strong></div>";
							print "<meta http-equiv='refresh' content='5;URL=index.php?p=3'>";
						}
					}
                }
            break;
            case 2:
                session_destroy();
                echo "<script>alert('Logout efetuado com sucesso!');</script>";
                echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
            break;							
            default:
        ?>
        <script type="text/javascript" language="javascript" src="js/jquery.maskedinput.js"></script>
        <h2>Login</h2>
        <form name="acesso" method="post" action="index.php?p=3&acao=1" class="box login">        
            <fieldset class="boxBody">
            <strong><?php if (isset($_SESSION["cpfCandidato"]) && $_SESSION["cpfCandidato"] != NULL){
				echo $_SESSION["nomeCandidato"]." seu CPF j&aacute; se encontra em nosso banco de dados, por favor, informe sua senha para entrar no sistema e atualizar seu curr&iacute;culo!";
				echo "<input name=\"edit\" type=\"hidden\" value=\"1\" />";
			} else {?>
            	Para visualizar e se candidatar as vagas em aberto, informe seus dados de login:
            <?php }?>
            </strong><br>
              <label>CPF: </label>
              <input type="text" tabindex="1" placeholder="Digite seu cpf" required name="ed_usu_email" id="txtCPF" value="<?php echo $_SESSION["cpfCandidato"]?>"><br>

              <label><!--<a href="#" class="rLink" tabindex="5">Forget your password?</a>-->Senha: </label>
              <input type="password" tabindex="2" required name="ed_usu_senha">
            </fieldset>
            <footer>
              <!--<label><input type="checkbox" tabindex="3">Keep me logged in</label>-->
              <input type="submit" class="btnLogin" value="Login" tabindex="4">
            </footer>
        </form>
        <script type="text/javascript" language="javascript">        	
        	$("#txtCPF").mask("999.999.999-99");
		</script>
        <?php break; }?>