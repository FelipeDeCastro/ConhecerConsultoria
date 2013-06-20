<?
	$erro=$_REQUEST['erro'];
	if($erro == "restrito")
{
?>
<html>
<head>
<title>SCS - Sindimest-RJ</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="../styles.css" rel="stylesheet" type="text/css">
</head>
<script>window.defaultStatus='ÁREA RESTRITA'</script>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<p>&nbsp;</p>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="200" align="center" bgcolor="#CCCCCC"><br>
      		<span class="style2">Esta área possui acesso restrito a usu&aacute;rios cadastrados.<br>
      		Para acessá-la, clique em login.</span><br>
      <br>
      <a href="login.php" class="style5" onMouseOver="self.status='Ir à página de Login'; return true">Login</a> | <a href="javascript:history.back(1)" class="style5">voltar</a><br>	  
	  <meta http-equiv="refresh" content="3;URL=login.php">
      <br>    </td>
  </tr>
</table>
</body>
</html>
<? } else if ($erro != "restrito"){ print "<meta http-equiv='refresh' content='1;URL=login.php'>"; } ?>