$(document).ready(function(){

	$('.link > a').each(function() {
		var txt = $(this).text();
		var newTxt = txt.replace(/\w/g,function(c){
		  return '<span>'+c+'</span>';
		})
		$(this).html(newTxt);
	});

	$('.menu-open > a').on('click', function(){
		$('.content').addClass('slide-1');
		setTimeout(function(){
			$('.link > a > span').each(function(){
				$(this).addClass('animate-link');
			});
		},700);
		setTimeout(function(){
			$('.content').addClass('slide-2');
			$('.menu-fs').addClass('menu-fs-slide');
		},500);
		$('.menu-open').css({
			"top": "-50px",
			"opacity": "0"
		});
		setTimeout(function(){
			$('.menu-close').css({
				"top": "20px",
				"opacity": "1"
			});		},1000);
		setTimeout(function(){
			$('.content').removeClass('slide-1');
			$('.content').removeClass('slide-2');
			$('.content').addClass('content-hide');
		},1000);
	});
	$('.menu-close > a').on('click', function(){
		$('.content').addClass('slide-1');
		$('.content').removeClass('content-hide');
		$('.menu-fs').removeClass('menu-fs-slide');
		$('.link > a > span').each(function(){
			$(this).removeClass('animate-link');
		});
		setTimeout(function(){
			$('.content').removeClass('slide-1');
		},500);
		setTimeout(function(){
			$('.menu-open').css({
				"top": "20px",
				"opacity": "1"
			});
		},1100);
		$('.menu-close').css({
			"top": "-50px",
			"opacity": "0"
		});
	});

	$('.section-list > a').on('click', function(){
		var target = $(this).attr('data-target');
		$('.section-list > a').removeClass('active');
		$(this).addClass('active');
		$('.section-info').removeClass('open-info');
		$('.info-left').removeClass('info-left-active');
		$('.info-right').removeClass('info-right-active');
		setTimeout(function(){
			$('#'+target).addClass('open-info');
			$('.info-left').addClass('info-left-active');
			$('.info-right').addClass('info-right-active');
		},500);
	});
	$(window).on('scroll', function(e) {
	    var scroll = $(window).scrollTop();
	    if ( scroll >= 1070 ) {
	    	$('.info-bracket, #benefit_website .section-info').css('position', 'fixed');
	    	$('.info-bracket').css('top', '20px');
	    	$('#benefit_website .section-info').css('top', '280px');
	    	var bracket = $('.info-bracket').offset().top;
	    	if ( bracket >= 1644 ) {
	    		$('.info-bracket, #benefit_website .section-info').css('position', 'absolute');
	    		$('.info-bracket').css('top', '450px');
	    		$('#benefit_website .section-info').css('top', '710px');
	    	}
	    } else {
	    	$('.info-bracket, #benefit_website .section-info').css('position', 'absolute');
	    }
	});

});

//1496 == 145