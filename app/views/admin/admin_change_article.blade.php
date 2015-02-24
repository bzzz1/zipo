@extends('partials/admin_layout')
@extends('partials/admin_header')
@extends('partials/admin_sidebar')
@extends('partials/admin_footer')
@section('css')
	{{ HTML::style('css/admin.css') }}<!--delete it-->
@stop
@section('js')
	{{ HTML::script('ckeditor/ckeditor.js') }}
	<script>
		CKEDITOR.replace('ckeditor', {
			filebrowserBrowseUrl 	   : '../kcfinder/browse.php?opener=ckeditor&type=files',
			filebrowserImageBrowseUrl  : '../kcfinder/browse.php?opener=ckeditor&type=images',
			filebrowserFlashBrowseUrl  : '../kcfinder/browse.php?opener=ckeditor&type=flash',
			filebrowserUploadUrl  	   : '../kcfinder/upload.php?opener=ckeditor&type=files',
			filebrowserImageUploadUrl  : '../kcfinder/upload.php?opener=ckeditor&type=images',
			filebrowserFlashUploadUrl  : '../kcfinder/upload.php?opener=ckeditor&type=flash',
			// uiColor: '#702329'
			// toolbar : [
				// ['ajaxsave'],
				// ['Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
				// ['Cut','Copy','Paste','PasteText'],
				// ['Undo','Redo','-','RemoveFormat'],
				// ['TextColor','BGColor'],
				// ['Maximize', 'Image']
			// ],
		});
	</script>
@stop

@section('body')
	<h1 class="admin_uni_heading">Добавить новость</h1>
	<div class="admin_main_content">
		{{ Form::model([], ['url'=>['/admin/update_article'], 'files'=>true, 'method'=>'POST', 'class'=>'']) }}
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
			{{ Form::open(['url'=>'/admin/item_add_image', 'method'=>'POST', 'class'=>'admin_panel_import']) }}
				{{ Form::file('photo', ['class'=>'admin_uni_button']) }}
				{{ Form::submit('Добавить', ['class'=>'btn admin_uni_button']) }}
			{{ Form::close() }}
		</div>
		{{ Form::open(['url'=>'/admin/delete_item', 'method'=>'POST', 'class'=>'admin_panel_import']) }}
			{{ Form::submit('Удалить', ['class'=>'btn admin_uni_button']) }}
		{{ Form::close() }}	
	</div>
@stop