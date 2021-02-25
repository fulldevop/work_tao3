@extends('~layout')

@section('content')
	@if(count($items))
		@block('gallery/gallery-list', ['items' => $items])
	@else
		Изображений в галерее нет.
	@endif
@endsection
