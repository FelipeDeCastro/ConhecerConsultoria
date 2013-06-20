//Twitter feed
function twitterFeed(){
	$("#tweet_container").tweet({
		join_text: "auto",
		username: "ConhecerGIE",
		join_text:  ":",
		intro_text: false,
		count: 5,
		loading_text: "carregando tweets...",
		callback: twitterSlides
	});
};
function twitterSlides(){
	$("#tweet_container").slides({
        generateNextPrev: true,
		generatePagination: false,
		effect: 'fade',
		play: 9000,
		fadeSpeed: 200
	});
};

//Slides da home
function slider(){
	var pedacoDeCodigo = $('#pedacoDeCodigo').html();
	var wV = $(window).width();
	var hV = $(window).height()-90;
	var w0 = $('#pedacoDeCodigo .slides_container div img').attr('width');
	var h0 = $('#pedacoDeCodigo .slides_container div img').attr('height');
	var w1 = w0;
	var h1 = h0;
	var aspectRatio = 4/3;
	var proporcao0;
	
	if(wV/hV > aspectRatio){
		proporcao = wV/w0; w1 = wV; h1 = h0*proporcao;
		montaSlides();
	}
	
	else if( wV/hV < aspectRatio){
		proporcao = hV/h0; h1 = hV; w1 = w0*proporcao;
		montaSlides();
	}
	else{
		w1 = w0;
		h1 = h0;
		montaSlides()
	};
	
	function montaSlides(){
		var w2 = w1/2;
		var h2 = h1/2;
		$("#slider").html(pedacoDeCodigo);
		$("#slider .slides_container, #slider .slides_container div").width(wV);	
		$("#slider .slides_container, #slider .slides_container div").height(hV);
		$('#slider .slides_container div img').attr({width:w1, height:h1});
		$('#slider .slides_container div img').css({marginLeft:-w2, marginTop:-h2});
		$("#slider").slides({
			effect: 'fade',
			play: 5000,
			fadeEasing: "easeOutQuad",
			fadeSpeed: 150,
			generatePagination: false,
			generateNextPrev: true
		  });
	};
};

//campos facultativos do formulário
function mostrarCampo(){
	$(".funcao").hide();
	$("[name='area-de-atuacao']").click(function(){
		if ($("[name='area-de-atuacao']:checked").val() == 'Telecomunicações'){
			$(".funcao").slideDown();
		}
		else if ($("[name='radio-417']:checked").val() != 'Telecomunicações'){
			$(".funcao").slideUp();
		};
	});
};

//Ao terminar de carregar todos os elementos da página
$(document).ready(function() {
	twitterFeed();
	slider();
	mostrarCampo();
	
	//Ao redimensionar a janela
	$(window).resize(function() {
		slider();
	});	
	
});