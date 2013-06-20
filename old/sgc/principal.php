<? include "travar.php"; 
	session_start();
	if (isset($SESSION["usuario"])) { print ($usuario);}	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>SGC - Sistema Verifica&ccedil;&atilde;o Cadastral</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/gif">
<link rel="SHORTCUT ICON" href="images/favicon.ico">
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=ISO-8859-1">
<script language="JavaScript" type="text/javascript">
<!--
function PopWindow()
{
window.open('help.php','help','width=400,height=250,menubar=no,scrollbars=no,toolbar=no,location=yes,directories=no,resizable=no,top=200,left=300');
}
//-->
</script>
</head>
<body>
<!-- // Start container // -->
<div class="container">
		<!-- // Start header // -->
		<table width="100%" border="0" align="center">
          <tr>
            <td><a href="principal.php"><img src="images/logo.gif" alt="P&aacute;gina Principal" width="274" height="131" border="0" align="left"></a></td>
            <td><img src="images/le_home.gif" width="405" height="28"></td>
          </tr>
        </table>
			<div class="nav">
				<ul>
					<li id="home"><a href="principal.php"><img src="images/arrow.gif" alt="Main" width="17" height="17" border="0"> <b>Home</b></a></li>
			        <li id="home"><a href="logout.php"><img src="images/arrow.gif" alt="Main" width="17" height="17" border="0"> Logout </a></li>
			  </ul>
  </div>
		<!-- // End header // -->
	
<!-- // Start content // -->
<div>
<? 
	  	switch ($_REQUEST['navega']){
		 case "1":
				include("ver_nrs_10.php");
			    break; 
		 case "2":
				include("ver_instrutores.php");
			    break; 
		 case "3":
				include("ver_instrutor.php");
			    break;
		 case "4":
				include("ver_nr10.php");
			    break;
		 case "5":
				include("ver_processo.php");
			    break;
		 case "6":
				include("editar_processo.php");
			    break;
		 case "7":
				include("poseditar_processo.php");
			    break; 
		 case "8":
				include("delete_processo.php");
			    break;
		 case "9":
				include("posdel_processo.php");
			    break;
		 case "10":
				include("relatorios.php");
			    break;
		 case "11":
				include("ver_processos_empresa.php");
			    break;
		 case "12":
				include("ver_audiencias.php");
			    break;
		 case "13":
				include("conf_cad_audiencia.php");
			    break; 
		 case "14":
				include("cad_audiencia.php");
			    break;
		 case "15":
				include("editar_audiencia.php");
			    break;											
		 case "16":
				include("poseditar_audiencia.php");
			    break;									
		 case "17":
				include("delete_audiencia.php");
			    break;			
		 case "18":
				include("posdel_audiencia.php");
			    break;	
		case "19":
				include("cad_processo_sinttel.php");
			    break;	
		case "20":
				include("ver_processos_sinttel.php");
			    break;
		case "21":
				include("cad_processo_campos.php");
			    break;	
		case "22":
				include("ver_processos_campos.php");
			    break;				
		default:
				include("inicio.php");
			    break;			
	  }		
	 ?>
</div>
<br>
<hr>
<p align="center" class="loginBox"><b>Conhecer Consultoria</b> - Gest&atilde;o de Intelig&ecirc;ncia Empresarial </p>
</div>
<!-- // End of content // -->
	
	<!-- // Start of pre-footer // -->
	<div class="pre-footer"><b>SGC - Sistema de Gerenciamento Conhecer</b></div>
	<!-- // End of pre-footer-table // -->	

	<!-- // Start of footer // -->
	<div class="footer">
	<br>
	<a href="http://www.mkinformatica.net/" target="_blank"><img src="images/powered_by.gif" border="0" alt="Powered By MK Informática" style="float: right; margin: -25px 0;"></a>
	</div>
	<!-- // End of footer // -->

</div>
<!-- // End of container // -->
</body>
</html>