<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laravel Quickstart - Basic</title>

    <!-- CSS и JavaScript -->
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <!--  -->
		  <li><a href="#">Книги</a></li>
		  <li><a href="#">Пользователи</a></li>
      </nav>
    </div>

    @yield('content')
  </body>
</html>