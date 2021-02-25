@extends('~layout')

{{ Assets::setMeta('title', $title) }}
@section('h1'){{ $title }}@endsection

@section('content')
	@include('constructor_fields ~ tr')
@endsection
