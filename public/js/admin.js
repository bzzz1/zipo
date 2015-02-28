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

// function 

$(function () {
	$('#fileupload').fileupload({
		dataType: 'json',
		// add: function (e, data) {
		// 	data.context = $('<button/>').text('Upload')
		// 		.appendTo(document.body)
		// 			.click(function () {
		// 				data.context = $('<p/>').text('Uploading...').replaceAll($(this));
		// 				data.submit();
		// 			});
		// },
		// progressall: function (e, data) {
		//        var progress = parseInt(data.loaded / data.total * 100, 10);
		//        $('#progress .bar').css(
		//            'width',
		//            progress + '%'
		//        );
		//    },
		done: function (e, data) {
			Img.filename = data.result;
			var timestamp = new Date().getTime();
			var $input = $('<input name="photo" type="hidden" value="'+Img.filename+'" class="inserted_input">');
			var $delete_icon = $('<i class="fa fa-times delete_img_icon_ajax"></i>');
			var $img = $('.items_item_img');

			$('.delete_img_icon_ajax').remove();
			$('.inserted_input').remove();
			$('.browse_img_admin').after($input);
			$img.after($delete_icon);
			$img.attr('src', AJAX_ITEM_IMG+'/'+Img.filename+'?no_cache='+timestamp);

			delegateDeleteEvent();
		}
	});
});

// DELETE IMG ICON
function delegateDeleteEvent() {
	$('.delete_img_icon_ajax').on('click', function() {
		var $img = $('.items_item_img');
		var folder = ITEM_PHOTO_DIR;
		// var filepath = ITEM_PHOTO_DIR+'/'+;
		
		$img.attr('src', AJAX_ITEM_IMG+'/no_photo.png');
		$(this).remove();
		// deleteFileFromServer(filepath);
	});
}
delegateDeleteEvent();

function deleteFileFromServer(filepath) {
	// $.ajax({
	// 	url: AJAX_GET_SUBCATS,
	// 	type: 'POST',
	// 	dataType: "json",
	// 	data: {
	// 		'category' : category
	// 	},
	// 	success: function(data) {
	// 		$select = $('#subcat_id');
	// 		// CLEAR OLD SUBCATS
	// 		$select.html('');

	// 		for (var i=0; i<data.length; i++) {
	// 			var subcat = data[i]['subcat'];
	// 			var subcat_id = data[i]['subcat_id'];

	// 			var $option = $("<option value='"+subcat_id+"'>"+subcat+"</option>");
	// 			$select.append($option);
	// 		}
	// 	}, 
	// 	error: function(data, error, error_details){
	// 		console.log("err:",error, error_details);
	// 		console.log(data);
	// 	}
	// });	
}