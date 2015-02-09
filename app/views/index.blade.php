@extends('layout')
@extends('header')
@extends('footer')

@section('body')
	@if (isset($subcats['foreign']['Механическое']))
		@foreach ($subcats['foreign']['Механическое'] as $subs) 
			<p class='title'>{{ $subs->getAttributes()['title'] }}</p>
			<br>
			<p class='category'>{{ $subs->getAttributes()['category'] }}</p>
			<br>
		@endforeach
	@endif
	@if (isset($subcats['foreign']['Тепловое']))
		@foreach ($subcats['foreign']['Тепловое'] as $subs) 
			<p class='title'>{{ $subs->getAttributes()['title'] }}</p>
			<br>
			<p class='category'>{{ $subs->getAttributes()['category'] }}</p>
			<br>
		@endforeach
	@endif
	@if (isset($subcats['foreign']['Холодильное']))
		@foreach ($subcats['foreign']['Холодильное'] as $subs) 
			<p class='title'>{{ $subs->getAttributes()['title'] }}</p>
			<br>
			<p class='category'>{{ $subs->getAttributes()['category'] }}</p>
			<br>
		@endforeach
	@endif
	@if (isset($subcats['foreign']['Посудомоечное']))
		@foreach ($subcats['foreign']['Посудомоечное'] as $subs) 
			<p class='title'>{{ $subs->getAttributes()['title'] }}</p>
			<br>
			<p class='category'>{{ $subs->getAttributes()['category'] }}</p>
			<br>
		@endforeach
	@endif
@stop