<?php /** @var \App\Book[] $books */?>
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

	<div style="clear: both"></div>
	<div class="container books" style="">

		<table>
			<caption>Список книг</caption>
			<tr>
				<th>Название</th>
				<th>Авторы</th>
				<th>Описание</th>
				<th>Создан</th>
				<th>Файл</th>

				<th></th>
			</tr>
			@foreach($books as $book)
				<tr>
					<td>{{$book->title}}</td>
					<td>{{$book->authors}}</td>
					<td>{{$book->description}}</td>
					<td>{{$book->user->name}}</td>
					<td><a href="{{ $link }}">{{$book->originNameLink}}</a></td>
					<td><a href="/books/update/{{$book->id}}">Редактировать</a></td>
					<td><a href="/books/download/{{$book->id}}">Загрузить</a></td>
					<td><a href="/bookDelete/{{ $book->id }}">Удалить</a></td>
				</tr>
			@endforeach
		</table>
	</div>

</div>
@endsection