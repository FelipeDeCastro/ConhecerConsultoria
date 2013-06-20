<?php
/**
*Area Administrativa SCC
*@author Michael Colla <michael.colla@mkinformatica.net>
*@version 1.0 - 23/05/2013 - 14:41
*@copyright © 2013 - Todos os direitos reservados
*
*/

session_start();

if ( (!isset($_SESSION['usu_id']) && $_SESSION['usu_id'] == NULL) && (!isset($_SESSION['senhacrip']) && $_SESSION['senhacrip'] == NULL) ) {
	print "<p class=\"aviso\" style=\"font-size:14px\">Sess&atilde;o inexistente ou expirada! Por favor efetue login novamente!</p>";
	print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?p=3\">";
	die();
}
?>