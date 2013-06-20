<?php

/**
 * @author Wesley S. Araújo
 * @copyright 2013
 */
require("phpmailer/class.phpmailer.php");

$nome  = $_POST['nome'];
$crea = $_POST['crea'];
$rg = $_POST['rg']; 
$nascimento  = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$escolaridade = $_POST['escolaridade']; 
$endereco  = $_POST['endereco'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone']; 
$email  = $_POST['email'];
$areaAtuacao = $_POST['area-de-atuacao'];
$funcao = $_POST['funcao']; 
$tempoAtuacao  = $_POST['tempo-de-atuacao'];
$instrutor = $_POST['instrutor'];
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
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Cadastro de instrutores - Via site"; // Assunto da mensagem
$mail->Body = "
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
    				<B>Cadastro de instrutores via site</B><BR><BR>

					<b>Dados pessoais e profissionais</b><BR>
    				<b>Nome: </b> ".$nome."<BR>
    				<b>CREA: </b>".$crea."<BR>
    				<b>RG: </b>".$rg."<BR>
    				<b>Nascimento: </b> ".$nascimento."<BR>
    				<b>CPF: </b>".$cpf."<BR>
    				<b>Escolaridade: </b>".$escolaridade."<BR><BR>
					
					<b>Dados para contato e endereço</b><BR>
    				<b>Endereço: </b> ".$endereco."<BR>
    				<b>CEP: </b>".$cep."<BR>
    				<b>Telefone: </b>".$telefone."<BR>
    				<b>Email: </b> ".$email."<BR><BR>
					
					<b>Em qual área gostaria de atuar?</b><BR>
    				".$areaAtuacao."<BR><BR>
					
					<b>Em qual função tem mais experiência/conhecimento?</b><BR>
    				".$funcao."<BR><BR>
					
					<b>Há quanto tempo atua na área?</b><BR>
    				".$tempoAtuacao."<BR><BR>
					
					<b>Já atuou como instrutor?</b><BR>
    				".$instrutor."<BR><BR>
					
					<b>Trajetória profissional:</b><BR>
    				".$mtexto."<BR><BR>
    				</TD>
    				<TD WIDTH=\"40\">&nbsp;</TD>
    				</TR>
    			</TABLE>
			</BODY>
		</HTML>";
$mail->AltBody = "
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
    				<B>Cadastro de instrutores via site</B><BR><BR>

					<b>Dados pessoais e profissionais</b><BR>
    				<b>Nome: </b> ".$nome."<BR>
    				<b>CREA: </b>".$crea."<BR>
    				<b>RG: </b>".$rg."<BR>
    				<b>Nascimento: </b> ".$nascimento."<BR>
    				<b>CPF: </b>".$cpf."<BR>
    				<b>Escolaridade: </b>".$escolaridade."<BR><BR>
					
					<b>Dados para contato e endereço</b><BR>
    				<b>Endereço: </b> ".$endereco."<BR>
    				<b>CEP: </b>".$cep."<BR>
    				<b>Telefone: </b>".$telefone."<BR>
    				<b>Email: </b> ".$email."<BR><BR>
					
					<b>Em qual área gostaria de atuar?</b><BR>
    				".$areaAtuacao."<BR><BR>
					
					<b>Em qual função tem mais experiência/conhecimento?</b><BR>
    				".$funcao."<BR><BR>
					
					<b>Há quanto tempo atua na área?</b><BR>
    				".$tempoAtuacao."<BR><BR>
					
					<b>Já atuou como instrutor?</b><BR>
    				".$instrutor."<BR><BR>
					
					<b>Trajetória profissional:</b><BR>
    				".$mtexto."<BR><BR>
				</TD>
				<TD WIDTH=\"40\">&nbsp;</TD>
				</TR>
			</TABLE>
			</BODY>
			</HTML>";

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
alert("Cadastro enviado com sucesso!");
</script>';
} else {
echo '<script language="javascript" type="text/javascript">
alert("Não foi possível enviar o e-mail.<br /><br /><b>Informações do erro:</b> <br />"\'' .$mail->ErrorInfo.'\'");
</script>';
}
?>