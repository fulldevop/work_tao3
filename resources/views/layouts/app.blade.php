@php
	Assets::useFrontendStyle('index');
	Assets::useFrontendScript('index');
@endphp
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<title>
		@hasSection('title')
			@yield('title')
		@else
			Laravel
		@endif
	</title>

	{!! Assets::scripts() !!}
	{!! Assets::styles() !!}

{{--	{!! Assets::meta() !!}--}}
</head>

<body>
<header style="background: #f9f9f9; width: 100%; height: 50px; display: flex; align-items: center; justify-content: center;">
	@include('elems.header')
</header>
<aside style="background: #f9f9f9; width: 150px; height: 90vh; position: fixed; display: inline-block;">
	@section('sidebar')
		Это главная боковая панель.
	@show
</aside>
<main id="content" style="display: inline-block; margin-left: 150px;">
	@section('breadcrumbs', Breadcrumbs::render())
	@yield('breadcrumbs')
	@yield('content')
</main>
<footer>
	@include('elems.footer')
</footer>
</body>
</html>
