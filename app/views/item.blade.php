@extends('partials/layout')
@extends('partials/header')
@extends('partials/footer')
@extends('partials/left_sidebar')
@extends('partials/right_sidebar')

@section('meta')
	<title>Зип Общепит - {{ $item->title }}</title>
	<meta name='keywords' content='{{ $item->producer }} - {{ $item->title }} купить в Санкт-Петербурге'>
	<meta name='description' content='{{ $item->producer }} - {{ $item->title }}. {{ $item->description }}'>
@stop

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li>{{HTML::link($HELP::url_slug(["/", "category", "/", "$item->category"]), $HELP::getNormal($item->category)) }}</li>
		  <li>{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat"])."?subcat_id=$item->subcat_id", $item->subcat) }}</li>
		  <li class="active">{{$item->title}}</li>
		</ol>
		<!-- <hr class="main_hr"> -->
		<div class="item_page">
			<div class="item_page_heading">
				<h3 class="items_main_header universal_heading">{{$item->title}}</h3>
				<!-- <p class="item_page_name">{{$item->title}}</p> -->
				<p class="item_page_code">Артикул: {{$item->code}}</p>
				<div class="item_price_div">
					@if (Auth::user()->check())
						<p class="item_page_price">{{$HELP::discount_price($item->price)}}&nbsp</p>
					@else 
						<p class="item_page_price">{{$item->price}}&nbsp</p>
					@endif	
					<p class="item_page_currency">{{$item->currency}}.</p>
				</div>	
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
				<p class="item_page_descr_title">Описание:</p>
				<p class="item_page_descr_p">{{$item->description}}</p>
			</div>
			<a href="/order?item_id={{ $item->item_id }}" class="item_order btn btn-default">Заказать</a>
			<a href="/contacts#contact_sorm_ancher" class="item_more btn btn-default">Задать вопрос</a>
			<a href="/delivery" class="item_more item_more_delivery btn btn-default">Условия доставки</a>



			<div class="recommended">
				<h4 class="item_page_recommended_heading">Похожие товары</h4>
				@foreach ($same as $item)
					<div class="@if ($item->hit) item_hit @elseif ($item->special) item_spec @endif items_item_one item_rec">
						@if ($item->hit)
							{{ HTML::image("img/markup/hit_prodag.png", "хит продаж", ['class'=>'items_item_flag']) }}
						@elseif ($item->special)
							{{ HTML::image("img/markup/spec_flag.png", "спецпредложение", ['class'=>'items_item_flag']) }}
						@endif	
						<div class="items_item_text_block">	
							<div class="items_item_heading">
								<div class="name_and_code">
									<div class="items_item_name_div">
										{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", $item->title,['class'=>'items_item_name']) }}
										{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", $item->title,['class'=>'items_item_name_full']) }}
									</div>	
								</div>	
								<p class="items_item_code">Арт: {{$item->code}}</p>
								<div class="items_item_price_div">
									@if (Auth::user()->check())
										<p class="items_item_price">{{$HELP::discount_price($item->price)}}&nbsp</p>
									@else 
										<p class="items_item_price">{{$item->price}}&nbsp</p>
									@endif
									<p class="items_item_currency">{{$item->currency}}.</p>
								</div>	
							</div>
							<div class="items_item_descript">
								{{ HTML::image("img/photos/$item->photo", "$item->title", ['class'=>'items_page_item_img']) }}
								<table class="items_item_text">
									<tr>
										<td colspan='2' class="small_heading">Характеристики</td>
									</tr>
									<tr>
										<td>Бренд:&nbsp&nbsp&nbsp&nbsp</td>
										<td class="items_item_dyn_text">{{$item->producer}}</td>
									</tr>
									<tr>
										<td>Код:</td>
										<td class="items_item_dyn_text">{{$item->code}}</td>
									</tr>
									<tr>
										<td>Тип:&nbsp</td>
										<td class="items_item_dyn_text">{{$item->subcat}}</td>
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
						</div>	
						<div class="items_buttons">
					 		{{HTML::link($HELP::url_slug(["/", "$item->category", "/", "$item->subcat", "/", "$item->title"])."?subcat_id=$item->subcat_id&item_id=$item->item_id", 'Подробнее',['class'=>'btn btn-default items_button items_more']) }}
							<a href="/order?item_id={{ $item->item_id }}" class="btn btn-default items_button items_order">Заказать</a>
						</div>	
					</div>
				@endforeach
			</div>	
		</div>
	</div>	
@stop