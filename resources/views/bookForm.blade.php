<?php /** @var \App\Book[] $books */?>
@extends('layouts.app')

@section('content')
	<div class="container>
		<form action="{{ url('/bookAdd') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div>
				<label>Книга</label>
				<input type="text" name="title" id="title" class="" value="{{$book}}">
				<input type="text" name="description" id="description" class="">
				<input type="text" name="author" id="author" class="">
				<input type="file" name="link" id="link" class="">
			</div>

			<div>
				<button type="submit">Добавить</button>
			</div>
		</form>
	</div>
@endsection