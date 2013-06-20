<?  require ("admin/config.php");
	$n_vaga = $_GET['n'];
	$sqlvaga = mysql_query("SELECT *, date_format(data_cad, '%d/%m/%Y') AS datacad FROM vagas WHERE codigo = '$n_vaga'");?>
<html>
<head>
<title>[ SCS ] Detalhes da vaga: <?=mysql_result($sqlvaga,0,"titulo");?></title>
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
<?  include ("topo.php"); ?>
					<table width="710" border="0" background="images/bg_detalhe_vagas.jpg" style="background-repeat:no-repeat;background-position:top;">
                      <tr>
                        <td><br><br><br><table align="center" border='0' width="547" cellpadding='4' cellspacing="1" class="texto">

                          <tr>
                            <td colspan="2" align="center" valign="middle"><table width="404" border="0" class="texto">
                                <tr>
                                  <td width="91" bgcolor="#f7f7f7"><div align="left" style="padding-left:2px"><b class="titulo3">Vaga: </b></div></td>
                                  <td width="303" bgcolor="#f7f7f7"><?=mysql_result($sqlvaga,0,"titulo");?></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#e6e6e6"><div align="left" style="padding-left:2px"><b class="titulo3">Requisitos:</b></div></td>
                                  <td bgcolor="#e6e6e6"><?=mysql_result($sqlvaga,0,"requisitos");?></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#f7f7f7"><div align="left" style="padding-left:2px"><b class="titulo3">Cadastrada:</b></div></td>
                                  <td bgcolor="#f7f7f7"><?=mysql_result($sqlvaga,0,"datacad");?></td>
                                </tr>
                              </table>
                            <p>&nbsp;</p></td>
                          </tr>
                          <tr>
                          </tr>
                          <tr>
                            <td width="264" height="10" align="center" background="images/cadastro.jpg" style="background-repeat:no-repeat;background-position:top;"><p class="texto"><b>Para ver todos os detalhes desta oportunidade de trabalho, voc&ecirc; deve cadastrar seu curr&iacute;culo em nosso sistema. &Eacute; gr&aacute;tis!</b></p>
                            <p><a href="curriculo.php?cadastrar=1"><img src="images/cadastre-se.png" width="87" height="95" border="0"></a><br>
                            <a href="curriculo.php?cadastrar=1" class="texto2"><b>Cadastre-se j&aacute;!!! </b></a></p></td>
                            <td width="264" align="center" valign="top" background="images/login.jpg" style="background-repeat:no-repeat;background-position:top;"><table align="center" border='0' width="245" cellpadding='4' cellspacing="1" class="texto">
                              <form action="acesso.php" method="post" name="formulario" id="formulario">
                                <tr>
                                  <td valign="top"><b>Caso j&aacute; for cadastrado,
                                  para efetuar login, digite seus dados:</b><br></td>
                                </tr>
                                <tr>
                                  <td width="193" valign="top"><div align="center">
                                      <input type="hidden" name="situacao" value="#">
                                    <input name="logar" value="1" type="hidden">
                                      <span class="textob">E-mail:&nbsp;</span>
                                    <input name="email" type="text" class="input-a">
                                      <span class="textob">Senha:&nbsp;</span>
                                    <input name="senha" type="password" class="input-a">
                                      <br>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input name="ok" type="submit" class="input-a" value="Acessar >>">
                                    </div>
                                    <center>
                                    </center></td>
                                </tr>
                              </form>
                            </table></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
					<br>
					<? include ("rodape.php"); ?>	
</body>
</html>