@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')

@section('body')
	<h1 class="admin_uni_heading">Добавить новость</h1>
	<div class="admin_main_content">
		{{ Form::model($article, ['url'=>['/admin/update_article'], 'method'=>'POST', 'class'=>'']) }}
			<div class="change_article_title_block">
 				{{ Form::label('title', 'Заголовок: ', ['class'=>'admin_uni_label']) }}
				{{ Form::text('title', null, ['class'=>'form-control change_article_title_form', 'required']) }}
				<a href="/admin/articles" class="change_adrticle_to_all"><i class="fa fa-list-alt"></i>&nbsp К списку новостей</a>
			</div>
			<div class="change_article_weight_div">
 				{{ Form::label('weight', 'Вес новости: ', ['class'=>'admin_uni_label']) }}
				{{ Form::text('weight', null, ['class'=>'form-control change_article_weight_form', 'required']) }}
			</div>
			<div class="change_article_descript_block">
				{{ Form::textarea('body', null, array('class' => 'name', 'id' => 'ckeditor')) }}
			</div>
			<p class="admin_uni_label">Добавить миниатюру для статьи</p>
			<div class="change_article_img">
				<input id="fileupload_article" type="file" class="browse_img_admin" name="photo" data-url="ajax_item_image" multiple form='none'>
				<a id="trigger_link_img" class="btn admin_uni_button">Выбрать миниатюру</a>
			</div>
			<div class="img_preview">
				@if (Session::get('temp_article'))
					<img src='{{ URL::to("img/photos/")}}/{{ Session::get("temp_article") }}' class='items_item_img'>
					<i class="fa fa-times delete_img_icon"></i>
				@else
					{{ HTML::image("img/photos/no_photo.png", "", ['class'=>'items_item_img']) }}
				@endif	
			</div>
			{{ Form::submit('Сохранить', ['class'=>'btn admin_uni_button']) }}
			<div class="change_item_buttons">
				<a href="#" class="btn admin_uni_button">Очистить</a>
			</div>
		{{ Form::close() }}


		@if ($article)
			{{ Form::open(['url'=>"/admin/delete_article?article_id=$article->article_id", 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::submit('Удалить', ['class'=>'btn admin_uni_button btn_del']) }}
			{{ Form::close() }}
		@endif
	</div>
@stop