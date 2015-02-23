(function($){
	/*------------------------------------------------
	| Store and retrieve SORT param
	------------------------------------------------*/
	if (localStorage['sort'] != 'undefined') {
		var sort = localStorage['sort'];
		var $options = $('#items_sort option');
		$options.each(function(index) {
			if ($(this).val() == sort) {
				$(this).attr("selected", "selected");
			} 
		});
	} else {
		var $option = $('#items_sort').find('option:selected');
		var sort = $option.val();
		localStorage['sort'] = sort;
	}

	$('#items_sort').on('change', function() {
		var $option = $(this).find('option:selected');
		var sort = $option.val();				
		localStorage['sort'] = sort;
		var link = $option.data('link');
		window.location = link;
	});


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


	/*------------------------------------------------
	| SUBCATEGORIES
	------------------------------------------------*/
	$subcategories = $('.subcategory_block');
	$categories = $('.catalog_category');
	HIDING = false;


	$categories.on('click', function() {
		var clicked_category_data = $(this).data('category');
		var $clicked_subcategory = $subcategories.filter(function(index) {
			return $(this).data('category') === clicked_category_data;
		});

		// DETECT IF IT NEEDS HIDING DELAY
		$.each($subcategories, function(index, value) {
			if ($(this).css('display') != 'none') {
				HIDING = true;
			}
		});

		// HIDE ALL ANYWAY
		$subcategories.clearQueue().slideUp();

		// SLIDE DOWN ONLY IF CLIKED WASN'T SHOWN ALREADY
		if ($clicked_subcategory.css('display') == 'none') {
			if (HIDING) {
				$clicked_subcategory.clearQueue().delay(400).slideDown();
			} else {
				$clicked_subcategory.clearQueue().slideDown();						
			}
		}

		HIDING = false;						
	});
})(jQuery);


(function($) {
	$(window).load(function() {
		var $window = $(window);
		var $left_sidebar = $('.left_sidebar');
		var $right_sidebar = $('.right_sidebar');

		var offset_top = $left_sidebar.offset().top;
		// var $footer = $('.full_screen');
		var $body = $('body');
		var page_height = $body.height();
		var sidebar_height = $left_sidebar.height();
		var max = page_height - sidebar_height - 80;
		// $left_sidebar.clearQueue().css({'position' : 'fixed', 'top' : '249px'})

		
			// window.page_height = document.documentElement.scrollHeight;
			// console.log(page_height);
		

		// var body = document.body,
		//     html = document.documentElement;

		// var height = Math.max( body.scrollHeight, body.offsetHeight, 
		//                        html.clientHeight, html.scrollHeight, html.offsetHeight );

		// console.log('formula: '+height);

		// console.log(sidebar_height);
		// console.log(page_height-sidebar_height);

		$window.on('scroll', function() { 

			var scroll = $window.scrollTop();
			// var footer_outer_height = $footer.outerHeight();
			// var diff_height = scroll - footer_outer_height ;

			// var visible_height = $window.height();
			// var left_sidebar_height = $left_sidebar.height();


			if (scroll > offset_top && scroll < max-342) {
				$left_sidebar.clearQueue().animate({
					'margin-top' : scroll-offset_top + 30
				});
				$right_sidebar.clearQueue().animate({
					'margin-top' : scroll-offset_top + 30
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
			// } else if (scroll > 1000) {
			// 	$left_sidebar.clearQueue().animate({
			// 		'margin-top' : page_height - 1140				// 'margin-top' : '274px'
			// 	})
			// }

			// if (scroll > left_sidebar_offset_top && scroll < page_height - sidebar_height) {
			// 	$left_sidebar.clearQueue().animate({
			// 		'margin-top' : scroll - 279 + 60
			// 	})
			// } else if (scroll > page_height - sidebar_height) {
			// 	$left_sidebar.clearQueue().animate({
			// 		'margin-top' : page_height - 1140				// 'margin-top' : '274px'
			// 	})
			// }
			// } else {
			// 	$left_sidebar.clearQueue().animate({
			// 		'margin-top' : '30px'
			// 	})
			// }
		});	
	});
})(jQuery);
// FIXED sidebars on scroll
// $(".left_sidebar, .right_sidebar").stick_in_parent();
// $(".left_sidebar, .right_sidebar").sticky({topSpacing:30});
// ({
// 	'offset_top' : '30px'
// });

// $('.left-sidebar').affix({
//   offset: {
//     top: 100,
//     bottom: function () {
//       return (this.bottom = $('.footer').outerHeight(true))
//     }
//   }
// })

// $.stickysidebarscroll(".left_sidebar, .right_sidebar",{offset: {top: 0, bottom: 115}});

// (function($) {
// 	$(window).load(function() {
// 		var $window = $(window);
// 		var $left_sidebar = $('.left_sidebar');
// 		var $footer = $('.full_screen');
// 		var $body = $('body');
// 		var page_height = $body.height();
// 		$left_sidebar.clearQueue().css({'position' : 'fixed', 'top' : '249px'})

		
// 			// window.page_height = document.documentElement.scrollHeight;
// 			console.log(page_height);
		
// 		var sidebar_height = $left_sidebar.height();

// 		// var body = document.body,
// 		//     html = document.documentElement;

// 		// var height = Math.max( body.scrollHeight, body.offsetHeight, 
// 		//                        html.clientHeight, html.scrollHeight, html.offsetHeight );

// 		// console.log('formula: '+height);

// 		console.log(sidebar_height);
// 		console.log(page_height-sidebar_height);

// 		$(window).on('scroll', function() { 

// 			var scroll = $window.scrollTop();
// 			var left_sidebar_offset_top = $left_sidebar.offset().top;
// 			var footer_outer_height = $footer.outerHeight();
// 			// var diff_height = scroll - footer_outer_height ;

// 			// var visible_height = $window.height();
// 			var left_sidebar_height = $left_sidebar.height();


// 			if (scroll > left_sidebar_offset_top && scroll < 1000) {
// 				$left_sidebar.clearQueue().animate({
// 					'top' : '30px'
// 				})
// 			}
// 			// } else if (scroll > 1000) {
// 			// 	$left_sidebar.clearQueue().animate({
// 			// 		'margin-top' : page_height - 1140				// 'margin-top' : '274px'
// 			// 	})
// 			// }

// 			// if (scroll > left_sidebar_offset_top && scroll < page_height - sidebar_height) {
// 			// 	$left_sidebar.clearQueue().animate({
// 			// 		'margin-top' : scroll - 279 + 60
// 			// 	})
// 			// } else if (scroll > page_height - sidebar_height) {
// 			// 	$left_sidebar.clearQueue().animate({
// 			// 		'margin-top' : page_height - 1140				// 'margin-top' : '274px'
// 			// 	})
// 			// }
// 			// } else {
// 			// 	$left_sidebar.clearQueue().animate({
// 			// 		'margin-top' : '30px'
// 			// 	})
// 			// }
// 		});	
// 	});
// })(jQuery);


// (function ($) {
// 	function run_subcategories() {
// 		$subcategories = $('.subcategory_block');
// 		$categories = $('.category_icon_block');
// 		$('.category_icon_block').on('click', function() {
// 			var $this = $(this);
// 			var category = $this.data('category');
// 			var classes = $this.attr('class');
// 			var was_shown = (classes.indexOf('_hover') > 0);
// 			var deselect = classes.slice(0, classes.length-6);
// 			var select = classes + '_hover';
// 			var $subcategory = $subcategories.filter(function(index) {
// 				return $(this).data('category') === category;
// 			});

// 			/*------------------------------------------------
// 			| Look for already seleted before hide all !!!
// 			------------------------------------------------*/
// 			var $selected = $categories.filter(function(index) {
// 				return $(this).data('selected') === true;
// 			});
// 			/*----------------------------------------------*/

// 			/*------------------------------------------------
// 			| hide all opened subcategories and deselect
// 			------------------------------------------------*/
// 			$.each($categories, function(index, value) {
// 				var $this = $(this);
// 				var classes = $this.attr('class');
// 			 	var deselect = classes.slice(0, classes.length-6);
// 				var was_shown = (classes.indexOf('_hover') > 0);

// 				if (was_shown) {
// 					$this.attr('class', deselect);
// 					$this.data('selected', false); // doesn't write to DOM but to JQuery object also in JSON
// 				}
// 			});
// 			// hide all
// 			$subcategories.clearQueue().slideUp();
// 			/*----------------------------------------------*/

// 			/*------------------------------------------------
// 			| if this was selected
// 			------------------------------------------------*/
// 			if (was_shown) {
// 				$this.attr('class', deselect); // this is already hidden
// 			} else { // else if this wasn't selected
// 				$this.attr('class', select);
// 				if ($selected.length > 0) { // use length because even empty array [] in jQuery isn't falsy
// 					$subcategory.clearQueue().delay(400).slideDown();						
// 				} else {
// 					$subcategory.clearQueue().slideDown();						
// 				}
// 				$this.data('selected', true); // doesn't write to DOM but to JQuery object also in JSON
// 			}

// 			// var url = $this.css('background-image');
// 			// var new_url = url.replace("0", "1");
// 			// var new_url = new_url.replace("http://localhost:8100/", "http://localhost:8000/");
// 			// var splitted = select.split(/\s/); // get all classes
// 			// var space_index = select.indexOf(' ');
// 			// console.log('space_index: ', space_index);
// 			// select = select.substring(space_index, selecting.length);

// 		});
// 	}

// 	function run_article_button_read() {
// 		$('.article_button_read').on('click', function() {
// 			var $this = $(this);
// 			var $p = $this.prev();

// 			if ($this.hasClass('shown')) {
// 				$this.removeClass('shown');
// 				$this.text('Читать');
// 				$p.css({
// 					'overflow-y': 'hidden',
// 					'height': '290px'
// 				});
// 			} else {
// 				$this.addClass('shown');
// 				$this.text('Скрыть');
// 				$p.css({
// 					'overflow-y': 'initial',
// 					'height': 'auto'
// 				});
// 			}
// 		});
// 	}

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

// 	function run_angular_preview() {
// 		var app = angular.module('preview', []);
// 		/*------------------------------------------------
// 		| CHANGE TEMPLATE BRACKETS
// 		------------------------------------------------*/
// 		app.config(function($interpolateProvider) {
// 			$interpolateProvider.startSymbol('[[');
// 			$interpolateProvider.endSymbol(']]');
// 		});
// 		/*----------------------------------------------*/

// 		app.controller('PreviewController', function($scope, $http) {
// 			$scope.origin = location.origin;
// 			$scope.categories = [
// 				'Барное',
// 				'Нейтральное',
// 				'Посуда и инвентарь',
// 				'Посудомоечное',
// 				'Технологическое',
// 				'Упаковочное',
// 				'Хлебопекарное',
// 				'Холодильное'
// 			];

// 			var patt = /changeItem\/\d+/;
// 			var sendPost = patt.test(location.href);
// 			if (sendPost) {
// 				$http.post(location.href).success(function(data) {
// 					$scope.element = data;
// 				});
// 			}

// 			/*------------------------------------------------
// 			| PERSISTING FORM DATA
// 			------------------------------------------------*/
// 			setTimeout(function() { 
// 				if (localStorage.getItem('form_data')) {
// 					var form_data = localStorage.getItem('form_data');
// 					$scope.element = JSON.parse(form_data);
// 				}
// 				$scope.$apply(); // !!! with setTimeout needed!
// 			}, 0);

// 			setInterval(function() {
// 				var form_data = JSON.stringify($scope.element);
// 				localStorage['form_data'] = form_data;
// 			}, 1000);

// 			$scope.clear_form_data = function() { 
// 				$scope.element = {"description":"Описание отсутствует","currency":"РУБ","procurement":"ТВС","type":"оборудование","category":"Барное"};
// 			}
// 			/*----------------------------------------------*/
// 		});
// 	}

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

// 	function run_columnizer() {
// 		$('.brands_column').columnize({
// 			columns: 4,
// 			lastNeverTallest : true
// 		});
// 		$('.subcategory_block').show(); // all subcategory_column needs to be display: block to apply columnize()
// 		$('.subcategory_column').columnize({
// 			width: 205,
// 			lastNeverTallest : true
// 		}); //can't use doneFunc because it applies only for the first block
// 		$('.subcategory_block').hide(); // hide back
// 	}

// 	run_columnizer();
// 	run_contact_form_buttons();
// 	run_clear_photo_name();
// 	run_deleting_confirm();
// 	run_angular_preview();
// 	run_subcategories();
// 	run_article_button_read();

// })(jQuery);