<div class="{{ $block }} zoom-gallery">
	@foreach($items as $item)
		<a href="{{ $item['img_big'] }}" class="{{ $block->elem('link') }} image-link">
			<img src="{{ $item['img'] }}" alt="Фото {{ $item['title'] }}" width="400" height="400" class="{{ $block->elem('img') }}">
		</a>
	@endforeach
</div>