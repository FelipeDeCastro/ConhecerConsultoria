<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE>Conhecer Consultoria - Seja Bem Vindo!</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles.css" rel="stylesheet" type="text/css">
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body topmargin="0" background="images/l.gif" style="background-position:top; background-repeat:repeat-x;">
<table width="711" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" colspan="2" background="images/barra_top.gif" style="background-repeat:no-repeat;"></td>
  </tr>
  <tr>
    <td colspan="2"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','711','height','181','src','flash/topo','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/topo' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="711" height="181">
      <param name="movie" value="flash/topo.swf" />
      <param name="quality" value="high" />
      <embed src="flash/topo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="711" height="181"></embed>
    </object></noscript></td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#CCCCCC"><center><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','709','height','33','align','middle','src','flash/menu','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','flash/menu' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="709" height="33" align="middle">
      <param name="movie" value="flash/menu.swf" />
      <param name="quality" value="high" />
      <embed src="flash/menu.swf" width="709" height="33" align="middle" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
    </object></noscript></center></td>
  </tr>
  <tr>
    <td width="211"><?php include ("menu.php");?></td>
    <td width="500"><div class="divcentro">
      <p><?
   if ($acao=="cad_msg") {
    $msg="";
    $campo_data = date("d/m/Y H:i:s");        
	     $message="<center><img src='http://www.conhecerconsultoria.com/images/topo_02.jpg'></center>
		 		   <p align='center'><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'>Muito 
                   obrigado $ednome por sua mensagem que foi </font></p>
                   <p align='center'><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'>cadastrada 
                   com sucesso!!!</font></p>
                   <p align='center'><font color='#000000' size='2' face='Arial, Helvetica, sans-serif'>Estaremos 
                   lhe respondendo o mais <strong>urgente</strong> poss&iacute;vel!!!</font></p>
                   <p align='center'><font size='2' face='Arial, Helvetica, sans-serif'><strong><a href='http://www.conhecerconsultoria.com/' target='_blank' style='text-decoration:none'>Equipe Conhecer Consultoria ".date('Y')."</a></strong></font></p>";
         $mail=("$edmail");
	     $assunto="Contato Conhecer Consultoria";
	     $remetente="Conhecer Consultoria <comercial@conhecerconsultoria.com>";
         $headers = "Content-Type: text/html; charset=iso-8859-1\n";  
         $headers.="From: $remetente\n"; 
	     mail("$mail","$assunto","$message","$headers");
		 $mail_adm=("angela.carvalho@conhecerconsultoria.com");
		 $msg_adm="<img src='http://www.conhecerconsultoria.com/images/topo_02.jpg'>
					<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>H&aacute; uma nova mensagem de contato<br>
					via formul&aacute;rio do site </font><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>!!! </font></p>
					<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Nome: $ednome </font></p>                   
                   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Email: <a href='mailto:$edmail?subject=RE: Conhecer Consultoria'>$edmail</a></font></p>
                   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Cidade/UF: $edcidade </font></p>
                   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Data: $campo_data</font></p>
                   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Mensagem: $edmsg</font></p><p>&nbsp;</p>";
		 mail("$mail_adm","$assunto","$msg_adm","$headers");
		 $msg="<p align='center'><font color='#FF0000' size='2' face='Verdana'>Sua mensagem foi enviada com sucesso!!!</font></p>";
		 echo "<script>alert('".$ednome.", mensagem enviada com sucesso!');</script>";
   }
?>
<p align="justify"><img src="images/emailbotao.png" width="16" height="16" align="absmiddle" /> E-mails:<br />
  <a href="mailto:comercial@conhecerconsultoria.com" style="color:#FF6600">comercial@conhecerconsultoria.com</a><br />
  <a href="mailto:desenvolvimento@conhecerconsultoria.com" style="color:#FF6600">desenvolvimento@conhecerconsultoria.com</a><br />
    <a href="mailto:angela.carvalho@conhecerconsultoria.com" style="color:#FF6600">angela.carvalho@conhecerconsultoria.com</a> </p>
<p><img src="images/fone.jpg" width="16" height="13" /> Telefones: <br />
  (21) 2138-9810<br />
(21) 2138-9811<br />
<br />
<img src="images/fax.jpg" width="16" height="15" align="absmiddle" /> Fax:<br />
(21) 2490-1768</p>
<p>&nbsp;</p>
<p><strong>Voc&ecirc; pode preencher o formul&aacute;rio abaixo para nos enviar suas mensagens : </strong></p>
<table width="386" height="194" border="0" cellspacing="0" cellpadding="0">
  <form action="index1.php?opcao=5&acao=cad_msg" method="post" name="contato" id="contato">
    <tr>
      <td height="19" colspan="2" valign="top" style="padding-top:4px "><div align="center"><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif"><? print $msg; ?></font></div></td>
    </tr>
    <tr>
      <td height="19" valign="top" style="padding-top:4px "><div align="right"><span style="margin-right:8px;"><span class="style2">Seu nome:</span></span></div></td>
      <td align="left" valign="top"><input name="ednome" type="text" class="form" id="ednome" size="30" /></td>
    </tr>
    <tr>
      <td height="19" valign="top" style="padding-top:4px "><div align="right"><span style="margin-right:8px;"><span class="style2">E-mail:</span></span></div></td>
      <td align="left" valign="top"><input name="edmail" type="text" class="form" id="edmail" size="30" /></td>
    </tr>
    <tr>
      <td height="19" valign="top" style="padding-top:4px "><div align="right"><span style="margin-right:8px;"><span class="style2">Cidade:</span></span></div></td>
      <td align="left" valign="top"><input name="edcidade" type="text" class="form" id="edcidade" size="30" /></td>
    </tr>
    <tr>
      <td height="19" valign="middle" style="padding-top:4px "><div align="right"><span style="margin-right:8px;"><span class="style2">Mensagem:</span></span></div></td>
      <td align="left" valign="top"><textarea name="edmsg" cols="40" rows="6" class="form" id="textarea"></textarea></td>
    </tr>
    <tr>
      <td width="100" height="24" valign="top" style="padding-top:4px ">&nbsp;</td>
      <td width="219" align="left" valign="top"><span style="padding-top:4px ">
        <input name="Submit" type="submit" class="input" value="Enviar" />
      </span></td>
    </tr>
  </form>
  <tr>
    <td height="26" colspan="2" valign="top"></td>
  </tr>
</table>
</p>
      </div></td>
  </tr>
  <tr>
    <td height="76" COLSPAN="2" align="center" valign="middle" background="images/28.gif"><div align="justify" style=" padding-top:8px; padding-left:8px; padding-right:8px; vertical-align:middle;">
	    Temos de aprender onde nos situar e quais s&atilde;o nossas aptid&otilde;es para extrair o m&aacute;ximo benef&iacute;cio disso. Devemos saber onde est&atilde;o nossos defeitos, quais as aptid&otilde;es que n&atilde;o temos, onde estamos, quais s&atilde;o os nossos valores. Pela primeira vez na Hist&oacute;ria da humanidade temos de aprender a assumir a responsabilidade de administrar a n&oacute;s pr&oacute;prios. E, como j&aacute; disse, provavelmente essa &eacute; uma mudan&ccedil;a muito maior do que a trazida por qualquer tecnologia - uma mudan&ccedil;a na condi&ccedil;&atilde;o humana. <em>Peter Drucker</em> </div></td>
  </tr>
  <tr>
    <td colspan="2" background="images/30.gif" height="43">
	  <center>
    </center></td>
  </tr>
  <tr>
    <td colspan="2" background="images/31.gif" height="42" style="background-repeat:no-repeat;">
    <center>
		  <div class="t9" style="padding-top:5pt"><font color="FFFFFF">Copyright &copy; <?=date('Y')?>
	      Conhecer Consultoria. All rights reserved. Powered by <a href="http://www.b2b-future.com" target="_blank" class="t9" style="color:#FFFFFF;">B2B</a> </font></div>
		</center></td>
  </tr>
</table>
</body>
</html>