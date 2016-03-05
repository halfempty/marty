(function($) {

	function setMargin() {

		var headertop = 0;

		if ($('#wpadminbar').length != 0) {

			headertop =+ $('#wpadminbar').outerHeight();

			$('.wpadminbarspacer').css({'height': headertop + 'px'});

		}

		var topTitle = $('.header h1').outerHeight();
		$('.layoutspacer').css({'height': topTitle + 'px'});

	}


	$(document).ready(function() {

		setMargin();

		$('h1').on( "click", function( event ) {
			event.preventDefault();
    		$(this).hide();
    		$('.nav').show();
			$('body').addClass('navopen');
		});

		$('.close').on( "click", function( event ) {
			event.preventDefault();
			$('.nav').hide();
			$('.searchbox').hide();
			$('h1').show();	
			$('body').removeClass('navopen');
		});

		$('a.searchtoggle').on( "click", function( event ) {
			event.preventDefault();
			console.log('hi');
			$('.searchbox').slideToggle('fast');
		});


	});

	$(window).load(function(){
		setMargin();
	});

})(jQuery);