<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title>SteamOwl</title>
	<meta name="description" content="SteamOwl">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="images/favicon.png">
	<meta property="og:image" content="images/dest/preview.jpg">
	<link rel="stylesheet" href="css/app.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="ishome">

<header class="site-header-calculator">
			<nav class="navbar">
				<a href="https://www.steamowl.com.ua/" class="brand-title">SteamOwl</a>
				<a href="#" class="toggle-button">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</a>
				<div class="navbar-links">
					<ul>
						<li><a href="/main">Главная</a></li>
						<li><a href="#type-site">Тип сайта</a></li>
						<li><a href="#module">Выбор модулей</a></li>
						<li><a href="#design">Дизайн</a></li>
						<li><a href="#contacts">Контакты</a></li>
					</ul>
				</div>
			</nav>
			<div class="text-composation">
				<h1 class="h1">Калькулятор стоимости сайта</h1>
				<div class="welcom">
					<i class="icon left-img icon-keys_icon"></i>
					<div class="text-right">
						<div class="text-comp">
							<p>Добро пожаловать на страницу калькулятора стоимости сайта. Здесь Вы можете рассчитать стоимость создания сайта онлайн. Наш калькулятор полностью интерактивен, и Вы можете добавлять и исключать нужные компоненты формируя тем самым свой уникальный сайт.</p>
							<p>В какой валюте отображать цены?</p>
						</div>
						<div class="button-compl">
							<a id="currencyUA" class="neon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Гривны
							</a>
							<a id="currencyRUB" class="neon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Рубли
							</a>
							<a id="currencyUSD" class="neon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Доллары
							</a>
							<a id="currencyEUR" class="neon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Евро
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="global-prise">
	<div class="prise" id="prise">0</div><div class="curr" id="cur">ru</div>
</div>	

				<?php include 'php/views/main/'.$content_view; ?>		

				<section id="type-site" class="s-type-site">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="comp-h">
						<h2 class="h2">Тип сайта</h2>
						<div class="line"></div>
					</div>
					<div class="text-block">
						<p>Давайте определимся, с какой целью вам нужен сайт и выберем соответствующий ему тип. В зависимости от выбора, будут подобраны соответствующие модули.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div id="visit" class="type-compasition">
						<i class="icon img icon-contact"></i>
						<p class="title">Сайт визитка</p>
						<p class="text">Сайт вашего предприятия, либо ваш личный. Cодержит до 8 страниц и форму обратной связи.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div id="portal" class="type-compasition">
							<i class="icon img icon-contact"></i>
							<p class="title">Сайт портал</p>
							<p class="text">Форум, интерактивный блог, либо информативный развлекательный портал. Данный тип сайта является очень функциональным и позволяет создавать крупные проекты</p>
						</div>
					</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div id="magazin" class="type-compasition">
							<i class="icon img icon-contact"></i>
							<p class="title">Сайт магазин</p>
							<p class="text"> Ваш сайт на котором будет каталог товаров для продажи с возможностью покупки онлайн. Функционал сайта можно расширить за счет модулей</p>
						</div>
					</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="button-block">
						<a class="neon" href="#">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							Заказать
						</a>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<section id="module" class="s-module">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="comp-h">
						<h2 class="h2">Выбор модулей</h2>
						<div class="line"></div>
					</div>
					<div class="text-block">
						<p>Модули позволяют расширять функционал вашего сайта. В зависимости от типа сайта подбираются соответствующие модули. Но даже на сайт-визитку никто не мешает установить блог или каталог товаров.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div id="modul1" class="type-modul">
						<div class="heder-modul">
							<i class="icon img icon-menu"></i>
							<div class="title-modul">
								<div class="title">Каталог товаров</div>
							</div>
						</div>
						<div class="text-modul">
							Каталог товаров для интернет-магазина любого типа. Позволяет создавать категории и загружать товары через панель администратора.
						</div>
					</div>
					<div id="modul2" class="type-modul">
						<div class="heder-modul">
							<i class="icon img icon-menu"></i>
							<div class="title-modul">
								<div class="title">Каталог товаров</div>
							</div>
						</div>
						<div class="text-modul">
							Ваш личный сайт, либо сайт вашего предприятия. Как правило содержит до 8 страниц и форму обратной связи. Функционал сайта можно расширить за счет модулей, добавив фотогалерею и другие.
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
					<div class="type-modul">
						<div class="heder-modul">
							<i class="icon img icon-menu"></i>
							<div class="title-modul">
								<div class="title">Каталог товаров</div>
							</div>
						</div>
						<div class="text-modul">
							Ваш личный сайт, либо сайт вашего предприятия. Как правило содержит до 8 страниц и форму обратной связи. Функционал сайта можно расширить за счет модулей, добавив фотогалерею и другие.
						</div>
					</div>
					<div class="type-modul">
						<div class="heder-modul">
							<i class="icon img icon-menu"></i>
							<div class="title-modul">
								<div class="title">Каталог товаров</div>
							</div>
						</div>
						<div class="text-modul">
							Ваш личный сайт, либо сайт вашего предприятия. Как правило содержит до 8 страниц и форму обратной связи. Функционал сайта можно расширить за счет модулей, добавив фотогалерею и другие.
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="button-block">
						<a class="neon" href="#">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							Назад
						</a>
						<a class="neon" href="#">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							Продолжить
						</a>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section id="design" class="s-design">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="comp-h">
						<h2 class="h2">Дизайн сайта</h2>
						<div class="line"></div>
					</div>
					<div class="text-block">
						<p>Теперь необходимо определиться, в каком формате будет создаваться дизайн сайта. Все дизайны студии Logo - уникальны! Мы работаем с адаптивной версткой, что позволит вашему сайту выглядеть превосходно на любом устройстве! Стоимость разработки шаблона может отличатся в зависимости от сложности проета. Количество правок к согласованному макету предложенных заказчиком в процессе создания, увеличивает его стоимость.</p>
					</div>
				</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
						<div class="left-text">
							<i class="icon icon-website_design"></i>
							<div class="title">Индивидуальный дизайн</div>
							<div class="text">Адаптивный дизайн в котором все элементы согласовываются с заказчиком. Создается предварительный макет базовых страниц в формате PSD/PDF. Разработка занимает больше времени чем "дизайн от Pedanto".</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="disign-block">
							<div class="type-modul">
								<div class="heder-modul">
									<i class="icon img icon-menu"></i>
									<div class="title-modul">
										<div class="title">Каталог товаров</div>
									</div>
								</div>
								<div class="text-modul">
									Ваш личный сайт, либо сайт вашего предприятия. Как правило содержит до 8 страниц и форму обратной связи. Функционал сайта можно расширить за счет модулей, добавив фотогалерею и другие.
								</div>
							</div>
							<div class="type-modul">
								<div class="heder-modul">
									<i class="icon img icon-menu"></i>
									<div class="title-modul">
										<div class="title">Каталог товаров</div>
									</div>
								</div>
								<div class="text-modul">
									Ваш личный сайт, либо сайт вашего предприятия. Как правило содержит до 8 страниц и форму обратной связи. Функционал сайта можно расширить за счет модулей, добавив фотогалерею и другие.
								</div>
							</div>
						</div>	
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="button-block">
							<a class="neon" href="#">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Назад
							</a>
							<a class="neon" href="#">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Продолжить
							</a>
						</div>
					</div>
			</div>
		</div>	
	</section>			

				<section id="contacts" class="s-contacts">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="comp-h">
						<h2 class="h2">Контакты</h2>
						<div class="line"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="text-compasition">
						<p>Готовы сотрудничать?</p>
						<p>Сообщите нам</p>
						<img src="images/dest/icon_arrow_green.png" alt="(">
					</div>			
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<?php
					//проверяем, существуют ли переменные в массиве POST
					if(!isset($_POST['fio']) and !isset($_POST['email'])){
					?> 
					<form action="index.php" method="post" class="login-form">
						<label><input class="inputText" name="fio" type="text" placeholder="Username" name="user"></label>
						<label><input class="inputText" name="email" type="text" placeholder="Email" name="email"></label>
						<label><textarea class="inputText" name="comment" placeholder="Опишите вашу идею" cols="45" rows="8"></textarea></label>
						<a class="neon">
							<input type="submit" value='ЗАКАЗАТЬ'>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</a>
					</form>
					<?php
						} else {
						//показываем форму
						$fio = $_POST['fio'];
						$email = $_POST['email'];
						$comment = $_POST['comment'];
						$fio = htmlspecialchars($fio);
						$email = htmlspecialchars($email);
						$comment = htmlspecialchars($comment);
						$fio = urldecode($fio);
						$email = urldecode($email);
						$comment = urldecode($comment);
						$fio = trim($fio);
						$email = trim($email);
						$comment = trim($comment);
						if (mail("iur.yaroslav@gmail.com", "Заявка с сайта", "ФИО:".$fio.".E-mail: ".$email , "comment".$comment)){
						echo "Сообщение успешно отправлено";
						} else {
						echo "При отправке сообщения возникли ошибки";
						}
						}
						?>
				</div>
			</div>
		</div>
	</section>

	<div class="main-footer">
		<nav class="navbar">
			<a href="https://www.steamowl.com.ua/" class="brand-title">SteamOwl</a>
			<div class="email">Емаил: asdf@gmail.com</div>
			<div class="footer-links">
				<ul>
					<li><a href="https://uk-ua.facebook.com"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://t.me/joinchat/"><i class="fa fa-telegram"></i></a></li>
				</ul>
			</div>
		</nav>
	</div>		

	<script src="js/app.min.js"></script>

</body>
</html>					