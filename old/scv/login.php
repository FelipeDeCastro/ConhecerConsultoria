<html>
<head>
<title>[ SCS ] Login</title>
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
					<p><br>
							</p>
					<p>&nbsp;</p>
					<table align="center" border='0' width="245" cellpadding='4' cellspacing="1" class="texto">
			<form action="acesso.php" method="post" name="formulario" id="formulario">
					<tr>
							<td valign="top">Para efetuar login, digite seus dados: <br></td>
					</tr>
					<tr>
					<td width="193" valign="top">
						<div align="center"> 			  
						  <input type="hidden" name="situacao" value="#"><input name="logar" value="1" type="hidden">
						   <span class="textob">E-mail:&nbsp;</span><input name="email" type="text" class="input-a">
						   <span class="textob">Senha:&nbsp;</span><input name="senha" type="password" class="input-a">			   
						   <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="ok" type="submit" class="input-a" value="Acessar >>">
						</div><br><center><hr></center></td>
			</tr>
					<tr>
							<td valign="top"><p>Ainda n&atilde;o se cadastrou?<br>
											<a href="curriculo.php?cadastrar=1" class="texto2">Clique aqui</a> para se registrar, &eacute; gr&aacute;tis!</p>
									</td>
					</tr>
</form>
			</table>
<? include ("rodape.php"); ?>	
</body>
</html>