<?php
$popup = false;

if (isset($_POST['phone'])) {
	mail('Nina.Rechistova@ya.ru', 'Вас просят перезвонить с лендинга Домотопления', "Клиент оставил телефон: ({$_POST['phone']}).");
	$popup = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico">

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/jquery.mask.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bxSlider Javascript file -->
	<script src="js/bxslider/jquery.bxslider.js"></script>
	<!-- bxSlider CSS file -->
	<link href="js/bxslider/jquery.bxslider.css" rel="stylesheet"/>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	<title>Центр инженерных систем</title>
</head>
<body>
<div id="page">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-xs-12 logo">
					<div></div>
				</div>
				<div class="col-sm-4 col-xs-12 call">
					<div>Звоните на бесплатный номер</div>
					<span class="phone">8 800 775 85 94</span>
				</div>
				<div class="col-sm-4 col-xs-12 contacts">
					<div>Москва <span class="phone">8 495 255 44 50</span></div>
					<div>Тула <span class="phone">8 495 255 44 50</span></div>
					<div>Почта для заявок <span class="phone"><a
								href="mailto:info@hotklimat.ru">info@hotklimat.ru</a></span></div>
				</div>
			</div>
		</div>
	</header>

	<div id="menu">
		<nav>
			<ul>
				<li><a href="#flow">О компании</a></li>
				<li><a href="#brands">Наши бренды</a></li>
				<li><a href="#types">Выбор отопления</a></li>
				<li><a href="#portfolio">Наши работы</a></li>
				<li><a href="#reviews">Отзывы</a></li>
			</ul>
		</nav>
	</div>

	<div id="slogan">
		<div class="logo-bg">
			<div class="heading">
				Отопление <br>частного дома <br> под ключ
			</div>
			<div class="locations">
				Москва и область <br>
				Тула и область
			</div>
		</div>
	</div>

	<div id="services">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 list">
					<ul>
						<li>Все виды отопления</li>
						<li>Комплектующие по оптовым ценам</li>
						<li>Только известные бренды</li>
						<li>Гарантия на работы</li>
						<li>Гарантия на оборудование</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 form">
					<div class="info">
						Наши специалисты подберут для вас оптимальный вариант отопления. <br>
						Мы не берем денег за консультацию. <br><br>
						Звоните на бесплатный номер<br>
						<span>8 800 775 85 94</span><br><br>
						Или мы позвоним Вам сами <br><br>
						<form method="POST">
							<input class="base-input white-input" type="text" name="phone" placeholder="Введите свой номер">
							<input class="base-input red-button" type="submit" value="Заказать звонок">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="flow">
		<h1><span class="logo-short"></span>Центр инженерных систем</h1>
		<div class="about">
			Мы работаем на рынке строительных систем <span>с 2008 года</span>. Мы обустроили
			<br><span>более 2 000 домов</span> и предоставляем нашим клиентам полное сопровождение их заявок<br> <span>«под ключ»</span>:
			от первого звонка до сдачи проектной документации и помощи в эксплуатации.
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 work-flow">
					<h1>Как мы работаем:</h1>
					<ul>
						<li>
							<span>1</span> <i class="icon phone"></i>
							<div> Бесплатно консультируем Вас<br> по телефону</div>
						</li>
						<li class="clearfix"></li>
						<li>
							<span>2</span> <i class="icon man"></i>
							<div>Наш инженер выезжает<br> на Ваш объект</div>
						</li>
						<li class="clearfix"></li>
						<li>
							<span>3</span> <i class="icon edit"></i>
							<div>Подбираем отопительную систему <br> по Вашим параметрам</div>
						</li>
						<li class="clearfix"></li>
						<li>
							<span>4</span> <i class="icon maintain"></i>
							<div>Производим монтаж оборудования</div>
						</li>
						<li class="clearfix"></li>
						<li>
							<span>5</span> <i class="icon thumb"></i>
							<div>Запускаем оборудование<br> под нашим контролем</div>
						</li>
						<li class="clearfix"></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 form">
					<div>
						<div class="dialog">
							— С чего начать?
							<p>— С консультации!</p>
						</div>
						<div class="left-number">Оставьте свой номер и мы перезвоним вам в ближайшее время</div>
						<form method="POST">
							<input class="base-input white-input" type="text" name="phone" placeholder="Введите свой номер">
							<input class="base-input red-button" type="submit" value="Заказать звонок">
						</form>
						<div class="call">
							Или звоните на бесплатный номер <br>
							<span>8 800 775 85 94</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="brands">
		<h1>Наши бренды</h1>
		<div class="desc">
			Мы <span>знаем всех</span> игроков рынка и сможем предложить Вам <br>
			оптимальный вариант по параметрам <span>цена/качество</span>.
		</div>
		<div class="container-fluid slideshow">
			<div class="row">
				<ul>
					<li>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/1BAXI.JPG" alt="" class="logo">
								<div class="descr">
									BAXI GROUP является одной из крупнейших и наиболее профессиональных компаний в области отопления и домашнего комфорта, занимая по количеству производимых отопительного оборудования 3-е место в Европе.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/2WATTEK.JPG" alt="" class="logo">
								<div class="descr">
									WATTEK — передовой разработчик решений в области систем отопления зданий.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/3DeDietrich.JPG" alt="" class="logo">
								<div class="descr">
									De Dietrich производитель отопительной техники номер один во Франции. Приоритеты: экономия энергии и защита окружающей среды.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/4Buderus.JPG" alt="" class="logo">
								<div class="descr">
									Buderus – это комплексный поставщик современной энергоэффективной отопительной техники и систем комфортного климата
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/5Meibes.JPG" alt="" class="logo">
								<div class="descr">
									Майбес - «Энергоэффективная техника. Компания применяет передовые достижения, бережно относится к природным ресурсам и использует альтернативные источники энергии.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/6Oventrop.JPG" alt="" class="logo">
								<div class="descr">
									Oventrop является одним из ведущих производителей арматуры для инженерных коммуникаций
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/7Elsen.JPG" alt="" class="logo">
								<div class="descr">
									ELSEN Systems представляет инновационные и высококачественные продукты для организации систем отопления и водоснабжения зданий.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/8Kermi.JPG" alt="" class="logo">
								<div class="descr">
									Kermi - системы отопления и Dusch-Design на протяжении более 50 лет.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/9Rehau.JPG" alt="" class="logo">
								<div class="descr">
									REHAU – безупречное немецкое качество, основанное на выдающихся инновациях и высокой надежности.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/10Giacomini.JPG" alt="" class="logo">
								<div class="descr">
									Продукция GIACOMINI предназначена для систем, где основой и движущей силой является вода, которая приносит людям комфорт, здоровье и благополучие.
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/11ACV.JPG" alt="" class="logo">
								<div class="descr">
									Компания ACV занимается разработкой, производством и продажей бытовых и промышленных систем обогрева и оборудования для горячего водоснабжения с 1922 года
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="brand">
								<img src="images/brands/12reflex.JPG" alt="" class="logo">
								<div class="descr">
									Reflex Winkelmann GmbH - ведущий мировой поставщик решений, использующихся в системах тепло-и холодоснабжения зданий.
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="certificate">
		<h1 class="certificate__title">Наши сертефикаты</h1>
		<div class="certificate__wrapper">
			<div class="certificate__longblock">
				<div class="certificate-item">
					<a class="certificate-item__image fb" rel="certificate" href="/images/certificates/5Meibes.jpg"><img src="/images/certificates/5Meibes.jpg" alt=""></a>
					<p class="certificate-item__title"></p>
				</div>

				<div class="certificate-item">
					<a class="certificate-item__image fb" rel="certificate" href="/images/certificates/9Rehau.jpg"><img src="/images/certificates/9Rehau.jpg" alt=""></a>
					<p class="certificate-item__title"></p>
				</div>

				<div class="certificate-item">
					<a class="certificate-item__image fb" rel="certificate" href="/images/certificates/x-004.eb0.jpg"><img src="/images/certificates/x-004.eb0.jpg" alt=""></a>
					<p class="certificate-item__title"></p>
				</div>

				<div class="certificate-item">
					<a class="certificate-item__image fb" rel="certificate" href="/images/certificates/10Giacomini.jpg"><img src="/images/certificates/10Giacomini.jpg" alt=""></a>
					<p class="certificate-item__title"></p>
				</div>

				<div class="certificate-item">
					<a class="certificate-item__image fb" rel="certificate" href="/images/certificates/x-007.eb0.jpg"><img src="/images/certificates/x-007.eb0.jpg" alt=""></a>
					<p class="certificate-item__title"></p>
				</div>

			</div>
		</div>
	</div>


	<div id="types">
		<h1>Выбор отопления</h1>
		<div class="desc">
			Системы отопления различаются <span>энергоносителями</span><br>
			и <span>конструктивными элементами</span>. Каждый вид отопительной системы имеет свои <br> <span>преимещества и недостатки</span>.
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 type">
					<div class="title">
						<img src="images/types/electro.png" alt="">
						<div class="name">Электрическое отопление (инфракрасное <br>или конвекторное)</div>
					</div>
					<div class="descr">
						<div class="advantages">
							+ Простота монтажа и эксплуатации <br>
							+ Отсутствие сложного и дорогостоящего оборудования <br>
							+ Компактность узла отопления <br>
							+ Возможность регулировки подачи тепла <br>
							+ Низкий уровень шума <br>
							+ Экологическая безопасность <br>
						</div>
						<div class="disadvantage">- Высокая стоимость электроэнергии</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 type">
					<div class="title">
						<img src="images/types/electro.png" alt="">
						<div class="name">Воздушное отопление</div>
					</div>
					<div class="descr">
						<div class="advantages">
							+ Высокая скорость нагрева<br>
							+ Высокий уровень КПД (80-90%)<br>
							+ Возможность организации системы приточно-вытяжной вентиляции<br>
							+ Установка системы канального кондиционирования<br>
							+ Возможность установки увлажнителя воздуха<br>
							+ Исключение протекания и замерзания системы<br>
						</div>
						<div class="disadvantage">
							- Большие размеры теплогенератора<br>
							- Низкий уровень теплоотдачи<br>
							- Дороговизна системы<br>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 type">
					<div class="title">
						<img src="images/types/gas.jpg" alt="">
						<div class="name">Газовое отопление</div>
					</div>
					<div class="descr">
						<div class="advantages">
							+ Экономичный расход материалов<br>
							+ Высокий уровень теплоемкости: теплоемкость воды превышает в 4000 раз теплоемкость воздуха,
							нагретого до той же температуры<br>
							+ Комфортный температурный режим<br>
						</div>
						<div class="disadvantage">
							- Трудоемкость монтажа и эксплуатации<br>
							- Постоянный контроль за работой генератора тепла<br>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 type">
					<div class="title">
						<img src="images/types/mixed.jpg" alt="">
						<div class="name">Комбинированное<br> отопление</div>
					</div>
					<div class="descr">
						<div class="advantages">
							+ Высокий уровень КПД (80%)<br>
							+ Экономичность<br>
							+ Экологическая безопасность<br>
							+ Получение энергии из всех доступных источников<br>
							+ Рациональное распределение энергии в системе<br>
							+ Возможность монтажа в отстроенном зданнии, оборудованном другой системой отопления<br>
						</div>
						<div class="disadvantage">
							- Большие денежные затраты при покупке и установке оборудования<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="choise">
		<div>
			<h1>
				Наши специалисты помогут Вам выбрать
				отопительную систему
			</h1>
			<div class="left-number">Оставьте свой номер и мы перезвоним вам в ближайшее время</div>
			<form method="POST">
				<input class="base-input white-input" type="text" name="phone" placeholder="Введите свой номер">
				<input class="base-input red-button" type="submit" value="Заказать звонок">
			</form>
			<div class="call">
				Или звоните на бесплатный номер <br>
				<span>8 800 775 85 94</span>
			</div>
		</div>
	</div>

	<div id="portfolio">
		<h1>Наши работы</h1>
		<ul>
			<li>
				<div class="job">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-7">
								<img src="images/portfolio/1/1.jpg" alt="" class="main">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5">
								<div class="title">
									Московская область, <br>Раменский р-н,<br> п. Сельцо
								</div>
								<div class="descr">
									котел: <span>Buderus Германия</span><br>
									бойлер: <span>Reflex Германия</span><br>
									радиаторы: <span>Zehnder Германия</span><br>
									внутрипольные конвектора: <span>Elsen</span><br>
									система: <span>двухтрубная</span><br>
									способ прокладки: <span>скрытый</span><br>
									трубопровод: <span>сшитый полиэтилен – Elsen Чехия</span><br>
									теплый пол: <span>сшитый полиэтилен – Elsen Чехия</span><br>
								</div>
								<div class="images">
									<img src="images/portfolio/1/1.jpg" alt="" class="thumb active">
									<img src="images/portfolio/1/2.jpg" alt="" class="thumb">
									<img src="images/portfolio/1/3.jpg" alt="" class="thumb">
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="job">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-7">
								<img src="images/portfolio/2/1.jpg" alt="" class="main">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5">
								<div class="title">
									Московская область, <br>Домодедовский городской округ,<br> КП Фламандия
								</div>
								<div class="descr">
									котел: <span>Baxi Италия</span><br>
									бойлер: <span>ACV Бельгия</span><br>
									радиаторы: <span>Elsen Чехия</span><br>
									внутрипольные конвектора: <span>Elsen</span><br>
									оборудование котельной: <span>Meibes, KME Германия</span><br>
									система: <span>лучевая</span><br>
									способ прокладки: <span>скрытый</span><br>
									трубопровод: <span>сшитый полиэтилен – Elsen Швеция</span><br>
									теплый пол: <span>сшитый полиэтилен – Rehau Германия</span><br>
								</div>
								<div class="images">
									<img src="images/portfolio/2/1.jpg" alt="" class="thumb active">
									<img src="images/portfolio/2/2.jpg" alt="" class="thumb">
									<img src="images/portfolio/2/3.jpg" alt="" class="thumb">
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="job">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-7">
								<img src="images/portfolio/3/1.jpg" alt="" class="main">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5">
								<div class="title">
									Тула
								</div>
								<div class="descr">
									котел: <span>Buderus Германия</span><br>
									бойлер: <span>Buderus Германия</span><br>
									радиаторы: <span>Elsen Чехия</span><br>
									внутрипольные конвектора: <span>Elsen</span><br>
									оборудование котельной: <span>Buderus, KME Германия</span><br>
									система: <span>лучевая</span><br>
									способ прокладки: <span>скрытый</span><br>
									трубопровод: <span>сшитый полиэтилен – Rehau Германия</span><br>
									теплый пол: <span>сшитый полиэтилен – Rehau Германия</span><br>
								</div>
								<div class="images">
									<img src="images/portfolio/3/1.jpg" alt="" class="thumb active">
									<img src="images/portfolio/3/2.jpg" alt="" class="thumb">
									<img src="images/portfolio/3/3.jpg" alt="" class="thumb">
									<img src="images/portfolio/3/4.jpg" alt="" class="thumb">
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="job">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-7">
								<img src="images/portfolio/3/1.jpg" alt="" class="main">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5">
								<div class="title">
									Москва, <br>КП Сосновый бор
								</div>
								<div class="descr">
									котел: <span>Vaillant Германия</span><br>
									бойлер: <span>ACV Бельгия</span><br>
									радиаторы: <span>Elsen Чехия</span><br>
									оборудование котельной: <span>Meibes, KME Германия</span><br>
									система: <span>лучевая</span><br>
									способ прокладки: <span>скрытый</span><br>
									трубопровод: <span>сшитый полиэтилен – Giacomini , Италия</span><br>
									теплый пол: <span>сшитый полиэтилен – Giacomini , Италия</span><br>
								</div>
								<div class="images">
									<img src="images/portfolio/4/1.jpg" alt="" class="thumb active">
									<img src="images/portfolio/4/2.jpg" alt="" class="thumb">
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>

	</div>

	<div id="reviews">
		<h1>Отзывы</h1>
		<div class="desc">
			За 8 лет работы нашими клиентами стали более 200 физ. и юр. лиц.<br>
			После выполнения работы мы <span>всегда остаемся на связи</span> и помогаем<br>
			адаптироваться к новому отопительному оборудованию.<br>
			Многи обращаются к нам повторно и рекомендуют своим друзьям.<br>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 review">
					<div class="text">
						<p><span>«</span>При выборе подрядчика на оборудование дома отоплением, водопроводом и
							канализацией из трех компаний выбрала Центр Инженерных Систем. Подкупила техническая
							подкованность специалистов. Монтажники все сделали быстро и аккуратно. При отделке дома
							компания сопровождала эти работы. Осталась очень довольна.<span>»</span>
					</div>
					<div class="name">Елена Николаевна</div>
					<div class="location">Подольский район</div>
				</div>
				<div class="col-xs-12 col-sm-6 review">
					<div class="text">
						<p><span>«</span>Компания Центр Инженерных Систем сделала подбор и расчет отопительной системы в
							мой дом. У меня был не стандартный заказ, но все разрулили и помогли решить сложные вопросы.
							Поставку оборудования сделали быстро. Понравилось, как работают монтажники. Спасибо ребятам.<span>»</span>
					</div>
					<div class="name">Алексей</div>
					<div class="location">г. Тула</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 review">
					<div class="text">
						<p><span>«</span>Обратился в компанию Центр Инженерных Систем. Сделали мне три варианта
							расчетов. Помогли с выбором оборудования. Пошли мне на встречу и поставку материала сделали
							в три этапа. Когда строил дом, канализацию заложили сразу те, кто мне строил. При проверке
							компанией Центр Инженерных Систем, оказалось, что есть ряд проблем с канализацией. Исправили
							огрехи очень быстро. Так же помогли с выбором септика. <span>»</span>
					</div>
					<div class="name">Игорь</div>
					<div class="location">Раменский район</div>
				</div>
				<div class="col-xs-12 col-sm-6 review">
					<div class="text">
						<p><span>«</span>Обратился в компанию Центр Инженерных Систем за консультацией по септику. Объяснили все понятно, после смонтировали. Далее решил поработать с компанией по оборудованию дома системой отопления. Сначала все рассчитали, потом по моей просьбе показали на другом объекте как производиться монтаж. Меня все устроило. После этого приступили к моему дому. Результат оправдал ожидания. Очень все понравилось.<span>»</span>
					</div>
					<div class="name">Павел</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<h1>Задайте вопрос нашему консультанту и получите <br>квалифицированный ответ.</h1>
		<div class="no-money">Мы не берем денег за консультацию.</div>
		<div>
			<form method="POST">
				<span>Закажите звонок</span>
				<input class="base-input white-input" type="text" name="phone" placeholder="Введите свой номер">
				<input class="base-input red-button" type="submit" value="Заказать звонок">
			</form>
		</div>
		<div class="contacts">
			<div>Или звоните на бесплатный номер <span>8 800 775 85 94</span></div>
			<div>Мы ответим на все заявки, которые Вы пришлете на почту <span><a href="mailto:info@hotklimat.ru">info@hotklimat.ru</a></span>
			</div>
		</div>
	</footer>
</div>
<!-- Modal -->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="clearfix"></div>
			<h1>Ваш запрос принят!</h1>
			<p>Мы обязательно свяжемся с Вами.</p>
		</div>
	</div>
</div>
<?php if ($popup): ?>
	<script>
		(function ($) {
			$(document).ready(function () {
				$('#popup').modal();
			});
		})(window.jQuery);
	</script>
<?php endif;?>
</body>
</html>