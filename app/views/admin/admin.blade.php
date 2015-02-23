@extends('layout')
@extends('admin/admin_header')
@extends('admin/admin_sidebar')
@extends('admin/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop

@section('body')
	<h1 class="admin_uni_heading">Панель управления</h1>
	<div class="admin_panel_main_content">
		<div class="admin_panel_import">
			<p class="admin_uni_label"><i class="fa fa-reply"></i> Импорт</p>
			{{ Form::open(['url'=>'/import', 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::file('excel', ['class'=>'admin_uni_button']) }}
				{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}	
		</div>
		<div class="admin_panel_search">
			<p class="admin_uni_label"><i class="fa fa-search"></i> Поиск по артикулу</p>
			{{ Form::open(array('url' => "/search", 'method' => 'GET', 'class'=>'')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control input_search', 'id' =>'search']) }} 
				{{ Form::submit('Поиск', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
		<div class="admin_panel_discount">
			<p class="admin_uni_label">% Скидка для<br> зарегестрированных<br> пользователей</p>
			<!--some input field goes here-->
			{{ Form::open(array('url' => "/set_discount", 'method' => 'GET', 'class'=>'')) }}
				{{ Form::text('query', null, ['class'=>'form-control', 'id' =>'search_1']) }} 
				{{ Form::submit('Сохранить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
	</div>
@stop
