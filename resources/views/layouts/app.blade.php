<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Laravel Books - Basic</title>

		<!-- CSS и JavaScript -->
		<link href="/public/bootstrap4/css/bootstrap.css">
		<script src="/public/bootstrap4/js/bootstrap.js"></script>
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<!--  -->
				<ul>
					<li><a href="#">Книги</a></li>
					<li><a href="#">Пользователи</a></li>
				</ul>
			</nav>
		</div>

		@yield('content')
	</body>
</html>
