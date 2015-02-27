/*------------------------------------------------
| SUBCATEGORIES
------------------------------------------------*/
$subcategories = $('.subcategory_block');
$categories = $('.catalog_category');
HIDING = false;

$($categories).click(function() {
	$(".main_content").find(".active_cat").removeClass("active_cat");
  	$(this).children('.catalog_category_heading').addClass('active_cat');
 });

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

// MAGNIFIC POPUP
if ($('.login_button').length) {
	$('.login_button').magnificPopup({
		items: {
			src: '.header_login', // CSS selector of an element on page that should be used as a popup
			type: 'inline'
		},
		removalDelay: 500, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function() {
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
	});
}


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