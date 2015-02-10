@extends('layout')
@extends('header')
@extends('footer')

@section('body')
	<div class="main_content">
		<ol class="breadcrumb">
		  <li><a href="/">Каталог</a></li>
		  <li class="active">Спецпредложения</li>
		</ol>
		<h3 class="items_main_header">Спецпредложения</h3>
		<hr class="main_hr">
		<p class="items sort_by">Сортировать по: </p>
		<select name="items_sort" id="items_sort">
			<option value="by_name">по имени</option>
			<option value="by_producer">по производителю</option>
			<option value="by_hit">по хитам продаж</option>
		</select>
			<div class="item_page">
				<div class="item_page_heading">
					<p class="item_page_name">{{$item->title}}</p>
					<p class="item_page_code">{{$item->code}}</p>
					<p class="item_page_price">{{$item->price}}</p>
					<p class="item_page_currency">{{$item->currency}}</p>
				</div>
				<div class="item_page_descript">
					<img src="{{$item->photo}}" alt="{{$item->title}}" class="items_item_img">
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
							<td>{{$item->subact_id}}</td>
						</tr>
						<tr>
							<td>Наличие:&nbsp</td>
							<td>{{$item->procurement}}</td>
						</tr>
					</table>
				</div>
				<div class="item_page_descr">
					<p class="item_page_descr_p">{{$item->descrtiption}}</p>
				</div>
				<h4 class="item_page_recommended_heading">Рекоммендуемые товары</h4>
				@foreach ($same as $item)
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
					<a href="/feedback" class="item_more">Задать вопрос о товаре</a>
					<a href="/delivery" class="item_more">Условия доставки</a>
					<a href="/order" class="item_order">Заказать</a>
				@endforeach
			</div>
	</div>	
@stop