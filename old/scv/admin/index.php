<?
session_start(); 
flush();
ob_flush();
ob_get_contents();
set_time_limit(0);
include "./db.php"; 
$navega = $_GET["navega"];
$codigo = $_GET["codigo"];

function retiraacentopasta($palavra)
	{
		//tranforma em letras normais (a,e,i,o,u)
		$letras 		= array("a","a","a","a","a","e","e","e","e","i","i","i","i","o","o","o","o","o","u","u","u","u","c","A","A","A","A","A","E","E","E","E","I","I","I","I","O","O","O","O","U","U","U","U","C","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
		$letrasCod 		= array("&#225;","&#224;","&#226;","&#227;","&#228;","&#233;","&#232;","&#234;","&#235;","&#237;","&#236;","&#238;","&#239;","&#243;","&#242;","&#244;","&#245;","&#246;","&#250;","&#249;","&#251;","&#252;","&#231;","&#193;","&#192;","&#194;","&#195;","&#196;","&#201;","&#200;","&#202;","&#203;","&#205;","&#204;","&#206;","&#207;","&#211;","&#210;","&#213;","&#214;","&#218;","&#217;","&#219;","&#220;","&#199;",">","<","\"",""," ","&#180;","&#198;","&#230;","&#197;","&#229;","","&#184;","&#162;","","","","&#247;","&#208;","&#240;","","&#189;","&#188;","&#190;","&#191;","","&#175;","","","","&#209;","&#241;","&#170;","&#186;","&#216;","&#248;","","","","","","","&#185;","&#178;","&#179;","&#223;","&#222;","&#254;","&#215;","&#168;","&#221;","&#253;","&#165;","&#255;","");
		$letrasAcento	= array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",">","<","\"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","", "'");	
		$letrasHtml		= array("&aacute;","&agrave;","&acirc;","&atilde;","&auml;","&eacute;","&egrave;","&ecirc;","&euml;","&iacute;","&igrave;","&icirc;","&iuml;","&oacute;","&ograve;","&ocirc;","&otilde;","&ouml;","&uacute;","&ugrave;","&ucirc;","&uuml;","&ccedil;","&Aacute;","&Agrave;","&Acirc;","&Atilde;","&Auml;","&Eacute;","&Egrave;","&Ecirc;","&Euml;","&Iacute;","&Igrave;","&Icirc;","&Iuml;","&Oacute;","&Ograve;","&Otilde;","&Ouml;","&Uacute;","&Ugrave;","&Ucirc;","&Uuml;","&Ccedil;","&gt;","&lt;","&quot;","&euro;","&nbsp;","&acute;","&AElig;","&aelig;","&Aring;","&aring;","&brvbar;","&cedil;","&cent;","&copy;","&curren;","&deg;","&divide;","&ETH;","&eth;","&euro;","&frac12;","&frac14;","&frac34;","&iquest;","&laquo;","&macr;","&micro;","&middot;","&not;","&Ntilde;","&ntilde;","&ordf;","&ordm;","&Oslash;","&oslash;","&para;","&plusmn;","&raquo;","&reg;","&sect;","&shy;","&sup1;","&sup2;","&sup3;","&szlig;","&THORN;","&thorn;","&times;","&uml;","&Yacute;","&yacute;","&yen;","&yuml;","");
		$palavra		= str_replace($letrasCod, $letras, $palavra);
		$palavra		= str_replace($letrasHtml, $letras, $palavra);
		$palavra		= str_replace($letrasAcento, $letras, $palavra);
		return $palavra;
	}
?>
<HTML>
<HEAD>
<TITLE> Sistema de Currículos Conhecer Consultoria - <? echo date(Y); ?></TITLE>
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
                            <td class="txt-cinza02"><a href="./index.php?navega=vagas" class="link-cinza02">Cadastrar Vagas</a></td>
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
	
		include "./include/".$navega.".php"; 
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