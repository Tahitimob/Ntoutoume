$(function(){
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
	var hover = false;
	var picker = false;
	$('body').on('mousedown', '.case', function(){
	   	console.log('Ok');
		   	 
		/*var couleur ="rgb("
	   	 	+ (Math.floor(Math.random() * 256)) + ","
			+ (Math.floor(Math.random() * 256)) + ","
			+ (Math.floor(Math.random() * 256))
				+")";*/
		if(picker){
			var couleur = $(this).css('background-color');
			$('.jscolor').css( "background-color", couleur);
			console.log(couleur);
		}
		else {
			var couleur = $('.jscolor').css('background-color');
			$(this).css( "background-color", couleur);
			console.log(couleur);	 	
		}
	})
	.on('keydown', function(e){
		if(e.keyCode == 65){
			hover = true;
			console.log(hover);
		} else if(e.keyCode == 83){
			hover = false;
			picker = true;
		}
	})
	.on('keyup', function(e){
		if(e.keyCode == 65){
			hover = false;
			console.log(hover);
		} else if(e.keyCode == 83){
			picker = false;
		}
	})
	.on('mouseover', '.case', function(){
		if(hover){
			var couleur = $('.jscolor').css('background-color');
			$(this).css( "background-color", couleur);
			console.log(couleur);
		}
	})
	.on('mousedown', '.box', function(){
		var couleur = $(this).css('background-color');
		$('.jscolor').css( "background-color", couleur);
		console.log(couleur);
	})
})