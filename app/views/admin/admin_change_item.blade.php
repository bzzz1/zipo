@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Добавить товар</h1>
	<div class="admin_main_content">
		<div class="change_item_title_block">
			<p class="admin_uni_lable">Название</p>
			<!--some input field goes here-->
		</div>
		<div class="change_item_code_block">
			<p class="admin_uni_lable">Артикул</p>
			<!--some input field goes here-->
		</div>
		<div class="change_item_price_div">
			<p class="admin_uni_lable">Цена</p>
			<!--some input field goes here-->
		</div>
		<div class="change_item_cur_div">
			<p class="admin_uni_lable">Валюта</p>
			<!--some input field goes here-->
		</div>
		<div class="change_item_descript_block">
			<p class="admin_uni_lable">Описание</p>
			<!--some textarea field goes here-->
		</div>
		<div class="make_spec_block">
			<p class="admin_uni_lable">Добавить в спецпредложения</p>
			<!--some checkbox field goes here-->
		</div>
		<div class="make_hit_block">
			<p class="admin_uni_lable">Сделать хитом продаж</p>
			<!--some checkbox field goes here-->
		</div>
		<div class="change_item_img">
			<p class="admin_uni_lable">Добавить изображение 110*95 пикс.</p>
			<!--some iput field goes here-->
			<a href="#" class="admin_uni_button">Обзор...</a>
			<a href="#" class="admin_uni_button">Добавить</a>
		</div>
		<div class="img_preview">
			<!-- smth goes here -->
		</div>
		<div class="change_item_buttons">
			<a href="#" class="admin_uni_button">Сохранить</a>
			<a href="#" class="admin_uni_button">Очистить</a>
			<a href="#" class="admin_uni_button">Удалить товар</a>
		</div>
	</div>
@stop