<?php
session_start();
$candidato = $_SESSION["sess_codigo"];
$nome = $_SESSION["nome_cand"];

require ("admin/config.php");
?>
<html>
<head>
<title>[ SCS ] Seu espa&ccedil;o</title>
<style type="text/css">
.td1 			{ background-color : #edecec; } 
.td2			{ background-color : #d7d7d7; } 
.td3			{ background-color : #edecec; } 
.texto			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #333333; }
.texto2			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #4881c7; }
.titulo			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; font-weight:bold; background-color: #0375b1 }
.titulo2		{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #016ba7; }
.titulo3		{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3d82a9; font-weight:bold; }
.input-a  		{background-color: #f4f4f4;font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 10px;color: #006699;border: solid 1px #666666;}
.botao 			{ font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFF; background-color: #0375b1; height: 23px; border: 1px solid #E7E7E7; font-weight: bold; font-size: 9px; }
</style>
</head>
<body bgcolor="#ffffff" marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" background="images/bg.jpg">
<? include ("topo.php"); ?>
					<br>
					<table align="center" border='0' width="547" cellpadding='4'>
	<tr>
		<td align='left' class="titulo">Bem vindo, <?=$nome?></td>
	</tr>
</table>
<table align="center" border='0' width="547" cellpadding='4' cellspacing="1" class="texto">
<tr>
	<td class="td3"></td>
</tr>
<tr>
	<td align="center" valign="middle"><img src="images/edit_cv.jpg" width="74" height="74" align="absmiddle"> <a href="editar_curriculo.php?logar=1" class="texto2"><b>Editar seu curr&iacute;culo</b></a>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/ver_cv.jpg" width="74" height="74" align="absmiddle"><a href="vagas.php" class="texto2"><b>Visualizar vagas cadastradas</b></a> </td>
</tr>
<tr>
	<td class="td3" align="right" height="10"></td>
</tr>
</table>
<? include ("rodape.php"); ?>	
</body>
</html>