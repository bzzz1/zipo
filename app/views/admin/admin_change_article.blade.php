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
		{{ Form::model([], ['url'=>['/admin/article_update'], 'files'=>true, 'method'=>'POST', 'class'=>'']) }}
			<div class="change_article_title_block">
				<p class="admin_uni_lable">Заголовок</p>
				{{ Form::label('title', 'Заголовок: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::text('title', null, ['class'=>'', 'required']) }}
				<a href="/admin/articles" class="change_adrticle_to_all"><i class="fa fa-list-alt"></i>&nbsp К списку новостей</a>
			</div>
			<div class="change_article_weight_div">
				<p class="admin_uni_lable">Вес новости</p>
				{{ Form::label('weight', 'Вес новости: ', ['class'=>'admin_uni_lable']) }}
				{{ Form::text('weight', null, ['class'=>'', 'required']) }}
			</div>
			<div class="change_article_descript_block">
				<textarea class='editor' name="ckeditor" id="ckeditor" cols="10" rows="10"></textarea>
			</div>
			<div class="img_preview">
				@if (false)
					{{ HTML::image("img/photos/temp", "", ['class'=>'items_item_img']) }} 
					<i class="fa fa-times delete_img_icon"></i>
				@else
					{{ HTML::image("img/photos/no_photo.png", "", ['class'=>'items_item_img']) }}
				@endif	
			</div>
			<div class="change_item_buttons">
				<a href="#" class="admin_uni_button">Очистить</a>
			</div>
			{{ Form::submit('Сохранить', ['class'=>'admin_uni_button']) }}
		{{ Form::close() }}
		<div class="change_article_img">
			<p class="admin_uni_lable">Добавить миниатюру для статьи</p>
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