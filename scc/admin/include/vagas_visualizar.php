<link href="./style.css" rel="stylesheet" type="text/css">
<?
	$regs= mysql_query("SELECT * FROM vagas WHERE codigo='$codigo'");
	while($reg = mysql_fetch_array($regs))
	{
	$codigo 	= $reg["codigo"];
	$formacao = $reg["formacao"];
	$experiencia = $reg["experiencia"];
	$titulo		= $reg["titulo"];
	$requisitos	= str_replace("<br>",chr(13),$reg["requisitos"]);
?>
<table width="400"  border="0" align="center" cellpadding="0" cellspacing="2" class="td-cinza04">  
  <tr> 
    <td align="right" class="txt-cinza02" width="100">Titulo :</td>
    <td colspan=2><? echo $titulo; ?></td>
  </tr>
  <tr>
	 <td align="right" class="txt-cinza02">Forma&ccedil;&atilde;o :</td>
	 <td colspan=2><? echo $formacao; ?></td>
  </tr>
  <tr>
	<td align="right" class="txt-cinza02">Experi&ecirc;ncia :</td>
	<td colspan=2><? echo $experiencia; ?></td>
  </tr>
  <tr> 
    <td align="right" class="txt-cinza02">Requisitos</td>
    <td colspan=2><? echo $requisitos; ?></td>
  </tr>
  <tr> 
     <td colspan=3><center><br><input type=submit name=Submit value=ENVIAR class="button-A" onclick="javascript:window.open='index.php?navega=vagas'"></center></td>
  </tr>
</form>
</table>
<?
}
?>