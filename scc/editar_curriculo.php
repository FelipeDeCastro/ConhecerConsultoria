<?php
session_start();
$email = $_SESSION["email"];
$senha = $_SESSION["senha"];

require ("admin/config.php");

if($cadastrar==1)
	{
		$ramo	= explode(";", $ramo);
		$area	= explode(";", $area);
		$nivel	= explode(";", $nivel);
	}

if($_GET['logar'] == 1){		
		$regs= mysql_query("SELECT * FROM curriculo WHERE codigo =". $_SESSION["sess_codigo"]);
		
		if($reg = mysql_fetch_array($regs))
			{
				$codigo 					= $reg["codigo"];
				$_SESSION["sess_codigo"] 	= $codigo;				
				$nome 						= $reg["nome"];
				$email	 					= $reg["email"];
				$sexo						= $reg["sexo"];
				$estadoCivil				= $reg["estadoCivil"];
				$dia						= $reg["dia"];
				$mes						= $reg["mes"];
				$ano						= $reg["ano"];
				$naturalidade				= $reg["naturalidade"];
				$estado						= $reg["estado"];
				$pais						= $reg["pais"];
				$situacao					= $reg["situacao"];
				$cert_militar				= $reg["cert_militar"];
				$cm_especie					= $reg["cm_especie"];
				$cm_categ					= $reg["cm_categ"];
				$cm_uf						= $reg["cm_uf"];
				$rg							= $reg["rg"];
				$rg_orgao					= $reg["rg_orgao"];
				$rg_emissao					= $reg["rg_emissao"];
				$rg_uf						= $reg["rg_uf"];
				$pis						= $reg["pis"];
				$pis_emissao				= $reg["pis_emissao"];
				$cpf						= $reg["cpf"];
				$tituloeleitor				= $reg["tituloeleitor"];
				$eleitor_zona				= $reg["eleitor_zona"];
				$eleitor_sessao				= $reg["eleitor_sessao"];
				$eleitor_emissao			= $reg["eleitor_emissao"];
				$eleitor_uf					= $reg["eleitor_uf"];
				$cnh						= $reg["cnh"];
				$cnh_categ					= $reg["cnh_categ"];
				$cnh_registro				= $reg["cnh_registro"];
				$cnh_emissao				= $reg["cnh_emissao"];
				$ctps						= $reg["ctps"];
				$ctps_serie					= $reg["ctps_serie"];
				$ctps_emissao				= $reg["ctps_emissao"];
				$ctps_uf					= $reg["ctps_uf"];
				$orgao_prof					= $reg["orgao_prof"];
				$org_prof_nome				= $reg["org_prof_nome"];
				$org_prof_sigla				= $reg["org_prof_sigla"];
				$org_prof_uf				= $reg["org_prof_uf"];
				$raca						= $reg["raca"];
				$telefoneDDD				= $reg["telefoneDDD"];
				$telefone					= $reg["telefone"];
				$recadoDDD					= $reg["recadoDDD"];
				$fone_recado				= $reg["fone_recado"];
				$recadopessoa				= $reg["recadopessoa"];
				$celularDDD					= $reg["celularDDD"];
				$celular					= $reg["celular"];
				$homePage					= $reg["homePage"];
				$endereco					= $reg["endereco"];
				$numero						= $reg["numero"];
				$complemento				= $reg["complemento"];
				$bairro						= $reg["bairro"];					
				$cidade						= $reg["cidade"];
				$cep						= $reg["cep"];
				$estado_res					= $reg["estado_res"];
				$experienciaDataEntradaMes	= $reg["experienciaDataEntradaMes"];
				$experienciaDataEntradaAno	= $reg["experienciaDataEntradaAno"];
				$experienciaDataSaidaMes	= $reg["experienciaDataSaidaMes"];
				$experienciaDataSaidaAno	= $reg["experienciaDataSaidaAno"];
				$experienciaEmpresa			= $reg["experienciaEmpresa"];
				$exp_uf						= $reg["exp_uf"];
				$experienciaCargo			= $reg["experienciaCargo"];
				$experienciaDescricao		= $reg["experienciaDescricao"];
				$acessi						= $reg["acessi"];
				$acessi_tipo				= $reg["acessi_tipo"];
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
				$idiomaoutro_nome			= $reg["idiomaoutro_nome"];
				$info_outro_nome			= $reg["info_outro_nome"];				
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
				$formacao_municipio			= $reg["formacao_municipio"];
				$formacao_uf				= $reg["formacao_uf"];				
				$senha						= $reg["senha"];
				$senhaDica					= $reg["senhaDica"];
			}
		else
			{
				header("Location: ./index.php?senha=1");
			}
				
	}

if($enviar==1)
	{				
		$quote = "'";
		
		$codigo = $_SESSION["sess_codigo"];
		
		if($codigo!="")
			$acao = "editar";
		else
			$acao = "incluir";
		
		if(is_array($ramo))
			$ramo 		= implode(";", $ramo);
		
		if(is_array($area))
		$area 		= implode(";", $area);
		
		if(is_array($nivel))
		$nivel 		= implode(";", $nivel);
		
		if($alemao1==1)
			$alemao		= $_POST["alemao"];
		else
			$alemao 	= "";
			
		if($espanhol1==1)
			$espanhol	= $_POST["espanhol"];
		else
			$espanhol 	= "";
			
		if($frances1==1)
			$frances	= $_POST["frances"];
		else
			$frances	= "";
			
		if($ingles1==1)
			$ingles		= $_POST["ingles"];
		else
			$ingles		= "";
			
		if($italiano1==1)
			$italiano	= $_POST["italiano"];
		else
			$italiano	= "";
			
		if($idioma_outro==1)
			$idiomaoutro_nome	= $_POST["$idiomaoutro_nome"];
		else
			$idiomaoutro_nome	= "";
			
		if($word1==1)
			$word = $_POST["word"];
		else
			$word 	= "";
			
		if($excel1==1)
			$excel	= $_POST["excel"];
		else
			$excel 	= "";
			
		if($powerp1==1)
			$powerp	= $_POST["powerp"];
		else
			$powerp	= "";
			
		if($windows1==1)
			$windows = $_POST["windows"];
		else
			$windows = "";
			
		if($internet1==1)
			$internet	= $_POST["internet"];
		else
			$internet = "";
			
		if($info_outro==1) 
			$info_outro_nome	= $_POST["info_outro_nome"]; 
		else 
			$info_outro_nome	= "";
		
		$regs= mysql_query("SELECT * FROM curriculo WHERE email='$email'");
		if(mysql_num_rows($regs)>0 AND $acao=="incluir")
			{
				$acao="";
				$erro=1;
			}
				
		
		if($acao=="incluir")
		{
			$query = "INSERT INTO curriculo ";
			$query = $query . "(nome,email,sexo,estadoCivil,dia,mes,ano,naturalidade,estado,pais,situacao,";
			$query = $query . "cert_militar,cm_especie,cm_categ,cm_uf,rg,rg_orgao,rg_emissao,rg_uf,pis,pis_emissao,cpf,tituloeleitor,eleitor_zona,eleitor_sessao,eleitor_emissao,eleitor_uf,cnh,cnh_categ,cnh_registro,cnh_emissao,ctps,ctps_serie,ctps_emissao,ctps_uf,orgao_prof,org_prof_nome,org_prof_sigla,org_prof_uf,";
			$query = $query . "raca,telefoneDDD,telefone,recadoDDD,fone_recado,recadopessoa,celularDDD,celular,homePage,";
			$query = $query . "endereco,numero,complemento,bairro,cidade,cep,estado_res,";
			$query = $query . "experienciaDataEntradaMes,experienciaDataEntradaAno,experienciaDataSaidaMes,experienciaDataSaidaAno,experienciaEmpresa,experienciaCidade,exp_uf,exp_pais,experienciaCargo,experienciasalario,experienciaDescricao,";
			$query = $query . "acessi,acessi_tipo,formacaoGrau,formacaoCurso,formacaoDataInicioMes,formacaoDataInicioAno,formacaoDataSaidaMes,formacaoDataSaidaAno,formacaoAno,formacaoInstituicao,formacao_municipio,formacao_uf,";
			$query = $query . "alemao,espanhol,frances,ingles,italiano,idiomaoutro_nome,word,excel,powerp,windows,internet,info_outro_nome,";
			$query = $query . "dp1,dp1_dados,dp2,dp2_dados,dp3,dp3_dados,dp4,dp4_dados,dp5,dp5_dados,dp6,dp6_dados,";
			$query = $query . "desejoTrabalharCidade,ramo,nivel,pretensao,minicurriculo,especializacoes,conheceu,senha,senhaDica) ";
			$query = $query . "VALUES (";
			$query = $query . $quote . $nome 						. $quote . ", ";
			$query = $query . $quote . $email	 					. $quote . ", ";
			$query = $query . $quote . $sexo 	 					. $quote . ", ";
			$query = $query . $quote . $estadoCivil	 				. $quote . ", ";
			$query = $query . $quote . $dia  						. $quote . ", ";
			$query = $query . $quote . $mes		 					. $quote . ", ";
			$query = $query . $quote . $ano		 					. $quote . ", ";
			$query = $query . $quote . $naturalidade				. $quote . ", ";
			$query = $query . $quote . $estado						. $quote . ", ";
			$query = $query . $quote . $ed_pais						. $quote . ", ";
			$query = $query . $quote . $situacao					. $quote . ", ";
			$query = $query . $quote . $n_cert_militar    			. $quote . ", ";
			$query = $query . $quote . $cm_especie					. $quote . ", ";
			$query = $query . $quote . $cm_categ					. $quote . ", ";
			$query = $query . $quote . $cm_uf						. $quote . ", ";
			$query = $query . $quote . $rg							. $quote . ", ";
			$query = $query . $quote . $rg_orgao					. $quote . ", ";
			$query = $query . $quote . $rg_emissao					. $quote . ", ";
			$query = $query . $quote . $rg_uf					    . $quote . ", ";
			$query = $query . $quote . $pis							. $quote . ", ";
			$query = $query . $quote . $pis_emissao					. $quote . ", ";
			$query = $query . $quote . $cpf							. $quote . ", ";
			$query = $query . $quote . $eleitor						. $quote . ", ";
			$query = $query . $quote . $eleitor_zona				. $quote . ", ";
			$query = $query . $quote . $eleitor_sessao				. $quote . ", ";
			$query = $query . $quote . $eleitor_emissao				. $quote . ", ";
			$query = $query . $quote . $eleitor_uf					. $quote . ", ";
			$query = $query . $quote . $cnh							. $quote . ", ";
			$query = $query . $quote . $cnh_categ					. $quote . ", ";
			$query = $query . $quote . $cnh_registro				. $quote . ", ";
			$query = $query . $quote . $cnh_emissao					. $quote . ", ";
			$query = $query . $quote . $ctps						. $quote . ", ";
			$query = $query . $quote . $ctps_serie					. $quote . ", ";
			$query = $query . $quote . $ctps_emissao				. $quote . ", ";
			$query = $query . $quote . $ctps_uf						. $quote . ", ";
			$query = $query . $quote . $orgao_prof					. $quote . ", ";
			$query = $query . $quote . $org_prof_nome				. $quote . ", ";
			$query = $query . $quote . $org_prof_sigla				. $quote . ", ";
			$query = $query . $quote . $org_prof_uf					. $quote . ", ";			
			$query = $query . $quote . $raca    					. $quote . ", ";			
			$query = $query . $quote . $telefoneDDD					. $quote . ", ";
			$query = $query . $quote . $telefone					. $quote . ", ";
			$query = $query . $quote . $recadoDDD					. $quote . ", ";
			$query = $query . $quote . $fone_recado					. $quote . ", ";
			$query = $query . $quote . $recadopessoa				. $quote . ", ";
			$query = $query . $quote . $celularDDD					. $quote . ", ";
			$query = $query . $quote . $celular						. $quote . ", ";
			$query = $query . $quote . $homePage					. $quote . ", ";
			$query = $query . $quote . $endereco					. $quote . ", ";
			$query = $query . $quote . $numero		 				. $quote . ", ";
			$query = $query . $quote . $complemento					. $quote . ", ";
			$query = $query . $quote . $bairro		 				. $quote . ", ";
			$query = $query . $quote . $cidade		 				. $quote . ", ";
			$query = $query . $quote . $cep 		 				. $quote . ", ";
			$query = $query . $quote . $estado_res 					. $quote . ", ";
			$query = $query . $quote . $experienciaDataEntradaMes	. $quote . ", ";
			$query = $query . $quote . $experienciaDataEntradaAno	. $quote . ", ";
			$query = $query . $quote . $experienciaDataSaidaMes		. $quote . ", ";
			$query = $query . $quote . $experienciaDataSaidaAno		. $quote . ", ";
			$query = $query . $quote . $experienciaEmpresa		 	. $quote . ", ";
			$query = $query . $quote . $experienciaCidade		 	. $quote . ", ";
			$query = $query . $quote . $exp_uf		            	. $quote . ", ";
			$query = $query . $quote . $exp_pais	            	. $quote . ", ";
			$query = $query . $quote . $experienciaCargo		 	. $quote . ", ";
			$query = $query . $quote . $experienciasalario		 	. $quote . ", ";
			$query = $query . $quote . $experienciaDescricao		. $quote . ", ";
			$query = $query . $quote . $acessi		 				. $quote . ", ";
			$query = $query . $quote . $acessi_tipo	 				. $quote . ", ";
			$query = $query . $quote . $formacaoGrau	 			. $quote . ", ";
			$query = $query . $quote . $formacaoCurso	 			. $quote . ", ";
			$query = $query . $quote . $formacaoDataInicioMes		. $quote . ", ";
			$query = $query . $quote . $formacaoDataInicioAno		. $quote . ", ";
			$query = $query . $quote . $formacaoDataSaidaMes 		. $quote . ", ";
			$query = $query . $quote . $formacaoDataSaidaAno		. $quote . ", ";
			$query = $query . $quote . $formacaoAno		 			. $quote . ", ";
			$query = $query . $quote . $formacaoInstituicao			. $quote . ", ";
			$query = $query . $quote . $formacao_municipio			. $quote . ", ";
			$query = $query . $quote . $formacao_uf     			. $quote . ", ";
			$query = $query . $quote . $alemao			 			. $quote . ", ";
			$query = $query . $quote . $espanhol		 			. $quote . ", ";
			$query = $query . $quote . $frances			 			. $quote . ", ";
			$query = $query . $quote . $ingles			 			. $quote . ", ";
			$query = $query . $quote . $italiano		 			. $quote . ", ";
			$query = $query . $quote . $idiomaoutro_nome			. $quote . ", ";
			$query = $query . $quote . $word	 			        . $quote . ", ";
			$query = $query . $quote . $excel	 					. $quote . ", ";
			$query = $query . $quote . $powerp	 					. $quote . ", ";
			$query = $query . $quote . $windows 					. $quote . ", ";
			$query = $query . $quote . $internet 					. $quote . ", ";
			$query = $query . $quote . $info_outro_nome	 			. $quote . ", ";
			$query = $query . $quote . $dp1	 						. $quote . ", ";
			$query = $query . $quote . $dp1_dados  		 			. $quote . ", ";
			$query = $query . $quote . $dp2	 						. $quote . ", ";
			$query = $query . $quote . $dp2_dados  		 			. $quote . ", ";
			$query = $query . $quote . $dp3	 						. $quote . ", ";
			$query = $query . $quote . $dp3_dados  		 			. $quote . ", ";
			$query = $query . $quote . $dp4	 						. $quote . ", ";
			$query = $query . $quote . $dp4_dados  		 			. $quote . ", ";
			$query = $query . $quote . $dp5	 						. $quote . ", ";
			$query = $query . $quote . $dp5_dados  		 			. $quote . ", ";
			$query = $query . $quote . $dp6	 						. $quote . ", ";
			$query = $query . $quote . $dp6_dados  		 			. $quote . ", ";
			$query = $query . $quote . $desejaTrabalharCidade		. $quote . ", ";
			$query = $query . $quote . $ramo		 				. $quote . ", ";
			$query = $query . $quote . $nivel		 				. $quote . ", ";
			$query = $query . $quote . $pretensao		 			. $quote . ", ";
			$query = $query . $quote . $minicurriculo	 			. $quote . ", ";
			$query = $query . $quote . $especializacoes	 			. $quote . ", ";
			$query = $query . $quote . $conheceu		 			. $quote . ", ";
			$query = $query . $quote . $senha		 				. $quote . ", ";
			$query = $query . $quote . $senhaDica		 			. $quote . ")";
			
			mysql_query($query)or die("Erro: ".$query);
			
			$regs= mysql_query("SELECT * FROM curriculo WHERE email='$email'");
			$reg = mysql_fetch_array($regs);
			$codigo 					= $reg["codigo"];
			$_SESSION["sess_codigo"] 	= $codigo;
		}

	if($acao=="editar")
		{	
			$query = "UPDATE curriculo ";
			$query = $query . "SET "; 
			$query = $query . "nome = "						. $quote . $nome						. $quote . ", ";
			$query = $query . "email = "	 				. $quote . $email 						. $quote . ", ";
			$query = $query . "sexo = "       				. $quote . $sexo 	 					. $quote . ", ";
			$query = $query . "estadoCivil = "       		. $quote . $estadoCivil	 				. $quote . ", ";
			$query = $query . "dia = "       				. $quote . $dia  						. $quote . ", ";
			$query = $query . "mes = "       				. $quote . $mes		 					. $quote . ", ";
			$query = $query . "ano = "       				. $quote . $ano		 					. $quote . ", ";
			$query = $query . "naturalidade = "       		. $quote . $naturalidade				. $quote . ", ";
			$query = $query . "estado = "       			. $quote . $estado						. $quote . ", ";
			$query = $query . "pais = "       				. $quote . $ed_pais						. $quote . ", ";
			$query = $query . "situacao = "       			. $quote . $situacao					. $quote . ", ";
			$query = $query . "cert_militar = "       		. $quote . $n_cert_militar    			. $quote . ", ";
			$query = $query . "cm_especie = "       		. $quote . $cm_especie					. $quote . ", ";
			$query = $query . "cm_categ = "       			. $quote . $cm_categ					. $quote . ", ";
			$query = $query . "cm_uf = "       				. $quote . $cm_uf						. $quote . ", ";
			$query = $query . "rg = "       				. $quote . $rg							. $quote . ", ";
			$query = $query . "rg_orgao = "       			. $quote . $rg_orgao					. $quote . ", ";
			$query = $query . "rg_emissao = "       		. $quote . $rg_emissao					. $quote . ", ";
			$query = $query . "rg_uf = "       				. $quote . $rg_uf					    . $quote . ", ";
			$query = $query . "pis = "       				. $quote . $pis							. $quote . ", ";
			$query = $query . "pis_emissao = "       		. $quote . $pis_emissao					. $quote . ", ";
			$query = $query . "cpf = "       				. $quote . $cpf							. $quote . ", ";
			$query = $query . "tituloeleitor = "       		. $quote . $eleitor						. $quote . ", ";
			$query = $query . "eleitor_zona = "       		. $quote . $eleitor_zona				. $quote . ", ";
			$query = $query . "eleitor_sessao = "       	. $quote . $eleitor_sessao				. $quote . ", ";
			$query = $query . "eleitor_emissao = "       	. $quote . $eleitor_emissao				. $quote . ", ";
			$query = $query . "eleitor_uf = "       		. $quote . $eleitor_uf					. $quote . ", ";
			$query = $query . "cnh = "       				. $quote . $cnh							. $quote . ", ";
			$query = $query . "cnh_categ = "       			. $quote . $cnh_categ					. $quote . ", ";
			$query = $query . "cnh_registro = "       		. $quote . $cnh_registro				. $quote . ", ";
			$query = $query . "cnh_emissao = "       		. $quote . $cnh_emissao					. $quote . ", ";
			$query = $query . "ctps = "       				. $quote . $ctps						. $quote . ", ";
			$query = $query . "ctps_serie = "       		. $quote . $ctps_serie					. $quote . ", ";
			$query = $query . "ctps_emissao = "       		. $quote . $ctps_emissao				. $quote . ", ";
			$query = $query . "ctps_uf = "       			. $quote . $ctps_uf						. $quote . ", ";
			$query = $query . "orgao_prof = "       		. $quote . $orgao_prof					. $quote . ", ";
			$query = $query . "org_prof_nome = "       		. $quote . $org_prof_nome				. $quote . ", ";
			$query = $query . "org_prof_sigla = "       	. $quote . $org_prof_sigla				. $quote . ", ";
			$query = $query . "org_prof_uf = "       		. $quote . $org_prof_uf					. $quote . ", ";			
			$query = $query . "raca = "       				. $quote . $raca    					. $quote . ", ";			
			$query = $query . "telefoneDDD = "       		. $quote . $telefoneDDD					. $quote . ", ";
			$query = $query . "telefone = "       			. $quote . $telefone					. $quote . ", ";
			$query = $query . "recadoDDD = "       			. $quote . $recadoDDD					. $quote . ", ";
			$query = $query . "fone_recado = "       		. $quote . $fone_recado					. $quote . ", ";
			$query = $query . "recadopessoa = "       		. $quote . $recadopessoa				. $quote . ", ";
			$query = $query . "celularDDD = "       		. $quote . $celularDDD					. $quote . ", ";
			$query = $query . "celular = "       			. $quote . $celular						. $quote . ", ";
			$query = $query . "homePage = "       			. $quote . $homePage					. $quote . ", ";
			$query = $query . "endereco = "       			. $quote . $endereco					. $quote . ", ";
			$query = $query . "numero = "       			. $quote . $numero		 				. $quote . ", ";
			$query = $query . "complemento = "       		. $quote . $complemento					. $quote . ", ";
			$query = $query . "bairro = "       			. $quote . $bairro		 				. $quote . ", ";
			$query = $query . "cidade = "       			. $quote . $cidade		 				. $quote . ", ";
			$query = $query . "cep = "       				. $quote . $cep 		 				. $quote . ", ";
			$query = $query . "estado_res = "       		. $quote . $estado_res 					. $quote . ", ";
			$query = $query . "experienciaDataEntradaMes = ". $quote . $experienciaDataEntradaMes	. $quote . ", ";
			$query = $query . "experienciaDataEntradaAno = ". $quote . $experienciaDataEntradaAno	. $quote . ", ";
			$query = $query . "experienciaDataSaidaMes = "  . $quote . $experienciaDataSaidaMes		. $quote . ", ";
			$query = $query . "experienciaDataSaidaAno = "  . $quote . $experienciaDataSaidaAno		. $quote . ", ";
			$query = $query . "experienciaEmpresa = "       . $quote . $experienciaEmpresa		 	. $quote . ", ";
			$query = $query . "experienciaCidade = "       	. $quote . $experienciaCidade		 	. $quote . ", ";
			$query = $query . "exp_uf = "       			. $quote . $exp_uf		            	. $quote . ", ";
			$query = $query . "exp_pais = "       			. $quote . $exp_pais	            	. $quote . ", ";
			$query = $query . "experienciaCargo = "       	. $quote . $experienciaCargo		 	. $quote . ", ";
			$query = $query . "experienciasalario = "       . $quote . $experienciasalario		 	. $quote . ", ";
			$query = $query . "experienciaDescricao = "     . $quote . $experienciaDescricao		. $quote . ", ";
			$query = $query . "acessi = "       			. $quote . $acessi		 				. $quote . ", ";
			$query = $query . "acessi_tipo = "       		. $quote . $acessi_tipo	 				. $quote . ", ";
			$query = $query . "formacaoGrau = "       		. $quote . $formacaoGrau	 			. $quote . ", ";
			$query = $query . "formacaoCurso = "       		. $quote . $formacaoCurso	 			. $quote . ", ";
			$query = $query . "formacaoDataInicioMes = "    . $quote . $formacaoDataInicioMes		. $quote . ", ";
			$query = $query . "formacaoDataInicioAno = "    . $quote . $formacaoDataInicioAno		. $quote . ", ";
			$query = $query . "formacaoDataSaidaMes = "     . $quote . $formacaoDataSaidaMes 		. $quote . ", ";
			$query = $query . "formacaoDataSaidaAno = "     . $quote . $formacaoDataSaidaAno		. $quote . ", ";
			$query = $query . "formacaoAno = "       		. $quote . $formacaoAno		 			. $quote . ", ";
			$query = $query . "formacaoInstituicao = "      . $quote . $formacaoInstituicao			. $quote . ", ";
			$query = $query . "formacao_municipio = "       . $quote . $formacao_municipio			. $quote . ", ";
			$query = $query . "formacao_uf = "       		. $quote . $formacao_uf     			. $quote . ", ";
			$query = $query . "alemao = "       			. $quote . $alemao			 			. $quote . ", ";
			$query = $query . "espanhol = "       			. $quote . $espanhol		 			. $quote . ", ";
			$query = $query . "frances = "       			. $quote . $frances			 			. $quote . ", ";
			$query = $query . "ingles = "       			. $quote . $ingles			 			. $quote . ", ";
			$query = $query . "italiano = "       			. $quote . $italiano		 			. $quote . ", ";
			$query = $query . "idiomaoutro_nome = "       	. $quote . $idiomaoutro_nome			. $quote . ", ";
			$query = $query . "word = "       				. $quote . $word	 			        . $quote . ", ";
			$query = $query . "excel = "       				. $quote . $excel	 					. $quote . ", ";
			$query = $query . "powerp = "       			. $quote . $powerp	 					. $quote . ", ";
			$query = $query . "windows = "       			. $quote . $windows 					. $quote . ", ";
			$query = $query . "internet = "       			. $quote . $internet 					. $quote . ", ";
			$query = $query . "info_outro_nome = "       	. $quote . $info_outro_nome	 			. $quote . ", ";
			$query = $query . "dp1 = "       				. $quote . $dp1	 						. $quote . ", ";
			$query = $query . "dp1_dados = "       			. $quote . $dp1_dados  		 			. $quote . ", ";
			$query = $query . "dp2 = "       				. $quote . $dp2	 						. $quote . ", ";
			$query = $query . "dp2_dados = "       			. $quote . $dp2_dados  		 			. $quote . ", ";
			$query = $query . "dp3 = "       				. $quote . $dp3	 						. $quote . ", ";
			$query = $query . "dp3_dados = "       			. $quote . $dp3_dados  		 			. $quote . ", ";
			$query = $query . "dp4 = "       				. $quote . $dp4	 						. $quote . ", ";
			$query = $query . "dp4_dados = "       			. $quote . $dp4_dados  		 			. $quote . ", ";
			$query = $query . "dp5 = "       				. $quote . $dp5	 						. $quote . ", ";
			$query = $query . "dp5_dados = "       			. $quote . $dp5_dados  		 			. $quote . ", ";
			$query = $query . "dp6 = "       				. $quote . $dp6	 						. $quote . ", ";
			$query = $query . "dp6_dados = "       			. $quote . $dp6_dados  		 			. $quote . ", ";
			$query = $query . "desejoTrabalharCidade = "    . $quote . $desejaTrabalharCidade		. $quote . ", ";
			$query = $query . "ramo = "       				. $quote . $ramo		 				. $quote . ", ";
			$query = $query . "nivel = "       				. $quote . $nivel		 				. $quote . ", ";
			$query = $query . "pretensao = "       			. $quote . $pretensao		 			. $quote . ", ";
			$query = $query . "minicurriculo = "       		. $quote . $minicurriculo	 			. $quote . ", ";
			$query = $query . "especializacoes = "      	. $quote . $especializacoes	 			. $quote . ", ";
			$query = $query . "conheceu = "       			. $quote . $conheceu		 			. $quote . ", ";
			if($senha!="")
				$query = $query .	"senha = " 				. $quote . $senha 	  					. $quote . ", ";
			$query = $query .	"senhaDica = " 				. $quote . $senhaDica 	  				. $quote . " ";
			$query = $query .	"WHERE codigo = " . $codigo;
			mysql_query($query)or die("Erro: ".$query);
		}
	}
?>
<html>
<head>
<title>[ SCS ] Cadastro de novo Currículo - <? echo date(Y); ?></title>
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
.td21 {background-color : #999999; }
.td31 {background-color : #b7b7b7; }
.texto21 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #AB494B; }
.titulo1 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; font-weight:bold; background-color: #AB494B }
</style>
</head>
<body bgcolor="#ffffff" marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" background="images/bg.jpg">
<? include ("topo.php"); ?>	
<table align="center" id="tabela2" cellpadding="0" cellspacing="0">
	<tr>
   		<td align="center" valign="middle">
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td align="center" class="titulo3"></td>
</tr>
<tr>
	<td height="2"></td>
</tr>
</table>
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
	<td align="center" class="titulo"><b>CURRÍCULO&nbsp;
	<? if($acao=="incluir"){ ?>
	INCLUIDO
	<? }else{ ?>
	EDITADO
	<? } ?>
	COM SUCESSO </b></td>
  </tr>
</table>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td align="center" class="titulo3"><br><a href="./vagas.php" class="titulo2">Vagas Clique aqui.</a></td>
  </tr>
</table>
<?
			}
		else
			{
?>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
	<td align="center" class="titulo"><b>INCLUS&Atilde;O&nbsp;DE CURRÍCULO&nbsp;PROFISSIONAL</b></td>
  </tr>
</table>



<form action="./curriculo.php" method="post" name="formulario" id="formulario">
<input name="enviar" value="1" type="hidden">
  <table align="center" border='0' width=685 cellpadding='4'>
<tr>
	<td align='center' class="titulo2">
			<p><strong>Para ter acesso as vagas cadastradas, Clique aqui.</strong></p>
			<p><strong>Por edite seu currículo. </strong><br>
					Para incluir o seu currículo em nosso banco de dados é necessário que complete os dados do formulário abaixo. </p></td>
</TR></table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
	<tr>
		<td align='left' class="titulo">DADOS PESSOAIS 
</td>
	</tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Nome:</td>
	<td class="td2"><input name="nome" type="text" class="input-a" value="<? echo $nome; ?>" size=40 maxlength=100>	</td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>E-mail:	</td>
	<td class="td2"><input name="email" type="text" class="input-a" value="<? echo $email; ?>" size=40 maxlength=255></td>
</tr>
<tr>
	<td width="26%" class="td3"><span class="texto2">*</span>Sexo:</td>
	<td class="td2"><select name="sexo" class="input-a">
<option value="M"<? if($sexo=="M"){echo" selected";} ?>>Masculino</option>
<option value="F"<? if($sexo=="F"){echo" selected";} ?>>Feminino</option>
</select></td>
</tr>
<tr>
  <td class="td3">&nbsp;&nbsp;Estado Civil: </td>
  <td class="td2"><select name="estadoCivil" class="input-a" >
      <option value="Solteiro"<? if($estadoCivil=="Solteiro"){echo" selected";} ?>>Solteiro</option>
      <option value="Casado"<? if($estadoCivil=="Casado"){echo" selected";} ?>>Casado</option>
      <option value="Vi&uacute;vo"<? if($estadoCivil=="Vi&uacute;vo"){echo" selected";} ?>>Vi&uacute;vo</option>
      <option value="Separado"<? if($estadoCivil=="Separado"){echo" selected";} ?>>Separado</option>
      <option value="Divorciado"<? if($estadoCivil=="Divorciado"){echo" selected";} ?>>Divorciado</option>
  </select></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Data de Nascimento:	</td>
	<td class="td2"><input name="dia" type="text" class="input-a" value="<? echo $dia; ?>" size=3 maxlength=2>
	/<input name="mes" type="text" class="input-a" value="<? echo $mes; ?>" size=3 maxlength=2>
	/<input name="ano" type="text" class="input-a" value="<? echo $ano; ?>" size=5 maxlength=4> 
		<span class="texto2">(dd / mm / AAAA)</span>
	</td>
</tr>
<tr>
  <td class="td3">&nbsp;&nbsp;Naturalidade: </td>
  <td class="td2"><input name="naturalidade" type="text" class="input-a" id="naturalidade" value="<?=$naturalidade?>" size=30 maxlength=255></td>
</tr>
<input type="hidden" name="situacao" value="#">	
<tr>
  <td class="td3">&nbsp;&nbsp;Estado:</td>
  <td class="td2">  		
		 <select name="estado" class="input-a" id="estado">
          <option>Selecione</option>
          <option value='1'<? if($estado=="1"){echo" selected";} ?>>Acre</option>
		  <option value='2'<? if($estado=="2"){echo" selected";} ?>>Alagoas</option>
		  <option value='3'<? if($estado=="3"){echo" selected";} ?>>Amapá</option>
		  <option value='4'<? if($estado=="4"){echo" selected";} ?>>Amazonas</option>
		  <option value='5'<? if($estado=="5"){echo" selected";} ?>>Bahia</option>
		  <option value='6'<? if($estado=="6"){echo" selected";} ?>>Ceará</option>
		  <option value='7'<? if($estado=="7"){echo" selected";} ?>>Distrito Federal</option>
		  <option value='8'<? if($estado=="8"){echo" selected";} ?>>Espírito Santo</option>
		  <option value='9'<? if($estado=="9"){echo" selected";} ?>>Goiás</option>
		  <option value='10'<? if($estado=="10"){echo" selected";} ?>>Maranhão</option>
		  <option value='11'<? if($estado=="11"){echo" selected";} ?>>Mato Grosso</option>
		  <option value='12'<? if($estado=="12"){echo" selected";} ?>>Mato Grosso do Sul</option>
		  <option value='13'<? if($estado=="13"){echo" selected";} ?>>Minas Gerais</option>
		  <option value='14'<? if($estado=="14"){echo" selected";} ?>>Pará</option>
		  <option value='15'<? if($estado=="15"){echo" selected";} ?>>Paraíba</option>
		  <option value='16'<? if($estado=="16"){echo" selected";} ?>>Paraná</option>
		  <option value='17'<? if($estado=="17"){echo" selected";} ?>>Piauí</option>
		  <option value='18'<? if($estado=="18"){echo" selected";} ?>>Rio Grande do Norte</option>
		  <option value='19'<? if($estado=="19"){echo" selected";} ?>>Rio Grande do Sul</option>
		  <option value='20'<? if($estado=="20"){echo" selected";} ?>>Rio de Janeiro</option>
		  <option value='21'<? if($estado=="21"){echo" selected";} ?>>Rondônia</option>
		  <option value='22'<? if($estado=="22"){echo" selected";} ?>>Roraima</option>
		  <option value='23'<? if($estado=="23"){echo" selected";} ?>>Santa Catarina</option>
		  <option value='24'<? if($estado=="24"){echo" selected";} ?>>Sergipe</option>
		  <option value='25'<? if($estado=="25"){echo" selected";} ?>>Tocantins</option>
		  <option value='26'<? if($estado=="26"){echo" selected";} ?>>São Paulo</option>
		  <option value='27'<? if($estado=="27"){echo" selected";} ?>>Pernambuco</option></select>
      Pa&iacute;s: 
      <select name="ed_pais" class="input-a" id="ed_pais">
        <option value="Brasil"<? if($pais=="Brasil"){echo" selected";} ?>>Brasil</option>
        <option value="Outro"<? if($pais=="Outro"){echo" selected";} ?>>Outro</option>
      </select></td>
</tr>
<tr>
		<td width="26%" class="td3"><span class="texto2">*</span>Situação Atual:</td>
		<td class="td2">
			<select name="situacao" class="input-a">
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
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">DOCUMENTOS</td>
  </tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>Cert. Militar N&ordm;:</td>
    <td class="td2"><input name="n_cert_militar" type="text" class="input-a" id="n_cert_militar" value="<?=$cert_militar?>" size=25 maxlength=50>
      Esp&eacute;cie: 
      <input name="cm_especie" type="text" class="input-a" id="cm_especie" value="<?=$cm_especie?>" size=8 maxlength=10>
      Categoria: 
      <input name="cm_categ" type="text" class="input-a" id="cm_categ" value="<?=$cm_categ?>" size=8 maxlength=10> 
      UF: 
      <input name="cm_uf" type="text" class="input-a" id="cm_uf" value="<?=$cm_uf?>" size=5 maxlength=10></td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>RG/RE:</td>
    <td class="td2"><input name="rg" type="text" class="input-a" id="rg" value="<?=$rg?>" size=12 maxlength=10>
      &Oacute;rg&atilde;o 
      Exp.: 
      <input name="rg_orgao" type="text" class="input-a" id="rg_orgao" value="<?=$rg_orgao?>" size=5 maxlength=10>
      Data Emiss&atilde;o:
      <input name="rg_emissao" type="text" class="input-a" id="rg_emissao" value="<?=$rg_emissao?>" size=12 maxlength=10> 
      UF:      
      <input name="rg_uf" type="text" class="input-a" id="rg_uf" value="<?=$rg_uf?>" size=5 maxlength=10></td>
  </tr>
  <tr>
    <td width="26%" class="td3">&nbsp;&nbsp;PIS:</td>
    <td class="td2"><input name="pis" type="text" class="input-a" id="pis" value="<?=$pis?>" size=30 maxlength=255>
Data Emiss&atilde;o:
<input name="pis_emissao" type="text" class="input-a" id="pis_emissao" value="<?=$pis_emissao?>" size=12 maxlength=10></td>
  </tr>
  <tr>
    <td class="td3">&nbsp;&nbsp;CPF:</td>
    <td class="td2"><input name="cpf" type="text" class="input-a" id="cpf" value="<? echo $cpf; ?>" size=30 maxlength=15>
      <span class="texto2">(Ex.:00000000099)</span></td>
  </tr>
  <tr>
    <td width="26%" class="td3">&nbsp;&nbsp;Tit. Eleitor:</td>
    <td class="td2"><input name="eleitor" type="text" class="input-a" id="eleitor" value="<?=$tituloeleitor?>" size=20 maxlength=30>
      Zona: 
  <input name="eleitor_zona" type="text" class="input-a" id="eleitor_zona" value="<?=$eleitor_zona?>" size=5 maxlength=10>
  Se&ccedil;&atilde;o: 
  <input name="eleitor_sessao" type="text" class="input-a" id="eleitor_sessao" value="<?=$eleitor_sessao?>" size=5 maxlength=10>
  Data Emiss&atilde;o: 
  <input name="eleitor_emissao" type="text" class="input-a" id="eleitor_emissao" value="<?=$eleitor_emissao?>" size=5 maxlength=10>
  UF:
  <input name="eleitor_uf" type="text" class="input-a" id="eleitor_uf" value="<?=$eleitor_uf?>" size=5 maxlength=10></td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>Cart. Habilita&ccedil;&atilde;o::</td>
    <td class="td2"><input name="cnh" type="text" class="input-a" id="cnh" value="<?=$cnh?>" size=10>
      Categoria: 	 
        <input name="cnh_categ" type="text" class="input-a" id="cnh_categ" value="<?=$cnh_categ?>" size=5 maxlength=10>
        Registro:			
        <input name="cnh_registro" type="text" class="input-a" id="cnh_registro" value="<?=$cnh_registro?>" size=5 maxlength=10>
        Data Emiss&atilde;o: 
        <input name="cnh_emissao" type="text" class="input-a" id="cnh_emissao" value="<?=$cnh_emissao?>" size=12 maxlength=12></td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>CTPS:</td>
    <td class="td2"><input name="ctps" type="text" class="input-a" id="ctps" value="<?=$ctps?>" size=10>
      S&eacute;rie: 
      <input name="ctps_serie" type="text" class="input-a" id="ctps_serie" value="<?=$ctps_serie?>" size=5 maxlength=10>
      Data Emiss&atilde;o: 
      <input name="ctps_emissao" type="text" class="input-a" id="ctps_emissao" value="<?=$ctps_emissao?>" size=12 maxlength=12>
      UF: 
      <input name="ctps_uf" type="text" class="input-a" id="ctps_uf" value="<?=$ctps_uf?>" size=5 maxlength=10></td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>&Oacute;rg&atilde;o Profissional N&ordm;:</td>
    <td class="td2"><input name="orgao_prof" type="text" class="input-a" id="orgao_prof" value="<?=$orgao_prof?>" size=10>
      Nome: 
        <input name="org_prof_nome" type="text" class="input-a" id="org_prof_nome" value="<?=$org_prof_nome?>" size=30>
        Sigla: 
        <input name="org_prof_sigla" type="text" class="input-a" id="org_prof_sigla" value="<?=$org_prof_sigla?>" size=5 maxlength=10>
        UF:
        <input name="org_prof_uf" type="text" class="input-a" id="org_prof_uf" value="<?=$org_prof_uf?>" size=5 maxlength=10></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">RA&Ccedil;A</td>
  </tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>Ra&ccedil;a:</td>
    <td class="td2">
      <select name="raca" class="input-a" id="raca" >
        <option value="1"<? if($raca=="1"){echo" selected";} ?>>Ind&iacute;gena</option>
        <option value="2"<? if($raca=="2"){echo" selected";} ?>>Branca</option>
        <option value="3"<? if($raca=="3"){echo" selected";} ?>>Negra</option>
        <option value="4"<? if($raca=="4"){echo" selected";} ?>>Amarela</option>
        <option value="5"<? if($raca=="5"){echo" selected";} ?>>Parda</option>
      </select></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">DADOS DE CONTATO 
</td>
</tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Telefone Residencial:</td>
	<td class="td2"> (<input name="telefoneDDD" type="text" class="input-a" value="<?=$telefoneDDD?>" size=3 maxlength=3>
	) -
		<input name="telefone" type="text" class="input-a" value="<? echo $telefone; ?>" size=11 maxlength=10>
		<span class="texto2"> Não utilize traços nem pontos.</span>	</td>
</tr>
<tr>
  <td class="td3">&nbsp;&nbsp;Telefone Recados:</td>
  <td class="td2">(<input name="recadoDDD" type="text" class="input-a" id="recadoDDD" value="<? echo $recadoDDD; ?>" size=3 maxlength=3>) -
<input name="fone_recado" type="text" class="input-a" id="fone_recado" value="<? echo $fone_recado; ?>" size=11 maxlength=10>
Falar com:
  <input name="recadopessoa" type="text" class="input-a" id="recadopessoa" value="<?=$recadopessoa?>" size=40 maxlength=100></td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Telefone Celular:</td>
	<td class="td2">(<input name="celularDDD" type="text" class="input-a" value="<? echo $celularDDD; ?>" size=3 maxlength=3>) 
	-	<input name="celular" type="text" class="input-a" value="<? echo $celular; ?>" size=11 maxlength=10>
	<span class="texto2"> Não utilize traços nem pontos.</span>
	</td>
</tr>
<tr>
	<td width="26%" class="td3">&nbsp;&nbsp;Home Page pessoal:<br>	  </td>
	<td class="td2">http://<input name="homePage" type="text" class="input-a" value="<? echo $homePage; ?>" size=50 maxlength=255></td>
</tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">ENDERE&Ccedil;O</td>
  </tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>Endere&ccedil;o:</td>
    <td class="td2"><input name="endereco" type="text" class="input-a" id="endereco" value="<? echo $endereco; ?>" size=60 maxlength=255></td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>N&uacute;mero:</td>
    <td class="td2"><input name="numero" type="text" class="input-a" id="numero" value="<? echo $numero; ?>" size=5 maxlength=10></td>
  </tr>
  <tr>
    <td width="26%" class="td3">&nbsp;&nbsp;Complemento:</td>
    <td class="td2"><input name="complemento" type="text" class="input-a" id="complemento" value="<? echo $complemento; ?>" size=30 maxlength=255></td>
  </tr>
  <tr>
    <td width="26%" class="td3">&nbsp;&nbsp;Bairro:</td>
    <td class="td2"><input name="bairro" type="text" class="input-a" id="bairro" value="<? echo $bairro; ?>" size=20 maxlength=255></td>
  </tr>
  <tr>
    <td class="td3"><span class="texto2">*</span>Cidade:</td>
    <td class="td2"><input name="cidade" type="text" class="input-a" id="cidade" value="<? echo $cidade; ?>" size=20 maxlength=255></td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>CEP:</td>
    <td class="td2"><input name="cep" type="text" class="input-a" id="cep" value="<? echo $cep; ?>" size=12 maxlength=10>
      <span class="texto2">Ex.:86.702-300</span>      </td>
  </tr>
  <tr>
    <td width="26%" class="td3"><span class="texto2">*</span>Estado:</td>
    <td class="td2"><select name="estado_res" class="input-a" id="estado_res">
			<option>Selecione</option>
			<option value='1'<? if($estado_res=="1"){echo" selected";} ?>>Acre</option>
			<option value='2'<? if($estado_res=="2"){echo" selected";} ?>>Alagoas</option>
			<option value='3'<? if($estado_res=="3"){echo" selected";} ?>>Amap&aacute;</option>
			<option value='4'<? if($estado_res=="4"){echo" selected";} ?>>Amazonas</option>
			<option value='5'<? if($estado_res=="5"){echo" selected";} ?>>Bahia</option>
			<option value='6'<? if($estado_res=="6"){echo" selected";} ?>>Cear&aacute;</option>
			<option value='7'<? if($estado_res=="7"){echo" selected";} ?>>Distrito Federal</option>
			<option value='8'<? if($estado_res=="8"){echo" selected";} ?>>Esp&iacute;rito Santo</option>
			<option value='9'<? if($estado_res=="9"){echo" selected";} ?>>Goi&aacute;s</option>
			<option value='10'<? if($estado_res=="10"){echo" selected";} ?>>Maranh&atilde;o</option>
			<option value='11'<? if($estado_res=="11"){echo" selected";} ?>>Mato Grosso</option>
			<option value='12'<? if($estado_res=="12"){echo" selected";} ?>>Mato Grosso do Sul</option>
			<option value='13'<? if($estado_res=="13"){echo" selected";} ?>>Minas Gerais</option>
			<option value='14'<? if($estado_res=="14"){echo" selected";} ?>>Par&aacute;</option>
			<option value='15'<? if($estado_res=="15"){echo" selected";} ?>>Para&iacute;ba</option>
			<option value='16'<? if($estado_res=="16"){echo" selected";} ?>>Paran&aacute;</option>
			<option value='17'<? if($estado_res=="17"){echo" selected";} ?>>Piau&iacute;</option>
			<option value='18'<? if($estado_res=="18"){echo" selected";} ?>>Rio Grande do Norte</option>
			<option value='19'<? if($estado_res=="19"){echo" selected";} ?>>Rio Grande do Sul</option>
			<option value='20'<? if($estado_res=="20"){echo" selected";} ?>>Rio de Janeiro</option>
			<option value='21'<? if($estado_res=="21"){echo" selected";} ?>>Rond&ocirc;nia</option>
			<option value='22'<? if($estado_res=="22"){echo" selected";} ?>>Roraima</option>
			<option value='23'<? if($estado_res=="23"){echo" selected";} ?>>Santa Catarina</option>
			<option value='24'<? if($estado_res=="24"){echo" selected";} ?>>Sergipe</option>
			<option value='25'<? if($estado_res=="25"){echo" selected";} ?>>Tocantins</option>
			<option value='26'<? if($estado_res=="26"){echo" selected";} ?>>S&atilde;o Paulo</option>
			<option value='27'<? if($estado_res=="27"){echo" selected";} ?>>Pernambuco</option>
    		</select></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td class="titulo" colspan=5 align=left>EXPERI&Ecirc;NCIA PROFISSIONA<span style="color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">L (Inicie pelo &uacute;ltimo ou atual) </span></td>
  </tr>
  <tr>
    <td width=26% class="td3" valign=middle>&nbsp;&nbsp;Data de Admiss&atilde;o (mm/aaaa) </td>
    <td class="td2">
      <select name="experienciaDataEntradaMes" class="input-a">
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
      </select>
      /
      <select name="experienciaDataEntradaAno" class="input-a" >
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
		<option value="2007"<? if($experienciaDataEntradaAno=="2007"){echo" selected";} ?>>2007</option>
      </select>
    </td>
    <td class="td2" valign=middle> &nbsp;&nbsp;Data de Demiss&atilde;o (mm/aaaa) </td>
    <td class="td2">
      <select name="experienciaDataSaidaMes" class="input-a">
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
      </select>
      /
      <select name="experienciaDataSaidaAno" class="input-a" >
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
    <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Nome da empresa: </td>
    <td colspan=3 class="td2">
      <input name="experienciaEmpresa" type="text" class="input-a" value="<? echo $experienciaEmpresa; ?>" size=40 maxlength=100>
    </td>
  </tr>
  <tr>
    <td class="td3" valign=middle><span class="texto2">*</span>Munic&iacute;pio: </td>
    <td colspan=3 class="td2"><input name="experienciaCidade" type="text" class="input-a" id="experienciaCidade" value="<? echo $experienciaEmpresa; ?>" size=30 maxlength=100>
UF:      
  
  <input name="exp_uf" type="text" class="input-a" id="exp_uf" value="<? echo $exp_uf; ?>" size=4 maxlength=4>
Pa&iacute;s:
<select name="exp_pais" class="input-a" id="exp_pais">
  <option value="Brasil">Brasil</option>
  <option value="Outro">Outro</option>
</select></td>
  <tr>
    <td width=26% class="td3" valign=middle> <span class="texto2">*</span>&Uacute;ltimo Cargo na Empresa: </td>
    <td colspan=3 class="td2">
      <input name="experienciaCargo" type="text" class="input-a" value="<? echo $experienciaCargo; ?>" size=30 maxlength=255> 
      &Uacute;ltimo Sal&aacute;rio: R$
      <input name="experienciasalario" type="text" class="input-a" id="experienciasalario" value="<? echo $experienciaCargo; ?>" size=15 maxlength=20>
      <span class="texto2">Somente n&bull; Ex: 1000 </span></td>
  <tr>
    <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Atribui&ccedil;&otilde;es / Realiza&ccedil;&otilde;es no cargo: </td>
    <td colspan=3 class="td2">
      <textarea name="experienciaDescricao" cols=60 rows=10 wrap="virtual" class="input-a"><? echo $experienciaDescricao; ?></textarea>
    </td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">ACESSIBILIDADE</td>
  </tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td width="26%" class="td3">Possui algum tipo de defici&ecirc;ncia F&iacute;sica?:</td>
    <td class="td2"> <select name="acessi" class="input-a" id="acessi" >
      <option>Selecione</option>
      <option value="Sim"<? if($acessi=="Sim"){echo" selected";} ?>>Sim</option>
      <option value="N&atilde;o"<? if($acessi=="Não"){echo" selected";} ?>>N&atilde;o</option>
        </select></td>
  </tr>
  <tr>
    <td class="td3">&nbsp;&nbsp;Se sim, qual? :</td>
    <td class="td2"><input name="acessi_tipo" type="text" class="input-a" id="acessi_tipo" value="<? echo $acessi_tipo; ?>" size=40 maxlength=100></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td class="titulo" colspan=5 align=left>FORMA&Ccedil;&Atilde;O ACAD&Ecirc;MICA</td>
  </tr>
  <tr>
    <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Grau de Forma&ccedil;&atilde;o : </td>
    <td class="td2">
      <select name="formacaoGrau" class="input-a">
        <option value="0"<? if($formacaoGrau=="0"){echo" selected";} ?>></option>
        <option value="1"<? if($formacaoGrau=="1"){echo" selected";} ?>>Gradua&ccedil;&atilde;o</option>
        <option value="2"<? if($formacaoGrau=="2"){echo" selected";} ?>>P&oacute;s-Gradua&ccedil;&atilde;o</option>
        <option value="3"<? if($formacaoGrau=="3"){echo" selected";} ?>>MBA</option>
        <option value="4"<? if($formacaoGrau=="4"){echo" selected";} ?>>Mestrado</option>
        <option value="5"<? if($formacaoGrau=="5"){echo" selected";} ?>>Doutorado</option>
        <option value="6"<? if($formacaoGrau=="6"){echo" selected";} ?>>P&oacute;s Doutorado</option>
        <option value="7"<? if($formacaoGrau=="7"){echo" selected";} ?>>Livre Doc&ecirc;ncia</option>
        <option value="8"<? if($formacaoGrau=="8"){echo" selected";} ?>>T&eacute;cnico</option>
        <option value="9"<? if($formacaoGrau=="9"){echo" selected";} ?>>Ensino M&eacute;dio</option>
		<option value="10"<? if($formacaoGrau=="10"){echo" selected";} ?>>Ensino Prim&aacute;rio</option>
      </select>
    </td>
    <td width=26% class="td2" valign=middle> <span class="texto2">*</span> Curso </td>
    <td class="td2">
      <input name="formacaoCurso" type="text" class="input-a" value="<? echo $formacaoCurso; ?>" size=30 maxlength=255>
    </td>
  </tr>
  <tr>
    <td width="26%" class="td3" valign="middle">&nbsp;&nbsp;Data de in&iacute;cio (mm/aaaa):</td>
    <td class="td2">
      <select name="formacaoDataInicioMes" class="input-a">
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
      </select>
      /
      <select name="formacaoDataInicioAno" class="input-a">
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
      </select>
    </td>
    <td width=26% class="td2" valign=middle> Data de t&eacute;rmino ou prevista para conclus&atilde;o (mm/aaaa) </td>
    <td class="td2">
      <select name="formacaoDataSaidaMes" class="input-a">
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
      </select>
      /
      <select name="formacaoDataSaidaAno" class="input-a">
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
      </select>
    </td>
  </tr>
  <tr>
    <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Ano Atual: </td>
    <td colspan=3 class="td2">
      <select name="formacaoAno" class="input-a">
        <option value="-1"<? if($formacaoAno=="-1"){echo" selected";} ?>></option>
        <option value="1"<? if($formacaoAno=="1"){echo" selected";} ?>>1o Ano</option>
        <option value="2"<? if($formacaoAno=="2"){echo" selected";} ?>>2o Ano</option>
        <option value="3"<? if($formacaoAno=="3"){echo" selected";} ?>>3o Ano</option>
        <option value="4"<? if($formacaoAno=="4"){echo" selected";} ?>>4o Ano</option>
        <option value="5"<? if($formacaoAno=="5"){echo" selected";} ?>>5o Ano</option>
        <option value="6"<? if($formacaoAno=="6"){echo" selected";} ?>>6o Ano</option>
        <option value="0"<? if($formacaoAno=="0"){echo" selected";} ?>>J&aacute; Formado</option>
      </select>
    </td>
  </tr>
  <tr>
    <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Nome da institui&ccedil;&atilde;o: </td>
    <td colspan=3 class="td2">
      <input name="formacaoInstituicao" type="text" class="input-a" value="<? echo $formacaoInstituicao; ?>" size=50 maxlength=255>
    </td>
  </tr>
  <tr>
    <td class="td3" valign=middle>&nbsp;&nbsp;Munic&iacute;pio: </td>
    <td colspan=3 class="td2"><input name="formacao_municipio" type="text" class="input-a" id="rg_emissao3" value="<?=$formacao_municipio?>" size=40>
UF:
  <input name="formacao_uf" type="text" class="input-a" id="formacao_uf" value="<?=$formacao_uf?>" size=5 maxlength=10></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">IDIOMAS&nbsp; </td>
  </tr>
</table>
<table width="685" border="0" cellspacing="1" cellpadding="4" align="center" class="texto">
  <tr>
    <td colspan="4" class="td1"><strong>Idiomas</strong></td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input type="checkbox" name="alemao1" value="1"<? if($alemao!=""){echo" checked";} ?>>
      Alem&atilde;o</td>
    <td width="24%" class="td2"><input type="radio" name="alemao" value="1"<? if($alemao=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="alemao" value="2"<? if($alemao=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="alemao" value="3"<? if($alemao=="3"){echo" checked";} ?>>
      Fluente</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input type="checkbox" name="espanhol1" value="1"<? if($espanhol!=""){echo" checked";} ?>>
      Espanhol</td>
    <td width="24%" class="td2"><input type="radio" name="espanhol" value="1"<? if($espanhol=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="espanhol" value="2"<? if($espanhol=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="espanhol" value="3"<? if($espanhol=="3"){echo" checked";} ?>>
      Fluente</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input type="checkbox" name="frances1" value="1"<? if($frances!=""){echo" checked";} ?>>
      Franc&ecirc;s</td>
    <td width="24%" class="td2"><input type="radio" name="frances" value="1"<? if($frances=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="frances" value="2"<? if($frances=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="frances" value="3"<? if($frances=="3"){echo" checked";} ?>>
      Fluente</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input type="checkbox" name="ingles1" value="1"<? if($ingles!=""){echo" checked";} ?>>
      Ingl&ecirc;s</td>
    <td width="24%" class="td2"><input type="radio" name="ingles" value="1"<? if($ingles=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="ingles" value="2"<? if($ingles=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="ingles" value="3"<? if($ingles=="3"){echo" checked";} ?>>
      Fluente</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input type="checkbox" name="italiano1" value="1"<? if($italiano!=""){echo" checked";} ?>>
      Italiano</td>
    <td width="24%" class="td2"><input type="radio" name="italiano" value="1"<? if($italiano=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="italiano" value="2"<? if($italiano=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="italiano" value="3"<? if($italiano=="3"){echo" checked";} ?>>
      Fluente</td>
  </tr>
  <tr>
    <td class="td3"><input name="idioma_outro" type="checkbox" id="idioma_outro" value="1"<? if($italiano!=""){echo" checked";} ?>>
Outro, especifique: </td>
    <td colspan="3" class="td2"><input name="idiomaoutro_nome" type="text" class="input-a" id="idiomaoutro_nome" value="<?=$idiomaoutro_nome?>" size=40></td>
    </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">INFORM&Aacute;TICA&nbsp; </td>
  </tr>
</table>
<table width="685" border="0" cellspacing="1" cellpadding="4" align="center" class="texto">
  <tr>
    <td colspan="4" class="td1"><strong>Conhecimentos em: </strong></td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input name="word1" type="checkbox" id="word1" value="1"<? if($alemao!=""){echo" checked";} ?>>
      Word</td>
    <td width="24%" class="td2"><input type="radio" name="word" value="1"<? if($alemao=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="word" value="2"<? if($alemao=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="word" value="3"<? if($alemao=="3"){echo" checked";} ?>>
      Avan&ccedil;ado</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input name="excel1" type="checkbox" id="excel1" value="1"<? if($espanhol!=""){echo" checked";} ?>>
      Excel</td>
    <td width="24%" class="td2"><input type="radio" name="excel" value="1"<? if($espanhol=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="excel" value="2"<? if($espanhol=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="excel" value="3"<? if($espanhol=="3"){echo" checked";} ?>>
      Avan&ccedil;ado</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input name="powerp1" type="checkbox" id="powerp1" value="1"<? if($frances!=""){echo" checked";} ?>>
      Power Point</td>
    <td width="24%" class="td2"><input type="radio" name="powerp" value="1"<? if($frances=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="powerp" value="2"<? if($frances=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="powerp" value="3"<? if($frances=="3"){echo" checked";} ?>>
      Avan&ccedil;ado</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input name="windows1" type="checkbox" id="windows1" value="1"<? if($ingles!=""){echo" checked";} ?>>
      Windows</td>
    <td width="24%" class="td2"><input type="radio" name="windows" value="1"<? if($ingles=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="windows" value="2"<? if($ingles=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="windows" value="3"<? if($ingles=="3"){echo" checked";} ?>>
      Avan&ccedil;ado</td>
  </tr>
  <tr>
    <td width="28%" class="td3"><input name="internet1" type="checkbox" id="internet1" value="1"<? if($italiano!=""){echo" checked";} ?>>
      Internet</td>
    <td width="24%" class="td2"><input type="radio" name="internet" value="1"<? if($italiano=="1"){echo" checked";} ?>>
      B&aacute;sico</td>
    <td width="24%" class="td2"><input type="radio" name="internet" value="2"<? if($italiano=="2"){echo" checked";} ?>>
      Intermedi&aacute;rio</td>
    <td width="24%" class="td2"><input type="radio" name="internet" value="3"<? if($italiano=="3"){echo" checked";} ?>>
      Avan&ccedil;ado</td>
  </tr>
  <tr>
    <td class="td3"><input name="info_outro" type="checkbox" id="info_outro" value="1"<? if($italiano!=""){echo" checked";} ?>>
      Outro, especifique: </td>
    <td colspan="3" class="td2"><input name="info_outro_nome" type="text" class="input-a" id="info_outro_nome" value="<?=$info_outro_nome?>" size=40></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">DEPENDENTES&nbsp; </td>
  </tr>
</table>
<table width="685" border="0" cellspacing="1" cellpadding="4" align="center" class="texto">
  <tr>
    <td colspan="2" class="td1"><strong>Possui dependentes? </strong><span class="texto2">Digite o nome, e depois os dados separados por v&iacute;rgula na caixa ao lado </span></td>
  </tr>
  <tr>
    <td width="22%" class="td1">Nome</td>
    <td class="td1">CPF, Parentesco, Sexo, Nascimento, Nome da M&atilde;e </td>
    </tr>
  <tr>
    <td width="22%" class="td2"><input name="dp1" type="text" class="input-a" id="dp1" size="25"></td>
    <td class="td2"><input name="dp1_dados" type="text" class="input-a" id="dp1_dados" size="90">      </td>
    </tr>
  <tr>
    <td class="td2"><input name="dp2" type="text" class="input-a" id="dp2" size="25"></td>
    <td class="td2"><input name="dp2_dados" type="text" class="input-a" id="dp2_dados" size="90"></td>
    </tr>
  <tr>
    <td class="td2"><input name="dp3" type="text" class="input-a" id="dp3" size="25"></td>
    <td class="td2"><input name="dp3_dados" type="text" class="input-a" id="dp3_dados" size="90"></td>
    </tr>
  <tr>
    <td class="td2"><input name="dp4" type="text" class="input-a" id="dp4" size="25"></td>
    <td class="td2"><input name="dp4_dados" type="text" class="input-a" id="dp4_dados" size="90"></td>
    </tr>
  <tr>
    <td class="td2"><input name="dp5" type="text" class="input-a" id="dp5" size="25"></td>
    <td class="td2"><input name="dp5_dados" type="text" class="input-a" id="dp5_dados" size="90"></td>
    </tr>
  <tr>
    <td class="td2"><input name="dp6" type="text" class="input-a" id="dp6" size="25"></td>
    <td class="td2"><input name="dp6_dados" type="text" class="input-a" id="dp6_dados" size="90"></td>
    </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">CONFIGURA&Ccedil;&Atilde;O DO AVISO DE VAGAS</td>
  </tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td width=26% valign=middle class="td1"> <span class="texto21">*</span>Cidades em que voc&ecirc; deseja ou pode trabalhar:<br>    </td>
    <td class="td2"><b>Aten&ccedil;&atilde;o:</b> - Digite as cidades separadas por v&iacute;rgula - N&atilde;o utilize abrevia&ccedil;&otilde;es. &Eacute; indiferente o uso de acentua&ccedil;&atilde;o ou letras mai&uacute;sculas.<br>
        <b>Exemplo:</b> S&atilde;o Paulo, Rio de Janeiro, Belo Horizonte<br>
        <textarea name="desejaTrabalharCidade" cols=60 rows=5 wrap="virtual" class="input-a"><? echo $desejaTrabalharCidade; ?></textarea>    </td>
  </tr>
  <tr>
    <td width="26%" class="td1" valign="middle"> <span class="texto21">*</span>Ramo de atividade da empresa em que deseja trabalhar: </td>
    <td class="td2"> Escolha quantas op&ccedil;&otilde;es desejar, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de um op&ccedil;&atilde;o.<br>
        <select name="ramo[]" size=10 multiple class="input-a">
          <option value="30">Telemarketing</option>
          <option value="3">Administrativa</option>
          <option value="35">Ind&uacute;stria</option>
          <option value="11">Servi&ccedil;os</option>
          <option value="33">Acad&ecirc;mica</option>
          <option value="37">Telefonia</option>
          <option value="19">&Oacute;leo e G&aacute;s</option>
          <option value="36">Sa&uacute;de</option>
          <option value="14">Inform&aacute;tica</option>          
                </select>    </td>
  </tr>
  <tr>
    <td width="26%" class="td1" valign="middle"> <span class="texto21">*</span>N&iacute;vel Hier&aacute;rquico: </td>
    <td class="td2">Escolha at&eacute; 2 op&ccedil;&otilde;es, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de um n&iacute;vel.<br>
        <select name="nivel[]" size=6 multiple class="input-a">
          <option value="1"<? if(in_array("1", $nivel, TRUE)){echo" selected";} ?>>Diretoria</option>
          <option value="2"<? if(in_array("2", $nivel, TRUE)){echo" selected";} ?>>Ger&ecirc;ncia</option>
          <option value="6"<? if(in_array("6", $nivel, TRUE)){echo" selected";} ?>>Supervis&atilde;o / Chefia</option>
          <option value="4"<? if(in_array("4", $nivel, TRUE)){echo" selected";} ?>>Profissional Especializado - com curso superior</option>
          <option value="5"<? if(in_array("5", $nivel, TRUE)){echo" selected";} ?>>Ensino M&eacute;dio / Profissionalizante</option>
          <option value="3"<? if(in_array("3", $nivel, TRUE)){echo" selected";} ?>>Outros</option>
        </select>    </td>
  </tr>
  <tr>
    <td width="26%" class="td1" valign="middle">&nbsp;&nbsp;Pretens&atilde;o Salarial:</td>
    <td class="td2">
      <select name="pretensao" class="input-a">
        <option value="0"<? if($pretensao=="0"){echo" selected";} ?>>A Combinar</option>
        <option value="1"<? if($pretensao=="1"){echo" selected";} ?>>At&eacute; R$ 500,00</option>
        <option value="2"<? if($pretensao=="2"){echo" selected";} ?>>At&eacute; R$ 1.000,00</option>
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
      </select>    </td>
  </tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">
		 MINICURRÍCULO 
	</td>
</tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
<tr>
	<td width="26%" class="td3" valign="middle">
		<span class="texto2">*</span>Minicurrículo
		<br>
		- O minicurrículo é um resumo do seu currículo e é a primeira informação visualizada pela empresa na busca de currículos. 
		Por isso, seja claro e objetivo:</td>
	<td class="td2">
	<b>Atenção:</b> o tamanho máximo de um minicurrículo é de 500 caracteres
	<br>
	<textarea name="minicurriculo" cols=70 rows=5 wrap="virtual" class="input-a" onBlur="document.getElementById('counter0422869ca588').innerHTML=this.value.length;" onKeyUp="document.getElementById('counter0422869ca588').innerHTML=this.value.length;"><? echo $minicurriculo; ?></textarea>
	<SPAN class=peq style="COLOR: gray"><SPAN class=peq id=counter0422869ca588>0</SPAN>/500</SPAN></td>
</tr>
</TABLE>
<br>
<table align="center" border="0" width="685" cellpadding="4">
<tr>
	<td colspan=2 align="left" class="titulo">
		 OUTRAS INFORMAÇÕES 
	</td>
</tr>
</table>
<table align="center" border='0' width=685 cellpadding='4'class="texto">
<tr>
	<td width=26% class="td3" valign="middle">
	Cursos/Especializações
	<br>
	Informe cursos extra-curriculares e outras especializações:</td>
	<td class="td2">
	<textarea name="especializacoes" cols=70 rows=5 wrap="virtual" class="input-a"><? echo $especializacoes; ?></textarea>
</td>
</tr>
</table>
<br>
<table align="center" border='0' width=685 cellpadding='4'>
  <tr>
    <td colspan=2 align='left' class="titulo">Conhecer Consultoria</td>
  </tr>
</table>
<table align="center" border='0' width=685 cellpadding='4' class="texto">
  <tr>
    <td width="26%" class="td3"><span class="texto2"> </span>Como teve conhecimento da Conhecer Consultoria:</td>
    <td class="td2">
      <select name="conheceu" class="input-a" id="conheceu" >
        <option value="Jornal">Jornal</option>
        <option value="R&aacute;dio">R&aacute;dio</option>
        <option value="Televis&atilde;o">Televis&atilde;o</option>
        <option value="Escola">Escola</option>
        <option value="Amigos">Amigos</option>
        <option value="Internet">Internet</option>
        <option value="Outros">Outros</option>
      </select></td>
  </tr>
</table>
<br>
<table align="center" border='0' width=600 cellpadding='4'>
<tr>
	<td colspan=2 align='left' class="titulo">
	LOGIN E SENHA
	</td>
</tr>
<tr>
	<td colspan=2 align='left' class="titulo2">
	- Escolha uma senha	 para ter acesso às  vagas de emprego, atualizar seu curr&iacute;culo, etc. </td>
</tr>
<tr><td class=line></td></tr>
</table>
<table align="center" border='0' width=600 cellpadding='4' class="texto">
<tr>
	<td width="31%" class="td3">
	<span class="texto2">*</span>Senha:
	</td>
	<td width="69%" class="td2">
	<input name="senha" type="password" class="input-a" value="">
	</td>
</tr>
<tr>
	<td width="31%" class="td3">
	<span class="texto2">*</span>Confirmação da senha:	</td>
	<td class="td2">
	<input name="senha2" type="password" class="input-a" value="">
	</td>
</tr>
<tr>
	<td width="31%" class="td3">&nbsp;&nbsp;Dica para lembrar a senha:</td>
	<td class="td2">
	<input name="senhaDica" type="text" class="input-a" value="<? echo $senhaDica; ?>">
	</td>
</tr>
</table>
<br>
<center><input type="submit" name="Submit" value="CADASTRAR CURR&Iacute;CULO" class="botao">
</center>
</form>
<?
			}
	}
?>

		</td>
	</tr>
</table>
<? include ("rodape.php"); ?>	
</body>
</html>