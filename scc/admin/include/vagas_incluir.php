<link href="./style.css" rel="stylesheet" type="text/css">
<table width="600"  border="0" align="center" cellpadding="0" cellspacing="2" class="td-cinza04">
  <form method="post" action="./include/vagas_acoes.php" enctype="multipart/form-data">
    <input name="acao" type="hidden" id="acao" value="incluir">
      
	  <tr> 
		<td align="right" class="txt-cinza02" width="100">Vaga :</td>
		<td colspan=2><input name="titulo" type="text" class="input-A" id="titulo" value="<? echo $titulo; ?>" size="60" ></td>
	  </tr>
	  <tr>
	    <td align="right" class="txt-cinza02">Forma&ccedil;&atilde;o :</td>
	    <td colspan=2><input name="formacao" type="text" class="input-A" id="formacao" value="<? echo $formacao; ?>" size="60"  /></td>
    </tr>
	  <tr>
	    <td align="right" class="txt-cinza02">Experi&ecirc;ncia :</td>
	    <td colspan=2><input name="experiencia" type="text" class="input-A" id="experiencia" value="<? echo $experiencia; ?>" size="60"  /></td>
    </tr>
	  <tr> 
		<td align="right" class="txt-cinza02">Requisitos :</td>
		<td colspan=2><textarea name="requisitos" cols="60" rows="6" wrap="VIRTUAL" class="input-A" id="requisitos"><? echo $requisitos; ?></textarea></td>
	  </tr>
	 <tr> 
       <td colspan=3><center><br><input type=submit name=Submit value=ENVIAR class="button-A"></center></td>
     </tr>
 </form>
</table>