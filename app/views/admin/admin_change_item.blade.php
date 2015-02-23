@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop

@section('body')
	<h1 class="admin_uni_heading">Добавить товар</h1>
	<div class="admin_main_content">
		{{ Form::model([], ['url'=>['/admin/item_update'], 'files'=>true, 'method'=>'POST', 'class'=>'']) }}
			<div class="change_item_title_block">
				{{ Form::label('title', 'Название: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::text('title', null, ['class'=>'', 'required']) }}
			</div>
			<div class="change_item_code_block">
				{{ Form::label('code', 'Артикул: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::text('code', null, ['class'=>'', 'required']) }}
			</div>
			<div class="change_item_price_div">
				{{ Form::label('price', 'Цена: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::text('price', null, ['class'=>'', 'required']) }}
			</div>
			<div class="change_item_cur_div">
				{{ Form::label('currency', 'Валюта: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::text('currency', 'РУБ', ['class'=>'', 'required']) }}
			</div>
			<div class="change_item_descript_block">
				{{ Form::label('description', 'Описание: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::textarea('description', null, ['class'=>'', 'required']) }}
			</div>
			<div class="make_spec_block">
				{{ Form::label('special', 'Добавить в спецпредложения: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::checkbox('special', false, false, ['class'=>'', 'required']) }}
			</div>
			<div class="make_hit_block">
				{{ Form::label('hit', 'Сделать хитом продаж: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::checkbox('hit', false, false, ['class'=>'', 'required']) }}
			</div>
			<div class="img_preview">
				@if (true)
					{{ HTML::image("img/photos/temp", "", ['class'=>'items_item_img']) }} 
					<i class="fa fa-times delete_img_icon"></i>
				@else
					{{ HTML::image("img/photos/no_photo.png", "", ['class'=>'items_item_img']) }}
				@endif	
			</div>
			<div class="change_item_buttons">
				<p class="admin_uni_button">Очистить</p>
			</div>
			{{ Form::submit('Сохранить', ['class'=>'admin_uni_button']) }}
		{{ Form::close() }}
		<div class="change_item_img">
			<p class="admin_uni_lable">Добавить изображение 110*95 пикс.</p>
			{{ Form::open(['url'=>'/item_add_image', 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::file('photo', ['class'=>'admin_uni_button']) }}
				{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}	
		</div>
		{{ Form::open(['url'=>'/delete_item', 'method'=>'POST', 'class'=>'admin_panel_import']) }}
			{{ Form::submit('Удалить', ['class'=>'btn admin_uni_button']) }}
		{{ Form::close() }}	
	</div>
@stop