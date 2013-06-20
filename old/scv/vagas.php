<?php
include "travar.php";
session_start();
$candidato = $_SESSION["sess_codigo"];

include "db.php"; 
?>
<html>
<head>
<title>[ SCS ] Vagas</title>
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
</style>
<? include ("menu_jsp.php");?>
</head>
<body bgcolor="#ffffff" marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" background="images/bg.jpg">
<? include ("topo.php"); ?>	
      <table width="710" border="0" align="center" background="images/vagas_aberto.jpg" style="background-repeat:no-repeat;background-position:top;">
        <tr>
          <td>
      <br><br><br><br><br><br><br><br><br>
<div id="masterdiv">
<? ?>
<? if($candidatar==1)
	{ 	
		$regs2= mysql_query("SELECT * FROM candidatura WHERE vaga='$vaga' AND candidato='$candidato'", $db_conn);
		if(mysql_num_rows($regs2)==0)
			{
			$query = "INSERT INTO candidatura ";
			$query = $query . "(candidato,vaga) ";
			$query = $query . "VALUES (";
			$query = $query . $quote . $candidato 	. $quote . ", ";			
			$query = $query . $quote . $vaga		. $quote . ")";
			mysql_query($query, $db_conn)or die("Erro: ".$query);
			#=========================================
				 $campo_data = date("d/m/Y H:i:s");        
				 $sql_email = mysql_query("SELECT email FROM curriculo WHERE codigo='$candidato'", $db_conn);
				 $mail = mysql_result($sql_email,0,"email");
				 $ide = $_GET['ie'];
				 $dados_empresa = mysql_query("SELECT nome, email FROM parceiros WHERE id='$ide'", $db_conn);
				 $dados_vaga = mysql_query("SELECT titulo, requisitos FROM vagas WHERE codigo ='$vaga'", $db_conn);
				 $message="<HTML><HEAD><TITLE>[ SCS ] Confirmação de Canditatura</TITLE>
							<link href='http://www.sindimest-rj.org.br/scs/style.css' rel='stylesheet' type='text/css'>".
							include "http://www.sindimest-rj.org.br/scs/recomende_js.php"."
							</HEAD><BODY bgcolor='#d9f1ff' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' bgproperties='FIXED' >
							<center><a href='http://www.sindimest-rj.org.br/scs/' target='_blank'><img src='http://www.sindimest-rj.org.br/scs/images/topo_email_candidatura.jpg' border='0' width='600' height='90' alt=''></a><br>
							<table width='600' cellspacing='0' cellpadding='10' border='0' bgcolor='#FFFFFF'><tr>
							<td height='200' valign='top' background='http://www.sindimest-rj.org.br/scs/images/rep_line.jpg' style='background-repeat:repeat-x; background-position:bottom left;'>
							<center><font face='verdana' size='3' color='D73B20'><b>Confirmação de candidatura!!!</b></font></center><br><div align='justify'>							
							<table border='0' cellpadding='0' cellspacing='5'><tr><td class='titulo2'>
							<div align='justify'>O <b>SCS - Sistema de Curr&iacute;culos Sindimest-RJ</b>, enviou seu <strong>Link SCS</strong>, para a empresa <strong>". mysql_result($dados_empresa,0,"nome") ."</strong>, referente &agrave; vaga de emprego: <br><br> <strong>". mysql_result($dados_vaga,0,"titulo") ."</strong> - Requisitos : ". mysql_result($dados_vaga,0,"requisitos") ." <br><br>
							<span class='texto2'>Lembrando que voc&ecirc; pode usar seu <strong>Link SCS</strong> para divulga&ccedil;&atilde;o do seu Curr&iacute;culo Resumido, protegendo seus dados pessoais, como CPF e outros. Devido ao seu Curr&iacute;culo estar em nosso banco de dados, voc&ecirc; n&atilde;o precisa enviar o mesmo em anexos, que devido &agrave; muitos v&iacute;rus estarem sendo enviados por e-mail (spam), a pessoa que receber seu e-mail, simplesmente clica no seu <strong>Link SCS</strong>, &eacute; redirecionada ao SCS, visualiza seu Curr&iacute;culo com toda seguran&ccedil;a e confiabilidade.  </span><br>
							<br>Este e-mail é apenas uma confirmação de que o seu Currículo foi enviado. </div></tr><tr><td colspan='2'><p align='justify'><font face='Verdana' size='2' color='#000000'>
							<br><span class='titulo2'>Obrigado. Mantenha o seu currículo sempre atualizado. Assim, a empresa anunciante entra em contato com voc&ecirc; mais facilmente, al&eacute;m de aumentar suas chances! <br>
							<br>Disponha de nossos serviços! <br><br>Equipe Sindimest-RJ<br>
							<strong><a href='http://www.sindimest-rj.org.br' target='_blank' class='titulo3'>www.sindimest-rj.org.br</a></strong></span></font><font face='Verdana' size='2' color='#000000'><b><br>
							<br></b></font></p></td></tr></table></div></td></tr></table><table width='600' cellspacing='0' cellpadding='0' border='0' bgcolor='#FFFFFF'>
							<tr><td height='90' valign='top'><img src='http://www.sindimest-rj.org.br/scs/images/rodape_email_candidatura.gif' width='600' height='90' border='0' usemap='#Map'></td>
							</tr></table></center><map name='Map'><area shape='rect' coords='253,44,345,61' href='javascript:recomende();' alt='Recomende o SCS'>
							<area shape='rect' coords='459,82,578,94' href='http://www.mkinformatica.net' target='_blank' alt='MK Inform&aacute;tica - Hospedagem e Desenvolvimento de Sites'></map></BODY></HTML>";
				 $assunto="SCS - Confirmação de Candidatura";
				 $remetente="Sindimest-RJ <sindicato@sindimest-rj.org.br>";
				 $headers = "Content-Type: text/html; charset=iso-8859-1\n";  
				 $headers.="From: $remetente\n"; 
				 /*mail("$mail","$assunto","$message","$headers");
				 $mail_adm = mysql_result($parceiro,0,"email");
				 $msg_adm="<p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>H&aacute; uma nova mensagem de  
						   contato!!! </font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Nome: $ednome </font></p>                   
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Email: $edmail </font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Cidade/UF: $edcidade </font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Data: $campo_data</font></p>
						   <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Mensagem: $edmsg</font></p><p>&nbsp;</p>";
				 mail("$mail_adm","$assunto","$msg_adm","$headers");
				 $msg="<p align='center'><font color='#FF0000' size='2' face='Verdana'>Sua mensagem foi enviada com sucesso!!!</font></p>";
				 echo "<script>alert('".$ednome.", mensagem enviada com sucesso!');</script>";*/
			#=========================================
			echo "<script>alert('Candidatura feita com sucesso!');</script>";
			}
	}
		
$regs= mysql_query("SELECT * FROM vagas", $db_conn);	
	while($reg = mysql_fetch_array($regs)){
		$codigo 	= $reg["codigo"];
		$titulo		= $reg["titulo"];
		$requisitos	= $reg["requisitos"];
		$id_parceiro= $reg["id_parceiro"];
		
		$parceiro = mysql_query("SELECT * FROM parceiros WHERE id = '$id_parceiro'", $db_conn);
					
		$regs2= mysql_query("SELECT * FROM candidatura WHERE vaga='$codigo' AND candidato='$candidato'", $db_conn);
		$candidato = mysql_num_rows($regs2);
?>
<div class="menutitle" onClick="SwitchMenu('sub<?=$nvaga?>')"><? echo $titulo; ?></div>
	<span class="submenu" id="sub<?=$nvaga?>" style="background-color:#f7f7f7;">	
	<fieldset>
		<table width="100%" border="0">		
		  <tr>
			<td width="13%" align="right" valign="top" class="titulo3" background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;">Requisitos:</td>
			<td width="87%" background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;"><span class="texto"><? echo $requisitos; ?></span></td>
		  </tr>
		  
		  <tr>
		    <td align="right" valign="top" class="titulo3" background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;">Anunciante:</td>
		    <td background="images/rep_line.jpg" style="background-repeat:repeat-x; background-position:bottom left;"><img src="images/<? echo mysql_result($parceiro,0,"logo"); ?>" hspace="5" vspace="5" align="left" alt="<? echo mysql_result($parceiro,0,"nome"); ?>">
			<span class="texto"><b>Nome:</b> <? echo mysql_result($parceiro,0,"nome"); ?><br>
			<b>Site:</b> <a href="http://<? echo mysql_result($parceiro,0,"site"); ?>" target="_blank"><? echo mysql_result($parceiro,0,"site"); ?></a><br>
			<b>E-mail:</b> <? echo mysql_result($parceiro,0,"email"); ?><br>
			<b>Informações:</b> <? echo mysql_result($parceiro,0,"infos"); ?></span></td>
		    </tr>
		</table>
<?
if($candidato==0)
	{
?>
	<img src="images/candidatar.png" align="absmiddle"><a href="./vagas.php?vaga=<? echo $codigo; ?>&candidatar=1&ie=<? echo mysql_result($parceiro,0,"id"); ?>" class="titulo2">Se candidatar a esta vaga!</a></fieldset></span>
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
<? include ("rodape.php"); ?>	
</body>
</html>