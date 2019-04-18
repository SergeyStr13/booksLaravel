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
			<a href="#" class="navbar-brand">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			        data-target="#navbarContent" aria-controls="navbarContent"
			        aria-expanded="false" aria-label="Toggle">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#about" class="nav-link" data-value="about">About</a>
					</li>
					<li class="nav-item">
						<a href="#portfolio" class="nav-link" data-value="portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a href="#contact" class="nav-link" data-value="contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>

		<header class="header">
			<div class="overlay"></div>
			<div class="container">
				<div class="description">
					<h3>Welcome
					<p>
						Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum
					</p>
					</h3>
					<button class="btn btn-outline-secondary">See more</button>

				</div>
			</div>
		</header>
		<main>
			<div class="about" id="about">
				<div class="container">
					<h1 class="text-center">About me</h1>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<img  src="/public/images/my-photo.png" class="img-fluid">
							<span class="text-justify">S.Web Developer</span>
						</div>

						<div class="col-lg-8 col-md-8 col-sm-12 desc">

							<h3 style="color: #3AC1EF">D.John</h3>
							<p>
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio" id="portfolio">
				<h1 class="text-center">Portfolio</h1>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<img align="center" src="/public/images/portfolio/port1.bmp" class="img-fluid">
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
								<h1>Get in Touch</h1>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 right">
								<div class="form-group">
									<input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
								</div>
								<div class="form-group">
									<textarea class="form-control form-control-lg">

									</textarea>
								</div>
								<input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
	</body>
</html>