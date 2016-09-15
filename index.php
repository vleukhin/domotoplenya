<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico">

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	<title>Центр инженерных систем</title>

	<script>
		$(window).on('resize', function () {
			console.log(window.innerWidth)
		})
	</script>
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
					<div>Почта для заявок <span class="phone">info@hotklimat.ru</span></div>
				</div>
			</div>
		</div>
	</header>
	<div id="menu">
		<nav>
			<ul>
				<li><a href="#">О компании</a></li>
				<li><a href="#">Наши бренды</a></li>
				<li><a href="#">Выбор отопления</a></li>
				<li><a href="#">Наши работы</a></li>
				<li><a href="#">Отзывы</a></li>
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
						<form action="#">
							<input class="base-input white-input" type="text" placeholder="Введите свой номер">
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
			Мы работаем на рынке строительных систем <span>с 2008 года</span>. Мы обустроили <br><span>более 2 000 домов</span> и предоставляем нашим клиентам полное сопровождение их заявок<br> <span>«под ключ»</span>: от первого звонка до сдачи проектной документации и помощи в эксплуатации.
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 work-flow">
					<h1>Как мы работаем:</h1>
					<ul>
						<li><span>1</span> <i class="icon phone"></i> <div> Бесплатно консультируем Вас<br> по телефону</div></li><li class="clearfix"></li>
						<li><span>2</span> <i class="icon man"></i> <div>Наш инженер выезжает<br> на Ваш объект</div></li><li class="clearfix"></li>
						<li><span>3</span> <i class="icon edit"></i> <div>Подбираем отопительную систему <br> по Вашим параметрам</div></li><li class="clearfix"></li>
						<li><span>4</span> <i class="icon maintain"></i> <div>Производим монтаж оборудования</div></li><li class="clearfix"></li>
						<li><span>5</span> <i class="icon thumb"></i> <div>Запускаем оборудование<br> под нашим контролем</div></li><li class="clearfix"></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 form">
					<div>
						<div class="dialog">
							— С чего начать?
							<p>— С консультации!</p>
						</div>
						<div class="left-number">Оставьте свой номер,<br>и мы перезвоним вам в течение 30 секунд</div>
						<form action="#">
							<input class="base-input white-input" type="text" placeholder="Введите свой номер">
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
</div>
</body>
</html>