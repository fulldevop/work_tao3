@extends('layouts.app')
@section('title', $title)
@section('sidebar')
	@parent
	<p>Дополнение в sidebar `test.show`</p>
@endsection
@section('content')

	{{-- Этого комментария не будет в итоговом HTML --}}
	Здравствуйте, {{ !empty($name) ? $name : 'Guest' }}!<br>
	Имя: {{ $name }}<br>
	Фамилия: {{ $surname }}<br>
	Дата и время: {{ date('d-m-Y') }}<br>
	{{ gettype($age) }}
	@unless($age >= 18)
		Вам нет 18!
	@endunless

@endsection
