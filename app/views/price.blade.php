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
		@foreach($prices as $price)
			<i class="fa fa-table fa-3x"></i> <a href="" class="prices_price_name">{{$price => excel_file_name}}</a>
		@endforeach	
	</div>	
@stop