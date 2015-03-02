@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	@include('partials/flash_messages')
	<div class="selected_quantity_fixed_main">	
		<div class="selected_quantity_fixed" data-spy="affix" data-offset-top="84">
			<p class="selected_quantity">Выбрано 10 элементов</p>
		</div>	
	</div>	
	<h1 class="admin_uni_heading">Каталог</h1>
	<div class="admin_main_content admin_main_content_items">
		@if ($env != 'catalog_admin')
		<hr class="main_hr">
		@endif
		<div class="items_sort_div">	
			<p class="items_sort_by">Сортировать по: </p>
			<?php $q = http_build_query(Input::except(['page', 'order', 'sort'])); ?>
			<select name="items_sort" id="items_sort">
				<option data-link="{{URL::current().'?'.$q.'&sort=title&order=asc' }}">
					имени(а-я)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=title&order=desc' }}">
					имени(я-а)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=price&order=asc' }}">
					цене(вверх)
				</option>
				<option data-link="{{URL::current().'?'.$q.'&sort=price&order=desc' }}">
					цене(вниз)
				</option>
			</select>
		</div>	
		@foreach ($items as $item)
		<div class="empty_scape">
			@if ($item->hit)
				{{ HTML::image("img/markup/hit_prodag.png", "хит продаж", ['class'=>'items_item_flag']) }}
			@elseif ($item->special)
				{{ HTML::image("img/markup/spec_flag.png", "спецпредложение", ['class'=>'items_item_flag']) }}
			@endif	
			<div class="@if ($item->hit) item_hit @elseif ($item->special) item_spec @endif items_item_one admin_items"><!--last class is for admin css-->
				<div class="admin_items_buttons">
					{{ Form::checkbox('selcted', true, false, ['class'=>'select_checkbox', 'data-id'=>$item->item_id]) }}
					<div class="fa_block">
						<a href='{{URL::to("admin/change_item?item_id=$item->item_id")}}' class="admin_item_title_1">
							<i class="fa fa-pencil change_items_group_icon fa-lg"></i>
						</a>
						{{ Form::open(array('url' => "/admin/delete_item?item_id=$item->item_id", 'method' => 'POST', 'class'=>'admin_producer_one_form')) }}
							<i class="fa fa-times delete_items_group_icon fa-lg"></i> 
						{{ Form::close() }}	

					</div>	
				</div>
				<div class="items_item_text_block">	
					<div class="items_item_heading">
						<div class="name_and_code">
							<div class="items_item_name_div">
								<p class="items_item_name">{{$item->title}}</p>
								<p class="items_item_name_full">{{$item->title}}</p>
							</div>	
						</div>	
						<div class="items_item_code_div">
							<p class="items_item_code">Арт: {{$item->code}}</p>
							<p class="items_item_code_full">Арт: {{$item->code}}</p>
						</div>	
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
			</div>
		</div>	
		@endforeach
	</div>
		<div class="admin_items_footer_main">
			<div class="admin_items_footer">
				<div class="change_items_buttons_first">
					<a href="#" class="btn admin_uni_button">Добавить в спецпредложения</a>
					<a href="#" class="btn admin_uni_button">Сделать хитом продаж</a>
					<a href="#" class="btn admin_uni_button">Изменить наличие</a>
				</div>
				<div class="change_items_buttons_second">
					<a href="" class="btn admin_uni_button ad_it_ch_c mfp-zoom-out" data-effect="mfp-zoom-out">Изменить категорию/подкатегорию</a>
					<div class="admin_change_subcategory_div admin_itms_subcategory_div mfp-hide mfp-zoom-out" data-effect="mfp-zoom-out">
						<div class="ac_c_i_d">
							<p class="admin_add_subcategory_title">Редактирование категории/подкатегории</p>
							<div class="change_block admin_select_category_div">
								{{ Form::label('category', 'Категория', ['class'=>'admin_uni_label admin_select_category_label']) }}
								{{ Form::select('category', ['Механическое_en' => 'Механическое_en', 'Тепловое_en' => 'Тепловое_en','Холодильное_en' => 'Холодильное_en','Посудомоечное_en' => 'Посудомоечное_en','Механическое_ru' => 'Механическое_ru','Тепловое_ru' => 'Тепловое_ru','Холодильное_ru' => 'Холодильное_ru','Посудомоечное_ru' => 'Посудомоечное_ru'], '', ['class'=>'form-control admin_select_category_select a_i_s_c_l', 'required', 'form' => 'none']) }}
							</div>
							<div class="change_block admin_select_title_div">
								{{ Form::label('subcat_id', 'Подкатегория', ['class'=>'admin_uni_label admin_select_category_label ascl']) }}
								{{ Form::select('subcat_id', [], '', ['class'=>'form-control admin_select_title_text', 'required']) }}
							</div>
							<a href="" class="btn admin_add_button aadb admin_uni_button ">Сохранить</a>	
						</div>	
					</div>

					<a href="#" class="btn admin_uni_button">Удалить товары</a>
				</div>
			</div>
		</div>	
@stop