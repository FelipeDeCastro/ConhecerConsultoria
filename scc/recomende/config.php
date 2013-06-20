<?php
// mensagem que chegará ao destinatário
$mensagem_r = "Olá $nome_invite\n\nO seu amigo $nome_amigo ($email_amigo) lhe recomendou o nosso site! \n\nA Conhecer Consultoria conta com mais de 1000 empresas filiadas e você poderá fazer parte de uma delas, nas mais variadas áreas de trabalho!!!\nÉ só entrar no endereço http://www.conhecerconsultoria.com/scc e cadastrar-se!!!\nLembre-se de recomendar o nosso site também!\n\nA mensagem que $nome_amigo deixou foi:\n\n$mensagem \n\n Obrigado Conhecer Consultoria\n\n Powered by www.mkinformatica.net";

// assunto que chegará ao destinatário
$assunto = "$nome_amigo lhe recomendou o nosso site";

// mensagem que chegará a pessoa que mandou o invite
$mensagem_volta = "Olá $nome_amigo\n\n Obrigado por recomendar nosso site! enviamos a sua recomendação à: $nome_invite ($email_invite)! \n\n Equipe Conhecer Consultoria\n\n Powered by www.mkinformatica.net";

// assunto da mensagem da pessoa que fez o invite
$assunto_volta = "Enviamos sua mensagem à $nome_invite";

// email da mensagem de volta
$mail25 = "contato@mkinformatica.net";
?>