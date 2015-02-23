@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop

@section('body')
	<h1 class="admin_uni_heading">Добавить новость</h1>
	<div class="admin_main_content">
		<div class="change_article_title_block">
			<p class="admin_uni_lable">Заголовок</p>
			<!--some input field goes here-->
			<a href="#" class="change_adrticle_to_all"><i class="fa fa-list-alt"></i>&nbsp К списку новостей</a>
		</div>
		<div class="change_article_weight_div">
			<p class="admin_uni_lable">Вес новости</p>
			<!--some input field goes here-->
		</div>
		<div class="change_article_descript_block">
			<textarea class='editor' name="ckeditor" id="ckeditor" cols="30" rows="10"></textarea>
		</div>
		<div class="change_article_img">
			<p class="admin_uni_lable">Добавить миниатюру для статьи</p>
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