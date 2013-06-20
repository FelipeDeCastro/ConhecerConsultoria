<html>
<head>
<title>[ SCS ] Sistema de Currículos Conhecer Consultoria - <? echo date(Y); ?></title>
<style type="text/css">
.td1 			{ background-color : #edecec; } 
.td2			{ background-color : #d7d7d7; } 
.td3			{ background-color : #edecec; } 
.texto			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #333333; }
.texto2			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #4881c7; }
.titulo			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; font-weight:bold; background-color: #0375b1 }
.titulo2		{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #016ba7; }
.botao 			{ font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFF; background-color: #0375b1; height: 23px; border: 1px solid #E7E7E7; font-weight: bold; font-size: 9px; }
</style>
</head>
<body bgcolor="#ffffff" marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" background="images/bg.jpg">
<? include ("topo.php"); ?>	
<table width="600" align="center" cellpadding="0" cellspacing="0" id="tabela2">
	<tr>
   		<td align="center" valign="middle">

<?
if($senha==1)
	{				
?>
<table align="center" border='0' width="400" cellpadding='4'>
<tr>
	<td align='center' class="titulo2"><strong> Senha inv&aacute;lida.
    </strong></td>
</TR>
</table>
<?
	}
?>
<table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td align="center" class="titulo"><b>INCLUS&Atilde;O&nbsp;DE CURRÍCULO&nbsp;PROFISSIONAL</b></td>
  </tr>
</table>



<form action="./curriculo.php" method="post" name="formulario" id="formulario">
<input name="logar" value="1" type="hidden">
  <table align="center" border='0' width="400" cellpadding='4'>
<tr>
	<td align='center' class="titulo2">
      Para incluir um novo currículo em nosso banco de dados <a href="./curriculo.php?cadastrar=1" class="titulo2">clique aqui</a>. </td>
</TR></table>
<br>
<table align="center" border='0' width="400" cellpadding='4'>
	<tr>
		<td align='left' class="titulo">LOGIN</td>
	</tr>
</table>
<table align="center" border='0' width="400" cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;E-mail
:	</td>
	<td class="td2"><input type="text" name="email" value="" size=40 maxlength=255></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Senha :<br>
	  </td>
	<td class="td2"><input type="password" name="senha" value=""></td>
</tr>
<input type="hidden" name="situacao" value="#">
</table>
<br>
<center><input type="submit" name="Submit" value="OK" class="botao">
</center>
</form>

		</td>
	</tr>
</table>

<? include ("rodape.php"); ?>
</body>
</html>