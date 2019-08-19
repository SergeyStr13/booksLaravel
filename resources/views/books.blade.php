
@extends('layouts.app')

@section('content')
<div class="panel-body">
	@if (count($errors) > 0)
	  <!-- Список ошибок формы -->
	  <div class="alert alert-danger">
		<strong>Упс! Что-то пошло не так!</strong>

		<br><br>

		<ul>
		  @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		  @endforeach
		</ul>
	  </div>
	@endif

	<form action="{{ url('/bookAdd')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div>
			<label>Книга</label>
			<input type="text" name="title" id="title" class="">
			<input type="text" name="description" id="description" class="">
			<input type="text" name="author" id="author" class="">
			<input type="file" name="link" id="link" class="">
		</div>

		<div>
			<button type="submit">Добавить</button>
		</div>
	</form>

	<div style="clear: both"></div>
	<div class="books" style="">
		<table>
			<caption>Список книг</caption>
			<tr>
				<th>Название</th>
				<th>Авторы</th>
				<th>Описание</th>
				<th>Файл</th>

				<th></th>
			</tr>
			@foreach($books as $book)
				<tr>
					<td width="200px">{{$book->title}}</td>
					<td width="200px">{{$book->author}}</td>
					<td width="200px">{{$book->description}}</td>
					<td width="200px"><a href="{{ $link }}">{{$book->link}}</a></td>
					<td><a href="/books/download/{{$book->id}}">Загрузить</a></td>
					<td><a href="/bookDelete/{{ $book->id }}">Удалить</a></td>
				</tr>
			@endforeach
		</table>
	</div>

</div>
@endsection