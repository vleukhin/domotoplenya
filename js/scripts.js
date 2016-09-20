(function ($) {
	$(document).ready(function () {
		var $window = $(window);
		var menu = $('#menu');
		var offset = menu.offset().top;
		var header = $('header');
		var height = menu.height() + 36;

		$(document).on('click', '#menu a', function (event) {
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $($.attr(this, 'href')).offset().top - menu.height()
			}, 500);
		});

		$window.scroll(function () {
			var scroll = $window.scrollTop();

			if (scroll >= offset) {
				if (!menu.hasClass('sticky')) {
					menu.addClass('sticky');
					header.css('margin-bottom', '+' + height + 'px')
				}
			}
			else if (menu.hasClass('sticky')) {
				menu.removeClass('sticky');
				header.css('margin-bottom', '')

			}
		});

		$('.images img').click(function () {
			var $this = $(this);

			if (!$this.hasClass('active')) {
				$this.closest('.images').find('.active').removeClass('active');
				$this.addClass('active');
				$this.closest('.job').find('img.main').attr('src', $this.attr('src'));
			}
		});

		$('#portfolio').find('ul').bxSlider();
		$('#brands').find('ul').bxSlider();

		$("input[name=phone]").mask('8 (999) 999 99 99');

		$('form').submit(function () {
			var $this = $(this);

			if ($this.find('input[name=phone]').val().length < 17) {
				alert('Пожалуйста, проверьте правильно ли введен телефон');
				return false;
			}
		});

		var certLongBlock = $('.certificate__longblock');

		function certificatleft() {
			if (certLongBlock.css('left') != '0px') return;
			var width = certLongBlock.find('.certificate-item:first').width();
			certLongBlock.animate({'left': -width - 20}, 1000, function () {
				certLongBlock.css('left', '0px');
				certLongBlock.find('.certificate-item:first').detach().appendTo('.certificate__longblock');
			});
		}

		function certificatright() {
			if (certLongBlock.css('left') != '0px') return;
			var width = certLongBlock.find('.certificate-item:last').width();
			certLongBlock.css('left', -width - 20);
			certLongBlock.find('.certificate-item:last').detach().prependTo('.certificate__longblock');
			certLongBlock.animate({'left': '0px'}, 1000);
		}

		$('.certificate__arrow_left').click(certificatleft);
		$('.certificate__arrow_right').click(certificatright);

		$('.fb').fancybox();
	});
})(window.jQuery);