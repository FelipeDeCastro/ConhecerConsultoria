<link href="./style.css" rel="stylesheet" type="text/css">
<?		
	$regs= mysql_query("SELECT * FROM vagas WHERE codigo='$codigo'", $db_conn);
	while($reg = mysql_fetch_array($regs))
	{
	$codigo 	= $reg["codigo"];
	$titulo		= $reg["titulo"];
	$requisitos	= str_replace("<br>",chr(13),$reg["requisitos"]);
?>
<table width="400"  border="0" align="center" cellpadding="0" cellspacing="2" class="td-cinza04">
  <form method="post" action="./include/vagas_acoes.php" enctype="multipart/form-data">
    <input name="acao" type="hidden" id="acao" value="editar">
    <input name="codigo" type="hidden" id="acao" value="<? echo $codigo; ?>">
  <tr> 
    <td align="right" class="txt-cinza02" width="100">Titulo :</td>
    <td colspan=2><input name="titulo" type="text" class="input-A" id="titulo" value="<? echo $titulo; ?>" size="40" maxlength="100"></td>
  </tr>
  <tr> 
    <td align="right" class="txt-cinza02">Requisitos</td>
    <td colspan=2><textarea name="requisitos" cols="40" rows="4" wrap="VIRTUAL" class="input-A" id="requisitos"><? echo $requisitos; ?></textarea></td>
  </tr>
  <tr> 
     <td colspan=3><center><br><input type=submit name=Submit value=ENVIAR class="button-A"></center></td>
  </tr>
</form>
</table>
<?
}
?>