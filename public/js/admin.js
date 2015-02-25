if ($('#ckeditor').length > 0) {
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
}

$('.item_upload_image').on('change', function() {
	$('.item_upload_image_submit').click();
});