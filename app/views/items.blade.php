@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">

		@if ($env=='specials')
			<ol class="breadcrumb">
			  <li><a href="/">Каталог</a></li>
			  <li class="active">Спецпредложения</li>
			</ol>
			<h3 class="items_main_header">Спецпредложения</h3>
		@elseif ($env=='catalog')	
			<ol class="breadcrumb">
			  <li><a href="/">Каталог</a></li>
			  <li>{{HTML::link($HELP::url_slug(["category", "/", "$current->category"])."?subcat_id=$current->subcat_id", $current->category) }}</li>
			  <li class="active">{{$current->subcat}}</li>
			</ol>
			<h3 class="items_main_header">{{$current->category}}</h3>
			<p class="items_subheading">{{$current->subcat}}</p>
		@elseif ($env=='byproducer')
			<h3 class="items_main_header">{{$current->producer}}</h3>
		@elseif ($env=='search')
			<h3 class="items_main_header">Резуьтаты поиска: {{$current}}</h3>
		@endif

		<hr class="main_hr">
		<p class="items sort_by">Сортировать по: </p>
		<?php $q = http_build_query(Input::except(['item', 'order'])); ?>
		<select name="items_sort" id="items_sort">
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&sort=item&order=desc', 'по имени(а-я)', ['class'=>"icon_tr_dw"]) }}
			</option>
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&sort=item&order=asc', 'по имени(я-а)', ['class'=>"icon_tr_up"]) }}
			</option>
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&sort=price&order=asc', 'по цене(вверх)', ['class'=>"icon_tr_up"]) }}
			</option>
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&sort=price&order=desc', 'по цене(вниз)', ['class'=>"icon_tr_dw"]) }}
			</option>
		</select>
		@foreach ($items as $item)
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
				<a href="/order" class="items_order">Заказать</a>
			</div>
		@endforeach
		<div class="catalog_bottom_pages">
			{{ $items->appends(Request::except('page'))->links('zurb_presenter') }}
		</div>
		<p class="items sort_by">Показать по: </p>
		<select name="pages_by" id="pages_by">
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&pages_by=10', '10', ['class'=>"icon_tr_dw"]) }}
			</option>
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&pages_by=50', '50', ['class'=>"icon_tr_up"]) }}
			</option>
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&pages_by=100', '100', ['class'=>"icon_tr_up"]) }}
			</option>
			<option>
				{{ HTML::link(URL::current().'?'.$q.'&pages_by=999999', 'все', ['class'=>"icon_tr_dw"]) }}
			</option>
		</select>
	</div>	
@stop