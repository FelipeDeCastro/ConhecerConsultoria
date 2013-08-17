<?php

/**
 * @author Wesley S. Araújo
 * @copyright 2013
 */
require("phpmailer/class.phpmailer.php");

$nome  = $_POST['nome'];
$email = $_POST['email'];
$mtexto = $_POST['mensagem']; 

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "localhost"; // Endereço do servidor SMTP
$mail->SMTPAuth = false; // Usa autenticação SMTP? (opcional)
//$mail->Username = 'site=parquedocontorno.com.br'; // Usuário do servidor SMTP
//$mail->Password = '230165'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $email; // Seu e-mail
$mail->FromName = $nome; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('rjunior@conhecerconsultoria.com', 'angela.carvalho@conhecerconsultoria.com');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Contato - Via site"; // Assunto da mensagem
$mail->Body = utf8_decode("
        <HTML>
			<HEAD>
				<style>
				TD {color:#666666;font-family:Verdana;font-size:12px; LINE-HEIGHT: 120%;}
				A:{TEXT-DECORATION: none; color:#666666}
				A:HOVER {TEXT-DECORATION: underline; color:#666666}
				A:VISITED:HOVER {TEXT-DECORATION: underline; color:#666666}
				</style>
			</HEAD>
			<BODY topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">
    			<TABLE WIDTH=\"400\" HEIGHT=\"400\" CELLPADDING=\"0\" CELLSPACING=\"0\" BORDER=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"border:#333333 solid 1px\">
    			<TR>
    				<TD WIDTH=\"40\">&nbsp;&nbsp;&nbsp;</TD>
    				<TD HEIGHT=\"62\" align=\"center\"><BR></TD>
    				<TD WIDTH=\"40\">&nbsp;&nbsp;&nbsp;</TD>
    			</TR>
    			<TR>
    				<TD WIDTH=\"40\">&nbsp;</TD>
    				<TD  VALIGN=\"top\" >
    				<B>Contato via site</B><BR><BR>
    				<b>Nome: </b> ".$nome."<BR><BR>
    				<b>E-mail: </b>".$email."<BR><BR>
    				<b>Mensagem: </b>".$mtexto."<BR><BR>
    				</TD>
    				<TD WIDTH=\"40\">&nbsp;</TD>
    				</TR>
    			</TABLE>
			</BODY>
		</HTML>");
$mail->AltBody = utf8_decode("
                    <HTML>
			<HEAD>
				<style>
				TD {color:#666666;font-family:Verdana;font-size:12px; LINE-HEIGHT: 120%;}
				A:{TEXT-DECORATION: none; color:#666666}
				A:HOVER {TEXT-DECORATION: underline; color:#666666}
				A:VISITED:HOVER {TEXT-DECORATION: underline; color:#666666}
				</style>
			</HEAD>
			<BODY topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">
			<TABLE WIDTH=\"400\" HEIGHT=\"400\" CELLPADDING=\"0\" CELLSPACING=\"0\" BORDER=\"0\" bgcolor=\"#ffffff\" align=\"center\" style=\"border:#333333 solid 1px\">
			<TR>
				<TD WIDTH=\"40\">&nbsp;&nbsp;&nbsp;</TD>
				<TD HEIGHT=\"62\" align=\"center\"><BR></TD>
				<TD WIDTH=\"40\">&nbsp;&nbsp;&nbsp;</TD>
			</TR>
			<TR>
				<TD WIDTH=\"40\">&nbsp;</TD>
				<TD  VALIGN=\"top\" >
				<B>Parque do Contorno - Mensagem via site</B><BR><BR>
				<b>Nome: </b> ".$nome."<BR><BR>
				<b>E-mail: </b>".$email."<BR><BR>
				<b>Mensagem: </b>".$mtexto."<BR><BR>
				</TD>
				<TD WIDTH=\"40\">&nbsp;</TD>
				</TR>
			</TABLE>
			</BODY>
			</HTML>");

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
echo '<script language="javascript" type="text/javascript">
alert("Contato enviado com sucesso!");
</script>';
} else {
echo '<script language="javascript" type="text/javascript">
alert("Não foi possível enviar o e-mail.<br /><br /><b>Informações do erro:</b> <br />"\'' .$mail->ErrorInfo.'\'");
</script>';
}
?>