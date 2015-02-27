/*------------------------------------------------
| Store and retrieve PAGES_BY param
------------------------------------------------*/
if (localStorage['pages_by'] != 'undefined') {
	var pages_by = localStorage['pages_by'];
	var $options = $('#pages_by option');
	$options.each(function(index) {
		if ($(this).val() == pages_by) {
			$(this).attr("selected", "selected");
		} 
	});
} else {
	var $option = $('#pages_by').find('option:selected');
	var pages_by = $option.val();
	localStorage['pages_by'] = pages_by;
}

$('#pages_by').on('change', function() {
	var $option = $(this).find('option:selected');
	var pages_by = $option.val();				
	localStorage['pages_by'] = pages_by;
	var link = $option.data('link');
	window.location = link;
});



// FIXED SIDEBARS
$(window).load(function() {
	var $window = $(window);
	var $left_sidebar = $('.left_sidebar');
	var $right_sidebar = $('.right_sidebar');

	var offset_top = $left_sidebar.offset().top;
	var $body = $('body');
	var page_height = $body.height();
	var sidebar_height = $left_sidebar.height();
	//was 80
	var max = page_height - sidebar_height - 88;
	$window.on('scroll', function() { 
		var scroll = $window.scrollTop();
		// was max-342 +30
		if (scroll > offset_top && scroll < max-42) {
			$left_sidebar.clearQueue().animate({
				'margin-top' : scroll-offset_top + 10
			});
			$right_sidebar.clearQueue().animate({
				'margin-top' : scroll-offset_top + 10
			});
		} else if (scroll < offset_top) {
			$left_sidebar.clearQueue().animate({
				'margin-top' : '0px'
			});
			$right_sidebar.clearQueue().animate({
				'margin-top' : '0px'
			});
		} else if (scroll > max-342) {
			$left_sidebar.clearQueue().animate({
				'margin-top' : max-342+'px'
			});
			$right_sidebar.clearQueue().animate({
				'margin-top' : max-342+'px'
			});
		}
	});	
});	

// 	/*------------------------------------------------
// 	| Store and retrieve SORT param
// 	------------------------------------------------*/
// 	if (localStorage['sort'] != 'undefined') {
// 		var sort = localStorage['sort'];
// 		var $options = $('#items_sort option');
// 		$options.each(function(index) {
// 			if ($(this).val() == sort) {
// 				$(this).attr("selected", "selected");
// 			} 
// 		});
// 	} else {
// 		var $option = $('#items_sort').find('option:selected');
// 		var sort = $option.val();
// 		localStorage['sort'] = sort;
// 	}

// 	$('#items_sort').on('change', function() {
// 		var $option = $(this).find('option:selected');
// 		var sort = $option.val();				
// 		localStorage['sort'] = sort;
// 		var link = $option.data('link');
// 		window.location = link;
// 	});

// 	/*------------------------------------------------
// 	| Store and retrieve PAGES_BY param
// 	------------------------------------------------*/
// 	if (localStorage['pages_by'] != 'undefined') {
// 		var pages_by = localStorage['pages_by'];
// 		var $options = $('#pages_by option');
// 		$options.each(function(index) {
// 			if ($(this).val() == pages_by) {
// 				$(this).attr("selected", "selected");
// 			} 
// 		});
// 	} else {
// 		var $option = $('#pages_by').find('option:selected');
// 		var pages_by = $option.val();
// 		localStorage['pages_by'] = pages_by;
// 	}

// 	$('#pages_by').on('change', function() {
// 		var $option = $(this).find('option:selected');
// 		var pages_by = $option.val();				
// 		localStorage['pages_by'] = pages_by;
// 		var link = $option.data('link');
// 		window.location = link;
// 	});


	
// 	// FIXED SIDEBARS
// 	$(window).load(function() {
// 		var $window = $(window);
// 		var $left_sidebar = $('.left_sidebar');
// 		var $right_sidebar = $('.right_sidebar');

// 		var offset_top = $left_sidebar.offset().top;
// 		var $body = $('body');
// 		var page_height = $body.height();
// 		var sidebar_height = $left_sidebar.height();
// 		//was 80
// 		var max = page_height - sidebar_height - 88;
// 		$window.on('scroll', function() { 
// 			var scroll = $window.scrollTop();
// 			// was max-342 +30
// 			if (scroll > offset_top && scroll < max-42) {
// 				$left_sidebar.clearQueue().animate({
// 					'margin-top' : scroll-offset_top + 10
// 				});
// 				$right_sidebar.clearQueue().animate({
// 					'margin-top' : scroll-offset_top + 10
// 				});
// 			} else if (scroll < offset_top) {
// 				$left_sidebar.clearQueue().animate({
// 					'margin-top' : '0px'
// 				});
// 				$right_sidebar.clearQueue().animate({
// 					'margin-top' : '0px'
// 				});
// 			} else if (scroll > max-342) {
// 				$left_sidebar.clearQueue().animate({
// 					'margin-top' : max-342+'px'
// 				});
// 				$right_sidebar.clearQueue().animate({
// 					'margin-top' : max-342+'px'
// 				});
// 			}
// 		});	
// 	});
	
// });
// $('.close_message').click(function() {
//     $('.message').css('display','none')
// });
// ==>=>=>=>
// 	function run_deleting_confirm() {
// 		$('.confirm_delete').on('click', function() {
// 			if (confirm('Подтвердить удаление')) {
// 				$form = $(this).closest('.confirm_form');
// 				$form.trigger('sumbmit');
// 			} else {
// 				return false;
// 			}
// 		});
// 	}

// /*------------------------------------------------
// | PERSISTING FORM DATA
// ------------------------------------------------*/
// setTimeout(function() { 
// if (localStorage.getItem('form_data')) {
// var form_data = localStorage.getItem('form_data');
// $scope.element = JSON.parse(form_data);
// }
// $scope.$apply(); // !!! with setTimeout needed!
// }, 0);

// setInterval(function() {
// var form_data = JSON.stringify($scope.element);
// localStorage['form_data'] = form_data;
// }, 1000);

// $scope.clear_form_data = function() { 
// $scope.element = {"description":"Описание отсутствует","currency":"РУБ","procurement":"ТВС","type":"оборудование","category":"Барное"};
// }
// /*----------------------------------------------*/

// 	function run_clear_photo_name() {
// 		$('.delete_icon').on('click', function() {
// 			$('.photo_name').val('no_image.png');
// 		});
// 	}

// 	function run_contact_form_buttons() {
// 		$('.contact_form_button').on('click', function(evt) {
// 			evt.preventDefault();
// 			var contactFormTag = $('#bcf-trigger')[0];

// 			if ('click' in contactFormTag) {
// 				contactFormTag.click();
// 			} else { // doesn't work with $('#bcf-trigger')[0].click() in Safari
// 				var evObj = document.createEvent('MouseEvents');
// 				evObj.initMouseEvent('click', true, true, window);
// 				contactFormTag.dispatchEvent(evObj);
// 			}

// 			// if (typeof contactFormTag.click != 'undefined') {} // should work fine
// 			// if (contactFormTag.hasOwnProperty('click')) {} // not own property!
			
// 			// return false; // doesn't work even in IE11 and Mozilla with dispatchEvent() but fine with just click()
// 		});
// 	}

// 	run_columnizer();
// 	run_contact_form_buttons();
// 	run_clear_photo_name();
// 	run_deleting_confirm();
// 	run_angular_preview();
// 	run_subcategories();
// 	run_article_button_read();

// })(jQuery);