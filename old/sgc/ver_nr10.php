<?  include "travar.php"; 
	include ("../conn/conn_bd.php");
	$sql = mysql_query("SELECT * FROM `nr10` WHERE id = '".$_GET['in']."'");
	$id = mysql_result($sql,0,"id");
	$nome = mysql_result($sql,0,"nome");
	$fone_res = mysql_result($sql,0,"fone_res");
	$fone_cel = mysql_result($sql,0,"fone_cel");
	$fone_co = mysql_result($sql,0,"fone_co");
	$endereco = mysql_result($sql,0,"endereco");
	$bairro = mysql_result($sql,0,"bairro");
	$cep = mysql_result($sql,0,"cep");
	$cidade = mysql_result($sql,0,"cidade");
	$email = mysql_result($sql,0,"email");
	$cpf = mysql_result($sql,0,"cpf");
	$rg = mysql_result($sql,0,"rg");
	$empresa = mysql_result($sql,0,"empresa");
	$cargo = mysql_result($sql,0,"cargo");
	$data = mysql_result($sql,0,"data");	
?>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="content"><h2 align="left"><img src="images/le_ver_cad_intr.gif" width="337" height="28"></h2>
<hr>
<table width="74%" border="0" align="center">
  <tr>
    <td width="28%" align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Nome:</td>
    <td width="72%" bgcolor="#e6e6e6"><?=$nome?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Telefone residencial:</td>
    <td bgcolor="#e6e6e6"><?=$fone_res?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Telefone celular:</td>
    <td bgcolor="#e6e6e6"><?=$fone_cel?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Telefone comercial:</td>
    <td bgcolor="#e6e6e6"><?=$fone_co?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Endere&ccedil;o:</td>
    <td bgcolor="#e6e6e6"><?=$endereco?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Bairro:</td>
    <td bgcolor="#e6e6e6"><?=$bairro?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Cep:</td>
    <td bgcolor="#e6e6e6"><?=$cep?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Cidade:</td>
    <td bgcolor="#e6e6e6"><?=$cidade?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">E-mail:</td>
    <td bgcolor="#e6e6e6"><?=$email?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">CPF:</td>
    <td bgcolor="#e6e6e6"><?=$cpf?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">RG:</td>
    <td bgcolor="#e6e6e6"><?=$rg?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Empresa:</td>
    <td bgcolor="#e6e6e6"><?=$empresa?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Cargo:</td>
    <td bgcolor="#e6e6e6"><?=$cargo?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Cadastro em:</td>
    <td bgcolor="#e6e6e6"><?=$data?></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="javascript:history.back();">Voltar</a></td>
  </tr>
</table>
<p>&nbsp;</p>
