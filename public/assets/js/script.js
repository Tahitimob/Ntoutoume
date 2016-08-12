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
})