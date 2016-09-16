(function ($) {
	$(document).ready(function () {
		$(document).on('click', '#menu a', function(event){
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);
		});

		var $window = $(window);
		var menu = $('#menu');
		var offset = menu.offset().top;
		var header = $('header');
		var height = menu.height() + 36;

		$window.scroll(function(){
			var scroll = $window.scrollTop();

			if (scroll >= offset){
				if (!menu.hasClass('sticky')){
					menu.addClass('sticky');
					header.css('margin-bottom', '+' + height + 'px')
				}
			}
			else if (menu.hasClass('sticky')) {
				menu.removeClass('sticky');
				header.css('margin-bottom', '')

			}
		});
	});
})(window.jQuery);