(function(){
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
})();



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