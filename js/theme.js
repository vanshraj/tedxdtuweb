$(document).ready(function(){

	  	$('.skip-button').click(function(){
	    	var target = $('.intro');
	    	target.removeClass('animation');
	    	target.fadeOut(2000);
	    	$('.skip').fadeOut(2500);
	    	$('.next').fadeOut(2500);
	    	$('.logo').fadeOut(2500);
	    	$('.about-theme').fadeIn(4000);
	  	});

	  	setTimeout(function() {
		    var target = $('.intro');
	    	target.removeClass('animation');
	    	target.fadeOut(2000);
	    	$('.skip').fadeOut(2500);
	    	$('.next').fadeOut(2500);
	    	$('.logo').fadeOut(2500);
	    	$('.about-theme').fadeIn(4000);
		}, 38000);

	  	$('.next').on('click',function(){
	  		x=x+1;
	  		if(x==6){
	  			var target = $('.intro');
		    	target.removeClass('animation');
		    	target.fadeOut(2000);
		    	$('.skip').fadeOut(2500);
		    	$('.next').fadeOut(2500);
		    	$('.logo').fadeOut(2500);
		    	$('.about-theme').fadeIn(4000);
	  		}
	  		else{
	  			y = '.intro-text-wrapper.animation p:nth-child('+x+')';
		  		z = '.intro-text-wrapper.animation p:nth-child('+(x+1)+')';
		  		$(y).css('display','none');
		  		$(z).css('-webkit-animation-delay','1s');
		  		$(z).css('animation-delay','1s');
	  		}
	  		
	  	});
	});
var x=0;
