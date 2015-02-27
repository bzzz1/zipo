/*------------------------------------------------
| CKEDITOR EMBED
------------------------------------------------*/
if ($('#ckeditor').length) {
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
/*----------------------------------------------*/

/*------------------------------------------------
| RUN SUBCATEGORIES FROM SELECT
------------------------------------------------*/
// INITIAL SET SUBCATS
if ($('#category').length) {
	send_category($('#category').val());

	$('#category').on('change', function() {
		send_category($('#category').val());	
	});
}


function send_category(category) {
	$.ajax({
		url: AJAX_GET_SUBCATS,
		type: 'POST',
		dataType: "json",
		data: {
			'category' : category
		},
		success: function(data) {
			$select = $('#subcat_id');
			// CLEAR OLD SUBCATS
			$select.html('');

			for (var i=0; i<data.length; i++) {
				var subcat = data[i]['subcat'];
				var subcat_id = data[i]['subcat_id'];

				var $option = $("<option value='"+subcat_id+"'>"+subcat+"</option>");
				$select.append($option);
			}
		}, 
		error: function(data, error, error_details){
			console.log("err:",error, error_details);
			console.log(data);
		}
	});	
}
/*-----------------------------------------------*/

/*------------------------------------------------
| BUTTONS
------------------------------------------------*/
// DELETE IMG ICON
$('.delete_img_icon_ajax').on('click', function() {
	src = '111';
	$('.ajax_img_icon').attr('src', src);
	$(this).remove();
});

// DELETE ICON FORM SUBMIT
$('.delete_icon').on('click', function() {
	$(this).closest('form').submit();
});

// CREAR ITEM BUTTON
$('.clear_item_button').on('click', function() {
	// $input = 
	// $('input[name="title"]')
	// $('input[name="code"]')
	// $('input[name="price"]')
	// $('input[name="currency"]')

});
/*----------------------------------------------*/

/*------------------------------------------------
| FILE UPLOAD
------------------------------------------------*/
$('#trigger_link_img').click(function(e){
    e.preventDefault();
    $('.browse_img_admin').trigger('click');
});
$(function () {
	$('#fileupload').fileupload({
		dataType: 'json',
		done: function (e, data) {
			console.log(data.result['111']);

		}
	});
});
/*----------------------------------------------*/