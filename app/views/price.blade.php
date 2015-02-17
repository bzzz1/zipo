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
		<h2 class="prices_heading universal_heading">Прайс-листы</h2>
		@foreach($prices as $key => $price)
			<div class="price_load">
				<a href="/get_price?price_id={{$key}}" class="prices_price_name btn btn-default col-lg-6 btn-block"><i class="fa fa-table fa-lg"></i> {{ $HELP::url_slug([$price]) }}</a>
			</div>	
		@endforeach	
	</div>	
@stop