(function ($) {
	$(document).ready(function () {
		var $window = $(window);
		var menu = $('#menu');
		var offset = menu.offset().top;
		var header = $('header');
		var menuHeight = menu.height() + 36;
		var brands = $('#brands');

		var scrWidth  =0;

		if (self.screen) {
			scrWidth = screen.width;
		}
		else if (self.java) {
			var jkit = java.awt.Toolkit.getDefaultToolkit();
			var scrsize = jkit.getScreenSize();
			scrWidth = scrsize.width;
		}

		buildBrands();

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
					header.css('margin-bottom', '+' + menuHeight + 'px')
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

		$('#portfolio').find('ul').bxSlider({adaptiveHeight: true});

		$("input[name=phone]").mask('8 (999) 999 99 99');

		$('form').submit(function () {
			var $this = $(this);

			if ($this.find('input[name=phone]').val().length < 17) {
				$('#popup-error').modal();
			}
			else{
				$.post($(this).attr('action'), {
					'phone': $(this).find('input[name=phone]').val()
				}, function(data){
					if (data.success){
						$('#popup').modal();
						yaCounter41102594.reachGoal('order_call');
					}
					else{
						alert('Ошибка! Попробуйте позже');
					}
				});
			}

			return false;
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

		function buildBrands(){
			var brandsList = brands.find('.slideshow ul');

			var items = brandsList.find('.brand-wrapper');

			var limit = 1;

			if (scrWidth > 767 && scrWidth < 991){
				limit = 4
			}
			else if (scrWidth > 991) {
				limit = 6
			}

			var count = 0;

			brandsList.html('');

			var li = $('<li/>');

			items.each(function(index, item){
				count++;
				li.append(item);

				if (count == limit){
					brandsList.append(li);
					li = $('<li/>');
					count = 0;
				}
			});

			brands.find('ul').bxSlider({adaptiveHeight: true});
		}
	});
})(window.jQuery);