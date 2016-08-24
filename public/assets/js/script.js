$(function(){
	//Sert à envoyer un input pour récupérer la chaine de couleurs du pixelart
	function rgb2hex(rgb){
		rgb = rgb.match(/^rgb[(](.*),[ ]*(.*),[ ]*(.*)[)]$/);
		return "#" +
		("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
		("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
		("0" + parseInt(rgb[3],10).toString(16)).slice(-2);
	}
	$('.submit').on('click', function(e){
		var colors = "";
		var i =0;
		$('.case').each(function(){
			colors = rgb2hex($(this).css('background-color'))+";";
			$('form').append("<input type='hidden' name='colors["+i+"]' value='"+colors+"'>");
			i++;
		})
	})


	//Différents évènements pour changer les couleurs du pixelart
	var hover = false;
	var picker = false;
	var erase = false;
	$('body').on('mousedown', '.case', function(e){
	   	e.preventDefault();
		hover = true;
		/*var couleur ="rgb("
	   	 	+ (Math.floor(Math.random() * 256)) + ","
			+ (Math.floor(Math.random() * 256)) + ","
			+ (Math.floor(Math.random() * 256))
				+")";*/
		if(picker){
			var couleur = $(this).css('background-color');
			$('.jscolor').css( "background-color", couleur);
			console.log(couleur);
		} else if(erase){
			var couleur = "rgb(255,255,255)";
			$(this).css( "background-color", couleur);
			console.log(couleur);
		}
		else {
			var couleur = $('.jscolor').css('background-color');
			$(this).css( "background-color", couleur);
			console.log(couleur);	 	
		}
	})
	.on('mouseup', function(){
		hover = false;
	})
	.on('keydown', function(e){
		if(e.keyCode == 65){
			hover = true;
			picker = false;
			erase = false;
		} else if(e.keyCode == 83){
			hover = false;
			picker = true;
			erase = false;
		} else if(e.keyCode == 71){
			hover = false;
			picker = false;
			erase = true;
		}
		console.log(e.keyCode);
	})
	.on('keyup', function(e){
		if(e.keyCode == 65){
			hover = false;
		} else if(e.keyCode == 83){
			picker = false;
		} else if(e.keyCode == 71){
			erase = false;
		}
		console.log(e.keyCode);
	})
	.on('mouseover', '.case', function(){
		if(hover){
			var couleur = $('.jscolor').css('background-color');
			$(this).css( "background-color", couleur);
			console.log(couleur);
		}else if(erase){ //Met la couleur des pixels à celle du background
			var couleur = $('.background').css('background-color');
			$(this).css( "background-color", couleur);
			console.log(couleur);
		}
	})
	.on('mousedown', '.box', function(){
		var couleur = $(this).css('background-color');
		$('.jscolor').css( "background-color", couleur);
		$('.jscolor').val(rgb2hex(couleur).substr(1,6).toUpperCase());
		console.log(couleur);
	})
	.on('click','.background', function(){ //Pour choisir une couleur de fond au pixel art
		var bgcouleur = $(this).css( "background-color");
		var couleur = $('.jscolor').css('background-color');
		$(this).css( "background-color", couleur);
		$('.case').each(function(){
			if($(this).css( "background-color") == bgcouleur){
				$(this).css( "background-color", couleur);
			}
		})
	})




	var iWindowsSize = $(window).innerWidth();
	if (iWindowsSize  < 1007){
 		if($('nav').hasClass('navbar-fixed-left')){
 			$('nav').removeClass('navbar-fixed-left');
 		}
	}
	// Passage du menu au top sous 1024px
	$(window).resize(function(){
		var iWindowsSize = $(window).innerWidth();
		if (iWindowsSize  < 1007){
	 		if($('nav').hasClass('navbar-fixed-left')){
	 			$('nav').removeClass('navbar-fixed-left');
	 		}
		}else{
			$('nav').addClass('navbar-fixed-left');
		}
	});
	// Toggle du menu
	$('body').on('click', '.hide-nav', function(){
		var iWindowsSize = $(window).innerWidth();
		if($('.hide-nav').html() == "¬Hide¬"){
			$('.hide-nav').html("¬Show¬");
		}else{
			$('.hide-nav').html("¬Hide¬");
		}
		if(iWindowsSize < 1007){
			$('.navbar-fixed-top').toggle(400);
		}else{
			$('.navbar-fixed-left').toggle(400);
		}	
	})

	//Envoyer le modal
	$('body').on('click', '.modal-validate', function(){
		$('.error').each(function(){
			$(this).remove();
		})
		var valid = true;
		if($('#inputNom').val() == ""){ //Teste si le nom est vide
			valid = false;
			$('#inputNom').after('<span class="error">Le nom est vide</span>');
		}
		if($('#inputPrenom').val() == ""){ //Teste si le prénom est vide
			valid = false;
			$('#inputPrenom').after('<span class="error">Le prénom est vide</span>');
		}
		reg = /^[a-z0-9.\-_+]+@[a-z0-9\-]{2,}\.[a-z\-]{2,}$/;
		isEmail = reg.test($('#inputMail').val());
		if(!isEmail){ //Teste si l'email est vide ou invalide
			valid = false;
			$('#inputMail').after("<span class='error'>L'email est vide ou invalide</span>");
		}
		if($('#comment').val().length < 8){ //Teste si le message est trop court
			valid = false;
			$('#comment').after("<span class='error'>Votre message est trop court</span>");
		}
		if(valid){ //Si le formulaire est valide
			
			$.ajax({
				url: "form",
				data: $('#contact-form').serialize()+"&validate=",
				type: 'POST'
			}).done(function(response){
				alert(response); 

				$('#modal-contact').modal('hide');
			})
		}
	})
})