(function($) {
	$(document).ready(function() {

		$('h1').on( "click", function( event ) {
			event.preventDefault();
    		$('.header').slideDown(135);
		});

		$('.close').on( "click", function( event ) {
			event.preventDefault();
    		$('.header').slideUp(135);
		});

	});
})(jQuery);