<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>About my</title>
		<!-- CSS и JavaScript -->
		<link href="/public/bootstrap4/css/bootstrap.css" rel="stylesheet">
		<link href="/public/css/about.css" rel="stylesheet">
		<script src="/public/js/jquery-3.4.0.js"></script>
		<script src="/public/bootstrap4/js/bootstrap.js"></script>
		<script src="/public/js/about.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg fixed-top">
			<a href="#" class="navbar-brand">Главная</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			        data-target="#navbarContent" aria-controls="navbarContent"
			        aria-expanded="false" aria-label="Toggle">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#about" class="nav-link" data-value="about">О проектах</a>
					</li>
					<li class="nav-item">
						<a href="#portfolio" class="nav-link" data-value="portfolio">Наши проекты</a>
					</li>
					<li class="nav-item">
						<a href="#contact" class="nav-link" data-value="contact">Контакты</a>
					</li>
				</ul>
			</div>
		</nav>

		<header class="header">
			<div class="overlay"></div>
			<div class="container">
				<div class="description">
					<h3>Добро пожаловать
					<p>
						Заказчик и подрядчик вынуждены играть по разные стороны. Заказчик хочет сделать как можно больше. Подрядчик экономит на качестве, пытаясь закрыть контракт.

						В результате такого взаимодействия рождаются проекты, которые не решают истинных целей заказчика, а подрядчику стыдно их показывать в своем портфолио.
					</p>
					</h3>
					<button class="btn btn-outline-secondary">Подробнее</button>

				</div>
			</div>
		</header>
		<main>
			<div class="about" id="about">
				<div class="container">
					<h1 class="text-center">О нас</h1>
					<div class="row">
					{{--	<div class="col-lg-4 col-md-4 col-sm-12">
							<img  src="/public/images/my-photo.png" class="img-fluid">
							<span class="text-justify">S.Web Developer</span>
						</div>--}}

						<div class="col-lg-8 col-md-8 col-sm-12 desc">

							<h3 style="color: #3AC1EF">Что такое проект</h3>
							<p>
								Нельзя назвать проектом любую задумку или идею, которую невозможно реализовать. Это определенный механизм, цель которого состоит в достижении поставленной цели и внедрении разработки в практическую деятельность. Итак, признаки проекта:
								<ul>
									<li>Существует определенная дата начала процесса проектирования.</li>
									<li>Когда заканчиваются этапы разработки проекта, нужно отметить в календаре или документах, если они есть, дату окончания работы или представить конечный результат.</li>
									<li>Конечный результат проектирования должен быть новым, ранее неизвестным. Не обязательно при этом добиваться полной уникальности. Достаточно того, что результат будет открытием для членов команды, работающей над проектом.</li>
									<li>Для разработки проекта необходимы определенные ресурсы. Они всегда ограничены.</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio" id="portfolio">
				<h1 class="text-center">Наши проекты</h1>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<img align="center" src="/public/images/portfolio/port1.jpg" class="img-fluid">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<img align="center" src="images/portfolio/port2.jpg" class="img-fluid">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<img align="center" src="images/portfolio/port3.jpg" class="img-fluid">
						</div>
					</div>
				</div>
			</div>

			<!-- Contact form -->
			<div class="contact-form" id="contact">
				<div class="container">
					<form>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<h1>Напишите нам</h1>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 right">
								<div class="form-group">
									<input type="text" class="form-control form-control-lg" placeholder="Ваше имя" name="">
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-lg" placeholder="Ваш Email@email.com" name="email">
								</div>
								<div class="form-group">
									<textarea class="form-control form-control-lg">

									</textarea>
								</div>
								<input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="">
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
	</body>
</html>