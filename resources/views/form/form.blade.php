@extends('~layout')

@section('content')
	@if(isset($fields) && count($fields))
		<ul>
			@foreach($fields as $key => $field)
				<li>{{ $key }}: {{ $field }}</li>
			@endforeach
		</ul>
	@endif
	@if(isset($title) && !empty($title))
		<div>
			Заголовок: {{ $title }}
		</div>
	@endif
	@if(isset($type) && !empty($type))
		<div>
			Тип: {{ $type }}
		</div>
	@endif
	<form action="/form/form/" method="POST">
		@csrf
		<div>
			<label for="name">Имя</label>
			<input type="text" name="user[name]">
		</div>
		<div>
			<label for="surname">Фамилия</label>
			<input type="text" name="user[surname]">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email">
		</div>
		<div>
			<label for="login">Логин</label>
			<input type="text" name="login">
		</div>
		<div>
			<label for="password">Пароль</label>
			<input type="password" name="password">
		</div>
		<input type="submit">
	</form>
@endsection
