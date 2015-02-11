@extends('layout')
@extends('header')
@extends('footer')
@extends('left_sidebar')
@extends('right_sidebar')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li><a href="/{{isset($items[0]) ? $items[0]->category : ''}}">{{isset($items[0]) ? $items[0]->category : ''}}</a></li>
		  <li class="active">{{isset($items[0]) ? $items[0]->subcat : ''}}</li>
		</ol>
		<h3 class="items_main_header">{{$subcats->category}}</h3>
		<p class="items_subheading">{{$subcats->subcat}}</p>
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
					<img src="{{$item->photo}}" alt="{{$item->title}}" class="items_item_img">
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
							<td>{{$item->subact_id}}</td>
						</tr>
						<tr>
							<td>Наличие:&nbsp</td>
							<td>{{$item->procurement}}</td>
						</tr>
					</table>
				</div>
				<a href="/{{$item->title}}" class="items_more">Подробнее</a>
				<a href="/order" class="items_order">Заказать</a>
			</div>
		@endforeach
	</div>	
@stop