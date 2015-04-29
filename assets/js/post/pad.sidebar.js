
$(document).ready(function() {
	$(window).resize(function(e) {
		$('#sidebar').children('#menu, #footer').each(function(i,e) {
			// FIRST (TOP)
			$(e).filter(':first-child').parents('#sidebar').css( 'padding-top'   , $(e).outerHeight() );
			// LAST (BOTTOM)
			$(e).filter(':last-child').parents('#sidebar').css( 'padding-bottom', $(e).outerHeight() );
		});
	});
	$(window).trigger('resize')
});