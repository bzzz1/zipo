@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Панель управления</h1>
	@include('partials/flash_messages')
	<div class="admin_main_content">
		<div class="admin_panel_import_div">
			<p class="admin_uni_label"><i class="fa fa-reply"></i> Импорт</p>
			{{ Form::open(['url'=>'/admin/import', 'files'=>true, 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::file('excel', ['class'=>'admin_panel_input']) }}
				{{ Form::submit('Импортировать', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
		<div class="admin_panel_search_div">
			<p class="admin_uni_label"><i class="fa fa-search"></i> Поиск по артикулу</p>
			{{ Form::open(array('url' => "/admin/search", 'method' => 'GET', 'class'=>'admin_panel_search')) }}
				{{ Form::text('query', null, ['placeholder'=>"Поиск по каталогу", 'class'=>'form-control admin_input_search', 'id' =>'search']) }} 
				{{ Form::submit('Поиск', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
		<div class="admin_panel_discount_div">
			<p class="admin_uni_label">% Скидка для<br> зарегистрированных<br> пользователей</p>
			{{ Form::open(array('url' => "/admin/set_discount?discount=$discount", 'method' => 'POST', 'class'=>'admin_discount_input')) }}
				{{ Form::text('discount', $discount, ['class'=>'form-control discount_input']) }} 
				{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
	</div>
@stop
