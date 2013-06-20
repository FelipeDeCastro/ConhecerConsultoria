<?php
session_start();
//error_reporting(E_ALL);
include ("travar.php");

$candidato = $_SESSION["usu_id"];

require ("admin/config.php");
?>
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

.menutitle{
cursor:pointer;
margin-bottom: 1px;
background-color:#e6e6e6;
padding:2px;
text-align:left;
font-weight:bold;
font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #3d82a9; font-weight:bold;
}
.submenu { font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #4881c7; }
.logout { text-align:right; padding-right:30px}
.logout a{ color:#CC6600}
</style>
<? include ("menu_jsp.php");?>
<div class="logout"><a href="index.php?p=3&acao=2" class="logout">Sair do sistema</a></div>
<h2>Vagas em aberto</h2>
<p>Clique sobre a vaga para visualizar mais detalhes</p>

      <table width="710" border="0" align="center">
        <tr>
          <td>
<div id="masterdiv">
<? ?>
<? if($_GET["candidatar"]==1)	{ 	
		$regs2= mysql_query("SELECT * FROM candidatura WHERE vaga='".$_GET["vaga"]."' AND candidato='".$_SESSION["usu_id"]."'");
		if(mysql_num_rows($regs2)==0){
			$query = "INSERT INTO candidatura ";
			$query = $query . "(candidato,vaga) ";
			$query = $query . "VALUES (";
			$query = $query . $quote . $candidato 	. $quote . ", ";			
			$query = $query . $quote . $vaga		. $quote . ")";
			$res = mysql_query($query);
			if ($res){
			#=========================================
				 $campo_data = date("d/m/Y H:i:s");        
				 $sql_email = mysql_query("SELECT email FROM curriculo WHERE codigo='$candidato'");
				 $mail = mysql_result($sql_email,0,"email");
				 $ide = $_GET['ie'];
				 $dados_empresa = mysql_query("SELECT nome, email FROM parceiros WHERE id='$ide'");
				 $dados_vaga = mysql_query("SELECT titulo, requisitos FROM vagas WHERE codigo ='$vaga'");
				 $message="<HTML><HEAD><TITLE>[ SCC ] Confirma&ccedil;&atilde;o de Canditatura</TITLE>
							<link href='http://www.conhecerconsultoria.com/scc/style.css' rel='stylesheet' type='text/css'>
							</HEAD><BODY bgcolor='#d9f1ff' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' bgproperties='FIXED' >
							<center><a href='http://scc.conhecerconsultoria.com/' target='_blank'><img src='http://www.conhecerconsultoria.com/scc/images/topo_candidatura.jpg' border='0' width='600' height='90' alt=''></a><br>
							<table width='600' cellspacing='0' cellpadding='10' border='0' bgcolor='#FFFFFF'><tr>
							<td height='200' valign='top' background='http://www.conhecerconsultoria.com/scc/images/rep_line.jpg' style='background-repeat:repeat-x; background-position:bottom left;'>
							<center><font face='verdana' size='3' color='D73B20'><b>Confirma&ccedil;&atilde;o de candidatura!</b></font></center><br><div align='justify'>
							<p>Referente &agrave; vaga de emprego: <br><br> <strong>". mysql_result($dados_vaga,0,"titulo") ."</strong> - Requisitos : ". mysql_result($dados_vaga,0,"requisitos") ." <br><br></p>
							<table border='0' cellpadding='0' cellspacing='5'><tr><td colspan='2'><p align='justify'><font face='Verdana' size='2' color='#000000'>
							<br><span class='titulo2'>Obrigado. Mantenha o seu curr&iacute;culo sempre atualizado. Assim, a empresa anunciante entra em contato com voc&ecirc; mais facilmente, al&eacute;m de aumentar suas chances! <br>
							<br>Disponha de nossos servi&ccedil;os! <br><br>
							<a href=\"http://scc.conhecerconsultoria.com/recomende/form.php\" target=\"_blank\">Indique nosso sistema aos seus amigos</a>
							<br><br>
							Equipe Conhecer Consultoria<br>
							<strong><a href='http://www.conhecerconsultoria.com' target='_blank' class='titulo3'>www.conhecerconsultoria.com</a></strong></span></font><font face='Verdana' size='2' color='#000000'><b><br>
							<br></b></font></p></td></tr></table></div></td></tr></table><table width='600' cellspacing='0' cellpadding='0' border='0' bgcolor='#FFFFFF'>
							<tr><td height='90' valign='top'><img src='http://www.conhecerconsultoria.com/scc/images/rodape_email.jpg' width='600' height='90' border='0' usemap='#Map'></td>
							</tr></table><p style=\"font-size:10px; align:right\"><a href='http://www.mkinformatica.net' target='_blank'>Powered by MK Inform&aacute;tica - Hospedagem e Desenvolvimento de Sites</a></p></center></BODY></HTML>";
							/*<tr><td class='titulo2'>
							<div align='justify'>O <b>SCC - Sistema de Curr&iacute;culos Conhecer Consultoria</b>, enviou seu <strong>Link SCC</strong>, para a empresa <strong>". mysql_result($dados_empresa,0,"nome") ."</strong>, 
							<span class='texto2'>Lembrando que voc&ecirc; pode usar seu <strong>Link SCC</strong> para divulga&ccedil;&atilde;o do seu Curr&iacute;culo Resumido, protegendo seus dados pessoais, como CPF e outros. Devido ao seu Curr&iacute;culo estar em nosso banco de dados, voc&ecirc; n&atilde;o precisa enviar o mesmo em anexos, que devido &agrave; muitos v&iacute;rus estarem sendo enviados por e-mail (spam), a pessoa que receber seu e-mail, simplesmente clica no seu <strong>Link SCC</strong>, &eacute; redirecionada ao SCC, visualiza seu Curr&iacute;culo com toda seguran&ccedil;a e confiabilidade.  </span><br>
							<br>Este e-mail &eacute; apenas uma confirma&ccedil;&atilde;o de que o seu Curr&iacute;culo foi enviado. </div></tr>*/
				 $assunto="SCC - Confirmação de Candidatura";
				 $remetente="Conhecer Consultoria <selecao@conhecerconsultoria.com>";
				 $headers = "Content-Type: text/html; charset=iso-8859-1\n";  
				 $headers.="From: $remetente\n"; 
				 mail("$mail","$assunto","$message","$headers");
				 $mail_adm = "michaelcolla7@gmail.com";
				 $msg_adm="<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>H&aacute; uma nova candidatura no SCC!!! </font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Nome: ".$_SESSION["usuario"]."</font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Vaga: ".mysql_result($dados_vaga,0,"titulo")."</font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Data: $campo_data</font></p>
						   <p>&nbsp;</p>";
				 mail("$mail_adm","$assunto","$msg_adm","$headers");
				 $msg="<p align='center'><font color='#FF0000' size='2' face='Verdana'>Sua mensagem foi enviada com sucesso!!!</font></p>";
				 echo "<script>alert('Candidatura realizada com sucesso!');</script>";
			} else {
				echo "<h2>Houve um erro, tente se candidatar mais tarde!</h2>"	;
			}
		}
	}
		
$regs= mysql_query("SELECT * FROM vagas");	
	while($reg = mysql_fetch_array($regs)){
		$codigo 	= $reg["codigo"];
		$titulo		= $reg["titulo"];
		$requisitos	= $reg["requisitos"];
		$id_parceiro= $reg["id_parceiro"];
		
		$parceiro = mysql_query("SELECT * FROM parceiros WHERE id = '$id_parceiro'");
					
		$regs2= mysql_query("SELECT * FROM candidatura WHERE vaga='$codigo' AND candidato='".$_SESSION["usu_id"]."'");
		$candidato = mysql_num_rows($regs2);
?>
<div class="menutitle" onClick="SwitchMenu('sub<?=$nvaga?>')"><? echo utf8_encode($titulo); ?></div>
	<span class="submenu" id="sub<?=$nvaga?>" style="background-color:#f7f7f7;">	
	<fieldset>
		<table width="100%" border="0">		
		  <tr>
			<td width="13%" align="right" valign="top" class="titulo3" background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;">Requisitos:</td>
			<td width="87%" background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;"><span class="texto"><? echo utf8_encode($requisitos); ?></span></td>
		  </tr>
		  
		  <tr>
		    <td align="right" valign="top" class="titulo3" background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;">Anunciante:</td>
		    <td background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;"><img src="images/<? echo mysql_result($parceiro,0,"logo"); ?>" hspace="5" vspace="5" align="left" alt="<? echo mysql_result($parceiro,0,"nome"); ?>">
			<span class="texto"><b>Nome:</b> <? echo mysql_result($parceiro,0,"nome"); ?><br>
			<b>Site:</b> <a href="http://<? echo mysql_result($parceiro,0,"site"); ?>" target="_blank"><? echo mysql_result($parceiro,0,"site"); ?></a><br>
			<b>E-mail:</b> <? echo mysql_result($parceiro,0,"email"); ?><br>
			<b>Informações:</b> <? echo utf8_encode(mysql_result($parceiro,0,"infos")); ?></span></td>
		    </tr>
		</table>
<?
if($candidato==0)
	{
?>
	<img src="images/candidatar.png" align="absmiddle"><a href="index.php?p=2&vaga=<? echo $codigo; ?>&candidatar=1&ie=<? echo mysql_result($parceiro,0,"id"); ?>" class="titulo2">Se candidatar a esta vaga!</a></fieldset></span>
<?
	}
else
	{
?>
	<img src="images/candidato.png" align="absmiddle"> <span class="texto">Voc&ecirc; j&aacute; se candidatou a esta vaga!</span></fieldset></span>
<?
	} $nvaga++; }
?>	
<p align="center" class="titulo3">==========================================================</p>
<p class="titulo3">&nbsp;</p>

<p><br>
</p></td>
        </tr>
      </table>