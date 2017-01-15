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
		  		 $(y).css('display','none');
		  		$('.intro-text-wrapper.animation p').each(function(){
		  			var delay = $(this).css('animation-delay');
		  			delay = delay.slice(0, -1);
		  			delay = delay -4;
		  			delay=delay+'s';
		  			console.log(delay);
		  			$(this).css('animation-delay', delay );
		  			$(this).css('-webkit-animation-delay', delay );
		  		});

	  		}
	  		
	  	});
	});
var x=0;
