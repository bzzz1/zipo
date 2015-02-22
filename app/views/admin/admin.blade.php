@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Панель управления</h1>
	<div class="admin_panel_main_content">
		<div class="admin_panel_import">
			<p class="admin_panel_label"><i class="fa fa-reply"></i> Импорт</p>
			<!--some input field goes here-->
			<a href="#" class="admin_uni_button">Обзор...</a>
			<a href="#" class="admin_uni_button">Добавить</a>
		</div>
		<div class="admin_panel_search">
			<p class="admin_panel_label"><i class="fa fa-search"></i> Поиск по артикулу</p>
			<!--some input field goes here-->
			<a href="#" class="admin_uni_button">Поиск</a>
		</div>
		<div class="admin_panel_discount">
			<p class="admin_panel_label">% Скидка для<br> зарегестрированных<br> пользователей</p>
			<!--some input field goes here-->
			<a href="#" class="admin_uni_button">Сохранить</a>
		</div>
	</div>
	<p>THIS IS ADMIN PANEl</p>
		{{ HTML::link('/admin/admin_logout', 'Выйти', ['class' => 'btn btn-default btn_exit']) }}

		
	
@stop
