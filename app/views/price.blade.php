@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Главная</a></li>
		  <li class="active">Прайс-лист</li>
		</ol>
		<h2 class="prices_heading">Прайс-листы</h2>
		@foreach($prices as $key => $price)
			<i class="fa fa-table fa-3x"></i>
			<a href="/get_price?price_id={{$key}}" class="prices_price_name">{{ $HELP::url_slug([$price]) }}</a>
		@endforeach	
	</div>	
@stop