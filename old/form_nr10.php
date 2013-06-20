<?php require_once('Connections/connConhecer.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO nr10 (nome, fone_res, fone_cel, fone_co, endereco, bairro, cep, cidade, email, cpf, rg, empresa, cargo, `data`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nome'], "text"),
                       GetSQLValueString($_POST['fone_res'], "text"),
                       GetSQLValueString($_POST['fone_cel'], "text"),
                       GetSQLValueString($_POST['fone_co'], "text"),
                       GetSQLValueString($_POST['endereco'], "text"),
                       GetSQLValueString($_POST['bairro'], "text"),
                       GetSQLValueString($_POST['cep'], "text"),
                       GetSQLValueString($_POST['cidade'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['cpf'], "text"),
                       GetSQLValueString($_POST['rg'], "text"),
                       GetSQLValueString($_POST['empresa'], "text"),
                       GetSQLValueString($_POST['cargo'], "text"),
                       GetSQLValueString($_POST['data'], "date"));

  mysql_select_db($database_connConhecer, $connConhecer);
  $Result1 = mysql_query($insertSQL, $connConhecer) or die(mysql_error());

    $campo_data = date("d/m/Y H:i:s");        
	     $message="<center><div style='width:320px;'><fieldset><table width='371' border='0' align='center'><tr>
		 		   <td width='365'><center><img src='http://www.conhecerconsultoria.com/images/topo_02.jpg' width='289' height='147' /></center></td>
		 		   </tr><tr><td><p align='center'><font face='Arial, Helvetica, sans-serif' size='2'>Esta &eacute; uma mensagem automática, por favor não responda!</font>  </p>
		 		   <p align='center'><font face='Arial, Helvetica, sans-serif' size='2'>Sua inscri&ccedil;&atilde;o foi feita com sucesso. Para confirmar sua participa&ccedil;&atilde;o faça o depósito e nos envie por e-mail ou fax. Veja as informa&ccedil;&otilde;es no nosso site.</font></p>
		 		   <p align='justify'>&nbsp;</p><p align='center'><font size='2' face='Arial, Helvetica, sans-serif'>Desde j&aacute; muito obrigado</font>!!!</p></td>
		 		   </tr><tr><td background='images/rep_line.jpg' style='background-position:top; background-repeat:repeat-x;'>
		 		   <p align='center'><font face='Arial, Helvetica, sans-serif' size='2'><br /><b>Equipe Conhercer Consultoria<br>
		 		   <a href='http://www.conhecerconsultoria.com' target='_blank'>www.conhecerconsultoria.com</a></b></font></p></td>
		 		   </tr></table></fieldset></div></center>";
         $mail=("$email");
	     $assunto="Cadastro Conhecer Consultoria";
	     $remetente="Conhecer Consultoria <comercial@conhecerconsultoria.com>";
         $headers = "Content-Type: text/html; charset=iso-8859-1\n";  
         $headers.="From: $remetente\n"; 
	     mail("$mail","$assunto","$message","$headers");
		 $mail_adm=("angela.carvalho@conhecerconsultoria.com");
		 $msg_adm="<img src='http://www.conhecerconsultoria.com/images/topo_02.jpg'>
					<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>H&aacute; uma novo cadastro com interesse <br>
				    no treinamento NR10</font><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>!!! </font></p>
					<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Nome: $nome </font></p>                   
                    <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Email: <a href='mailto:$email?subject=RE: Conhecer Consultoria'>$email</a></font></p>
                    <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>CPF: $cpf</font></p>
                    <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Cargo: $cargo</font></p><p>&nbsp;</p>";
		 mail("$mail_adm","$assunto","$msg_adm","$headers");
		 
  $insertGoTo = "conf_cad_nr10.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE>Conhecer Consultoria - Seja Bem Vindo!</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body topmargin="0" background="images/l.gif" style="background-position:top; background-repeat:repeat-x;">
<table width="711" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" colspan="2" background="images/barra_top.gif" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td colspan="2"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="711" height="181">
      <param name="movie" value="flash/topo.swf" />
      <param name="quality" value="high" />
      <embed src="flash/topo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="711" height="181"></embed>
    </object></td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#CCCCCC"><center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="709" height="33" align="middle">
      <param name="movie" value="flash/menu.swf" />
      <param name="quality" value="high" />
      <embed src="flash/menu.swf" width="709" height="33" align="middle" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
    </object></center></td>
  </tr>
  <tr>
    <td width="211"><? include ("menu.php");?></td>
    <td width="500"><div class="divcentro">
      <p>Treinamento NR 10 <br />
        Seguran&ccedil;a em Instala&ccedil;&otilde;es e Servi&ccedil;os em Eletricidade <br />
        M&oacute;dulo B&aacute;sico - 40 hs </p>
      <p align="center"><strong>Ficha de Inscri&ccedil;&atilde;o</strong></p>
      <p align="center">&nbsp;</p>
      
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center">
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Nome:</td>
            <td><input type="text" name="nome" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Fone Residencial:</td>
            <td><input type="text" name="fone_res" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Fone Celular:</td>
            <td><input type="text" name="fone_cel" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Fone Comercial:</td>
            <td><input type="text" name="fone_co" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Endere&ccedil;o:</td>
            <td><input type="text" name="endereco" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Bairro:</td>
            <td><input type="text" name="bairro" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Cep:</td>
            <td><input type="text" name="cep" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Cidade:</td>
            <td><input type="text" name="cidade" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Email:</td>
            <td><input type="text" name="email" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">CPF:</td>
            <td><input type="text" name="cpf" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">RG:</td>
            <td><input type="text" name="rg" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Empresa:</td>
            <td><input type="text" name="empresa" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" bgcolor="#d6d6d6">Cargo:</td>
            <td><input type="text" name="cargo" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Enviar cadastro" /></td>
          </tr>
        </table>
        <input type="hidden" name="data" value="<?=date('Y/m/d H:i:s')?>" />
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
      <p align="center" class="texto_verde">Investimento: R$300,00 <br />
        Incluindo a apostila com todo conte&uacute;do do treinamento, certificado e um coffe break por dia de curso. <br />
      </p>
      <p>Forma de Pagamento <br />
        Dep&oacute;sito Banc&aacute;rio <br />
        Conhecer - Gest&atilde;o de Intelig&ecirc;ncia Empresarial Ltda. <br />
        Banco Santander (033) <br />
        Ag&ecirc;ncia: 2081 <br />
        Conta: 1300065-53 <br />
      </p>
      <p>A SUA INSCRI&Ccedil;&Atilde;O S&Oacute; SER&Aacute; CONFIRMADA MEDIANTE ENVIO DO COMPROVANTE DE PAGAMENTO VIA E-MAIL OU FAX. <br />
        N&Atilde;O ESQUE&Ccedil;A DE COLOCAR O SEU NOME AO ENVIAR O COMPROVANTE! <br />
        NOSSO FAX: 21-2490.1768 <br />
        NOSSO E-MAIL: <a href="mailto:desenvolvimento@conhecerconsultoria.com" style="color:#333333;">desenvolvimento@conhecerconsultoria.com </a><br />
      </p>
      <p>Conhecer &ndash; Gest&atilde;o de Intelig&ecirc;ncia Empresarial Ltda. <br />
        Avenida das Am&eacute;ricas, 19019 &ndash; Sala 367 &ndash; Recreio dos Bandeirantes &ndash; CEP: 22790701. <br />
        Telefone: 21.2138.9810 &ndash; Fax: 21.2490.1768 <br />
        www.conhecerconusultoria.com </p>
      <p align="center">&nbsp; </p>
    </div></td>
  </tr>
  <tr>
    <td height="76" COLSPAN="2" align="center" valign="middle" background="images/28.gif"><div align="justify" style=" padding-top:8px; padding-left:8px; padding-right:8px; vertical-align:middle;">
	    Temos de aprender onde nos situar e quais s&atilde;o nossas aptid&otilde;es para extrair o m&aacute;ximo benef&iacute;cio disso. Devemos saber onde est&atilde;o nossos defeitos, quais as aptid&otilde;es que n&atilde;o temos, onde estamos, quais s&atilde;o os nossos valores. Pela primeira vez na Hist&oacute;ria da humanidade temos de aprender a assumir a responsabilidade de administrar a n&oacute;s pr&oacute;prios. E, como j&aacute; disse, provavelmente essa &eacute; uma mudan&ccedil;a muito maior do que a trazida por qualquer tecnologia - uma mudan&ccedil;a na condi&ccedil;&atilde;o humana. <em>Peter Drucker</em> </div></td>
  </tr>
  <tr>
    <td colspan="2" background="images/30.gif" height="43">
	  <center>
    </center></td>
  </tr>
  <tr>
    <td colspan="2" background="images/31.gif" height="42" style="background-repeat:no-repeat;">
    <center>
		  <div class="t9" style="padding-top:5pt"><font color="FFFFFF">Copyright &copy; <?=date('Y')?>
	      Conhecer Consultoria. All rights reserved. Powered by <a href="http://www.mkinformatica.net" target="_blank" class="t9" style="color:#FFFFFF;">MK</a> </font></div>
		</center></td>
  </tr>
</table>
</body>
</html>