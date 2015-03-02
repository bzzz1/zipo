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
		url: location.origin+'/admin/ajax_get_subcats',
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
| DELETE ICON FORM SUBMIT
------------------------------------------------*/
$('.delete_items_group_icon').on('click', function() {
	if (confirm('Подтвердить удаление')) {
		$form = $(this).closest('.confirm_form');
		$form.trigger('sumbmit');
	} else {
		return false;
	}
});
/*----------------------------------------------*/

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

$(function() {
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
			filename = data.result;
			var timestamp = new Date().getTime();
			var $input = $('.inserted_input');
			$input.val(filename);
			var $delete_icon = $('<i class="fa fa-times delete_img_icon_ajax"></i>');
			var $img = $('.items_item_img');

			$('.delete_img_icon_ajax').remove();
			$('.inserted_input').remove();
			$('.browse_img_admin').after($input);
			$img.after($delete_icon);
			$img.attr('src', location.origin+'/img/photos/'+filename+'?no_cache='+timestamp);

			delegateDeleteEvent();
		}
	});
});
// Delete item
$('.delete_items_group_icon').on('click',function(){
	$(this).closest('form').submit();
}) 
// DELETE PRODUCER
$('.delete_pr_icon').on('click',function(){
	$(this).closest('form').submit();
}) 
// DELETE SUBCAT
$('.del_sc_ad').on('click',function(){
	$(this).closest('form').submit();
}) 
// DELETE ARTICLE
$('.delete_article_icon').on('click',function(){
	$(this).closest('form').submit();
}) 

// DELETE IMG ICON
function delegateDeleteEvent() {
	$('.delete_img_icon_ajax').on('click', function() {
		var $img = $('.items_item_img');
		var $input = $('.inserted_input');

		$('.inserted_input').val('no_photo.png');
		$img.attr('src', location.origin+'/img/photos/no_photo.png');
		$(this).remove();
	});
}
delegateDeleteEvent();

/*------------------------------------------------
| AJAX DELETE FILE FROM SERVER
------------------------------------------------*/
// function deleteFileFromServer(filepath) {
// 	$.ajax({
// 		url: location.origin+'/delete_file_from_server',
// 		type: 'POST',
// 		dataType: "json",
// 		data: {
// 			'filepath' : filepath
// 		},
// 		success: function(data) {
// 			// console.log(data);
// 		}, 
// 		error: function(data, error, error_details){
// 			console.log("err:",error, error_details);
// 			console.log(data);
// 		}
// 	});	
// }
// COUNT CHEKED
var countChecked = function() {
  var n = $( ".admin_main_content_items input:checked" ).length;
  var mes = "";
	if (n===1) {
		mes= (" Выбран " + n + " элемент");
		} else if (n <= 4 && n >=1) {
			mes = (" Выбрано " + n + " элемента");
			} else {
				mes= (" Выбрано " + n + " элементов")
			}
  $( ".selected_quantity" ).text(mes)
};
countChecked();
$( ".admin_main_content_items input[type=checkbox]" ).on( "click", countChecked );
// GET DATA_ID
var ids = [];
$( ".admin_main_content_items input[type=checkbox]" ).on("change", function(){
	var checkedID = $(this).data("id");
	ids.push(checkedID);
});
// POPUP
// admin items change subcategory
$('.ad_it_ch_c').magnificPopup({
	items: {
		src: '.admin_itms_subcategory_div', // CSS selector of an element on page that should be used as a popup
		type: 'inline'
	},
});

