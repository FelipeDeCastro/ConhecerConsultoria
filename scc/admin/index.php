<?php
session_start(); 

header("Content-Type: text/html;  charset=ISO-8859-1",true);

set_time_limit(0);
require ("config.php"); 
$navega = $_GET["navega"];
$codigo = $_GET["codigo"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Sistema de Curr&iacute;culos Conhecer Consultoria - <? echo date(Y); ?></title>
<link href="./style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
<?
flush();
ob_flush();
ob_get_contents();
?>
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0" class="td-cinza04">
  <tr background="#FFFFFF">
    <td align="center" valign="top"> 
      <table width="780" height="100%"  border="0" cellpadding="0" cellspacing="0" background="#FFFFFF" class="td-cinza04">
        <tr background="#FFFFFF"> 
          <td height="80" align="center" valign="middle"><img src="images/topo.jpg" width="600" height="91"></td>
        </tr>
        <tr background="#FFFFFF"> 
          <td colspan="2" valign="top"> <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr background="#FFFFFF"> 
                <td width="160" valign="top"> <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                    <tr background="#FFFFFF"> 
                      <td height="31">&nbsp;</td>
                      <td width="7">&nbsp;</td>
                    </tr>
                    <tr background="#FFFFFF"> 
                      <td align="center" valign="top"><table width="90%"  border="0" cellspacing="0" cellpadding="0">
                          <tr background="#FFFFFF"> 
                            <td class="txt-cinza02">&nbsp;</td>
                            <td class="txt-cinza02">&nbsp;</td>
                          </tr>
						<?
							if($_SESSION["sess_logado"] == "admin")
								{
						?>
						  <tr background="#FFFFFF"> 
                            <td width="10" class="txt-cinza02"><img src="./images/seta.gif" width="7" height="7"></td>
                            <td class="txt-cinza02"><a href="./index.php?navega=curriculo" class="link-cinza02">Curr&iacute;culos</a></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td height="5" colspan="2" background="./images/pontos.gif"></td>
                          </tr>
						  <tr background="#FFFFFF"> 
                            <td width="10" class="txt-cinza02"><img src="./images/seta.gif" width="7" height="7"></td>
                            <td class="txt-cinza02"><a href="./index.php?navega=vagas" class="link-cinza02">Gerenciar Vagas</a></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td height="5" colspan="2" background="./images/pontos.gif"></td>
                          </tr>
						  <tr background="#FFFFFF"> 
                            <td width="10" class="txt-cinza02"><img src="./images/seta.gif" width="7" height="7"></td>
                            <td class="txt-cinza02"><a href="./index.php?navega=candidatura" class="link-cinza02">Candidatura</a></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td height="5" colspan="2" background="./images/pontos.gif"></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td height="10" colspan="2"></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td height="12" class="txt-cinza02"><img src="./images/seta.gif" width="7" height="7"></td>
                            <td class="txt-cinza02"><a href="./logout.php" class="link-cinza02">Sair 
                              do Sistema</a></td>
                          </tr>
						<?
								}
							else
								{
						?>
						<tr background="#FFFFFF"> 
                            <td height="12" class="txt-cinza02"><img src="./images/seta.gif" width="7" height="7"></td>
                            <td class="txt-cinza02"><a href="./#" class="link-cinza02">Sistema de Curriculos</a></td>
                          </tr>
						<?
								}
						?>
                        </table></td>
                      <td><table width="7" height="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr background="#FFFFFF"> 
                            <td valign="top" background="./images/index_11.gif"><IMG SRC="./images/index_10.gif" WIDTH=7 HEIGHT=16 ALT=""></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td background="./images/index_11.gif"></td>
                          </tr>
                          <tr background="#FFFFFF"> 
                            <td valign="bottom" background="./images/index_11.gif"><IMG SRC="./images/index_12.gif" WIDTH=7 HEIGHT=7 ALT=""></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
                <td valign="top"><table width="97%"  border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr background="#FFFFFF"> 
                      <td height="31">&nbsp;</td>
                    </tr>
                    <tr background="#FFFFFF"> 
                      <td></td>
                    </tr>
                    <?
				flush();
				ob_flush();
				ob_get_contents();
				?>
                    <tr background="#FFFFFF"> 
                      <td class="txt-cinza03"><center>
                          <?					
			if($navega!="")
				{
					$navega2=explode("_",$navega);
					$navega2=implode(" ",$navega2);
					echo strtoupper($navega2); 
				}
			else
				{
					echo"Administra&ccedil;&atilde;o"; 
				}
			?>
                          <br>
                        </center>
                        <br> </td>
                    </tr>
                    <?
	if($_SESSION["sess_logado"]<>"admin"){
?>
                    <tr background="#FFFFFF"> 
                      <td align="center" class="txt-cinza02">Somente o adminstrador 
                        tem autoriza&ccedil;&atilde;o para acessar estas informa&ccedil;&otilde;es!!!<br> 
                        <? include "login.php"; ?>
                      </td>
                    </tr>
                    <?
	}else{
?>
                    <tr background="#FFFFFF"> 
                      <td class="txt-cinza02"> 
                        <? 
	
	if($navega!=""){
	
		include ("./include/".$navega.".php"); 
	}
?>
                      </td>
                    </tr>
                    <?
	}
?>
                    <?
flush();
ob_flush();
ob_get_contents();
?>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr align="center"> 
          <td height="20" colspan="2" class="txt-cinza01"> </td>
        </tr>
        <tr align="center"> 
          <td height="30" colspan="2"><span class="txt-cinza02"><strong>Conhecer Consultoria&reg; Todos os Direitos Reservados - All Rigths Reserved </strong></span></td>
        </tr>
      </table>
	</td>
  </tr>
</table>
</BODY>
</HTML>
<?
exit;
?>