<?php
//error_reporting(E_ALL);
include ("admin/config.php"); 
if ($_GET["acao"] == "validar"){?>
<script type="text/javascript" language="javascript" src="js/jquery.maskedinput.js"></script>
	<form id="formulario" action="javascript:enviarFormulario();" method="post">
        <h3>Para come&ccedil;ar, por favor, digite seu CPF:</h3>
        <input type="text" id="txtCPF" name="txtCPF" size="15" class="campos-texto">
        <input type="submit" id="enviar" value="Ok" class="botao">
        
        <div id="status" class="erro">
            <!--if(erro), aparece uma mensagem aqui.-->
        </div><!-- erro -->
    </form>
	<script type="text/javascript" language="javascript">

        // Adiciona máscara no campo cpf
        $("#txtCPF").mask("999.999.999-99").keydown(function()
        {
            $("#status").html("");    
        });

		
        function enviarFormulario()
        {
            // Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
            var cpf = $("#txtCPF").val().replace(/\D/g, "");  
            // Exibe mensagem de carregamento
            $("#status").html("<img src='images/ajax_load.gif' alt='Enviando' />");
            // Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
            $.post('verificaCPF.php', {cpf: cpf}, function( resposta )
            {
                // Quando terminada a requisição
                // Exibe a div status
                $("#status").slideDown();
                // Se a resposta é um erro
                if ( resposta.msg != "ok" )
                {   
                    // Exibe o erro na div
                    $("#status").html( resposta.msg );
					if (resposta.msg == "login"){
						var msg  = "<p>Formul&aacute;rio de login</p>";
							msg += "<?php echo $_SESSION["nomeCandidato"]?> seu CPF j&aacute; se encontra em nosso banco de dados, por favor, informe sua senha para entrar no sistema e atualizar seu curr&iacute;culo!<br>";
							
						$("#status").html( msg );
						
						self.location.assign("index.php?p=3&e=1");
					}
                }
                // Se resposta for false, ou seja, não ocorreu nenhum erro
                else
                {
					var msg  = "<p>Redirecionando para o formul&aacute;rio...</p>";
						msg += "<img src='imagens/ajax_load.gif' />";

					// Exibe mensagem de sucesso
					$("#status").html( msg );
					$("#cpf").val("");
					$("#cpf").attr("disabled", "disabled");

					self.location.assign("index.php?p=1&acao=form");
                }
            });
        }

    </script>
<?php
}

if ($_POST["enviar"] == 1 )
	{				
		$quote = "'";		
		
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
				
		
		if($_POST["enviarAcao"] =="incluir")
		{
			
			$ramo	= explode(";", $ramo);
			$area	= explode(";", $area);
			$nivel	= explode(";", $nivel);
		
			$query = "INSERT INTO curriculo ";
			$query = $query . "(nome,email,sexo,estadoCivil,dia,mes,ano,naturalidade,nacionalidade,situacao,";
			$query = $query . "rg,rg_orgao,rg_emissao,rg_uf,cpf,cnh,cnh_categ,cnh_registro,cnh_emissao,ctps,ctps_serie,ctps_emissao,ctps_uf,orgao_prof,org_prof_nome,org_prof_sigla,org_prof_uf,";
			$query = $query . "telefoneDDD,telefone,recadoDDD,fone_recado,recadopessoa,celularDDD,celular,homePage,";
			$query = $query . "endereco,numero,complemento,bairro,cidade,cep,estado_res,";
			$query = $query . "experienciaDataEntradaMes,experienciaDataEntradaAno,experienciaDataSaidaMes,experienciaDataSaidaAno,experienciaEmpresa,exp_empresa_ramo,experienciaCidade,exp_uf,exp_pais,experienciaCargo,experienciasalario,experienciaDescricao,";
			$query = $query . "acessi,acessi_tipo,formacaoGrau,formacaoCurso,";
			$query = $query . "alemao,espanhol,frances,ingles,italiano,idiomaoutro_nome,word,excel,powerp,windows,internet,info_outro_nome,";
			$query = $query . "dp1,dp1_dados,dp2,dp2_dados,dp3,dp3_dados,dp4,dp4_dados,dp5,dp5_dados,dp6,dp6_dados,";
			$query = $query . "cargo_pretendido,desejoTrabalharCidade,ramo,nivel,pretensao,minicurriculo,especializacoes,conheceu,senha,senhaDica) ";
			$query = $query . "VALUES (";
			$query = $query . $quote . $nome 						. $quote . ", ";
			$query = $query . $quote . $email	 					. $quote . ", ";
			$query = $query . $quote . $sexo 	 					. $quote . ", ";
			$query = $query . $quote . $estadoCivil	 				. $quote . ", ";
			$query = $query . $quote . $dia  						. $quote . ", ";
			$query = $query . $quote . $mes		 					. $quote . ", ";
			$query = $query . $quote . $ano		 					. $quote . ", ";
			$query = $query . $quote . $naturalidade				. $quote . ", ";
			$query = $query . $quote . $nacionalidade				. $quote . ", ";			
			$query = $query . $quote . $situacao					. $quote . ", ";
			$query = $query . $quote . $rg							. $quote . ", ";
			$query = $query . $quote . $rg_orgao					. $quote . ", ";
			$query = $query . $quote . $rg_emissao					. $quote . ", ";
			$query = $query . $quote . $rg_uf					    . $quote . ", ";
			$query = $query . $quote . $cpf							. $quote . ", ";
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
			$query = $query . $quote . $exp_empresa_ramo		 	. $quote . ", ";
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
			$query = $query . $quote . $cargo_pretendido			. $quote . ", ";
			$query = $query . $quote . $desejaTrabalharCidade		. $quote . ", ";
			$query = $query . $quote . $ramo		 				. $quote . ", ";
			$query = $query . $quote . $nivel		 				. $quote . ", ";
			$query = $query . $quote . $pretensao		 			. $quote . ", ";
			$query = $query . $quote . $minicurriculo	 			. $quote . ", ";
			$query = $query . $quote . $especializacoes	 			. $quote . ", ";
			$query = $query . $quote . $conheceu		 			. $quote . ", ";
			$query = $query . $quote . $senha		 				. $quote . ", ";
			$query = $query . $quote . $senhaDica		 			. $quote . ")";
			
			$sqlInsere = mysql_query($query);
			
			if ($sqlInsere){
				echo "<img src=\"images/msg_ok.jpg\" width=\"211\" height=\"175\" /><br />
						<h2>Cadastro realizado com sucesso!</h2>
						Agora voc&ecirc; pode consultar e se candidatar &agrave;s vagas em aberto! <a href=\"#\">Clique aqui</a>.";
			} else {
				echo "<h2>Lamentamos</h2><p>Houve um erro e n&atilde;o foi poss&iacute;vel finalizar seu cadastro, por favor, tente mais tarde!</p>";
			}
		}

	if($_POST["enviarAcao"] == "editar")
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
			$query = $query . "nacionalidade = "       		. $quote . $nacionalidade				. $quote . ", ";			
			$query = $query . "situacao = "       			. $quote . $situacao					. $quote . ", ";
			$query = $query . "rg = "       				. $quote . $rg							. $quote . ", ";
			$query = $query . "rg_orgao = "       			. $quote . $rg_orgao					. $quote . ", ";
			$query = $query . "rg_emissao = "       		. $quote . $rg_emissao					. $quote . ", ";
			$query = $query . "rg_uf = "       				. $quote . $rg_uf					    . $quote . ", ";
			$query = $query . "cpf = "       				. $quote . $cpf							. $quote . ", ";
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
			$query = $query . "exp_empresa_ramo = "       	. $quote . $exp_empresa_ramo		 	. $quote . ", ";
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
			$query = $query . "cargo_pretendido = "       	. $quote . $cargo_pretendido 			. $quote . ", ";
			$query = $query . "desejoTrabalharCidade = "    . $quote . $desejaTrabalharCidade		. $quote . ", ";
			$query = $query . "ramo = "       				. $quote . $ramo		 				. $quote . ", ";
			$query = $query . "nivel = "       				. $quote . $nivel		 				. $quote . ", ";
			$query = $query . "pretensao = "       			. $quote . $pretensao		 			. $quote . ", ";
			$query = $query . "minicurriculo = "       		. $quote . $minicurriculo	 			. $quote . ", ";
			$query = $query . "especializacoes = "      	. $quote . $especializacoes	 			. $quote . ", ";
			$query = $query . "conheceu = "       			. $quote . $conheceu		 			. $quote . ", ";
			if($senha!="")
				$query = $query .	"senha = " 						. $quote . $senha 	  					. $quote . ", ";
			$query = $query .	"senhaDica = " 					. $quote . $senhaDica 	  				. $quote . " ";
			$query = $query .	"WHERE codigo = " . $codigo;
			
			if ($sqlInsere){
				echo "<img src=\"images/msg_ok.jpg\" width=\"211\" height=\"175\" /><br />
						<h2>Cadastro editado com sucesso!</h2>
						Para consultar e se candidatar &agrave;s vagas em aberto, <a href=\"#\">clique aqui</a>.";
			} else {
				echo "<h2>Lamentamos</h2><p>Houve um erro e n&atilde;o foi poss&iacute;vel atualizar seu cadastro, por favor, tente mais tarde!</p>";
			}
		}
	}
if ($_GET["acao"] == "form"){
	if (isset($_SESSION["cpfCandidato"]) && $_SESSION["cpfCandidato"] != NULL){		
		$regs= mysql_query("SELECT * FROM curriculo WHERE codigo = ".$_SESSION['usu_id']);
		
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
				$nacionalidade				= $reg["nacionalidade"];
				$naturalidade				= $reg["naturalidade"];
				$rg 						= $reg["rg"];
				$rg_orgao 					= $reg["rg_orgao"];
				$rg_emissao 				= $reg["rg_emissao"];
				$rg_uf 						= $reg["rg_uf"];
				$empregado					= $reg["empregado"];
				$situacao					= $reg["situacao"];
				$telefoneDDD				= $reg["telefoneDDD"];
				$telefone					= $reg["telefone"];
				$recadoDDD					= $reg["recadoDDD"];
				$celularDDD					= $reg["celularDDD"];
				$celular					= $reg["celular"];
				$fone_recado				= $reg["fone_recado"];
				$recadopessoa				= $reg["recadopessoa"];
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
		}
?>
		<script type="text/javascript" language="javascript" src="js/jquery.maskedinput.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/jquery.validationEngine-pt.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" charset="utf-8"/>
        <style type="text/css">
        .td1 			{ background-color : #edecec; } 
        .td2			{ background-color : #d7d7d7; } 
        .td3			{ background-color : #edecec; } 
        .texto			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #333333; }
        .texto2			{ font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #900; }
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
        <form action="index.php?p=1&acao=cadastrar" method="post" name="formulario" id="formulario" onSubmit="return validate_form(this);">
        <input name="enviar" value="1" type="hidden">
        <input name="enviarAcao" value="<?php if (isset($_POST["editar"])){ echo "editar"; } else { echo "incluir";} ?>" type="hidden">
          <table align="center" border='0' width=685 cellpadding='4'>
        <tr>
            <td align='center' class="titulo2">
                    <p><img border="0" src="images/topo_cad.jpg"></img><strong><br>
                            Para ter acesso as vagas cadastradas, cadastre </strong><strong> seu curr&iacute;culo. </strong><br>
                            Para incluir o seu curr&iacute;culo em nosso banco de dados &eacute; necess&aacute;rio que complete os dados do formul&aacute;rio abaixo: </p>
                    </td>
        </TR></table>
        <br>
        <div>Campos marcados ao lado com <span class="texto2">*</span> s&atilde;o de preenchimento obrigat&oacute;rio!</div>
        <table align="center" border='0' width=685 cellpadding='4'>
            <tr>
                <td align='left' class="titulo">DADOS PESSOAIS 
        </td>
            </tr>
        </table>
        <table align="center" border='0' width=685 cellpadding='4' class="texto">
        <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>Nome:</td>
            <td class="td2"><input name="nome" type="text" class="input-a" value="<? echo $nome; ?>" size=40 maxlength=100 autofocus required >	</td>
        </tr>
        <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>E-mail:	</td>
            <td class="td2"><input name="email" type="text" class="input-a" value="<? echo $email; ?>" size=40 maxlength=255 required></td>
        </tr>
        <tr>
            <td width="26%" class="td3">Sexo:</td>
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
              <option value="Outros"<? if($estadoCivil=="Outros"){echo" selected";} ?>>Outros</option>
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
          <td class="td2"><input name="naturalidade" type="text" class="input-a" id="naturalidade" value="<? echo $naturalidade; ?>" size=30 maxlength=255></td>
        </tr>
        <input type="hidden" name="situacao" value="#">	
        <tr>
          <td class="td3">&nbsp;&nbsp;Nacionalidade:</td>
          <td class="td2"><input name="nacionalidade" type="text" class="input-a" id="" value="<? echo $nacionalidade; ?>" size=30 maxlength=255></td>
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
            <td width="26%" class="td3"><span class="texto2">*</span>RG/RE:</td>
            <td class="td2"><input name="rg" type="text" class="input-a" id="rg" size=12 maxlength=10 value="<? echo $rg ; ?>">
              &Oacute;rg&atilde;o 
              Exp.: 
              <input name="rg_orgao" type="text" class="input-a" id="rg_orgao" size=5 maxlength=10 value="<? echo $rg_orgao; ?>">
              Data Emiss&atilde;o:
              <input name="rg_emissao" type="text" class="input-a" id="rg_emissao" size=12 maxlength=10 value="<? echo $rg_emissao;?>"> 
              UF:      
              <input name="rg_uf" type="text" class="input-a" id="rg_uf" size=5 maxlength=10 value="<? echo $rg_uf ; ?>"></td>
          </tr>
          <tr>
            <td class="td3"><span class="texto2">*</span>CPF:</td>
            <td class="td2"><input name="cpf" type="text" class="input-a" id="cpf" value="<? echo $cpf; ?>" size=30 required>
              <span class="texto2">(Ex.:00000000099)</span></td>
          </tr>  
          <script type="text/javascript" language="javascript">
                $("#cpf").mask("999.999.999-99");
            </script>
          <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>Registro profissional N&ordm;:</td>
            <td class="td2"><input name="orgao_prof" type="text" class="input-a" id="orgao_prof" size=10 value="<? echo $reg["orgao_prof"]; ?>">
              Nome: 
                <input name="org_prof_nome" type="text" class="input-a" id="org_prof_nome" size=30 value="<? echo $reg["org_prof_nome"]; ?>">
                Sigla: 
                <input name="org_prof_sigla" type="text" class="input-a" id="org_prof_sigla" size=5 maxlength=10 value="<? echo $reg["org_prof_sigla"]; ?>">
                UF:
                <input name="org_prof_uf" type="text" class="input-a" id="org_prof_uf" size=5 maxlength=10 value="<? echo $reg["org_prof_uf"]; ?>"></td>
          </tr>
          <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>CTPS:</td>
            <td class="td2"><input name="ctps" type="text" class="input-a" id="ctps" size=10 value="<? echo $reg["ctps"]; ?>">
              S&eacute;rie: 
              <input name="ctps_serie" type="text" class="input-a" id="ctps_serie" size=5 maxlength=10 value="<? echo $reg["ctps_serie"]; ?>">
              Data Emiss&atilde;o: 
              <input name="ctps_emissao" type="text" class="input-a" id="ctps_emissao" size=12 maxlength=12 value="<? echo $reg["ctps_emissao"]; ?>">
              UF: 
              <input name="ctps_uf" type="text" class="input-a" id="ctps_uf" size=5 maxlength=10 value="<? echo $reg["ctps_uf"]; ?>"></td>
          </tr>
          <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>Cart. Habilita&ccedil;&atilde;o:</td>
            <td class="td2"><input name="cnh" type="text" class="input-a" id="cnh" size=10 value="<? echo $reg["cnh"]; ?>">
              Categoria: 	 
                <input name="cnh_categ" type="text" class="input-a" id="cnh_categ" size=5 maxlength=10 value="<? echo $reg["cnh_categ"]; ?>">
                Registro:			
                <input name="cnh_registro" type="text" class="input-a" id="cnh_registro" size=5 maxlength=10 value="<? echo $reg["cnh_registro"]; ?>">
                Data Emiss&atilde;o: 
                <input name="cnh_emissao" type="text" class="input-a" id="cnh_emissao" size=12 maxlength=12 value="<? echo $reg["cnh_emissao"]; ?>"></td>
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
                <td width="26%" class="td3">&nbsp;&nbsp;<span class="texto2">*</span>Telefone Residencial:</td>
                <td class="td2"> (<input name="telefoneDDD" type="text" class="input-a" value="<? echo $telefoneDDD; ?>" size=3 maxlength=3 required>) -
                    <input name="telefone" type="text" class="input-a" value="<? echo $telefone; ?>" size=8 maxlength=8 required>
                    <span class="texto2"> N&atilde;o utilize tra&ccedil;os nem pontos.</span>	</td>
            </tr>
            <tr>
                <td width="26%" class="td3">&nbsp;&nbsp;<span class="texto2">*</span>Telefone Celular:</td>
                <td class="td2">(<input name="celularDDD" type="text" class="input-a" value="<? echo $celularDDD; ?>" size=3 maxlength=3 required>) 
                -	<input name="celular" type="text" class="input-a" value="<? echo $celular; ?>" size=8 maxlength=8 required>
                <span class="texto2"> N&atilde;o utilize tra&ccedil;os nem pontos.</span>
                </td>
            </tr>
        <tr>
          <td class="td3">&nbsp;&nbsp;Telefone Recados:</td>
          <td class="td2">(<input name="recadoDDD" type="text" class="input-a" id="recadoDDD" value="<? echo $recadoDDD; ?>" size=3 maxlength=3>) -
        <input name="fone_recado" type="text" class="input-a" id="fone_recado" value="<? echo $fone_recado; ?>" size=8 maxlength=8>
        Falar com:
          <input name="recadopessoa" type="text" class="input-a" id="recadopessoa" value="<? echo $recadopessoa; ?>" size=40 maxlength=100></td>
        </tr>
        <tr>
            <td width="26%" class="td3">&nbsp;&nbsp;Redes sociais:<br>	  </td>
            <td class="td2">http://<input name="homePage" type="text" class="input-a" value="<? echo $homePage; ?>" size=40 maxlength=255></td>
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
            <td class="td2"><input name="endereco" type="text" class="input-a" id="endereco" value="<? echo $endereco; ?>" size=60 maxlength=255 required></td>
          </tr>
          <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>N&uacute;mero:</td>
            <td class="td2"><input name="numero" type="text" class="input-a" id="numero" value="<? echo $numero; ?>" size=5 maxlength=10 required></td>
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
            <td class="td2"><input name="cidade" type="text" class="input-a" id="cidade" value="<? echo $cidade; ?>" size=20 maxlength=255 required></td>
          </tr>
          <tr>
            <td width="26%" class="td3">CEP:</td>
            <td class="td2"><input name="cep" type="text" class="input-a" id="cep" value="<? echo $reg["cep"]; ?>" size=12 maxlength=10>
              <span class="texto2">Ex.:86.702-300</span>      </td>
          </tr>
          <tr>
            <td width="26%" class="td3"><span class="texto2">*</span>Estado:</td>
            <td class="td2"><? echo $reg["uf"]; ?>
            <select name="estado_res" class="input-a" id="select" required>
              <option value="">Selecione</option>
              <?php	
                    $sqlestado = "SELECT * FROM tb_estados order by codigo";
                    $categorias = mysql_query($sqlestado) or die ("N&atilde;o foi poss&iacute;vel consultar os estados");
                    while ($linha=mysql_fetch_array($categorias)) 
                    {
                        $uf  	 = $linha["uf"]; 
                        $nom_est = $linha["estado"];
						echo "<option value='$uf'";
						if ($reg["estado_res"] == $uf){
							echo " selected='selected'";
						}
                     	echo ">$nom_est</option>";
					} 			 
                ?>
            </select></td>
          </tr>
        </table>
        <br>
        <table align="center" border='0' width=685 cellpadding='4' class="texto">
          <tr>
            <td class="titulo" colspan=5 align=left>EXPERI&Ecirc;NCIA PROFISSIONAL (&uacute;ltimo ou atual)</td>
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
                <option value="2008"<? if($experienciaDataEntradaAno=="2008"){echo" selected";} ?>>2008</option>
                <option value="2009"<? if($experienciaDataEntradaAno=="2009"){echo" selected";} ?>>2009</option>
                <option value="2010"<? if($experienciaDataEntradaAno=="2010"){echo" selected";} ?>>2010</option>
                <option value="2011"<? if($experienciaDataEntradaAno=="2011"){echo" selected";} ?>>2011</option>
                <option value="2012"<? if($experienciaDataEntradaAno=="2012"){echo" selected";} ?>>2012</option>
                <option value="2013"<? if($experienciaDataEntradaAno=="2013"){echo" selected";} ?>>2013</option>
                <option value="2014"<? if($experienciaDataEntradaAno=="2014"){echo" selected";} ?>>2014</option>
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
                <option value="2007"<? if($experienciaDataSaidaAno=="2007"){echo" selected";} ?>>2007</option>
                <option value="2008"<? if($experienciaDataSaidaAno=="2008"){echo" selected";} ?>>2008</option>
                <option value="2009"<? if($experienciaDataSaidaAno=="2009"){echo" selected";} ?>>2009</option>
                <option value="2010"<? if($experienciaDataSaidaAno=="2010"){echo" selected";} ?>>2010</option>
                <option value="2011"<? if($experienciaDataSaidaAno=="2011"){echo" selected";} ?>>2011</option>
                <option value="2012"<? if($experienciaDataSaidaAno=="2012"){echo" selected";} ?>>2012</option>
                <option value="2013"<? if($experienciaDataSaidaAno=="2013"){echo" selected";} ?>>2013</option>
                <option value="2014"<? if($experienciaDataSaidaAno=="2014"){echo" selected";} ?>>2014</option>
              </select>
              </select>
            </td>
          </tr>
          <tr>
            <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Nome da empresa: </td>
            <td colspan=3 class="td2">
              <input name="experienciaEmpresa" type="text" class="input-a" value="<? echo $experienciaEmpresa; ?>" size=40 maxlength=100 required> 
              Ramo atua&ccedil;&atilde;o 
              <input name="exp_empresa_ramo" type="text" class="input-a" value="<? echo $reg["exp_empresa_ramo"]; ?>" size=30 maxlength=100 required></td>
          </tr>
          <tr>
            <td class="td3" valign=middle><span class="texto2">*</span>Munic&iacute;pio: </td>
            <td colspan=3 class="td2"><input name="experienciaCidade" type="text" class="input-a" id="experienciaCidade" value="<? echo $experienciaEmpresa; ?>" size=30 maxlength=100 required>
        UF:      
          <select name="exp_uf" class="input-a" id="select2">
              <option>Selecione</option>
              <?php	
                    $sqlestado = "SELECT * FROM tb_estados order by codigo";
                    $categorias = mysql_query($sqlestado)
                        or die ("N&atilde;o foi poss&iacute;vel consultar os estados");
                    while ($linha=mysql_fetch_array($categorias)) 
                    {
                        $uf  	 = $linha["uf"]; 
                        $nom_est = $linha["estado"];
                    	echo "<option value='$uf'";
						if ($reg["exp_uf"] == $uf){
							echo " selected='selected'";
						}
                     	echo ">$nom_est</option>";
                     } 			 
                ?>
            </select>
        Pa&iacute;s:
        <select name="exp_pais" class="input-a" id="exp_pais">
          <option value="Brasil">Brasil</option>
          <option value="Outro">Outro</option>
        </select></td>
          <tr>
            <td width=26% class="td3" valign=middle> <span class="texto2">*</span>&Uacute;ltimo(s) Cargo(s) na Empresa: </td>
            <td colspan=3 class="td2">
              <input name="experienciaCargo" type="text" class="input-a" value="<? echo $experienciaCargo; ?>" size=60 maxlength=255 required> <span class="texto2">(at&eacute; 3 cargos, sep. por v&iacute;rgula)</span><br>
            </td>
          </tr>
          <tr>
            <td width=26% class="td3" valign=middle> &Uacute;ltimo Sal&aacute;rio: R$: </td>
            <td colspan=3 class="td2">
              <input name="experienciasalario" type="text" class="input-a" id="experienciasalario" value="<? echo $experienciaCargo; ?>" size=15 maxlength=20>
              <span class="texto2"> Somente n&bull; Ex: 1000 </span>
            </td>
          </tr>
          <tr>
            <td width=26% class="td3" valign=middle> <span class="texto2">*</span>Atividades e responsabilidades: </td>
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
            <td class="td2">
            <select name="acessi" class="input-a" id="acessi" >
              <option value="n" <?php if ($reg["acessi"] == "n"){ echo "selected";}?>>N&atilde;o</option>
              <option value="s" <?php if ($reg["acessi"] == "s"){ echo "selected";}?>>Sim</option>              
            </select></td>
          </tr>
          <tr>
            <td class="td3">&nbsp;&nbsp;Se sim, qual? :</td>
            <td class="td2"><input name="acessi_tipo" type="text" class="input-a" id="acessi_tipo" value="<? echo $reg["acessi_tipo"]; ?>" size=40 maxlength=100></td>
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
              <select name="formacaoGrau" class="input-a" required>
                <option value="0"<? if($formacaoGrau=="0"){echo" selected";} ?>></option>
                <option value="1"<? if($formacaoGrau=="1"){echo" selected";} ?>>Ensino Fundamental</option>
                <option value="2"<? if($formacaoGrau=="2"){echo" selected";} ?>>Ensino M&eacute;dio incompleto</option>
                <option value="3"<? if($formacaoGrau=="3"){echo" selected";} ?>>Ensino M&eacute;dio completo</option>
                <option value="4"<? if($formacaoGrau=="4"){echo" selected";} ?>>T&eacute;cnico incompleto</option>
                <option value="5"<? if($formacaoGrau=="5"){echo" selected";} ?>>T&eacute;cnico completo</option>
                <option value="6"<? if($formacaoGrau=="6"){echo" selected";} ?>>Superior incompleto</option>
                <option value="7"<? if($formacaoGrau=="7"){echo" selected";} ?>>Superior completo</option>        
                <option value="8"<? if($formacaoGrau=="8"){echo" selected";} ?>>P&oacute;s-Gradua&ccedil;&atilde;o incompleto</option>
                <option value="9"<? if($formacaoGrau=="9"){echo" selected";} ?>>P&oacute;s-Gradua&ccedil;&atilde;o completo</option>	
              </select>
            </td>
            <td width=26% class="td2" valign=middle> <span class="texto2">*</span> Curso </td>
            <td class="td2">
              <input name="formacaoCurso" type="text" class="input-a" value="<? echo $formacaoCurso; ?>" size=30 maxlength=255 required>
            </td>
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
            <td colspan="3" class="td2"><input name="idiomaoutro_nome" type="text" class="input-a" id="idiomaoutro_nome" size=40 value="<?php echo $reg["idiomaoutro_nome"]?>"></td>
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
            <td colspan="3" class="td2"><input name="info_outro_nome" type="text" class="input-a" id="info_outro_nome" size=40 value="<?php echo $reg["info_outro_nome"]?>"></td>
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
            <td class="td1">grau de parentesco e idade </td>
            </tr>
          <tr>
            <td width="22%" class="td2"><input name="dp1" type="text" class="input-a" id="dp1" size="25" value="<?php echo $reg["dp1"]?>"></td>
            <td class="td2"><input name="dp1_dados" type="text" class="input-a" id="dp1_dados" size="90" value="<?php echo $reg["dp1_dados"]?>">      </td>
            </tr>
          <tr>
            <td class="td2"><input name="dp2" type="text" class="input-a" id="dp2" size="25" value="<?php echo $reg["dp2"]?>"></td>
            <td class="td2"><input name="dp2_dados" type="text" class="input-a" id="dp2_dados" size="90" value="<?php echo $reg["dp2_dados"]?>"></td>
            </tr>
          <tr>
            <td class="td2"><input name="dp3" type="text" class="input-a" id="dp3" size="25" value="<?php echo $reg["dp3"]?>"></td>
            <td class="td2"><input name="dp3_dados" type="text" class="input-a" id="dp3_dados" size="90" value="<?php echo $reg["dp3_dados"]?>"></td>
            </tr>
          <tr>
            <td class="td2"><input name="dp4" type="text" class="input-a" id="dp4" size="25" value="<?php echo $reg["dp4"]?>"></td>
            <td class="td2"><input name="dp4_dados" type="text" class="input-a" id="dp4_dados" size="90" value="<?php echo $reg["dp4_dados"]?>"></td>
            </tr>
          <tr>
            <td class="td2"><input name="dp5" type="text" class="input-a" id="dp5" size="25" value="<?php echo $reg["dp5"]?>"></td>
            <td class="td2"><input name="dp5_dados" type="text" class="input-a" id="dp5_dados" size="90" value="<?php echo $reg["dp5_dados"]?>"></td>
            </tr>
          <tr>
            <td class="td2"><input name="dp6" type="text" class="input-a" id="dp6" size="25" value="<?php echo $reg["dp6"]?>"></td>
            <td class="td2"><input name="dp6_dados" type="text" class="input-a" id="dp6_dados" size="90" value="<?php echo $reg["dp6_dados"]?>"></td>
            </tr>
        </table>
        <br>
        <table align="center" border='0' width=685 cellpadding='4'>
          <tr>
            <td colspan=2 align='left' class="titulo">OBJETIVO PROFISSIONAL</td>
          </tr>
        </table>
        <table align="center" border='0' width=685 cellpadding='4' class="texto"><tr>
                <td width="26%" class="td3"><span class="texto2">*</span>Cargo pretendido:</td>
                <td class="td2"><input name="cargo_pretendido" type="text" class="input-a" id="cargo_pretendido" size="90" required value="<?php echo $reg["cargo_pretendido"]?>"></td>
            </tr>
            <tr>
                <td width="26%" class="td3"><span class="texto2">*</span>Situa&ccedil;&atilde;o Atual:</td>
                <td class="td2">
                    <select name="situacao" class="input-a"  required>
                        <option value=""<? if($situacao=="" || $situacao=="0"){echo" selected";} ?>>Escolha abaixo</option>
                        <option value="2"<? if($situacao=="2"){echo" selected";} ?>>Estou em busca do primeiro est&aacute;gio</option>
                        <option value="3"<? if($situacao=="3"){echo" selected";} ?>>Estou em busca de outro est&aacute;gio</option>
                        <option value="4"<? if($situacao=="4"){echo" selected";} ?>>Estou em busca de primeiro emprego</option>
                        <option value="5"<? if($situacao=="5"){echo" selected";} ?>>Sou rec&eacute;m-formado e estou em busca de emprego</option>
                        <option value="6"<? if($situacao=="6"){echo" selected";} ?>>Estou empregado, mas busco um emprego melhor</option>
                        <option value="7"<? if($situacao=="7"){echo" selected";} ?>>Desempregado recentemente</option>
                        <option value="8"<? if($situacao=="8"){echo" selected";} ?>>Estou desempregado h&aacute; mais de 3 meses</option>
                        <option value="9"<? if($situacao=="9"){echo" selected";} ?>>Estou desempregado h&aacute; mais de um ano</option>
                        <option value="10"<? if($situacao=="10"){echo" selected";} ?>>Quero retornar ao mercado de trabalho</option>
                        <option value="14"<? if($situacao=="14"){echo" selected";} ?>>Outros</option>
                    </select>
              </td>
            </tr>
          <tr>
            <td width=26% valign=middle class="td1"> <span class="texto2">*</span>Cidades em que voc&ecirc; deseja ou pode trabalhar:<br>    </td>
            <td class="td2"><b>Aten&ccedil;&atilde;o:</b> - Digite as cidades separadas por v&iacute;rgula - N&atilde;o utilize abrevia&ccedil;&otilde;es. &Eacute; indiferente o uso de acentua&ccedil;&atilde;o ou letras mai&uacute;sculas.<br>
                <b>Exemplo:</b> S&atilde;o Paulo, Rio de Janeiro, Belo Horizonte<br>
                <textarea name="desejoTrabalharCidade" cols=60 rows=5 wrap="virtual" class="input-a" required><? echo $reg["desejoTrabalharCidade"] ?></textarea>    </td>
          </tr>
          <tr>
            <td width="26%" class="td1" valign="middle"> <span class="texto2">*</span>Ramo de atividade da empresa em que deseja trabalhar: </td>
            <td class="td2"> Escolha quantas op&ccedil;&otilde;es desejar, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de um op&ccedil;&atilde;o.<br>
                <select name="ramo[]" size=10 multiple class="input-a"  required>
                  <option value="30"<? if(in_array("30", $ramo, TRUE)){echo" selected";} ?>>Telemarketing</option>
                  <option value="3"<? if(in_array("3", $ramo, TRUE)){echo" selected";} ?>>Administrativa</option>
                  <option value="35"<? if(in_array("35", $ramo, TRUE)){echo" selected";} ?>>Ind&uacute;stria</option>
                  <option value="11"<? if(in_array("11", $ramo, TRUE)){echo" selected";} ?>>Servi&ccedil;os</option>
                  <option value="33"<? if(in_array("33", $ramo, TRUE)){echo" selected";} ?>>Acad&ecirc;mica</option>
                  <option value="37"<? if(in_array("37", $ramo, TRUE)){echo" selected";} ?>>Telefonia</option>
                  <option value="19"<? if(in_array("19", $ramo, TRUE)){echo" selected";} ?>>&Oacute;leo e G&aacute;s</option>
                  <option value="36"<? if(in_array("36", $ramo, TRUE)){echo" selected";} ?>>Sa&uacute;de</option>
                  <option value="14"<? if(in_array("14", $ramo, TRUE)){echo" selected";} ?>>Inform&aacute;tica</option>          
                        </select>    </td>
          </tr>
          <tr>
            <td width="26%" class="td1" valign="middle"> <span class="texto2">*</span>N&iacute;vel Hier&aacute;rquico: </td>
            <td class="td2">Escolha at&eacute; 2 op&ccedil;&otilde;es, pressione a Tecla <b>"Ctrl"</b> e clique nos itens para selecionar mais de um n&iacute;vel.<br>
                <select name="nivel[]" size=6 multiple class="input-a"  required>
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
                 MINICURR&Iacute;CULO 
            </td>
        </tr>
        </table>
        <table align="center" border='0' width=685 cellpadding='4' class="texto">
        <tr>
            <td width="26%" class="td3" valign="middle">
                <span class="texto2">*</span>Minicurr&iacute;culo
                <br>
                - O minicurr&iacute;culo &eacute; um resumo do seu curr&iacute;culo e &eacute; a primeira informa&ccedil;&atilde;o visualizada pela empresa na busca de curr&iacute;culos. 
                Por isso, seja claro e objetivo:</td>
            <td class="td2">
            <b>Aten&ccedil;&atilde;o:</b> o tamanho m&aacute;ximo de um minicurr&iacute;culo &eacute; de 500 caracteres
            <br>
            <textarea name="minicurriculo" cols=70 rows=5 wrap="virtual" class="input-a" onBlur="document.getElementById('counter0422869ca588').innerHTML=this.value.length;" onKeyUp="document.getElementById('counter0422869ca588').innerHTML=this.value.length;"><? echo $minicurriculo; ?></textarea>
            <SPAN class=peq style="COLOR: gray"><SPAN class=peq id=counter0422869ca588>0</SPAN>/500</SPAN></td>
        </tr>
        </TABLE>
        <br>
        <table align="center" border="0" width="685" cellpadding="4">
        <tr>
            <td colspan=2 align="left" class="titulo">
                 OUTRAS INFORMA&Ccedil;&Otilde;ES 
            </td>
        </tr>
        </table>
        <table align="center" border='0' width=685 cellpadding='4'class="texto">
        <tr>
            <td width=26% class="td3" valign="middle">
            Cursos/Especializa&ccedil;&otilde;es
            <br>
            Informe cursos extra-curriculares e outras especializa&ccedil;&otilde;es:</td>
            <td class="td2">
            <textarea name="especializacoes" cols=70 rows=5 wrap="virtual" class="input-a"><? echo $especializacoes; ?></textarea>
        </td>
        </tr>
        </table>
        <br>
        <table align="center" border='0' width=685 cellpadding='4'>
          <tr>
            <td colspan=2 align='left' class="titulo">Programa Instalador Trainee</td>
          </tr>
        </table>
        <table align="center" border='0' width=685 cellpadding='4' class="texto">
          <tr>
            <td width="26%" class="td3"><span class="texto2"> </span>Como teve conhecimento do programa:</td>
            <td class="td2">
              <select name="conheceu" class="input-a" id="conheceu" >
                <option value="Jornal"<? if($reg["conheceu"]=="Jornal"){echo" selected";} ?>>Jornal</option>
                <option value="R&aacute;dio"<? if($reg["conheceu"]=="R&aacute;dio"){echo" selected";} ?>>R&aacute;dio</option>
                <option value="Televis&atilde;o"<? if($reg["conheceu"]=="Televis&atilde;o"){echo" selected";} ?>>Televis&atilde;o</option>
                <option value="Escola"<? if($reg["conheceu"]=="Escola"){echo" selected";} ?>>Escola</option>
                <option value="Amigos"<? if($reg["conheceu"]=="Amigos"){echo" selected";} ?>>Amigos</option>
                <option value="Internet"<? if($reg["conheceu"]=="Internet"){echo" selected";} ?>>Internet</option>
                <option value="Outros"<? if($reg["conheceu"]=="Outros"){echo" selected";} ?>>Outros</option>
              </select></td>
          </tr>
        </table>
        <br>
        <table align="center" border='0' width=600 cellpadding='4'>
        <tr>
            <td colspan=2 align='left' class="titulo">
            CADASTRE SUA SENHA
            </td>
        </tr>
        <tr>
            <td colspan=2 align='left' class="titulo2">
            - Para acessar o sistema outras vezes tanto para editar seu curr&iacute;culo ou pesquisar vagas em aberto voc&ecirc; precisar&aacute; de um login, que j&aacute; &eacute; o seu CPF, e uma senha que voc&ecirc; deve cadastrar abaixo. Caso deseje manter a mesma senha deixe os campos abaixo em branco.</td>
        </tr>
        <tr><td class=line></td></tr>
        </table>
        <table align="center" border='0' width=600 cellpadding='4' class="texto">
        <tr>
            <td width="31%" class="td3">
            <span class="texto2">*</span>Senha:
            </td>
            <td width="69%" class="td2">
            <input name="senha" type="password" class="input-a" value="" required >
            </td>
        </tr>
        <tr>
            <td width="31%" class="td3">
            <span class="texto2">*</span>Confirma&ccedil;&atilde;o da senha :	</td>
            <td class="td2">
            <input name="senha2" type="password" class="input-a" value="" required>
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

            </td>
        </tr>
    </table>

<?php }?>