 <?php
//inclui o arquivo config para que todas as suas informações sejam postadas aqui
include "config.php";

//reconhecendo os campos que foram colocados no formulário (acrescente uma linha assim se tiver colocado outro campo: $campo = $_POST ["nome do campo"] 
$nome_amigo = $_POST ["nome_amigo"]; // campo nome reconhecido 
$email_amigo = $_POST ["email_amigo"];// campo email reconhecido
$nome_invite = $_POST ["nome_invite"];// campo cidade reconhecido
$email_invite = $_POST ["email_invite"];// campo estado reconhecido
$mensagem = $_POST ["mensagem"];// barra de seleção reconhecida

// mensagem de sucesso
echo "<br><p align='center' style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px; color:#FF0000;'>Sua indicação foi enviada com sucesso! Obrigado!
<br></p><p align='center' style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px; color:#FF0000;'><a href='form.php'><font color='#333333' size='2' face='Verdana, Arial, Helvetica, sans-serif'>Indicar a outro amigo</font></a></p>
<p align='center' style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px; color:#FF0000;'><br>
  <a href='javascript:self.close()'><font color='#333333' size='2' face='Verdana, Arial, Helvetica, sans-serif'>Fechar janela</font></a></p>";

@mail ($email_amigo, $assunto_volta, $mensagem_volta, "From: $mail25");
//a linha acima manda a resposta a pessoa que fez o invite

// envia a recomendação 
@mail ($email_invite, $assunto, $mensagem_r, "From: $email_amigo");
?>