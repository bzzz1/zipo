@extends('partials/layout')
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