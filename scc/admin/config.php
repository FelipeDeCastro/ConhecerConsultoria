<?php
/**
*Area Administrativa Assuex
*@author Michael Colla <michael.colla@mkinformatica.net>
*@version 1.0 - 27/01/2013 - 14:41
*@copyright © 2013 - Todos os direitos reservados
*
*/

define("HOST","localhost");
define("USER","conhecer_admin");
define("PASS","s4d92x8d");
define("BD","conhecer_scc");
define("NOMESITE","SCC - Administra&ccedil;&atilde;o");
define("URL_SITE","http://localhost/conhecer/scc/admin/");//não esquecer da barra no final
define("RETORNO_PAG_RESTRITA","index.php");

/*Buscar configurações padrões do site*/
require ("funcoes.php");
bd("C");

/*Configurações de e-mail para envio via SMTP*/
//define("SMTP_HOST","localhost");
//define("SMTP_USER","");
//define("SMTP_PASS","WK.wwyiMkHG1");
?>