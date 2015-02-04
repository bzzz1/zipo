@extends('layout')
@extends('admin/admin_header')
@extends('footer')

@section('body')
	<div class="width_960 catalog_gen">
		<h2 class="groups_title">{{ $current }}</h2>
		<h2 class='msg'>{{Session::get('msg') ? Session::get('msg') : '' }}</h2>
		<div class="catalog_sort">
			<ul class="catalog_sort_text_ul">
				<li class="catalog_sort_text catalog_sort_text_li">Сортировать по: </li>
				<li class="catalog_sort_titel catalog_sort_text_li">наименованию 
					<?php $q = http_build_query(Input::except(['item', 'order'])); ?>
					{{ HTML::link(URL::current().'?'.$q.'&sort=item&order=desc', '', ['class'=>"icon_tr_dw"]) }}
					{{ HTML::link(URL::current().'?'.$q.'&sort=item&order=asc', '', ['class'=>"icon_tr_up"]) }}
				</li>
				<li class="catalog_sort_price catalog_sort_text_li">цене 
					{{ HTML::link(URL::current().'?'.$q.'&sort=price&order=desc', '', ['class'=>"icon_tr_dw"]) }}
					{{ HTML::link(URL::current().'?'.$q.'&sort=price&order=asc', '', ['class'=>"icon_tr_up"]) }}
				</li>
			</ul>
			<div class="catalog_sort_pages_div">
				{{ $items->appends(Request::except('page'))->links('zurb_presenter') }}
			</div>
		</div><!-- catalog_sort -->

		<div class="menu catalog_menu">
			@foreach($items as $item)
				<div class="catalog_item">
					<h2 class="catalog_item_header">{{ $item->item }}</h2>
					<!--****************************************************
					| ITEM PAGE
					*****************************************************-->
					<div class="item">
						<h1 class="item_page_header">{{ $item->item }}</h1>
						<div class="item_page_photo_div">
							{{ HTML::image("photos/$item->photo", 'item', ['class'=>'item_page_photo']) }}
						</div>	
						<div class="item_page_right_div">
							<table class="info_item_page">
								<tr>
									<td colspan='2'> @if ($item->type == 'ЗИП') Запчасти @else Техника @endif </td>
								</tr>
								<tr>
									<td>Бренд:&nbsp&nbsp&nbsp&nbsp</td>
									<td class='info_page_item_text win_item_text'>{{ $item->producer }}</td>
								</tr>
								<tr>
									<td>Код:</td>
									<td class='info_page_item_text win_item_text'>{{ $item->code }}</td>
								</tr>
								<tr>
									<td>Тип:&nbsp</td>
									<td class='info_page_item_text win_item_text'>{{ $item->category }}</td>
								</tr>
								<tr>
									<td>Вид:&nbsp</td>
									<td class='info_page_item_text win_item_text'>{{ $item->subcategory }}</td>
								</tr>											
							</table>
							<div class='info_page_item_procurement'>
								@if ($item->procurement == 'МРП') В наличии @else Под заказ @endif 
							</div>
							<div class="item_price">
								<p class="item_price_p item_price_number">{{ $item->price }}&nbsp</p>
								<p class="item_price_p item_price_currency">{{ $item->currency }}</p>
							</div>
						</div><!-- item_page_right_div -->
						<div class="description_item">
							<p>{{ $item->description }}</p>
						</div><!-- description_item -->
					</div><!-- item -->	
					<!--****************************************************-->
					<div class="item_photo_div">
						{{ HTML::image("photos/$item->photo", 'item', ['class'=>'item_photo']) }}
					</div>
					<table class="info_item_page info_item_page_catalog">
						<tr>
							<td class='info_page_item_title'>Бренд:&nbsp</td>
							<td class='info_page_item_text'>{{ $item->producer }}</td>
						</tr>
						<tr>
							<td class='info_page_item_title'>Код:&nbsp</td>
							<td  class='info_page_item_text'>{{ $item->code }}</td>
						</tr>
						<tr>
							<td class='info_page_item_title'>Тип:&nbsp</td>
							<td class='info_page_item_text'>{{ $item->category }}</td>
						</tr>
						<tr>
							<td class='info_page_item_title'>Вид:&nbsp</td>
							<td class='info_page_item_text'>{{ $item->subcategory }}</td>
						</tr>
						<tr>
							<td>
								{{ HTML::link("/admin/changeItem/$item->code", 'Изменить', ['class'=>'submit_field']) }}
							</td>
							<td>
								{{ Form::open(['url'=>['/admin/deleteItem', $item->code], 'method'=>'POST', 'class'=>'submit_form confirm_form']) }}
									{{ Form::submit('Удалить', ['class'=>'submit_field confirm_delete']) }} 
								{{ Form::close() }}
							</td>
						</tr>
					</table>
					<div class='info_page_item_procurement'>
						@if ($item->procurement == 'МРП') В наличии @else Под заказ @endif 
					</div>
					<div class="catalog_item_price">
						<p class="catalog_item_price_p catalog_item_price_number">{{ $item->price }}&nbsp</p>
						<p class="catalog_item_price_p catalog_item_price_currency">{{ $item->currency }}</p>
					</div>
				</div>
			@endforeach	
		</div><!-- menu catalog_menu -->
		<div class="catalog_bottom_pages">
			{{ $items->appends(Request::except('page'))->links('zurb_presenter') }}
		</div>
		{{ HTML::link('/admin', 'Добавить товар', ['class'=>"admin_button_link"]) }}
		{{ HTML::link('/admin/info', 'Панель информации', ['class'=>"admin_button_link"]) }}
	</div><!-- width_960 catalog_gen -->
@stop