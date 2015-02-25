@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Добавить товар</h1>

	@if (Session::get('message'))
		{{ Session::get('message') }}
	@endif
	
	<?php 
		if ($item) {
			$url = "/admin/update_item?item_id=$item->item_id";
		} else {
			$url = "/admin/update_item";
		}
	?>
{{-- Helper::createOptions($producers) --}}
	<div class="admin_main_content">
		{{ Form::model($item, ['url'=>['/admin/update_item'], 'method'=>'POST', 'class'=>'']) }}
			<div class="change_block change_item_title_block">
				{{ Form::label('title', 'Название', ['class'=>'admin_uni_label']) }}
				{{ Form::text('title', null, ['class'=>'form-control title_input', 'required']) }}
			</div>
			<div class="change_block change_item_code_block">
				{{ Form::label('code', 'Артикул', ['class'=>'admin_uni_label']) }}
				{{ Form::text('code', null, ['class'=>'form-control code_input', 'required']) }}
			</div>
			<div class="change_block change_item_price_div">
				{{ Form::label('price', 'Цена', ['class'=>'admin_uni_label']) }}
				{{ Form::text('price', null, ['class'=>'form-control price_input', 'required']) }}
			</div>
			<div class="change_block change_item_cur_div">
				{{ Form::label('currency', 'Валюта', ['class'=>'admin_uni_label']) }}
				{{ Form::text('currency', 'РУБ', ['class'=>'form-control currency_input', 'required']) }}
			</div>
			<div class="change_block change_item_descript_block">
				{{ Form::label('description', 'Описание', ['class'=>'admin_uni_label descr_label']) }}
				{{ Form::textarea('description', null, ['class'=>'form-control descr_input', 'required']) }}
			</div>
			<div class="make_spec_block">
				{{ Form::label('special', 'Добавить в спецпредложения', ['class'=>'admin_uni_label']) }}
				{{ Form::checkbox('special', false, false, ['class'=>'']) }}
			</div>
			<div class="make_hit_block">
				{{ Form::label('hit', 'Сделать хитом продаж', ['class'=>'admin_uni_label']) }}
				{{ Form::checkbox('hit', false, false, ['class'=>'']) }}
			</div>
			<p class="admin_uni_label">Добавить изображение<br> 110*95 пикс.</p>
			<div class="img_preview">
				@if (Session::get('temp'))
					{{ Form::hidden('with_image', Session::get('temp')) }}
					<img src='{{ URL::to("img/photos/")}}/{{ Session::get("temp") }}' class='items_item_img'>
					<i class="fa fa-times delete_img_icon"></i>
				@else
					{{ HTML::image("img/photos/no_photo.png", "", ['class'=>'items_item_img']) }}
				@endif	
			</div>
			<div class="change_item_buttons">
				<p class="btn admin_uni_button">Очистить</p>
			</div>
			{{ Form::submit('Сохранить', ['class'=>'btn admin_uni_button']) }}
		{{ Form::close() }}

		<div class="change_item_img">
			{{ Form::open(['url'=>'/admin/item_upload_image', 'files'=>true, 'method'=>'POST', 'class'=>'admin_panel_import browse_file_admin']) }}
				{{ Form::file('photo', ['class'=>' item_upload_image']) }}
				{{ Form::submit('Добавить миниатюру', ['class'=>'btn min_img_btn admin_uni_button item_upload_image_submit']) }}
			{{ Form::close() }}	
		</div>

		@if ($item)
			{{ Form::open(['url'=>"/admin/delete_item?item_id=$item->item_id", 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::submit('Удалить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}	
		@endif
	</div>
@stop