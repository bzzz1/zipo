@extends('layout')
@extends('header')
@extends('footer')

@section('body')
	<span style='color:blue'>Импортное</span><hr>
	<span style='color:red'>Механическое</span><hr>
	@if (isset($subcats['foreign']['Механическое']))
		@foreach ($subcats['foreign']['Механическое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Тепловое</span><hr>
	@if (isset($subcats['foreign']['Тепловое']))
		@foreach ($subcats['foreign']['Тепловое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Холодильное</span><hr>
	@if (isset($subcats['foreign']['Холодильное']))
		@foreach ($subcats['foreign']['Холодильное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Посудомоечное</span><hr>
	@if (isset($subcats['foreign']['Посудомоечное']))
		@foreach ($subcats['foreign']['Посудомоечное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif


	<span style='color:blue'>Отечественное</span><hr>
	<span style='color:red'>Механическое</span><hr>
	@if (isset($subcats['foreign']['Механическое']))
		@foreach ($subcats['foreign']['Механическое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Тепловое</span><hr>
	@if (isset($subcats['foreign']['Тепловое']))
		@foreach ($subcats['foreign']['Тепловое'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Холодильное</span><hr>
	@if (isset($subcats['foreign']['Холодильное']))
		@foreach ($subcats['foreign']['Холодильное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
	<span style='color:red'>Посудомоечное</span><hr>
	@if (isset($subcats['foreign']['Посудомоечное']))
		@foreach ($subcats['foreign']['Посудомоечное'] as $subs) 
			<p class='subcat'>{{ $subs['subcat'] }}</p>
			<br>
			<p class='category'>{{ $subs['category'] }}</p>
			<br>
		@endforeach
	@endif
@stop