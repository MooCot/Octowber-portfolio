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

	<body>
	<header class="site-header lazy" data-src="images/dest/MountainFullHD.jpg">
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
							<li><a href="#portfolio">Портфолио</a></li>
							<li><a href="#services">Услуги</a></li>
							<li><a href="#contacts">Контакты</a></li>
							<li><a href="/calculator">Калькулятор</a></li>
						</ul>
					</div>
				</nav>
				<div class="header-container">
					<div class="header-composation">
						<div class="left-text">
							<p> Лучшие програмные<br>
								решения для бизнеса от
							</p>
							<h1 class="h1">SteamOwl</h1>
							<p> Вы можете произвести предварительную оценку работ в нашем <span>калькуляторе</span></p>
						</div>
						<div class="right-form">
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
					<div class="down-button">
						<a href="#my-content">
							<i class="icon_icon_arrow_circle"></i>
						</a>
					</div>
				</div>
			</header>
	

					<?php include 'php/views/main/'.$content_view; ?>

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