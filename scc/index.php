<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SCC - Conhecer Consultoria</title>
        <meta name="description" content="A Conhecer atua no desenvolvimento de Programas de Qualificação Profissional voltados para a demanda específica da mão de obra da sua empresa, utilizando para isso a metodologia e a experiência aplicada no segmento de Telecomunicações para o qual já capacitou mais de 10.000 profissionais em todo Brasil em diversas funções.">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/jquery-1.8.3.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
    </head>
    
    <body class="contato">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->



        <div id="topo">
        	<div class="wrap">
            	<div id="barra-lateral">
                	<h1><a href="index.php"><span>Conhecer Consultoria - Gest&atilde;o de intelig&ecirc;ncia Empresarial</span></a></h1>
                    <a href="index.php?p=1&acao=validar" class="seja-instrutor">Cadastrar/editar  <strong>curr&iacute;culo</strong></a>
                    <a href="index.php?p=2" class="entre-contato">Consultar  <br><strong>vagas</strong></a>
                </div>
                <ul id="menu">
                <h2>SCC - Sistema de Curr&iacute;culos Conhecer</h2>
                </ul>
            </div>
        </div>
        
        <div id="conteudo">
        	<div class="wrap">
                <?php 
			  switch ($_GET['p']){
				 case "1":
						include("curriculo.php");
						break; 
				 case "2":
						include("vagas.php");
						break; 
				 case "3":
						include("login.php");
						break;
				 case "4":
						include(".php");
						break;
				 case "5":
						include(".php");
						break;
				 case "6":
						include(".php");
						break;
				 case "7":
						include("");
						break; 
				 case "8":
						include("");
						break;
				default:
						include("inicio.php");
						break;
			  }	?>
                
            </div>
        </div>

		<div id="rodape">
        	<div class="wrap"></div>
        </div>
        <script src="js/plugins.js"></script>
        <script src="js/slides.min.jquery.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
