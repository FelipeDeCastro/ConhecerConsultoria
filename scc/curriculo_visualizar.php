<?php
include ("admin/config.php");

$regs= mysql_query("SELECT * FROM curriculo WHERE codigo='".$_GET["codigo"]."'");


if($reg = mysql_fetch_array($regs))
	{		
		$codigo 					= $reg["codigo"];		
		$nome 						= $reg["nome"];
		$email	 					= $reg["email"];
		$sexo						= $reg["sexo"];
		$estadoCivil				= $reg["estadoCivil"];
		$cpf						= $reg["cpf"];
		$dia						= $reg["dia"];
		$mes						= $reg["mes"];
		$ano						= $reg["ano"];
		$empregado					= $reg["empregado"];
		$situacao					= $reg["situacao"];
		$telefoneDDD				= $reg["telefoneDDD"];
		$telefone					= $reg["telefone"];
		$recado						= $reg["recado"];
		$celularDDD					= $reg["celularDDD"];
		$celular					= $reg["celular"];
		$homePage					= $reg["homePage"];
		$endereco					= $reg["endereco"];
		$numero						= $reg["numero"];
		$complemento				= $reg["complemento"];
		$bairro						= $reg["bairro"];
		$cep1						= $reg["cep1"];
		$cep2						= $reg["cep2"];
		$estado						= $reg["estado"];
		$cidade						= $reg["cidade"];
		$desejoTrabalharCidade		= $reg["desejoTrabalharCidade"];
		$ramo						= explode(";", $reg["ramo"]);
		$area						= explode(";", $reg["area"]);
		$nivel						= explode(";", $reg["nivel"]);
		$pretensao					= $reg["pretensao"];
		$palavraChave				= $reg["palavraChave"];
		$objetivo					= $reg["objetivo"];
		$alemao						= $reg["alemao"];
		$espanhol					= $reg["espanhol"];
		$frances					= $reg["frances"];
		$ingles						= $reg["ingles"];
		$italiano					= $reg["italiano"];
		$minicurriculo				= $reg["minicurriculo"];
		$especializacoes			= $reg["especializacoes"];
		$formacaoGrau				= $reg["formacaoGrau"];
		$formacaoCurso				= $reg["formacaoCurso"];
		$formacaoDataInicioMes		= $reg["formacaoDataInicioMes"];
		$formacaoDataInicioAno		= $reg["formacaoDataInicioAno"];
		$formacaoDataSaidaMes		= $reg["formacaoDataSaidaMes"];
		$formacaoDataSaidaAno		= $reg["formacaoDataSaidaAno"];
		$formacaoAno				= $reg["formacaoAno"];
		$formacaoInstituicao		= $reg["formacaoInstituicao"];
		$experienciaDataEntradaMes	= $reg["experienciaDataEntradaMes"];
		$experienciaDataEntradaAno	= $reg["experienciaDataEntradaAno"];
		$experienciaDataSaidaMes	= $reg["experienciaDataSaidaMes"];
		$experienciaDataSaidaAno	= $reg["experienciaDataSaidaAno"];
		$experienciaEmpresa			= $reg["experienciaEmpresa"];
		$experienciaCargo			= $reg["experienciaCargo"];
		$experienciaDescricao		= $reg["experienciaDescricao"];
		$senha						= $reg["senha"];
		$senhaDica					= $reg["senhaDica"];
	}
else
	{
		echo "codigo nao citado";
	}
?>
<html>
<head>
<title>[ SCS ] Seu Currículo</title>
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
</style>
</head>
<body bgcolor="#ffffff" marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<?
if($erro==1)
	{		
?>
<br>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td align="center" class="titulo3"><b>Erro: Já existe um curriculo para este email! </b><br><a href="./index.php" class="titulo2">Clique aqui.</a></td>
  </tr>
</table>
<?
	}
else
	{
		if($enviar==1)
			{		
?>
<br>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td align="center" class="titulo"><b>CURRÍCULO&nbsp;INCLUIDO COM SUCESSO </b></td>
  </tr>
</table>
<?
			}
		else
			{
?>
<table align="center" border='0' width=600 cellpadding='4'>
	<tr>
		<td align='left' class="titulo">DADOS PESSOAIS 
</td>
	</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Nome:</td>
	<td class="td2"><input type="text" name="nome" value="<? echo $nome; ?>" size=40 maxlength=100>	</td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>E-mail:	</td>
	<td class="td2"><input type="text" name="email" value="<? echo $email; ?>" size=40 maxlength=255></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Sexo:</td>
	<td class="td2"><select name="sexo">
<option value="M"<? if($sexo=="M"){echo" selected";} ?>>Masculino</option>
<option value="F"<? if($sexo=="F"){echo" selected";} ?>>Feminino</option>
</select></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Estado civil:</td>
	<td class="td2"><select name="estadoCivil" >
<option value="Solteiro"<? if($estadoCivil=="Solteiro"){echo" selected";} ?>>Solteiro</option>
<option value="Casado"<? if($estadoCivil=="Casado"){echo" selected";} ?>>Casado</option>
<option value="Viúvo"<? if($estadoCivil=="Viúvo"){echo" selected";} ?>>Viúvo</option>
<option value="Separado"<? if($estadoCivil=="Separado"){echo" selected";} ?>>Separado</option>
<option value="Divorciado"<? if($estadoCivil=="Divorciado"){echo" selected";} ?>>Divorciado</option>
</select></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;CPF:<br>
    </td>
	<td class="td2"><input type="text" name="cpf" value="<? echo $cpf; ?>" size=30 maxlength=15>
      <span class="texto2">(Ex.:00000000099)</span></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Data de Nascimento:	</td>
	<td class="td2"><input type="text" name="dia" value="<? echo $dia; ?>" size=3 maxlength=2>/<input type="text" name="mes" value="<? echo $mes; ?>" size=3 maxlength=2>/<input type="text" name="ano" value="<? echo $ano; ?>" size=5 maxlength=4> 
		<span class="texto2">(dd / mm / AAAA)</span>
	</td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Empregado Atualmente:</td>
	<td class="td2">	 <select name="empregado" >
      <option value="0"<? if($empregado=="0"){echo" selected";} ?>>Não</option>
      <option value="1"<? if($empregado=="1"){echo" selected";} ?>>Sim</option>
    </select> </td>
</tr>
<input type="hidden" name="situacao" value="#">	<tr>
		<td width="26%" class="td3"><span class="texto2">*</span>Situação Atual:</td>
		<td class="td2">
			<select name="situacao">
<option value="0"<? if($situacao=="" OR $situacao=="0"){echo" selected";} ?>>Escolha abaixo</option>
<option value="2"<? if($situacao=="2"){echo" selected";} ?>>Estou em busca do primeiro estágio</option>
<option value="3"<? if($situacao=="3"){echo" selected";} ?>>Estou em busca de outro estágio</option>
<option value="4"<? if($situacao=="4"){echo" selected";} ?>>Estou em busca de primeiro emprego</option>
<option value="5"<? if($situacao=="5"){echo" selected";} ?>>Sou recém-formado e estou em busca de emprego</option>
<option value="6"<? if($situacao=="6"){echo" selected";} ?>>Estou empregado, mas busco um emprego melhor</option>
<option value="7"<? if($situacao=="7"){echo" selected";} ?>>Desempregado recentemente</option>
<option value="8"<? if($situacao=="8"){echo" selected";} ?>>Estou desempregado há mais de 3 meses</option>
<option value="9"<? if($situacao=="9"){echo" selected";} ?>>Estou desempregado há mais de um ano</option>
<option value="10"<? if($situacao=="10"){echo" selected";} ?>>Quero retornar ao mercado de trabalho</option>
<option value="14"<? if($situacao=="14"){echo" selected";} ?>>Outros</option>
</select>
	  </td>
	</tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">DADOS DE CONTATO 
</td>
</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Telefone Residencial:</td>
	<td class="td2"> (
                <input type="text" name="telefoneDDD" value="<? echo $telefoneDDD; ?>" size=3 maxlength=3>) -
		<input type="text" name="telefone" value="<? echo $telefone; ?>" size=8 maxlength=8>
		<span class="texto2"> Não utilize traços nem pontos.</span>
	</td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Para recados, falar com:</td>
	<td class="td2"><input type="text" name="recado" value="<? echo $recado; ?>" size=40 maxlength=100></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Telefone Celular:</td>
	<td class="td2">(<input type="text" name="celularDDD" value="<? echo $celularDDD; ?>" size=3 maxlength=3>) 
	-	<input type="text" name="celular" value="<? echo $celular; ?>" size=8 maxlength=8>
	<span class="texto2"> Não utilize traços nem pontos.</span>
	</td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Home Page pessoal:<br>	  </td>
	<td class="td2">http://<input type="text" name="homePage" value="<? echo $homePage; ?>" size=40 maxlength=255></td>
</tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">ENDEREÇO</td>
</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Endereço:</td>
	<td class="td2"><input type="text" name="endereco" value="<? echo $endereco; ?>" size=60 maxlength=255></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Número:</td>
	<td class="td2"><input type="text" name="numero" value="<? echo $numero; ?>" size=5 maxlength=10></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Complemento:</td>
	<td class="td2"><input type="text" name="complemento" value="<? echo $complemento; ?>" size=30 maxlength=255></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Bairro:</td>
	<td class="td2"><input type="text" name="bairro" value="<? echo $bairro; ?>" size=20 maxlength=255></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>CEP:</td>
	<td class="td2"><input type="text" name="cep1" value="<? echo $cep1; ?>" size=6 maxlength=5>
	- <input type="text" name="cep2" value="<? echo $cep2; ?>" size=4 maxlength=3></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Estado:</td>
	<td class="td2"><select name="estado">
<option value="1"<? if($estado=="1"){echo" selected";} ?>>Acre</option>
<option value="2"<? if($estado=="2"){echo" selected";} ?>>Alagoas</option>
<option value="3"<? if($estado=="3"){echo" selected";} ?>>Amapá</option>
<option value="4"<? if($estado=="4"){echo" selected";} ?>>Amazonas</option>
<option value="5"<? if($estado=="5"){echo" selected";} ?>>Bahia</option>
<option value="6"<? if($estado=="6"){echo" selected";} ?>>Ceará</option>
<option value="7"<? if($estado=="7"){echo" selected";} ?>>Distrito Federal</option>
<option value="8"<? if($estado=="8"){echo" selected";} ?>>Espírito Santo</option>
<option value="9"<? if($estado=="9"){echo" selected";} ?>>Goiás</option>
<option value="10"<? if($estado=="10"){echo" selected";} ?>>Maranhão</option>
<option value="11"<? if($estado=="11"){echo" selected";} ?>>Mato Grosso</option>
<option value="12"<? if($estado=="12"){echo" selected";} ?>>Mato Grosso do Sul</option>
<option value="13"<? if($estado=="13"){echo" selected";} ?>>Minas Gerais</option>
<option value="16"<? if($estado=="16"){echo" selected";} ?>>Paraná</option>
<option value="15"<? if($estado=="15"){echo" selected";} ?>>Paraíba</option>
<option value="14"<? if($estado=="14"){echo" selected";} ?>>Pará</option>
<option value="17"<? if($estado=="17"){echo" selected";} ?>>Pernambuco</option>
<option value="18"<? if($estado=="18"){echo" selected";} ?>>Piauí</option>
<option value="20"<? if($estado=="19"){echo" selected";} ?>>Rio Grande do Norte</option>
<option value="21"<? if($estado=="20"){echo" selected";} ?>>Rio Grande do Sul</option>
<option value="19"<? if($estado=="21"){echo" selected";} ?>>Rio de Janeiro</option>
<option value="22"<? if($estado=="22"){echo" selected";} ?>>Rondônia</option>
<option value="23"<? if($estado=="23"){echo" selected";} ?>>Roraima</option>
<option value="24"<? if($estado=="24"){echo" selected";} ?>>Santa Catarina</option>
<option value="26"<? if($estado=="26"){echo" selected";} ?>>Sergipe</option>
<option value="25"<? if($estado=="25" OR $estado==""){echo" selected";} ?>>São Paulo</option>
<option value="27"<? if($estado=="22"){echo" selected";} ?>>Tocantins</option>
</select></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Cidade:</td>
	<td class="td2"><input type="text" name="cidade" value="<? echo $cidade; ?>" size=20 maxlength=255></td>
  </tr></table>

<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">CONFIGURAÇÃO DO AVISO DE VAGAS</td></tr>

</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width=26% valign=middle class="td3">
		<span class="texto2">*</span>Cidades em que você deseja ou pode trabalhar:<br>	</td>
	<td class="td2"><b>Atenção:</b> - Digite as cidades separadas por vírgula - Não utilize abreviações.
		É indiferente o uso de acentuação ou letras maiúsculas.<br>
		<b>Exemplo:</b> São Paulo, Rio de Janeiro, Belo Horizonte<br>		
		<textarea name="desejaTrabalharCidade" rows=5 cols=30 wrap="virtual"><? echo $desejaTrabalharCidade; ?></textarea>	</td>
</tr>
<tr>
	<td width="26%" class="td3" valign="middle">
		<span class="texto2">*</span>Ramo de atividade da empresa em que deseja trabalhar:	</td>
	<td class="td2">
		Escolha quantas opções desejar, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de um opção.<br>
		<select name="ramo[]" multiple size=10>
<option value="30"<? if(in_array("30", $ramo, TRUE)){echo" selected";} ?>>Agricultura</option>
<option value="3"<? if(in_array("3", $ramo, TRUE)){echo" selected";} ?>>Alimentos</option>
<option value="35"<? if(in_array("35", $ramo, TRUE)){echo" selected";} ?>>Automação</option>
<option value="11"<? if(in_array("11", $ramo, TRUE)){echo" selected";} ?>>Automotiva</option>
<option value="33"<? if(in_array("33", $ramo, TRUE)){echo" selected";} ?>>Bancário/ Financiadoras</option>
<option value="37"<? if(in_array("37", $ramo, TRUE)){echo" selected";} ?>>Bens de Capital</option>
<option value="19"<? if(in_array("19", $ramo, TRUE)){echo" selected";} ?>>Bens de Consumo (Bebidas/Cigarros)</option>
<option value="36"<? if(in_array("36", $ramo, TRUE)){echo" selected";} ?>>Bens de Consumo (Outros)</option>
<option value="14"<? if(in_array("14", $ramo, TRUE)){echo" selected";} ?>>Borracha/ Plástico</option>
<option value="38"<? if(in_array("38", $ramo, TRUE)){echo" selected";} ?>>Comércio Atacadista</option>
<option value="39"<? if(in_array("39", $ramo, TRUE)){echo" selected";} ?>>Comércio Varejista</option>
<option value="34"<? if(in_array("34", $ramo, TRUE)){echo" selected";} ?>>Comunicação</option>
<option value="41"<? if(in_array("41", $ramo, TRUE)){echo" selected";} ?>>Concessionárias</option>
<option value="16"<? if(in_array("16", $ramo, TRUE)){echo" selected";} ?>>Construção Civil</option>
<option value="8"<? if(in_array("8", $ramo, TRUE)){echo" selected";} ?>>Contabilidade/ Auditoria</option>
<option value="42"<? if(in_array("42", $ramo, TRUE)){echo" selected";} ?>>Corretagem (Imóveis)</option>
<option value="32"<? if(in_array("32", $ramo, TRUE)){echo" selected";} ?>>Corretagem (Seguros)</option>
<option value="43"<? if(in_array("43", $ramo, TRUE)){echo" selected";} ?>>Corretagem (Títulos)</option>
<option value="40"<? if(in_array("40", $ramo, TRUE)){echo" selected";} ?>>Cosmético</option>
<option value="17"<? if(in_array("17", $ramo, TRUE)){echo" selected";} ?>>Direito</option>
<option value="25"<? if(in_array("25", $ramo, TRUE)){echo" selected";} ?>>Diversão/ Entretenimento</option>
<option value="2"<? if(in_array("2", $ramo, TRUE)){echo" selected";} ?>>Educação/ Idiomas</option>
<option value="20"<? if(in_array("20", $ramo, TRUE)){echo" selected";} ?>>Eletrônica/ Eletroeletrônica/ Eletrodomésticos</option>
<option value="44"<? if(in_array("44", $ramo, TRUE)){echo" selected";} ?>>Embalagens</option>
<option value="23"<? if(in_array("23", $ramo, TRUE)){echo" selected";} ?>>Engenharia</option>
<option value="13"<? if(in_array("13", $ramo, TRUE)){echo" selected";} ?>>Estética/ Academias</option>
<option value="5"<? if(in_array("5", $ramo, TRUE)){echo" selected";} ?>>Farmacêutica/ Médica/ Química</option>
<option value="45"<? if(in_array("45", $ramo, TRUE)){echo" selected";} ?>>Financeiras</option>
<option value="31"<? if(in_array("31", $ramo, TRUE)){echo" selected";} ?>>Governo</option>
<option value="7"<? if(in_array("7", $ramo, TRUE)){echo" selected";} ?>>Gráfica/ Editoras</option>
<option value="9"<? if(in_array("9", $ramo, TRUE)){echo" selected";} ?>>Importação/ Exportação</option>
<option value="46"<? if(in_array("46", $ramo, TRUE)){echo" selected";} ?>>Indústrias</option>
<option value="12"<? if(in_array("12", $ramo, TRUE)){echo" selected";} ?>>Informática</option>
<option value="47"<? if(in_array("47", $ramo, TRUE)){echo" selected";} ?>>Internet/ Sites</option>
<option value="48"<? if(in_array("48", $ramo, TRUE)){echo" selected";} ?>>Mecânica/ Manutenção</option>
<option value="49"<? if(in_array("49", $ramo, TRUE)){echo" selected";} ?>>Metalúrgica</option>
<option value="21"<? if(in_array("21", $ramo, TRUE)){echo" selected";} ?>>Mídia/ Publicidade/ Propaganda</option>
<option value="50"<? if(in_array("50", $ramo, TRUE)){echo" selected";} ?>>ONGs</option>
<option value="27"<? if(in_array("27", $ramo, TRUE)){echo" selected";} ?>>Outros</option>
<option value="29"<? if(in_array("29", $ramo, TRUE)){echo" selected";} ?>>Papel e Derivados</option>
<option value="4"<? if(in_array("4", $ramo, TRUE)){echo" selected";} ?>>Petroquímico/ Petróleo</option>
<option value="51"<? if(in_array("51", $ramo, TRUE)){echo" selected";} ?>>Plásticos/ Injeção</option>
<option value="18"<? if(in_array("18", $ramo, TRUE)){echo" selected";} ?>>Prestadora de Serviços</option>
<option value="6"<? if(in_array("6", $ramo, TRUE)){echo" selected";} ?>>Recursos Humanos</option>
<option value="10"<? if(in_array("10", $ramo, TRUE)){echo" selected";} ?>>Relações Públicas</option>
<option value="52"<? if(in_array("52", $ramo, TRUE)){echo" selected";} ?>>Restaurante/ Industrial/ Fast Food</option>
<option value="15"<? if(in_array("15", $ramo, TRUE)){echo" selected";} ?>>Saúde Hospitalar</option>
<option value="54"<? if(in_array("54", $ramo, TRUE)){echo" selected";} ?>>Segurança Patrimonial</option>
<option value="53"<? if(in_array("53", $ramo, TRUE)){echo" selected";} ?>>Seguros/ Previdência Privada</option>
<option value="22"<? if(in_array("22", $ramo, TRUE)){echo" selected";} ?>>Telecomunicações</option>
<option value="55"<? if(in_array("55", $ramo, TRUE)){echo" selected";} ?>>Telemarketing/ Call Center</option>
<option value="24"<? if(in_array("24", $ramo, TRUE)){echo" selected";} ?>>Têxtil</option>
<option value="28"<? if(in_array("28", $ramo, TRUE)){echo" selected";} ?>>Transporte/ Logística/ Armazéns</option>
<option value="26"<? if(in_array("26", $ramo, TRUE)){echo" selected";} ?>>Turismo/ Hotelaria</option>
</select>	</td>
</tr>                    
	<tr>
		<td width="26%"  class="td3" valign="middle"><span class="texto2">*</span>Área profissional em que você atua:</td>
		<td class="td2">
	Escolha até 3 opções, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de uma opção.<br>
		<select name="area[]" multiple size=10>
<option value="47"<? if(in_array("47", $area, TRUE)){echo" selected";} ?>>Administrativa</option>
<option value="1"<? if(in_array("1", $area, TRUE)){echo" selected";} ?>>Administrativo Comercial</option>
<option value="3"<? if(in_array("3", $area, TRUE)){echo" selected";} ?>>Administrativo/ Operacional</option>
<option value="1859"<? if(in_array("1859", $area, TRUE)){echo" selected";} ?>>Agronômica/ Engenharia Agronômica/ Agribusiness</option>
<option value="1858"<? if(in_array("1858", $area, TRUE)){echo" selected";} ?>>Agropecuária/ Veterinária/ Agrobusiness</option>
<option value="5"<? if(in_array("5", $area, TRUE)){echo" selected";} ?>>Arquiterura/ Decoração/ Urbanismo</option>
<option value="6"<? if(in_array("6", $area, TRUE)){echo" selected";} ?>>Artes</option>
<option value="7"<? if(in_array("7", $area, TRUE)){echo" selected";} ?>>Artes Gráficas</option>
<option value="8"<? if(in_array("8", $area, TRUE)){echo" selected";} ?>>Atendimento ao Cliente/ Call Center/ Telemarketing</option>
<option value="9"<? if(in_array("9", $area, TRUE)){echo" selected";} ?>>Automação Industrial/ Comercial</option>
<option value="10"<? if(in_array("10", $area, TRUE)){echo" selected";} ?>>Aviação/ Aeronáutica</option>
<option value="11"<? if(in_array("11", $area, TRUE)){echo" selected";} ?>>Bancária/ Private Corporate Bank</option>
<option value="12"<? if(in_array("12", $area, TRUE)){echo" selected";} ?>>Biblioteconomia</option>
<option value="1943"<? if(in_array("1943", $area, TRUE)){echo" selected";} ?>>Biologia</option>
<option value="13"<? if(in_array("13", $area, TRUE)){echo" selected";} ?>>Biotecnologia/ Biomédicas/ Bioquímica</option>
<option value="14"<? if(in_array("14", $area, TRUE)){echo" selected";} ?>>Comercial/ Vendas</option>
<option value="15"<? if(in_array("15", $area, TRUE)){echo" selected";} ?>>Comércio Exterior/ Trade/ Importação/ Exportação</option>
<option value="1906"<? if(in_array("1906", $area, TRUE)){echo" selected";} ?>>Compras</option>
<option value="18"<? if(in_array("18", $area, TRUE)){echo" selected";} ?>>Construção Civil/ Engenharia Civil</option>
<option value="19"<? if(in_array("19", $area, TRUE)){echo" selected";} ?>>Contabilidade</option>
<option value="20"<? if(in_array("20", $area, TRUE)){echo" selected";} ?>>Departamento Pessoal</option>
<option value="21"<? if(in_array("21", $area, TRUE)){echo" selected";} ?>>Desenho Industrial</option>
<option value="23"<? if(in_array("23", $area, TRUE)){echo" selected";} ?>>Economia</option>
<option value="24"<? if(in_array("24", $area, TRUE)){echo" selected";} ?>>Educação/ Ensino/ Idiomas</option>
<option value="26"<? if(in_array("26", $area, TRUE)){echo" selected";} ?>>Enfermagem</option>
<option value="29"<? if(in_array("29", $area, TRUE)){echo" selected";} ?>>Engenharia de Alimentos</option>
<option value="30"<? if(in_array("30", $area, TRUE)){echo" selected";} ?>>Engenharia de Materiais</option>
<option value="484"<? if(in_array("484", $area, TRUE)){echo" selected";} ?>>Engenharia de Minas</option>
<option value="32"<? if(in_array("32", $area, TRUE)){echo" selected";} ?>>Engenharia de Produção/ Industrial</option>
<option value="34"<? if(in_array("34", $area, TRUE)){echo" selected";} ?>>Engenharia Elétrica/ Eletrônica</option>
<option value="35"<? if(in_array("35", $area, TRUE)){echo" selected";} ?>>Engenharia Mecânica/ Mecatrônica</option>
<option value="39"<? if(in_array("39", $area, TRUE)){echo" selected";} ?>>Esportes/ Educação Física</option>
<option value="40"<? if(in_array("40", $area, TRUE)){echo" selected";} ?>>Estatística /Matemática /Atuária</option>
<option value="41"<? if(in_array("41", $area, TRUE)){echo" selected";} ?>>Estética Corporal</option>
<option value="43"<? if(in_array("43", $area, TRUE)){echo" selected";} ?>>Farmácia</option>
<option value="2"<? if(in_array("2", $area, TRUE)){echo" selected";} ?>>Financeira/ Administrativa</option>
<option value="45"<? if(in_array("45", $area, TRUE)){echo" selected";} ?>>Fisioterapia</option>
<option value="46"<? if(in_array("46", $area, TRUE)){echo" selected";} ?>>Fonoaudiologia</option>
<option value="483"<? if(in_array("483", $area, TRUE)){echo" selected";} ?>>Geologia /Engenharia Agrimensura</option>
<option value="48"<? if(in_array("48", $area, TRUE)){echo" selected";} ?>>Hotelaria/ Turismo</option>
<option value="50"<? if(in_array("50", $area, TRUE)){echo" selected";} ?>>Industrial</option>
<option value="51"<? if(in_array("51", $area, TRUE)){echo" selected";} ?>>Informática /TI / Engenharia da Computação</option>
<option value="52"<? if(in_array("52", $area, TRUE)){echo" selected";} ?>>Internet/ E-Commerce/ E-Business/ Web/ Web Designer</option>
<option value="53"<? if(in_array("53", $area, TRUE)){echo" selected";} ?>>Jornalismo</option>
<option value="54"<? if(in_array("54", $area, TRUE)){echo" selected";} ?>>Jurídica</option>
<option value="55"<? if(in_array("55", $area, TRUE)){echo" selected";} ?>>Logística/ Suprimentos</option>
<option value="56"<? if(in_array("56", $area, TRUE)){echo" selected";} ?>>Manutenção</option>
<option value="57"<? if(in_array("57", $area, TRUE)){echo" selected";} ?>>Marketing</option>
<option value="58"<? if(in_array("58", $area, TRUE)){echo" selected";} ?>>Médico/ Hospitalar</option>
<option value="31"<? if(in_array("31", $area, TRUE)){echo" selected";} ?>>Meio Ambiente/ Ecologia/ Engenharia de Meio Ambiente</option>
<option value="60"<? if(in_array("60", $area, TRUE)){echo" selected";} ?>>Moda</option>
<option value="61"<? if(in_array("61", $area, TRUE)){echo" selected";} ?>>Nutrição</option>
<option value="62"<? if(in_array("62", $area, TRUE)){echo" selected";} ?>>Odontologia</option>
<option value="65"<? if(in_array("65", $area, TRUE)){echo" selected";} ?>>Psicologia Clínica/ Hospitalar</option>
<option value="66"<? if(in_array("66", $area, TRUE)){echo" selected";} ?>>Publicidade e Propaganda</option>
<option value="67"<? if(in_array("67", $area, TRUE)){echo" selected";} ?>>Qualidade</option>
<option value="36"<? if(in_array("36", $area, TRUE)){echo" selected";} ?>>Química/ Engenharia Química</option>
<option value="69"<? if(in_array("69", $area, TRUE)){echo" selected";} ?>>Recursos Humanos</option>
<option value="70"<? if(in_array("70", $area, TRUE)){echo" selected";} ?>>Relações Internacionais</option>
<option value="71"<? if(in_array("71", $area, TRUE)){echo" selected";} ?>>Relações Públicas</option>
<option value="72"<? if(in_array("72", $area, TRUE)){echo" selected";} ?>>Restaurante</option>
<option value="73"<? if(in_array("73", $area, TRUE)){echo" selected";} ?>>Secretariado</option>
<option value="74"<? if(in_array("74", $area, TRUE)){echo" selected";} ?>>Segurança do Trabalho</option>
<option value="75"<? if(in_array("75", $area, TRUE)){echo" selected";} ?>>Segurança Patrimonial</option>
<option value="76"<? if(in_array("76", $area, TRUE)){echo" selected";} ?>>Seguros</option>
<option value="77"<? if(in_array("77", $area, TRUE)){echo" selected";} ?>>Serviço Social</option>
<option value="79"<? if(in_array("79", $area, TRUE)){echo" selected";} ?>>Técnica</option>
<option value="80"<? if(in_array("80", $area, TRUE)){echo" selected";} ?>>Técnico-Comercial</option>
<option value="33"<? if(in_array("33", $area, TRUE)){echo" selected";} ?>>Telecomunicações/ Engenharia de Telecomunicações</option>
<option value="1902"<? if(in_array("1902", $area, TRUE)){echo" selected";} ?>>Terapia Ocupacional</option>
<option value="37"<? if(in_array("37", $area, TRUE)){echo" selected";} ?>>Têxtil/ Engenharia Têxtil</option>
<option value="87"<? if(in_array("87", $area, TRUE)){echo" selected";} ?>>Tradutor/ Intérprete</option>
<option value="88"<? if(in_array("88", $area, TRUE)){echo" selected";} ?>>Transportes</option>
<option value="1904"<? if(in_array("1904", $area, TRUE)){echo" selected";} ?>>Zootecnia</option>
</select>
		</td>
	</tr>
<tr>
	<td width="26%" class="td3" valign="middle">
		<span class="texto2">*</span>Nível Hierárquico:	</td>
	<td class="td2">Escolha até 2 opções, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de um nível.<br>
		<select name="nivel[]" multiple size=5>
		<option value="1"<? if(in_array("1", $nivel, TRUE)){echo" selected";} ?>>Diretoria</option>
		<option value="2"<? if(in_array("2", $nivel, TRUE)){echo" selected";} ?>>Gerência</option>
		<option value="6"<? if(in_array("6", $nivel, TRUE)){echo" selected";} ?>>Supervisão / Chefia</option>
		<option value="4"<? if(in_array("4", $nivel, TRUE)){echo" selected";} ?>>Profissional Especializado - com curso superior</option>
		<option value="5"<? if(in_array("5", $nivel, TRUE)){echo" selected";} ?>>Ensino Médio / Profissionalizante</option>
		<option value="3"<? if(in_array("3", $nivel, TRUE)){echo" selected";} ?>>Outros</option>
		</select>
	</td>
</tr>
<tr>
	<td width="26%" class="td3" valign="middle">&nbsp;&nbsp;Pretensão Salarial:</td>
	<td class="td2">
		<select name="pretensao">
<option value="0"<? if($pretensao=="0"){echo" selected";} ?>>A Combinar</option>
<option value="1"<? if($pretensao=="1"){echo" selected";} ?>>Até R$ 500,00</option>
<option value="2"<? if($pretensao=="2"){echo" selected";} ?>>Até R$ 1.000,00</option>
<option value="3"<? if($pretensao=="3"){echo" selected";} ?>>A partir de R$ 1.000,00</option>
<option value="4"<? if($pretensao=="4"){echo" selected";} ?>>A partir de R$ 2.000,00</option>
<option value="5"<? if($pretensao=="5"){echo" selected";} ?>>A partir de R$ 3.000,00</option>
<option value="6"<? if($pretensao=="6"){echo" selected";} ?>>A partir de R$ 4.000,00</option>
<option value="7"<? if($pretensao=="7"){echo" selected";} ?>>A partir de R$ 5.000,00</option>
<option value="8"<? if($pretensao=="8"){echo" selected";} ?>>A partir de R$ 6.000,00</option>
<option value="9"<? if($pretensao=="9"){echo" selected";} ?>>A partir de R$ 7.000,00</option>
<option value="10"<? if($pretensao=="10"){echo" selected";} ?>>A partir de R$ 8.000,00</option>
<option value="11"<? if($pretensao=="11"){echo" selected";} ?>>A partir de R$ 9.000,00</option>
<option value="12"<? if($pretensao=="12"){echo" selected";} ?>>Acima de R$ 10.000,00</option>
</select>	</td>
</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td class="titulo2">
	Caso a área profissional selecionada não atenda a todas as suas necessidades e você queira configurar um critério mais específico para o recebimento das vagas, preencha os campos abaixo. 
	Estes campos não são obrigatórios.
	</td>
</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3">
	Palavras-Chave
	<br>
	Cadastre uma ou mais palavras que você deseja encontrar na vaga. 
	Ex: Ao cadastrar gerente de projeto, receberá apenas vagas que contenham essas palavras:
	</td>
	<td class="td2">
		<input type="text" name="palavraChave" value="<? echo $palavraChave; ?>" size=40><br>
		<span class="texto2">Separe as palavras unicamente com espaços.</span>
	</td>
</tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">OBJETIVO 
</td>
</tr>	
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width=26% class="td3" valign=middle>
	Objetivo
	<br>
	Defina a área e o cargo de seu interesse:</td>
	<td class="td2">
	<textarea name="objetivo" rows=5 cols=53 wrap="virtual"><? echo $objetivo; ?></textarea>
	</td>
</tr></table>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">HABILIDADES 
</td>
</tr>
</table>
<table width="600" border="0" cellspacing="1" cellpadding="4" align="center" class="texto">
<tr><td colspan="4" class="td1">Idiomas</td></tr>
	<tr>
		<td width="28%" class="td3"><input type="checkbox" name="alemao1" value="1"<? if($alemao!=""){echo" checked";} ?>> Alemão</td>
	  <td width="24%" class="td2"><input type="radio" name="alemao" value="1"<? if($alemao=="1"){echo" checked";} ?>> Básico</td>
			<td width="24%" class="td2"><input type="radio" name="alemao" value="2"<? if($alemao=="2"){echo" checked";} ?>> Intermediário</td>
			<td width="24%" class="td2"><input type="radio" name="alemao" value="3"<? if($alemao=="3"){echo" checked";} ?>> Fluente</td>
	</tr>
	<tr>
		<td width="28%" class="td3"><input type="checkbox" name="espanhol1" value="1"<? if($espanhol!=""){echo" checked";} ?>>Espanhol</td>
			<td width="24%" class="td2"><input type="radio" name="espanhol" value="1"<? if($espanhol=="1"){echo" checked";} ?>> Básico</td>
			<td width="24%" class="td2"><input type="radio" name="espanhol" value="2"<? if($espanhol=="2"){echo" checked";} ?>> Intermediário</td>
			<td width="24%" class="td2"><input type="radio" name="espanhol" value="3"<? if($espanhol=="3"){echo" checked";} ?>> Fluente</td>
	</tr>
	<tr>
		<td width="28%" class="td3"><input type="checkbox" name="frances1" value="1"<? if($frances!=""){echo" checked";} ?>> Francês</td>
	  		<td width="24%" class="td2"><input type="radio" name="frances" value="1"<? if($frances=="1"){echo" checked";} ?>> Básico</td>
			<td width="24%" class="td2"><input type="radio" name="frances" value="2"<? if($frances=="2"){echo" checked";} ?>> Intermediário</td>
			<td width="24%" class="td2"><input type="radio" name="frances" value="3"<? if($frances=="3"){echo" checked";} ?>> Fluente</td>
	</tr>
	<tr>
		<td width="28%" class="td3"><input type="checkbox" name="ingles1" value="1"<? if($ingles!=""){echo" checked";} ?>> Inglês</td>
			<td width="24%" class="td2"><input type="radio" name="ingles" value="1"<? if($ingles=="1"){echo" checked";} ?>> Básico</td>
			<td width="24%" class="td2"><input type="radio" name="ingles" value="2"<? if($ingles=="2"){echo" checked";} ?>> Intermediário</td>
			<td width="24%" class="td2"><input type="radio" name="ingles" value="3"<? if($ingles=="3"){echo" checked";} ?>> Fluente</td>
	</tr>
	<tr>
		<td width="28%" class="td3"><input type="checkbox" name="italiano1" value="1"<? if($italiano!=""){echo" checked";} ?>> Italiano</td>
	  		<td width="24%" class="td2"><input type="radio" name="italiano" value="1"<? if($italiano=="1"){echo" checked";} ?>> Básico</td>
			<td width="24%" class="td2"><input type="radio" name="italiano" value="2"<? if($italiano=="2"){echo" checked";} ?>> Intermediário</td>
			<td width="24%" class="td2"><input type="radio" name="italiano" value="3"<? if($italiano=="3"){echo" checked";} ?>> Fluente</td>
	</tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">
		 MINICURRÍCULO 
	</td>
</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3" valign="middle">
		<span class="texto2">*</span>Minicurrículo
		<br>
		- O minicurrículo é um resumo do seu currículo e é a primeira informação visualizada pela empresa na busca de currículos. 
		Por isso, seja claro e objetivo:</td>
	<td class="td2">
	<b>Atenção:</b> o tamanho máximo de um minicurrículo é de 500 caracteres
	<br>
	<textarea name="minicurriculo" rows=5 cols=53 wrap="virtual"><? echo $minicurriculo; ?></textarea></td>
</tr>
</TABLE>
<br>
<table align="center" border="0" width="600" cellpadding="4">
<tr>
	<td colspan=2 align="left" class="titulo">
		 OUTRAS INFORMAÇÕES 
	</td>
</tr>
</table>
<table align="center" border='0' width=600 cellpadding='4'class="texto">
<tr>
	<td width=26% class="td3" valign="middle">
	Cursos/Especializações
	<br>
	Informe cursos extra-curriculares e outras especializações:</td>
	<td class="td2">
	<textarea name="especializacoes" rows=5 cols=53 wrap="virtual"><? echo $especializacoes; ?></textarea>
</td>
</tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td class="titulo" colspan=5 align=left>Formação</td>
</tr>
<tr>
	<td width=26% class="td3" valign=middle>
	<span class="texto2">*</span>Grau de Formação
:	</td>
	<td class="td2">
	<select name="formacaoGrau">
<option value="0"<? if($formacaoGrau=="0"){echo" selected";} ?>></option>
<option value="1"<? if($formacaoGrau=="1"){echo" selected";} ?>>Graduação</option>
<option value="2"<? if($formacaoGrau=="2"){echo" selected";} ?>>Pós-Graduação</option>
<option value="3"<? if($formacaoGrau=="3"){echo" selected";} ?>>MBA</option>
<option value="4"<? if($formacaoGrau=="4"){echo" selected";} ?>>Mestrado</option>
<option value="5"<? if($formacaoGrau=="5"){echo" selected";} ?>>Doutorado</option>
<option value="6"<? if($formacaoGrau=="6"){echo" selected";} ?>>Pós Doutorado</option>
<option value="7"<? if($formacaoGrau=="7"){echo" selected";} ?>>Livre Docência</option>
<option value="8"<? if($formacaoGrau=="8"){echo" selected";} ?>>Técnico</option>
<option value="9"<? if($formacaoGrau=="9"){echo" selected";} ?>>Ensino Médio</option>
</select>	</td>
	<td width=26% class="td2" valign=middle>
	<span class="texto2">*</span>
	Curso
	</td>
	<td class="td2">
	<input type="text" name="formacaoCurso" value="<? echo $formacaoCurso; ?>" size=30 maxlength=255>
	</td>
</tr>
<tr>
	<td width="26%" class="td3" valign="middle">&nbsp;&nbsp;Data de início (mm/aaaa):</td>
	<td class="td2">
	<select name="formacaoDataInicioMes">
<option value="0"<? if($formacaoDataInicioMes=="0"){echo" selected";} ?>></option>
<option value="1"<? if($formacaoDataInicioMes=="1"){echo" selected";} ?>>1</option>
<option value="2"<? if($formacaoDataInicioMes=="2"){echo" selected";} ?>>2</option>
<option value="3"<? if($formacaoDataInicioMes=="3"){echo" selected";} ?>>3</option>
<option value="4"<? if($formacaoDataInicioMes=="4"){echo" selected";} ?>>4</option>
<option value="5"<? if($formacaoDataInicioMes=="5"){echo" selected";} ?>>5</option>
<option value="6"<? if($formacaoDataInicioMes=="6"){echo" selected";} ?>>6</option>
<option value="7"<? if($formacaoDataInicioMes=="7"){echo" selected";} ?>>7</option>
<option value="8"<? if($formacaoDataInicioMes=="8"){echo" selected";} ?>>8</option>
<option value="9"<? if($formacaoDataInicioMes=="9"){echo" selected";} ?>>9</option>
<option value="10"<? if($formacaoDataInicioMes=="10"){echo" selected";} ?>>10</option>
<option value="11"<? if($formacaoDataInicioMes=="11"){echo" selected";} ?>>11</option>
<option value="12"<? if($formacaoDataInicioMes=="12"){echo" selected";} ?>>12</option>
</select>/<select name="formacaoDataInicioAno">
<option value="0"<? if($formacaoDataInicioAno=="0"){echo" selected";} ?>></option>
<option value="1960"<? if($formacaoDataInicioAno=="1960"){echo" selected";} ?>>1960</option>
<option value="1961"<? if($formacaoDataInicioAno=="1961"){echo" selected";} ?>>1961</option>
<option value="1962"<? if($formacaoDataInicioAno=="1962"){echo" selected";} ?>>1962</option>
<option value="1963"<? if($formacaoDataInicioAno=="1963"){echo" selected";} ?>>1963</option>
<option value="1964"<? if($formacaoDataInicioAno=="1964"){echo" selected";} ?>>1964</option>
<option value="1965"<? if($formacaoDataInicioAno=="1965"){echo" selected";} ?>>1965</option>
<option value="1966"<? if($formacaoDataInicioAno=="1966"){echo" selected";} ?>>1966</option>
<option value="1967"<? if($formacaoDataInicioAno=="1967"){echo" selected";} ?>>1967</option>
<option value="1968"<? if($formacaoDataInicioAno=="1968"){echo" selected";} ?>>1968</option>
<option value="1969"<? if($formacaoDataInicioAno=="1969"){echo" selected";} ?>>1969</option>
<option value="1970"<? if($formacaoDataInicioAno=="1970"){echo" selected";} ?>>1970</option>
<option value="1971"<? if($formacaoDataInicioAno=="1971"){echo" selected";} ?>>1971</option>
<option value="1972"<? if($formacaoDataInicioAno=="1972"){echo" selected";} ?>>1972</option>
<option value="1973"<? if($formacaoDataInicioAno=="1973"){echo" selected";} ?>>1973</option>
<option value="1974"<? if($formacaoDataInicioAno=="1974"){echo" selected";} ?>>1974</option>
<option value="1975"<? if($formacaoDataInicioAno=="1975"){echo" selected";} ?>>1975</option>
<option value="1976"<? if($formacaoDataInicioAno=="1976"){echo" selected";} ?>>1976</option>
<option value="1977"<? if($formacaoDataInicioAno=="1977"){echo" selected";} ?>>1977</option>
<option value="1978"<? if($formacaoDataInicioAno=="1978"){echo" selected";} ?>>1978</option>
<option value="1979"<? if($formacaoDataInicioAno=="1979"){echo" selected";} ?>>1979</option>
<option value="1980"<? if($formacaoDataInicioAno=="1980"){echo" selected";} ?>>1980</option>
<option value="1981"<? if($formacaoDataInicioAno=="1981"){echo" selected";} ?>>1981</option>
<option value="1982"<? if($formacaoDataInicioAno=="1982"){echo" selected";} ?>>1982</option>
<option value="1983"<? if($formacaoDataInicioAno=="1983"){echo" selected";} ?>>1983</option>
<option value="1984"<? if($formacaoDataInicioAno=="1984"){echo" selected";} ?>>1984</option>
<option value="1985"<? if($formacaoDataInicioAno=="1985"){echo" selected";} ?>>1985</option>
<option value="1986"<? if($formacaoDataInicioAno=="1986"){echo" selected";} ?>>1986</option>
<option value="1987"<? if($formacaoDataInicioAno=="1987"){echo" selected";} ?>>1987</option>
<option value="1988"<? if($formacaoDataInicioAno=="1988"){echo" selected";} ?>>1988</option>
<option value="1989"<? if($formacaoDataInicioAno=="1989"){echo" selected";} ?>>1989</option>
<option value="1990"<? if($formacaoDataInicioAno=="1990"){echo" selected";} ?>>1990</option>
<option value="1991"<? if($formacaoDataInicioAno=="1991"){echo" selected";} ?>>1991</option>
<option value="1992"<? if($formacaoDataInicioAno=="1992"){echo" selected";} ?>>1992</option>
<option value="1993"<? if($formacaoDataInicioAno=="1993"){echo" selected";} ?>>1993</option>
<option value="1994"<? if($formacaoDataInicioAno=="1994"){echo" selected";} ?>>1994</option>
<option value="1995"<? if($formacaoDataInicioAno=="1995"){echo" selected";} ?>>1995</option>
<option value="1996"<? if($formacaoDataInicioAno=="1996"){echo" selected";} ?>>1996</option>
<option value="1997"<? if($formacaoDataInicioAno=="1997"){echo" selected";} ?>>1997</option>
<option value="1998"<? if($formacaoDataInicioAno=="1998"){echo" selected";} ?>>1998</option>
<option value="1999"<? if($formacaoDataInicioAno=="1999"){echo" selected";} ?>>1999</option>
<option value="2000"<? if($formacaoDataInicioAno=="2000"){echo" selected";} ?>>2000</option>
<option value="2001"<? if($formacaoDataInicioAno=="2001"){echo" selected";} ?>>2001</option>
<option value="2002"<? if($formacaoDataInicioAno=="2002"){echo" selected";} ?>>2002</option>
<option value="2003"<? if($formacaoDataInicioAno=="2003"){echo" selected";} ?>>2003</option>
<option value="2004"<? if($formacaoDataInicioAno=="2004"){echo" selected";} ?>>2004</option>
<option value="2005"<? if($formacaoDataInicioAno=="2005"){echo" selected";} ?>>2005</option>
<option value="2006"<? if($formacaoDataInicioAno=="2006"){echo" selected";} ?>>2006</option>
<option value="2007"<? if($formacaoDataInicioAno=="2007"){echo" selected";} ?>>2007</option>
<option value="2008"<? if($formacaoDataInicioAno=="2008"){echo" selected";} ?>>2008</option>
<option value="2009"<? if($formacaoDataInicioAno=="2009"){echo" selected";} ?>>2009</option>
<option value="2010"<? if($formacaoDataInicioAno=="2010"){echo" selected";} ?>>2010</option>
<option value="2011"<? if($formacaoDataInicioAno=="2011"){echo" selected";} ?>>2011</option>
<option value="2012"<? if($formacaoDataInicioAno=="2012"){echo" selected";} ?>>2012</option>
<option value="2013"<? if($formacaoDataInicioAno=="2013"){echo" selected";} ?>>2013</option>
<option value="2014"<? if($formacaoDataInicioAno=="2014"){echo" selected";} ?>>2014</option>
<option value="2015"<? if($formacaoDataInicioAno=="2015"){echo" selected";} ?>>2015</option>
<option value="2016"<? if($formacaoDataInicioAno=="2016"){echo" selected";} ?>>2016</option>
</select>	</td>
	<td width=26% class="td2" valign=middle>
	Data de término ou prevista para conclusão (mm/aaaa)
	</td>
	<td class="td2">
	<select name="formacaoDataSaidaMes">
<option value="0"<? if($formacaoDataSaidaMes=="0"){echo" selected";} ?>></option>
<option value="1"<? if($formacaoDataSaidaMes=="1"){echo" selected";} ?>>1</option>
<option value="2"<? if($formacaoDataSaidaMes=="2"){echo" selected";} ?>>2</option>
<option value="3"<? if($formacaoDataSaidaMes=="3"){echo" selected";} ?>>3</option>
<option value="4"<? if($formacaoDataSaidaMes=="4"){echo" selected";} ?>>4</option>
<option value="5"<? if($formacaoDataSaidaMes=="5"){echo" selected";} ?>>5</option>
<option value="6"<? if($formacaoDataSaidaMes=="6"){echo" selected";} ?>>6</option>
<option value="7"<? if($formacaoDataSaidaMes=="7"){echo" selected";} ?>>7</option>
<option value="8"<? if($formacaoDataSaidaMes=="8"){echo" selected";} ?>>8</option>
<option value="9"<? if($formacaoDataSaidaMes=="9"){echo" selected";} ?>>9</option>
<option value="10"<? if($formacaoDataSaidaMes=="10"){echo" selected";} ?>>10</option>
<option value="11"<? if($formacaoDataSaidaMes=="11"){echo" selected";} ?>>11</option>
<option value="12"<? if($formacaoDataSaidaMes=="12"){echo" selected";} ?>>12</option>
</select>/<select name="formacaoDataSaidaAno">
<option value="0"<? if($formacaoDataSaidaAno=="1960"){echo" selected";} ?>></option>
<option value="1960"<? if($formacaoDataSaidaAno=="1960"){echo" selected";} ?>>1960</option>
<option value="1961"<? if($formacaoDataSaidaAno=="1961"){echo" selected";} ?>>1961</option>
<option value="1962"<? if($formacaoDataSaidaAno=="1962"){echo" selected";} ?>>1962</option>
<option value="1963"<? if($formacaoDataSaidaAno=="1963"){echo" selected";} ?>>1963</option>
<option value="1964"<? if($formacaoDataSaidaAno=="1964"){echo" selected";} ?>>1964</option>
<option value="1965"<? if($formacaoDataSaidaAno=="1965"){echo" selected";} ?>>1965</option>
<option value="1966"<? if($formacaoDataSaidaAno=="1966"){echo" selected";} ?>>1966</option>
<option value="1967"<? if($formacaoDataSaidaAno=="1967"){echo" selected";} ?>>1967</option>
<option value="1968"<? if($formacaoDataSaidaAno=="1968"){echo" selected";} ?>>1968</option>
<option value="1969"<? if($formacaoDataSaidaAno=="1969"){echo" selected";} ?>>1969</option>
<option value="1970"<? if($formacaoDataSaidaAno=="1970"){echo" selected";} ?>>1970</option>
<option value="1971"<? if($formacaoDataSaidaAno=="1971"){echo" selected";} ?>>1971</option>
<option value="1972"<? if($formacaoDataSaidaAno=="1972"){echo" selected";} ?>>1972</option>
<option value="1973"<? if($formacaoDataSaidaAno=="1973"){echo" selected";} ?>>1973</option>
<option value="1974"<? if($formacaoDataSaidaAno=="1974"){echo" selected";} ?>>1974</option>
<option value="1975"<? if($formacaoDataSaidaAno=="1975"){echo" selected";} ?>>1975</option>
<option value="1976"<? if($formacaoDataSaidaAno=="1976"){echo" selected";} ?>>1976</option>
<option value="1977"<? if($formacaoDataSaidaAno=="1977"){echo" selected";} ?>>1977</option>
<option value="1978"<? if($formacaoDataSaidaAno=="1978"){echo" selected";} ?>>1978</option>
<option value="1979"<? if($formacaoDataSaidaAno=="1979"){echo" selected";} ?>>1979</option>
<option value="1980"<? if($formacaoDataSaidaAno=="1980"){echo" selected";} ?>>1980</option>
<option value="1981"<? if($formacaoDataSaidaAno=="1981"){echo" selected";} ?>>1981</option>
<option value="1982"<? if($formacaoDataSaidaAno=="1982"){echo" selected";} ?>>1982</option>
<option value="1983"<? if($formacaoDataSaidaAno=="1983"){echo" selected";} ?>>1983</option>
<option value="1984"<? if($formacaoDataSaidaAno=="1984"){echo" selected";} ?>>1984</option>
<option value="1985"<? if($formacaoDataSaidaAno=="1985"){echo" selected";} ?>>1985</option>
<option value="1986"<? if($formacaoDataSaidaAno=="1986"){echo" selected";} ?>>1986</option>
<option value="1987"<? if($formacaoDataSaidaAno=="1987"){echo" selected";} ?>>1987</option>
<option value="1988"<? if($formacaoDataSaidaAno=="1988"){echo" selected";} ?>>1988</option>
<option value="1989"<? if($formacaoDataSaidaAno=="1989"){echo" selected";} ?>>1989</option>
<option value="1990"<? if($formacaoDataSaidaAno=="1990"){echo" selected";} ?>>1990</option>
<option value="1991"<? if($formacaoDataSaidaAno=="1991"){echo" selected";} ?>>1991</option>
<option value="1992"<? if($formacaoDataSaidaAno=="1992"){echo" selected";} ?>>1992</option>
<option value="1993"<? if($formacaoDataSaidaAno=="1993"){echo" selected";} ?>>1993</option>
<option value="1994"<? if($formacaoDataSaidaAno=="1994"){echo" selected";} ?>>1994</option>
<option value="1995"<? if($formacaoDataSaidaAno=="1995"){echo" selected";} ?>>1995</option>
<option value="1996"<? if($formacaoDataSaidaAno=="1996"){echo" selected";} ?>>1996</option>
<option value="1997"<? if($formacaoDataSaidaAno=="1997"){echo" selected";} ?>>1997</option>
<option value="1998"<? if($formacaoDataSaidaAno=="1998"){echo" selected";} ?>>1998</option>
<option value="1999"<? if($formacaoDataSaidaAno=="1999"){echo" selected";} ?>>1999</option>
<option value="2000"<? if($formacaoDataSaidaAno=="2000"){echo" selected";} ?>>2000</option>
<option value="2001"<? if($formacaoDataSaidaAno=="2001"){echo" selected";} ?>>2001</option>
<option value="2002"<? if($formacaoDataSaidaAno=="2002"){echo" selected";} ?>>2002</option>
<option value="2003"<? if($formacaoDataSaidaAno=="2003"){echo" selected";} ?>>2003</option>
<option value="2004"<? if($formacaoDataSaidaAno=="2004"){echo" selected";} ?>>2004</option>
<option value="2005"<? if($formacaoDataSaidaAno=="2005"){echo" selected";} ?>>2005</option>
<option value="2006"<? if($formacaoDataSaidaAno=="2006"){echo" selected";} ?>>2006</option>
<option value="2007"<? if($formacaoDataSaidaAno=="2007"){echo" selected";} ?>>2007</option>
<option value="2008"<? if($formacaoDataSaidaAno=="2008"){echo" selected";} ?>>2008</option>
<option value="2009"<? if($formacaoDataSaidaAno=="2009"){echo" selected";} ?>>2009</option>
<option value="2010"<? if($formacaoDataSaidaAno=="2010"){echo" selected";} ?>>2010</option>
<option value="2011"<? if($formacaoDataSaidaAno=="2011"){echo" selected";} ?>>2011</option>
<option value="2012"<? if($formacaoDataSaidaAno=="2012"){echo" selected";} ?>>2012</option>
<option value="2013"<? if($formacaoDataSaidaAno=="2013"){echo" selected";} ?>>2013</option>
<option value="2014"<? if($formacaoDataSaidaAno=="2014"){echo" selected";} ?>>2014</option>
<option value="2015"<? if($formacaoDataSaidaAno=="2015"){echo" selected";} ?>>2015</option>
<option value="2016"<? if($formacaoDataSaidaAno=="2016"){echo" selected";} ?>>2016</option>
</select>	</td>
</tr>
<tr>
	<td width=26% class="td3" valign=middle>
	<span class="texto2">*</span>Ano Atual:	</td>
	<td colspan=3 class="td2">
	<select name="formacaoAno">
<option value="-1"<? if($formacaoAno=="-1"){echo" selected";} ?>></option>
<option value="1"<? if($formacaoAno=="1"){echo" selected";} ?>>1o Ano</option>
<option value="2"<? if($formacaoAno=="2"){echo" selected";} ?>>2o Ano</option>
<option value="3"<? if($formacaoAno=="3"){echo" selected";} ?>>3o Ano</option>
<option value="4"<? if($formacaoAno=="4"){echo" selected";} ?>>4o Ano</option>
<option value="5"<? if($formacaoAno=="5"){echo" selected";} ?>>5o Ano</option>
<option value="6"<? if($formacaoAno=="6"){echo" selected";} ?>>6o Ano</option>
<option value="0"<? if($formacaoAno=="0"){echo" selected";} ?>>Já Formado</option>
</select>	</td>
</tr>
<tr>
	<td width=26% class="td3" valign=middle>
	<span class="texto2">*</span>Nome da instituição:
	</td>
	<td colspan=3 class="td2">
	<input type="text" name="formacaoInstituicao" value="<? echo $formacaoInstituicao; ?>" size=50 maxlength=255>
	</td>
</tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td class="titulo" colspan=5 align=left>Experiência Profissional</td>
</tr>
<tr>
	<td width=26% class="td3" valign=middle>&nbsp;&nbsp;Data de Entrada (mm/aaaa)
	</td>
	<td class="td2">
	<select name="experienciaDataEntradaMes">
<option value="0"<? if($experienciaDataEntradaMes=="0"){echo" selected";} ?>></option>
<option value="1"<? if($experienciaDataEntradaMes=="1"){echo" selected";} ?>>1</option>
<option value="2"<? if($experienciaDataEntradaMes=="2"){echo" selected";} ?>>2</option>
<option value="3"<? if($experienciaDataEntradaMes=="3"){echo" selected";} ?>>3</option>
<option value="4"<? if($experienciaDataEntradaMes=="4"){echo" selected";} ?>>4</option>
<option value="5"<? if($experienciaDataEntradaMes=="5"){echo" selected";} ?>>5</option>
<option value="6"<? if($experienciaDataEntradaMes=="6"){echo" selected";} ?>>6</option>
<option value="7"<? if($experienciaDataEntradaMes=="7"){echo" selected";} ?>>7</option>
<option value="8"<? if($experienciaDataEntradaMes=="8"){echo" selected";} ?>>8</option>
<option value="9"<? if($experienciaDataEntradaMes=="9"){echo" selected";} ?>>9</option>
<option value="10"<? if($experienciaDataEntradaMes=="10"){echo" selected";} ?>>10</option>
<option value="11"<? if($experienciaDataEntradaMes=="11"){echo" selected";} ?>>11</option>
<option value="12"<? if($experienciaDataEntradaMes=="12"){echo" selected";} ?>>12</option>
</select>/<select name="experienciaDataEntradaAno" >
<option value="0"<? if($experienciaDataEntradaAno=="1960"){echo" selected";} ?>></option>
<option value="1960"<? if($experienciaDataEntradaAno=="1960"){echo" selected";} ?>>1960</option>
<option value="1961"<? if($experienciaDataEntradaAno=="1961"){echo" selected";} ?>>1961</option>
<option value="1962"<? if($experienciaDataEntradaAno=="1962"){echo" selected";} ?>>1962</option>
<option value="1963"<? if($experienciaDataEntradaAno=="1963"){echo" selected";} ?>>1963</option>
<option value="1964"<? if($experienciaDataEntradaAno=="1964"){echo" selected";} ?>>1964</option>
<option value="1965"<? if($experienciaDataEntradaAno=="1965"){echo" selected";} ?>>1965</option>
<option value="1966"<? if($experienciaDataEntradaAno=="1966"){echo" selected";} ?>>1966</option>
<option value="1967"<? if($experienciaDataEntradaAno=="1967"){echo" selected";} ?>>1967</option>
<option value="1968"<? if($experienciaDataEntradaAno=="1968"){echo" selected";} ?>>1968</option>
<option value="1969"<? if($experienciaDataEntradaAno=="1969"){echo" selected";} ?>>1969</option>
<option value="1970"<? if($experienciaDataEntradaAno=="1970"){echo" selected";} ?>>1970</option>
<option value="1971"<? if($experienciaDataEntradaAno=="1971"){echo" selected";} ?>>1971</option>
<option value="1972"<? if($experienciaDataEntradaAno=="1972"){echo" selected";} ?>>1972</option>
<option value="1973"<? if($experienciaDataEntradaAno=="1973"){echo" selected";} ?>>1973</option>
<option value="1974"<? if($experienciaDataEntradaAno=="1974"){echo" selected";} ?>>1974</option>
<option value="1975"<? if($experienciaDataEntradaAno=="1975"){echo" selected";} ?>>1975</option>
<option value="1976"<? if($experienciaDataEntradaAno=="1976"){echo" selected";} ?>>1976</option>
<option value="1977"<? if($experienciaDataEntradaAno=="1977"){echo" selected";} ?>>1977</option>
<option value="1978"<? if($experienciaDataEntradaAno=="1978"){echo" selected";} ?>>1978</option>
<option value="1979"<? if($experienciaDataEntradaAno=="1979"){echo" selected";} ?>>1979</option>
<option value="1980"<? if($experienciaDataEntradaAno=="1980"){echo" selected";} ?>>1980</option>
<option value="1981"<? if($experienciaDataEntradaAno=="1981"){echo" selected";} ?>>1981</option>
<option value="1982"<? if($experienciaDataEntradaAno=="1982"){echo" selected";} ?>>1982</option>
<option value="1983"<? if($experienciaDataEntradaAno=="1983"){echo" selected";} ?>>1983</option>
<option value="1984"<? if($experienciaDataEntradaAno=="1984"){echo" selected";} ?>>1984</option>
<option value="1985"<? if($experienciaDataEntradaAno=="1985"){echo" selected";} ?>>1985</option>
<option value="1986"<? if($experienciaDataEntradaAno=="1986"){echo" selected";} ?>>1986</option>
<option value="1987"<? if($experienciaDataEntradaAno=="1987"){echo" selected";} ?>>1987</option>
<option value="1988"<? if($experienciaDataEntradaAno=="1988"){echo" selected";} ?>>1988</option>
<option value="1989"<? if($experienciaDataEntradaAno=="1989"){echo" selected";} ?>>1989</option>
<option value="1990"<? if($experienciaDataEntradaAno=="1990"){echo" selected";} ?>>1990</option>
<option value="1991"<? if($experienciaDataEntradaAno=="1991"){echo" selected";} ?>>1991</option>
<option value="1992"<? if($experienciaDataEntradaAno=="1992"){echo" selected";} ?>>1992</option>
<option value="1993"<? if($experienciaDataEntradaAno=="1993"){echo" selected";} ?>>1993</option>
<option value="1994"<? if($experienciaDataEntradaAno=="1994"){echo" selected";} ?>>1994</option>
<option value="1995"<? if($experienciaDataEntradaAno=="1995"){echo" selected";} ?>>1995</option>
<option value="1996"<? if($experienciaDataEntradaAno=="1996"){echo" selected";} ?>>1996</option>
<option value="1997"<? if($experienciaDataEntradaAno=="1997"){echo" selected";} ?>>1997</option>
<option value="1998"<? if($experienciaDataEntradaAno=="1998"){echo" selected";} ?>>1998</option>
<option value="1999"<? if($experienciaDataEntradaAno=="1999"){echo" selected";} ?>>1999</option>
<option value="2000"<? if($experienciaDataEntradaAno=="2000"){echo" selected";} ?>>2000</option>
<option value="2001"<? if($experienciaDataEntradaAno=="2001"){echo" selected";} ?>>2001</option>
<option value="2002"<? if($experienciaDataEntradaAno=="2002"){echo" selected";} ?>>2002</option>
<option value="2003"<? if($experienciaDataEntradaAno=="2003"){echo" selected";} ?>>2003</option>
<option value="2004"<? if($experienciaDataEntradaAno=="2004"){echo" selected";} ?>>2004</option>
<option value="2005"<? if($experienciaDataEntradaAno=="2005"){echo" selected";} ?>>2005</option>
<option value="2006"<? if($experienciaDataEntradaAno=="2006"){echo" selected";} ?>>2006</option>
</select>	</td>
	<td class="td2" valign=middle>
		&nbsp;&nbsp;Data de Saída (mm/aaaa)	</td>
	<td class="td2">
		<select name="experienciaDataSaidaMes">
<option value="0"<? if($experienciaDataSaidaMes=="0"){echo" selected";} ?>></option>
<option value="1"<? if($experienciaDataSaidaMes=="1"){echo" selected";} ?>>1</option>
<option value="2"<? if($experienciaDataSaidaMes=="2"){echo" selected";} ?>>2</option>
<option value="3"<? if($experienciaDataSaidaMes=="3"){echo" selected";} ?>>3</option>
<option value="4"<? if($experienciaDataSaidaMes=="4"){echo" selected";} ?>>4</option>
<option value="5"<? if($experienciaDataSaidaMes=="5"){echo" selected";} ?>>5</option>
<option value="6"<? if($experienciaDataSaidaMes=="6"){echo" selected";} ?>>6</option>
<option value="7"<? if($experienciaDataSaidaMes=="7"){echo" selected";} ?>>7</option>
<option value="8"<? if($experienciaDataSaidaMes=="8"){echo" selected";} ?>>8</option>
<option value="9"<? if($experienciaDataSaidaMes=="9"){echo" selected";} ?>>9</option>
<option value="10"<? if($experienciaDataSaidaMes=="10"){echo" selected";} ?>>10</option>
<option value="11"<? if($experienciaDataSaidaMes=="11"){echo" selected";} ?>>11</option>
<option value="12"<? if($experienciaDataSaidaMes=="12"){echo" selected";} ?>>12</option>
</select>/<select name="experienciaDataSaidaAno" >
<option value="0"<? if($experienciaDataSaidaAno=="1960"){echo" selected";} ?>></option>
<option value="1960"<? if($experienciaDataSaidaAno=="1960"){echo" selected";} ?>>1960</option>
<option value="1961"<? if($experienciaDataSaidaAno=="1961"){echo" selected";} ?>>1961</option>
<option value="1962"<? if($experienciaDataSaidaAno=="1962"){echo" selected";} ?>>1962</option>
<option value="1963"<? if($experienciaDataSaidaAno=="1963"){echo" selected";} ?>>1963</option>
<option value="1964"<? if($experienciaDataSaidaAno=="1964"){echo" selected";} ?>>1964</option>
<option value="1965"<? if($experienciaDataSaidaAno=="1965"){echo" selected";} ?>>1965</option>
<option value="1966"<? if($experienciaDataSaidaAno=="1966"){echo" selected";} ?>>1966</option>
<option value="1967"<? if($experienciaDataSaidaAno=="1967"){echo" selected";} ?>>1967</option>
<option value="1968"<? if($experienciaDataSaidaAno=="1968"){echo" selected";} ?>>1968</option>
<option value="1969"<? if($experienciaDataSaidaAno=="1969"){echo" selected";} ?>>1969</option>
<option value="1970"<? if($experienciaDataSaidaAno=="1970"){echo" selected";} ?>>1970</option>
<option value="1971"<? if($experienciaDataSaidaAno=="1971"){echo" selected";} ?>>1971</option>
<option value="1972"<? if($experienciaDataSaidaAno=="1972"){echo" selected";} ?>>1972</option>
<option value="1973"<? if($experienciaDataSaidaAno=="1973"){echo" selected";} ?>>1973</option>
<option value="1974"<? if($experienciaDataSaidaAno=="1974"){echo" selected";} ?>>1974</option>
<option value="1975"<? if($experienciaDataSaidaAno=="1975"){echo" selected";} ?>>1975</option>
<option value="1976"<? if($experienciaDataSaidaAno=="1976"){echo" selected";} ?>>1976</option>
<option value="1977"<? if($experienciaDataSaidaAno=="1977"){echo" selected";} ?>>1977</option>
<option value="1978"<? if($experienciaDataSaidaAno=="1978"){echo" selected";} ?>>1978</option>
<option value="1979"<? if($experienciaDataSaidaAno=="1979"){echo" selected";} ?>>1979</option>
<option value="1980"<? if($experienciaDataSaidaAno=="1980"){echo" selected";} ?>>1980</option>
<option value="1981"<? if($experienciaDataSaidaAno=="1981"){echo" selected";} ?>>1981</option>
<option value="1982"<? if($experienciaDataSaidaAno=="1982"){echo" selected";} ?>>1982</option>
<option value="1983"<? if($experienciaDataSaidaAno=="1983"){echo" selected";} ?>>1983</option>
<option value="1984"<? if($experienciaDataSaidaAno=="1984"){echo" selected";} ?>>1984</option>
<option value="1985"<? if($experienciaDataSaidaAno=="1985"){echo" selected";} ?>>1985</option>
<option value="1986"<? if($experienciaDataSaidaAno=="1986"){echo" selected";} ?>>1986</option>
<option value="1987"<? if($experienciaDataSaidaAno=="1987"){echo" selected";} ?>>1987</option>
<option value="1988"<? if($experienciaDataSaidaAno=="1988"){echo" selected";} ?>>1988</option>
<option value="1989"<? if($experienciaDataSaidaAno=="1989"){echo" selected";} ?>>1989</option>
<option value="1990"<? if($experienciaDataSaidaAno=="1990"){echo" selected";} ?>>1990</option>
<option value="1991"<? if($experienciaDataSaidaAno=="1991"){echo" selected";} ?>>1991</option>
<option value="1992"<? if($experienciaDataSaidaAno=="1992"){echo" selected";} ?>>1992</option>
<option value="1993"<? if($experienciaDataSaidaAno=="1993"){echo" selected";} ?>>1993</option>
<option value="1994"<? if($experienciaDataSaidaAno=="1994"){echo" selected";} ?>>1994</option>
<option value="1995"<? if($experienciaDataSaidaAno=="1995"){echo" selected";} ?>>1995</option>
<option value="1996"<? if($experienciaDataSaidaAno=="1996"){echo" selected";} ?>>1996</option>
<option value="1997"<? if($experienciaDataSaidaAno=="1997"){echo" selected";} ?>>1997</option>
<option value="1998"<? if($experienciaDataSaidaAno=="1998"){echo" selected";} ?>>1998</option>
<option value="1999"<? if($experienciaDataSaidaAno=="1999"){echo" selected";} ?>>1999</option>
<option value="2000"<? if($experienciaDataSaidaAno=="2000"){echo" selected";} ?>>2000</option>
<option value="2001"<? if($experienciaDataSaidaAno=="2001"){echo" selected";} ?>>2001</option>
<option value="2002"<? if($experienciaDataSaidaAno=="2002"){echo" selected";} ?>>2002</option>
<option value="2003"<? if($experienciaDataSaidaAno=="2003"){echo" selected";} ?>>2003</option>
<option value="2004"<? if($experienciaDataSaidaAno=="2004"){echo" selected";} ?>>2004</option>
<option value="2005"<? if($experienciaDataSaidaAno=="2005"){echo" selected";} ?>>2005</option>
<option value="2006"<? if($experienciaDataSaidaAno=="2006"){echo" selected";} ?>>2006</option>
</select>
</td>
</tr>
<tr>
	<td width=26% class="td3" valign=middle>
	<span class="texto2">*</span>Nome da empresa:	</td>
	<td colspan=3 class="td2">
	  <input type="text" name="experienciaEmpresa" value="<? echo $experienciaEmpresa; ?>" size=40 maxlength=100>	</td>
</tr>
<tr>
	<td width=26% class="td3" valign=middle>
	<span class="texto2">*</span>Último Cargo na Empresa:
	</td>
	<td colspan=3 class="td2">
	  <input type="text" name="experienciaCargo" value="<? echo $experienciaCargo; ?>" size=30 maxlength=255>
    </td>
<tr>
	<td width=26% class="td3" valign=middle>
	<span class="texto2">*</span>Atribuições / Realizações no cargo:	</td>
	<td colspan=3 class="td2">
	<textarea name="experienciaDescricao" rows=10 cols=40 wrap="virtual"><? echo $experienciaDescricao; ?></textarea>
</td>
</tr>
</table>
<?
			}
	}
?>
</body>
</html>