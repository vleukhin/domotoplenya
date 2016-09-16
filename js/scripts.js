(function ($) {
	$(document).ready(function () {
		$(document).on('click', '#menu a', function(event){
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
		});
	});
})(window.jQuery);