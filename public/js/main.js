$(document).ready(function(){
	$('.menu-open > a').on('click', function(){
		$('.menu-open').css({"top": "-60px", "opacity": "0"});
		
		setTimeout(function(){
			$('.block').each(function(i){
				var block = $(this);
				setTimeout(function() {
				    block.addClass('animation-width');
				    setTimeout(function(){
				    	block.removeClass('animation-width');
				    },1000);
				}, 100*i);
			});
		},300);
		setTimeout(function(){
			$('.menu-block').addClass('menu-active');
		},1500);
		setTimeout(function(){
			$('.menu-close').css({"top": "20px", "opacity": "1"});
		},1800);
	});
	$('.menu-close > a').on('click', function(){
		$('.menu-close').css({"top": "-60px", "opacity": "0"});
		$('.menu-open').css({"top": "20px", "opacity": "1"});
		$('.menu-block').removeClass('menu-active');
	});
});