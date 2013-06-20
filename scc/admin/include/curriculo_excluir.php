<?php
if ($_GET['ic'] != NULL){

$del_curriculo = mysql_query("SELECT codigo, nome, email FROM curriculo WHERE codigo = ".$_GET['ic']." LIMIT 1;");
$codigo = mysql_result($del_curriculo,0,"codigo");
$nome = mysql_result($del_curriculo,0,"nome");
$email = mysql_result($del_curriculo,0,"email");
?>
<h2 style="color:#FF0000;">Confirmar exclus&atilde;o do usu&aacute;rio</h2>
<table width="500"  border="0" cellpadding="1" cellspacing="1" class="">
	<tr>
	  <td width="89" class="td_linha2">Nome:</td>
	  <td width="404" class="td_linha2"><?php print $nome; ?></td>
	</tr>
	<tr>
	  <td class="td_linha1">Email:</td>
	  <td class="td_linha1"><?php print $email; ?></td>
	</tr>
    <tr>
	  <td colspan="2" align="center" class="td_linha1">
      <form name="del_<?php print $usu_id;?>" method="post" action="index.php?navega=curriculo_excluir">
	  	<input name="bt" type="image" id="bt" src="images/delete.png" align="left"/>
	    Tem certeza que deseja <strong>EXCLUIR</strong> este usu&aacute;rio?
        <input name="nuim" type="hidden" value="<?php print $codigo;?>" />
	  </form></td>
    </tr>
</table>
<?php } if ($_GET['ic'] == NULL){
	$sql_delete = mysql_query("DELETE FROM `curriculo` WHERE `curriculo`.`codigo` = '".$_POST['nuim']."' LIMIT 1;") or die ("<span class=\"aviso\">N&atilde;o foi poss&iacute;vel excluir o usu&aacute;rio, tente mais tarde!</span>");
	print "<span class=\"aviso\">O usu&aacute;rio foi exclu&iacute;do com sucesso!</span><meta http-equiv=\"refresh\" content=\"2;URL=index.php?navega=curriculo\">";
}?>
