<?php
// mensagem que chegar� ao destinat�rio
$mensagem_r = "Ol� $nome_invite\n\nO seu amigo $nome_amigo ($email_amigo) lhe recomendou o nosso site! \n\nO Sindimest-RJ (Sindicato das Ind�strias e Empresas de Instala��o, Opera��o, Manuten��o de Redes, Equipamentos e Sistemas de Telecomunica��es do Estado do Rio de Janeiro) Conta com mais de 1000 empresas filiadas e voc� poder� fazer parte de uma delas, nas mais variadas �reas de trabalho!!!\n� s� entrar no endere�o http://www.sindimest-rj.org.br/scs e cadastrar-se!!!\nLembre-se de recomendar o nosso site tamb�m!\n\nA mensagem que $nome_amigo deixou foi:\n\n$mensagem \n\n Obrigado Equipe Sindimest-RJ\n\n Powered by www.mkinformatica.net";

// assunto que chegar� ao destinat�rio
$assunto = "$nome_amigo lhe recomendou o nosso site";

// mensagem que chegar� a pessoa que mandou o invite
$mensagem_volta = "Ol� $nome_amigo\n\n Obrigado por recomendar nosso site! enviamos a sua recomenda��o �: $nome_invite ($email_invite)! \n\n Equipe Sindimest-RJ\n\n Powered by www.mkinformatica.net";

// assunto da mensagem da pessoa que fez o invite
$assunto_volta = "Enviamos sua mensagem � $nome_invite";

// email da mensagem de volta
$mail25 = "contato@mkinformatica.net";
?>