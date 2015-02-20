@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

{{--
@section('meta')
	<meta name='keywords' content="{{$item->title}}">
	<meta name='description' content="{{$item->description}}">
@stop 
--}}


@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li>{{HTML::link($HELP::url_slug(["/", "category", "/", "$item->category"]), $HELP::getNormal($item->category)) }}</li>
		  <li>{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat"])."?subcat_id=$item->subcat_id", $item->subcat) }}</li>
		  <li class="active">{{$item->title}}</li>
		</ol>
		<h3 class="items_main_header universal_heading">{{$item->title}}</h3>
		<hr class="main_hr">
		<div class="item_page">
			<div class="item_page_heading">
				{{-- <p class="item_page_name">{{$item->title}}</p> --}}
				<p class="item_page_code">{{$item->code}}</p>
				<p class="item_page_price">{{$item->price}}</p>
				<p class="item_page_currency">{{$item->currency}}</p>
			</div>
			<div class="item_page_descript">
				{{ HTML::image("img/photos/$item->photo", "$item->title", ['class'=>'items_item_img']) }}
				<table class="item_page_text">
					<tr>
						<td colspan='2'>Характеристики</td>
					</tr>
					<tr>
						<td>Бренд:&nbsp&nbsp&nbsp&nbsp</td>
						<td>{{$item->producer}}</td>
					</tr>
					<tr>
						<td>Код:</td>
						<td>{{$item->code}}</td>
					</tr>
					<tr>
						<td>Тип:&nbsp</td>
						<td>{{$item->subcat}}</td>
					</tr>
					<tr>
						<td>Наличие:&nbsp</td>
						@if ($item->procurement)
							<td>В наличии</td>
						@else	
							<td>Под заказ</td>
						@endif
					</tr>
				</table>
			</div>
			<div class="item_page_descr">
				<p class="item_page_descr_p">{{$item->description}}</p>
			</div>
			<a href="/order?item_id={{ $item->item_id }}" class="item_order">Заказать</a>
			<a href="/contacts#contact_sorm_ancher" class="item_more">Задать вопрос</a>
			<a href="/delivery" class="item_more">Условия доставки</a>



			<div class="recommended">
				<h4 class="item_page_recommended_heading">Похожие товары</h4>
				@foreach ($same as $item)
					<div class="items_item_one">
						<div class="items_item_heading">
							<p class="items_item_name">{{$item->title}}</p>
							<p class="items_item_code">{{$item->code}}</p>
							<p class="items_item_price">{{$item->price}}</p>
							<p class="items_item_currency">{{$item->currency}}</p>
						</div>
						<div class="items_item_descript">
							{{ HTML::image("img/photos/$item->photo", "$item->title", ['class'=>'items_item_img']) }}
							<table class="items_item_text">
								<tr>
									<td colspan='2'>Характеристики</td>
								</tr>
								<tr>
									<td>Бренд:&nbsp&nbsp&nbsp&nbsp</td>
									<td>{{$item->producer}}</td>
								</tr>
								<tr>
									<td>Код:</td>
									<td>{{$item->code}}</td>
								</tr>
								<tr>
									<td>Тип:&nbsp</td>
									<td>{{$item->subcat}}</td>
								</tr>
								<tr>
									<td>Наличие:&nbsp</td>
									@if ($item->procurement)
										<td>В наличии</td>
									@else	
										<td>Под заказ</td>
									@endif
								</tr>
							</table>
						</div>
		 				{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", 'Подробнее') }}
						<a href="/order?item_id={{ $item->item_id }}" class="items_order">Заказать</a>
					</div>
				@endforeach
			</div>	
		</div>
	</div>	
@stop