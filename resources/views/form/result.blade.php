@extends('~layout')

@section('content')
	{{ $text }}
	Метод: {{ $method }} <br>
	@if($method === 'GET')
		!
	@elseif($method === 'POST')
		!!
	@endif
@endsection
