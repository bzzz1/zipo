@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	@include('partials/flash_messages')
	<h1 class="admin_uni_heading">Панель управления</h1>
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
				{{ Form::text('discount', $discount, ['class'=>'form-control discount_input', 'required']) }} 
				{{ Form::submit('Изменить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
		<div class="admin_panel_pdf_div">
			<p class="admin_uni_label"><i class="fa fa-file-pdf-o"></i>Загрузить PDF</p>
			{{ Form::open(['url'=>'/admin/import_pdf', 'files'=>true, 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::file('pdf', ['class'=>'admin_pdf_input']) }}
				<div class="good">
					{{ Form::label('good', 'Название товара', ['class'=>'admin_uni_label good_label']) }}
					{{ Form::text('good', '', ['class'=>'form-control good_input', 'required']) }}
				</div>
				<div class="producer">
					{{ Form::label('producer_id', 'Призводитель', ['class'=>'admin_uni_label category_label']) }}
					{{ Form::select('producer_id', $HELP::createOptions($producers), null, ['class'=>'form-control producer_input', 'required']) }}
				</div>
				{{ Form::submit('Загрузить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
	</div>
@stop
