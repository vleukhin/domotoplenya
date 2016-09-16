(function ($) {
	$(document).ready(function () {
		var $window = $(window);
		var menu = $('#menu');
		var offset = menu.offset().top;
		var header = $('header');
		var height = menu.height() + 36;

		$(document).on('click', '#menu a', function(event){
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $( $.attr(this, 'href') ).offset().top - menu.height()
			}, 500);
		});

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

		$('.images img').click(function(){
			var $this = $(this);

			if(!$this.hasClass('active')){
				$this.closest('.images').find('.active').removeClass('active');
				$this.addClass('active');
				$this.closest('.job').find('img.main').attr('src', $this.attr('src'));
			}
		});

		$('#portfolio ').find('ul').bxSlider();
	});
})(window.jQuery);