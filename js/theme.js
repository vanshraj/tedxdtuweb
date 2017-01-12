$(document).ready(function(){

	  	$('.skip-button').click(function(){
	    	var target = $('.intro');
	    	target.removeClass('animation');
	    	target.fadeOut(2000);
	    	$('.skip').fadeOut(2500);
	    	$('.logo').fadeOut(2500);
	    	$('.about-theme').fadeIn(4000);
	  	});

	  	setTimeout(function() {
		    var target = $('.intro');
	    	target.removeClass('animation');
	    	target.fadeOut(2000);
	    	$('.skip').fadeOut(2500);
	    	$('.logo').fadeOut(2500);
	    	$('.about-theme').fadeIn(4000);
		}, 38000);

	});