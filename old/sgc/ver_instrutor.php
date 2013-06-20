<?  include "travar.php"; 
	include ("../conn/conn_bd.php");
	$sql = mysql_query("SELECT * FROM `instrutores` WHERE id = '".$_GET['ii']."'");
	$id = mysql_result($sql,0,"id");
	$nome = mysql_result($sql,0,"nome");
	$nascimento = mysql_result($sql,0,"nascimento");
	$rg = mysql_result($sql,0,"rg");
	$CPF = mysql_result($sql,0,"CPF");
	$ref_prof = mysql_result($sql,0,"ref_prof");
	$cnh = mysql_result($sql,0,"cnh");
	$nome_mae = mysql_result($sql,0,"nome_mae");
	$nome_pai = mysql_result($sql,0,"nome_pai");
	$endereco = mysql_result($sql,0,"endereco");
	$bairro = mysql_result($sql,0,"bairro");
	$cep = mysql_result($sql,0,"cep");
	$estado = mysql_result($sql,0,"estado");
	$fone_res = mysql_result($sql,0,"fone_res");
	$fone_cel = mysql_result($sql,0,"fone_cel");
	$fone_co = mysql_result($sql,0,"fone_co");
	$email = mysql_result($sql,0,"email");
	$formacao = mysql_result($sql,0,"formacao");
	$instituicao = mysql_result($sql,0,"instituicao");
	$operacao_atual = mysql_result($sql,0,"operacao_atual");
	$ocupacao_anterior = mysql_result($sql,0,"ocupacao_anterior");
	$exp_instrutor = mysql_result($sql,0,"exp_instrutor");
	$exp_hora_aula = mysql_result($sql,0,"exp_hora_aula");
	$disp_horario = mysql_result($sql,0,"disp_horario");
	$date = mysql_result($sql,0,"date");
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
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Data de Nascimento:</td>
    <td bgcolor="#e6e6e6"><?=$nascimento?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">RG:</td>
    <td bgcolor="#e6e6e6"><?=$rg?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">CPF:</td>
    <td bgcolor="#e6e6e6"><?=$CPF?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Registro Profissional:</td>
    <td bgcolor="#e6e6e6"><?=$ref_prof?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Carteira de Motorista:</td>
    <td bgcolor="#e6e6e6"><?=$cnh?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Nome da M&atilde;e:</td>
    <td bgcolor="#e6e6e6"><?=$nome_mae?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Nome do Pai:</td>
    <td bgcolor="#e6e6e6"><?=$nome_pai?></td>
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
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Estado:</td>
    <td bgcolor="#e6e6e6"><?=$estado?></td>
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
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">E-mail:</td>
    <td bgcolor="#e6e6e6"><?=$email?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Forma&ccedil;&atilde;o:</td>
    <td bgcolor="#e6e6e6"><?=$formacao?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Institui&ccedil;&atilde;o:</td>
    <td bgcolor="#e6e6e6"><?=$instituicao?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Opera&ccedil;&atilde;o Atual:</td>
    <td bgcolor="#e6e6e6"><?=$operacao_atual?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Ocupa&ccedil;&atilde;o Anterior:</td>
    <td bgcolor="#e6e6e6"><?=$ocupacao_anterior?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Experi&ecirc;ncia anterior como<br />
      instrutor:</td>
    <td bgcolor="#e6e6e6"><?=$exp_instrutor?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Expctativa de remunera&ccedil;&atilde;o<br />
      por hora/aula:</td>
    <td bgcolor="#e6e6e6"><?=$exp_hora_aula?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Disp_horario:</td>
    <td bgcolor="#e6e6e6"><?=$disp_horario?></td>
  </tr>
  <tr>
    <td align="right" valign="baseline" nowrap="nowrap" bgcolor="#d6d6d6">Cadastro em:</td>
    <td bgcolor="#e6e6e6"><?=$date?></td>
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
