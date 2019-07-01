@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
	<div class="row">
		  <div class="col-md-8 col-md-offset-2">
			  <div class="books" style="">
					<table>
						<caption>Список книг</caption>
						<tr>
							<th>Название</th>
							<th>Авторы</th>
							<th>Описание</th>
							<th></th>
						</tr>
						{{--@foreach($books as $book)
							<tr>
								<td>{{$book->title}}</td>
								<td>{{$book->author}}</td>
								<td>{{$book->description}}</td>
								<td><a href="/bookDelete/{{$book->id}}">Удалить</a></td>
							</tr>
						@endforeach--}}
					</table>
			` </div>
		  </div>
	</div>
</div>
@endsection
