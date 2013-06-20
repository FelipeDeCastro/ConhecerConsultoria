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
  $insertSQL = sprintf("INSERT INTO instrutores (nome, nascimento, rg, CPF, ref_prof, cnh, nome_mae, nome_pai, endereco, bairro, cep, estado, fone_res, fone_cel, fone_co, email, formacao, instituicao, operacao_atual, ocupacao_anterior, exp_instrutor, exp_hora_aula, disp_horario, `date`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nome'], "text"),
                       GetSQLValueString($_POST['nascimento'], "text"),
                       GetSQLValueString($_POST['rg'], "text"),
                       GetSQLValueString($_POST['CPF'], "text"),
                       GetSQLValueString($_POST['ref_prof'], "text"),
                       GetSQLValueString($_POST['cnh'], "text"),
                       GetSQLValueString($_POST['nome_mae'], "text"),
                       GetSQLValueString($_POST['nome_pai'], "text"),
                       GetSQLValueString($_POST['endereco'], "text"),
                       GetSQLValueString($_POST['bairro'], "text"),
                       GetSQLValueString($_POST['cep'], "text"),
                       GetSQLValueString($_POST['estado'], "text"),
                       GetSQLValueString($_POST['fone_res'], "text"),
                       GetSQLValueString($_POST['fone_cel'], "text"),
                       GetSQLValueString($_POST['fone_co'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['formacao'], "text"),
                       GetSQLValueString($_POST['instituicao'], "text"),
                       GetSQLValueString($_POST['operacao_atual'], "text"),
                       GetSQLValueString($_POST['ocupacao_anterior'], "text"),
                       GetSQLValueString($_POST['exp_instrutor'], "text"),
                       GetSQLValueString($_POST['exp_hora_aula'], "text"),
                       GetSQLValueString($_POST['disp_horario'], "text"),
                       GetSQLValueString($_POST['date'], "date"));

  mysql_select_db($database_connConhecer, $connConhecer);
  $Result1 = mysql_query($insertSQL, $connConhecer) or die(mysql_error());
  
    $campo_data = date("d/m/Y H:i:s");        
	     $message="<center><div style='width:320px;'><fieldset><table width='371' border='0' align='center'><tr>
		 		   <td width='365'><center><img src='http://www.conhecerconsultoria.com/images/topo_02.jpg' width='289' height='147' /></center></td>
		 		   </tr><tr><td><p align='center'><font face='Arial, Helvetica, sans-serif' size='2'>Esta &eacute; uma mensagem automática, por favor não responda!</font>  </p>
		 		   <p align='center'><font face='Arial, Helvetica, sans-serif' size='2'>Agradecemos o seu interesse em fazer  parte do nosso time! Estaremos fazendo contato em breve para agendarmos uma entrevista.</font></p>
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
					<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>H&aacute; um novo cadastro <br>
				    de treinador</font><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>!!! </font></p>
					<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Nome: $nome </font></p>                   
                    <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Email: <a href='mailto:$email?subject=RE: Conhecer Consultoria'>$email</a></font></p>
                    <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>CPF: $CPF</font></p>
                    <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Forma&ccedil;&atilde;o: $formacao</font></p><p>&nbsp;</p>";
		 mail("$mail_adm","$assunto","$msg_adm","$headers");

  $insertGoTo = "conf_cad_instrutores.php";
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
<link href="styles.css" rel="stylesheet" type="text/css"></head>

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
      <p><strong>Conhecer - Gest&atilde;o de Intelig&ecirc;ncia Empresarial</strong></p>
      <p>Cadastro de Instutores</p>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center" bgcolor="#d6d6d6">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Nome:</td>
            <td><input type="text" name="nome" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Data de Nascimento:</td>
            <td><input type="text" name="nascimento" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">RG:</td>
            <td><input type="text" name="rg" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">CPF:</td>
            <td><input type="text" name="CPF" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Registro Profissional:</td>
            <td><input type="text" name="ref_prof" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Carteira de Motorista:</td>
            <td><input type="text" name="cnh" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Nome da M&atilde;e:</td>
            <td><input type="text" name="nome_mae" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Nome do Pai:</td>
            <td><input type="text" name="nome_pai" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Endere&ccedil;o:</td>
            <td><input type="text" name="endereco" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Bairro:</td>
            <td><input type="text" name="bairro" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Cep:</td>
            <td><input type="text" name="cep" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Estado:</td>
            <td><input type="text" name="estado" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Telefone residencial:</td>
            <td><input type="text" name="fone_res" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Telefone celular:</td>
            <td><input type="text" name="fone_cel" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Telefone comercial:</td>
            <td><input type="text" name="fone_co" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">E-mail:</td>
            <td><input type="text" name="email" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Forma&ccedil;&atilde;o:</td>
            <td><input type="text" name="formacao" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Institui&ccedil;&atilde;o:</td>
            <td><input type="text" name="instituicao" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Opera&ccedil;&atilde;o Atual:</td>
            <td><input type="text" name="operacao_atual" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Ocupa&ccedil;&atilde;o Anterior:</td>
            <td><input type="text" name="ocupacao_anterior" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Experi&ecirc;ncia anterior como<br /> 
              instrutor:</td>
            <td><input type="text" name="exp_instrutor" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Expctativa de remunera&ccedil;&atilde;o<br /> 
              por hora/aula:</td>
            <td><input type="text" name="exp_hora_aula" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Disp_horario:</td>
            <td><input type="text" name="disp_horario" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Enviar dados" /></td>
          </tr>
        </table>
        <input type="hidden" name="date" value="<?=date('Y/m/d H:i:s')?>" />
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
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