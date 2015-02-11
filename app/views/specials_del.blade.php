@extends('layout')
@extends('header')
@extends('footer')

@section('body')
	<div class="main_content">
		
		<hr class="main_hr">
		<p class="items sort_by">Сортировать по: </p>
		<select name="items_sort" id="items_sort">
			<option value="by_name">по имени</option>
			<option value="by_producer">по производителю</option>
			<option value="by_hit">по хитам продаж</option>
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