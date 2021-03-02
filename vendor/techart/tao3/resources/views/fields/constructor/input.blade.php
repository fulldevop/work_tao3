@php
$text = new \TAO\Fields\Type\Text;
@endphp

<select
		name="{{ $field->name }}"
		class="input select form-control {{ $field->classForInput() }}"
		style="{!! $field->styleForInput() !!}"
		value="1"
		{!! $field->renderAttrs() !!}
>
		<option value="1" >Select</option>
		<option value="2" >Input</option>
</select>



<script>
	$(function () {
		//
	});
</script>
